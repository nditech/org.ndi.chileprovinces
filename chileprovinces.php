<?php

/**
 * Return a list of all the counties
 */

function chileprovinces_listcounties() {
  $countryIso = 'CL';
  $counties = array(
    'Arica and Parinacota' => array(
      'Arica',
      'Camarones',
      'General Lagos',
      'Putre',
    ),
    'Tarapaca' => array(
      'Camina',
      'Colchane',
      'Huara',
      'Pica',
      'Pozo Almonte',
      'Alto Hospicio',
      'Iquique',
    ),
    'Antofagasta' => array(
      'Calama',
      'Ollague',
      'San Pedro De Atacama',
      'Maria Elena',
      'Tocopilla',
      'Antofagasta',
      'Mejillones',
      'Sierra Gorda',
      'Taltal',
    ),
    'Atacama' => array(
      'Chanaral',
      'Diego De Almagro',
      'Alto Del Carmen',
      'Freirina',
      'Huasco',
      'Vallenar',
      'Caldera',
      'Copiapo',
      'Tierra Amarilla',
    ),
    'Coquimbo' => array(
      'Andacollo',
      'Coquimbo',
      'La Higuera',
      'La Serena',
      'Paihuano',
      'Vicuna',
      'Canela',
      'Illapel',
      'Los Vilos',
      'Salamanca',
      'Combarbala',
      'Monte Patria',
      'Ovalle',
      'Punitaqui',
      'Rio Hurtado',
    ),
    'Valparaiso' => array(
      'Quintero',
      'Valparaiso',
      'Vina Del Mar',
      'Isla De Pascua',
      'Limache',
      'Olmue',
      'Quilpue',
      'Villa Alemana',
      'Algarrobo',
      'Cartagena',
      'El Quisco',
      'El Tabo',
      'San Antonio',
      'Santo Domingo',
      'Cerrillos',
      'Cerro Navia',
      'Conchali',
      'Estacion Central ',
      'Huechuraba',
      'Independencia',
      'La Florida',
      'La Granja',
      'La Pintana',
      'La Reina',
      'Las Condes',
      'Lo Barnechea',
      'Lo Prado',
      'Macul',
      'Maipu ',
      'Nunoa',
      'Penalolen',
      'Providencia',
      'Pudahuel',
      'Quilicura',
      'Quinta Normal',
      'Recoleta',
      'Renca',
      'San Joaquin',
      'Santiago',
      'Vitacura',
      'Pirque',
      'Puente Alto',
      'San Jose De Maipo',
      'Colina',
      'Lampa',
      'Til Til',
      'Cabildo',
      'La Ligua',
      'Papudo',
      'Petorca',
      'Zapallar',
      'Catemu',
      'Llay-Llay',
      'Panquehue',
      'Putaendo',
      'San Felipe',
      'Santa Maria',
      'Calle Larga',
      'Los Andes',
      'Rinconada',
      'San Esteban',
      'Calera',
      'Hijuelas',
      'La Cruz',
      'Nogales',
      'Quillota',
      'Casablanca',
      'Concon',
      'Juan Fernandez ',
      'Puchuncavi',
    ),
    "O'Higgins" => array(
      'Codegua',
      'Coinco',
      'Coltauco',
      'Donihue',
      'Graneros',
      'Chiguayante',
      'Concepcion',
      'Coronel',
      'Florida',
      'Hualpen',
      'Hualqui',
      'Lota',
      'Penco',
      'San Pedro De La Paz',
      'Santa Juana',
      'Talcahuano',
      'Tome',
      'Arauco',
      'Canete',
      'Contulmo',
      'Curanilahue',
      'Lebu',
      'Los Alamos',
      'Tirua',
      'Antuco',
      'Cabrero',
      'Laja',
      'Los Angeles',
      'Mulchen',
      'Nacimiento',
      'Negrete',
      'Quilaco',
      'Quilleco',
      'Alto Biobio',
      'San Rosendo',
      'Santa Barbara',
      'Tucapel',
      'Yumbel',
      'La Estrella',
      'Litueche',
      'Marchigue',
      'Navidad',
      'Paredones',
      'Pichilemu',
      'Las Cabras',
      'Machali',
      'Malloa',
      'Mostazal',
      'Olivar',
      'Peumo',
      'Pichidegua',
      'Quinta De Tilcoco',
      'Rancagua',
      'Rengo',
      'Requinoa ',
      'San Vicente',
      'Chepica',
      'Chimbarongo',
      'Lolol',
      'Nancagua',
      'Palmilla',
      'Peralillo',
      'Placilla',
      'Pumanque',
      'San Fernando',
      'Santa Cruz',
    ),
    'Maule' => array(
      'Curico',
      'Hualane',
      'Licanten',
      'Molina',
      'Rauco',
      'Romeral',
      'Sagrada Familia',
      'Teno',
      'Vichuquen',
      'Constitucion',
      'Curepto',
      'Empedrado',
      'Maule',
      'Pelarco',
      'Pencahue',
      'Rio Claro',
      'San Clemente',
      'San Rafael',
      'Talca',
      'Colbun',
      'Linares',
      'Longavi',
      'Parral',
      'Retiro',
      'San Javier',
      'Villa Alegre',
      'Yerbas Buenas',
      'Cauquenes',
      'Chanco',
      'Pelluhue',
    ),
    'Nuble' => array(
      'Bulnes',
      'Chillan Viejo',
      'Chillan',
      'El Carmen',
      'Pemuco',
      'Pinto',
      'Quillon',
      'San Ignacio',
      'Yungay',
      'Cobquecura',
      'Coelemu',
      'Ninhue',
      'Portezuelo',
      'Quirihue',
      'Ranquil',
      'Treguaco',
      'Coihueco',
      'Niquen ',
      'San Carlos',
      'San Fabian',
      'San Nicolas',
    ),
    'Biobio' => array(
      'Concepcion',
      'Biobio',
      'Arauco',
    ),
    'Araucania' => array(
      'Angol',
      'Collipulli',
      'Curacautin',
      'Ercilla',
      'Lonquimay',
      'Los Sauces',
      'Lumaco',
      'Puren',
      'Renaico',
      'Traiguen',
      'Victoria',
      'Carahue',
      'Cholchol',
      'Cunco',
      'Curarrehue',
      'Freire',
      'Galvarino',
      'Gorbea',
      'Lautaro',
      'Loncoche',
      'Melipeuco',
      'Nueva Imperial',
      'Padre Las Casas',
      'Perquenco',
      'Pitrufquen',
      'Pucon',
      'Saavedra',
      'Temuco',
      'Teodoro Schmidt',
      'Tolten',
      'Vilcun',
      'Villarrica',
    ),
    'Los Rios' => array(
      'Corral',
      'Lanco',
      'Los Lagos',
      'Mafil',
      'Mariquina',
      'Paillaco',
      'Panguipulli',
      'Valdivia',
      'Futrono',
      'La Union',
      'Lago Ranco',
      'Rio Bueno',
    ),
    'Los Lagos' => array(
      'Osorno',
      'Puerto Octay',
      'Purranque',
      'Puyehue',
      'Rio Negro',
      'San Juan De La Costa',
      'San Pablo',
      'Calbuco',
      'Cochamo ',
      'Fresia',
      'Frutillar',
      'Llanquihue',
      'Los Muermos',
      'Maullin',
      'Puerto Montt',
      'Puerto Varas',
      'Ancud',
      'Castro',
      'Chonchi',
      'Curaco De Velez',
      'Dalcahue',
      'Puqueldon',
      'Queilen',
      'Quellon ',
      'Quemchi',
      'Quinchao',
      'Chaiten',
      'Futaleufu ',
      'Hualaihue ',
      'Palena',
    ),
    'Aysen' => array(
      'Aysen',
      'Cisnes',
      'Guaitecas',
      'Coyhaique',
      'Lago Verde',
      'Cochrane',
      "O'Higgins",
      'Tortel',
      'Chile Chico',
      'Rio Ibanez',
    ),
    'Magallanes' => array(
      'Natales',
      'Torres Del Paine',
      'Laguna Blanca',
      'Punta Arenas',
      'Rio Verde',
      'San Gregorio',
      'Porvenir',
      'Primavera',
      'Timaukel',
      'Antartica',
      'Cabo De Hornos',
    ),
    'Santiago Metropolitan' => array(
      'El Bosque',
      'La Cisterna',
      'Lo Espejo',
      'Pedro Aguirre Cerda',
      'San Miguel',
      'San Ramon',
      'Buin',
      'Calera De Tango',
      'Paine',
      'San Bernardo',
      'Alhue',
      'Curacavi ',
      'Maria Pinto',
      'Melipilla',
      'San Pedro',
      'El Monte',
      'Isla De Maipo',
      'Padre Hurtado',
      'Penaflor',
      'Talagante',
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
