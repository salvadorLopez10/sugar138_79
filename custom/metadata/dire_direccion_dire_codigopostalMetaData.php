<?php
// created: 2018-01-03 17:08:20
$dictionary["dire_direccion_dire_codigopostal"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'dire_direccion_dire_codigopostal' => 
    array (
      'lhs_module' => 'dire_CodigoPostal',
      'lhs_table' => 'dire_codigopostal',
      'lhs_key' => 'id',
      'rhs_module' => 'dire_Direccion',
      'rhs_table' => 'dire_direccion',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'dire_direccion_dire_codigopostal_c',
      'join_key_lhs' => 'dire_direccion_dire_codigopostaldire_codigopostal_ida',
      'join_key_rhs' => 'dire_direccion_dire_codigopostaldire_direccion_idb',
    ),
  ),
  'table' => 'dire_direccion_dire_codigopostal_c',
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
    'dire_direccion_dire_codigopostaldire_codigopostal_ida' => 
    array (
      'name' => 'dire_direccion_dire_codigopostaldire_codigopostal_ida',
      'type' => 'id',
    ),
    'dire_direccion_dire_codigopostaldire_direccion_idb' => 
    array (
      'name' => 'dire_direccion_dire_codigopostaldire_direccion_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_dire_direccion_dire_codigopostal_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_dire_direccion_dire_codigopostal_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dire_direccion_dire_codigopostaldire_codigopostal_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_dire_direccion_dire_codigopostal_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dire_direccion_dire_codigopostaldire_direccion_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'dire_direccion_dire_codigopostal_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'dire_direccion_dire_codigopostaldire_direccion_idb',
      ),
    ),
  ),
);