<?php
use CRM_Hideactivitytypes_ExtensionUtil as E;

return [
  'name' => 'ActivityMask',
  'table' => 'civicrm_activity_mask',
  'class' => 'CRM_Hideactivitytypes_DAO_ActivityMask',
  'getInfo' => fn() => [
    'title' => E::ts('Activity Mask'),
    'title_plural' => E::ts('Activity Masks'),
    'description' => E::ts(''),
    'log' => TRUE,
  ],
  'getFields' => fn() => [
    'id' => [
      'title' => E::ts('ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Number',
      'required' => TRUE,
      'description' => E::ts('Unique ActivityMask ID'),
      'primary_key' => TRUE,
      'auto_increment' => TRUE,
    ],
    'activity_type_id' => [
      'title' => E::ts('Activity Type ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Number',
      'description' => E::ts('Activity Type Option Group ID'),
    ],
    'hidden_from_actions' => [
      'title' => E::ts('Hidden From Actions'),
      'sql_type' => 'boolean',
      'input_type' => 'CheckBox',
      'description' => E::ts('Is this Activity Type hidden from actions menu'),
    ],
    'hidden_from_contact_ids_array' => [
      'title' => E::ts('Hidden From Contact Ids Array'),
      'sql_type' => 'text',
      'input_type' => 'TextArea',
      'description' => E::ts('Array of contact types'),
    ],
  ],
];
