<?php
// created: 2018-01-03 17:08:32
$dictionary["dire_municipio_dire_estado"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'dire_municipio_dire_estado' => 
    array (
      'lhs_module' => 'dire_Estado',
      'lhs_table' => 'dire_estado',
      'lhs_key' => 'id',
      'rhs_module' => 'dire_Municipio',
      'rhs_table' => 'dire_municipio',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'dire_municipio_dire_estado_c',
      'join_key_lhs' => 'dire_municipio_dire_estadodire_estado_ida',
      'join_key_rhs' => 'dire_municipio_dire_estadodire_municipio_idb',
    ),
  ),
  'table' => 'dire_municipio_dire_estado_c',
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
    'dire_municipio_dire_estadodire_estado_ida' => 
    array (
      'name' => 'dire_municipio_dire_estadodire_estado_ida',
      'type' => 'id',
    ),
    'dire_municipio_dire_estadodire_municipio_idb' => 
    array (
      'name' => 'dire_municipio_dire_estadodire_municipio_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_dire_municipio_dire_estado_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_dire_municipio_dire_estado_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dire_municipio_dire_estadodire_estado_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_dire_municipio_dire_estado_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dire_municipio_dire_estadodire_municipio_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'dire_municipio_dire_estado_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'dire_municipio_dire_estadodire_municipio_idb',
      ),
    ),
  ),
);