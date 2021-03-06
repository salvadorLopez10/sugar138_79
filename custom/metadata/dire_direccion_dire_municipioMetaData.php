<?php
// created: 2018-01-03 17:08:20
$dictionary["dire_direccion_dire_municipio"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'dire_direccion_dire_municipio' => 
    array (
      'lhs_module' => 'dire_Municipio',
      'lhs_table' => 'dire_municipio',
      'lhs_key' => 'id',
      'rhs_module' => 'dire_Direccion',
      'rhs_table' => 'dire_direccion',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'dire_direccion_dire_municipio_c',
      'join_key_lhs' => 'dire_direccion_dire_municipiodire_municipio_ida',
      'join_key_rhs' => 'dire_direccion_dire_municipiodire_direccion_idb',
    ),
  ),
  'table' => 'dire_direccion_dire_municipio_c',
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
    'dire_direccion_dire_municipiodire_municipio_ida' => 
    array (
      'name' => 'dire_direccion_dire_municipiodire_municipio_ida',
      'type' => 'id',
    ),
    'dire_direccion_dire_municipiodire_direccion_idb' => 
    array (
      'name' => 'dire_direccion_dire_municipiodire_direccion_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_dire_direccion_dire_municipio_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_dire_direccion_dire_municipio_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dire_direccion_dire_municipiodire_municipio_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_dire_direccion_dire_municipio_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dire_direccion_dire_municipiodire_direccion_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'dire_direccion_dire_municipio_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'dire_direccion_dire_municipiodire_direccion_idb',
      ),
    ),
  ),
);