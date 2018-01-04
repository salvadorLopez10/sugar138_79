<?php
// created: 2018-01-03 17:08:28
$dictionary["dire_ciudad_dire_estado"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'dire_ciudad_dire_estado' => 
    array (
      'lhs_module' => 'dire_Estado',
      'lhs_table' => 'dire_estado',
      'lhs_key' => 'id',
      'rhs_module' => 'dire_Ciudad',
      'rhs_table' => 'dire_ciudad',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'dire_ciudad_dire_estado_c',
      'join_key_lhs' => 'dire_ciudad_dire_estadodire_estado_ida',
      'join_key_rhs' => 'dire_ciudad_dire_estadodire_ciudad_idb',
    ),
  ),
  'table' => 'dire_ciudad_dire_estado_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'dire_ciudad_dire_estadodire_estado_ida' => 
    array (
      'name' => 'dire_ciudad_dire_estadodire_estado_ida',
      'type' => 'id',
    ),
    'dire_ciudad_dire_estadodire_ciudad_idb' => 
    array (
      'name' => 'dire_ciudad_dire_estadodire_ciudad_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_dire_ciudad_dire_estado_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_dire_ciudad_dire_estado_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dire_ciudad_dire_estadodire_estado_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_dire_ciudad_dire_estado_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dire_ciudad_dire_estadodire_ciudad_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'dire_ciudad_dire_estado_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'dire_ciudad_dire_estadodire_ciudad_idb',
      ),
    ),
  ),
);