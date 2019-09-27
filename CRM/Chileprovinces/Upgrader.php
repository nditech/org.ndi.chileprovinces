<?php

use CRM_Chileprovinces_ExtensionUtil as E;

/**
 * Collection of upgrade steps.
 */
class CRM_Chileprovinces_Upgrader extends CRM_Chileprovinces_Upgrader_Base {

  // By convention, functions that look like "function upgrade_NNNN()" are
  // upgrade tasks. They are executed in order (like Drupal's hook_update_N).

  /**
   * Fix accents on counties.
   *
   * @return TRUE on success
   * @throws Exception
   */
  public function upgrade_1010() {
    $this->ctx->log->info('Applying update 1010');

    $country_id = CRM_Core_DAO::singleValueQuery('SELECT id FROM civicrm_country WHERE iso_code = "CL"');

    $fixes = [
      'Antofagasta' => [
        'Ollague' => 'Ollagüe',
      ],
      'Atacama' => [
        'Chanaral' => 'Chañaral',
      ],
      'Aysen' => [
        'Rio Ibanez' => 'Rio Ibañez',
      ],
      'Coquimbo' => [
        'Vicuna' => 'Vicuña',
      ],
      'Maule' => [
        'Hualane' => 'Hualañe',
      ],
      "O'Higgins" => [
        'Marchigue' => 'Marchigüe',
        'Donihue' => 'Doñihue',
      ],
      'Tarapaca' => [
        'Camina' => 'Camiña',
      ],
    ];

    foreach ($fixes as $state => $county) {
      $state_id = CRM_Core_DAO::singleValueQuery('SELECT id FROM civicrm_state_province WHERE name = %1 AND country_id = %2', [
        1 => [$state, 'String'],
        2 => [$country_id, 'Positive'],
      ]);

      foreach ($county as $old => $new) {
        CRM_Core_DAO::executeQuery('UPDATE civicrm_county SET name = %1 WHERE name = %2 AND state_province_id = %3', [
          1 => [$new, 'String'],
          2 => [$old, 'String'],
          3 => [$state_id, 'Positive'],
        ]);
      }
    }

    return TRUE;
  }

}
