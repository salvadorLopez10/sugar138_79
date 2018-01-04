<?php
// created: 2018-01-03 17:08:35
$dictionary["dire_estado_dire_pais"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'dire_estado_dire_pais' => 
    array (
      'lhs_module' => 'dire_Pais',
      'lhs_table' => 'dire_pais',
      'lhs_key' => 'id',
      'rhs_module' => 'dire_Estado',
      'rhs_table' => 'dire_estado',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'dire_estado_dire_pais_c',
      'join_key_lhs' => 'dire_estado_dire_paisdire_pais_ida',
      'join_key_rhs' => 'dire_estado_dire_paisdire_estado_idb',
    ),
  ),
  'table' => 'dire_estado_dire_pais_c',
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
    'dire_estado_dire_paisdire_pais_ida' => 
    array (
      'name' => 'dire_estado_dire_paisdire_pais_ida',
      'type' => 'id',
    ),
    'dire_estado_dire_paisdire_estado_idb' => 
    array (
      'name' => 'dire_estado_dire_paisdire_estado_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_dire_estado_dire_pais_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_dire_estado_dire_pais_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dire_estado_dire_paisdire_pais_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_dire_estado_dire_pais_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dire_estado_dire_paisdire_estado_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'dire_estado_dire_pais_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'dire_estado_dire_paisdire_estado_idb',
      ),
    ),
  ),
);