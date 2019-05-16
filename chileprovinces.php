<?php

/**
 * Return a list of all the counties
 */

function chileprovinces_listcounties() {
  $countryIso = 'CL';
  $counties = array(
    'Arica and Parinacota' => array(
      'Arica',
      'Parinacota',
    ),
    'Tarapaca' => array(
      'Iquique',
      'Tamarugal',
    ),
    'Antofagasta' => array(
      'Antofagasta',
      'El Loa',
      'Tocopilla',
    ),
    'Atacama' => array(
      'Copiapo',
      'Huasco',
      'Chanaral',
    ),
    'Coquimbo' => array(
      'Elqui',
      'Limari',
      'Choapa',
    ),
    'Valparaiso' => array(
      'Isla de Pascua',
      'Los Andes',
      'Marga Marga',
      'Petorca',
      'Quillota',
      'San Antonio',
      'San Felipe de Aconcagua',
      'Valparaiso',
    ),
    "O'Higgins" => array(
      'Cachapoal',
      'Colchagua',
      'Cardenal Caro',
    ),
    'Maule' => array(
      'Talca',
      'Linares',
      'Curico',
      'Cauquenes',
    ),
    'Nuble' => array(
      'Diguillin',
      'Punilla',
      'Itata',
    ),
    'Biobio' => array(
      'Concepcion',
      'Biobio',
      'Arauco',
    ),
    'Araucania' => array(
      'Cautin',
      'Malleco',
    ),
    'Los Rios' => array(
      'Valdivia',
      'Ranco',
    ),
    'Los Lagos' => array(
      'Llanquihue',
      'Osorno',
      'Chiloe',
      'Palena',
    ),
    'Aysen' => array(
      'Coihaique',
      'Aysen',
      'General Carrera',
      'Capitan Prat',
    ),
    'Magallanes' => array(
      'Magallanes',
      'Ultima Esperanza',
      'Tierra del Fuego',
      'Antártica Chilena',
    ),
    'Santiago Metropolitan' => array(
      'Santiago',
      'Cordillera',
      'Maipo',
      'Talagante',
      'Melipilla',
      'Chacabuco',
    ),
  );

  return array($countryIso => $counties);
}

/**
 * Check and load counties
 */

function chileprovinces_loadcounties() {

  $allCounties = chileprovinces_listcounties();

  foreach ($allCounties as $countryIso => $counties) {
    static $dao = NULL;
    if (!$dao) {
      $dao = new CRM_Core_DAO();
    }

    // Get array of states.
    try {
      $result = civicrm_api3('Country', 'getsingle', array(
        'iso_code' => $countryIso,
        'api.Address.getoptions' => array(
          'field' => 'state_province_id',
          'country_id' => '$value.id',
          'sequential' => 0,
        ),
      ));
    }
    catch (CiviCRM_API3_Exception $e) {
      $error = $e->getMessage();
      CRM_Core_Error::debug_log_message(ts('API Error: %1', array(
        'domain' => 'org.ndi.chileprovinces',
        1 => $error,
      )));
      return FALSE;
    }

    if (empty($result['api.Address.getoptions']['values'])) {
      return FALSE;
    }
    $states = $result['api.Address.getoptions']['values'];

    // go state-by-state to check existing counties

    foreach ($counties as $stateName => $state) {
      $id = array_search($stateName, $states);
      if ($id === FALSE) {
        continue;
      }

      $check = "SELECT name FROM civicrm_county WHERE state_province_id = $id";
      $results = CRM_Core_DAO::executeQuery($check);
      $existing = array();
      while ($results->fetch()) {
        $existing[] = $results->name;
      }

      // identify counties needing to be loaded
      $add = array_diff($state, $existing);

      $insert = array();
      foreach ($add as $county) {
        $countye = $dao->escape($county);
        $insert[] = "('$countye', $id)";
      }

      // put it into queries of 50 counties each
      for($i = 0; $i < count($insert); $i = $i+50) {
        $inserts = array_slice($insert, $i, 50);
        $query = "INSERT INTO civicrm_county (name, state_province_id) VALUES ";
        $query .= implode(', ', $inserts);
        CRM_Core_DAO::executeQuery($query);
      }
    }
  }

  return TRUE;
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function chileprovinces_civicrm_install() {
  chileprovinces_loadcounties();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function chileprovinces_civicrm_enable() {
  chileprovinces_loadcounties();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function chileprovinces_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  chileprovinces_loadcounties();
}
