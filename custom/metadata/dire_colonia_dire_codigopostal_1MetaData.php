<?php
// created: 2018-01-03 17:08:30
$dictionary["dire_colonia_dire_codigopostal_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'dire_colonia_dire_codigopostal_1' => 
    array (
      'lhs_module' => 'dire_CodigoPostal',
      'lhs_table' => 'dire_codigopostal',
      'lhs_key' => 'id',
      'rhs_module' => 'dire_Colonia',
      'rhs_table' => 'dire_colonia',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'dire_colonia_dire_codigopostal_1_c',
      'join_key_lhs' => 'dire_colonia_dire_codigopostal_1dire_codigopostal_ida',
      'join_key_rhs' => 'dire_colonia_dire_codigopostal_1dire_colonia_idb',
    ),
  ),
  'table' => 'dire_colonia_dire_codigopostal_1_c',
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
    'dire_colonia_dire_codigopostal_1dire_codigopostal_ida' => 
    array (
      'name' => 'dire_colonia_dire_codigopostal_1dire_codigopostal_ida',
      'type' => 'id',
    ),
    'dire_colonia_dire_codigopostal_1dire_colonia_idb' => 
    array (
      'name' => 'dire_colonia_dire_codigopostal_1dire_colonia_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_dire_colonia_dire_codigopostal_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_dire_colonia_dire_codigopostal_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dire_colonia_dire_codigopostal_1dire_codigopostal_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_dire_colonia_dire_codigopostal_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dire_colonia_dire_codigopostal_1dire_colonia_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'dire_colonia_dire_codigopostal_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'dire_colonia_dire_codigopostal_1dire_colonia_idb',
      ),
    ),
  ),
);