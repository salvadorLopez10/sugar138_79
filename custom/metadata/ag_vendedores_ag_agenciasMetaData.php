<?php
// created: 2018-01-03 16:33:24
$dictionary["ag_vendedores_ag_agencias"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ag_vendedores_ag_agencias' => 
    array (
      'lhs_module' => 'AG_Agencias',
      'lhs_table' => 'ag_agencias',
      'lhs_key' => 'id',
      'rhs_module' => 'AG_Vendedores',
      'rhs_table' => 'ag_vendedores',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ag_vendedores_ag_agencias_c',
      'join_key_lhs' => 'ag_vendedores_ag_agenciasag_agencias_ida',
      'join_key_rhs' => 'ag_vendedores_ag_agenciasag_vendedores_idb',
    ),
  ),
  'table' => 'ag_vendedores_ag_agencias_c',
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
    'ag_vendedores_ag_agenciasag_agencias_ida' => 
    array (
      'name' => 'ag_vendedores_ag_agenciasag_agencias_ida',
      'type' => 'id',
    ),
    'ag_vendedores_ag_agenciasag_vendedores_idb' => 
    array (
      'name' => 'ag_vendedores_ag_agenciasag_vendedores_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_ag_vendedores_ag_agencias_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_ag_vendedores_ag_agencias_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ag_vendedores_ag_agenciasag_agencias_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_ag_vendedores_ag_agencias_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ag_vendedores_ag_agenciasag_vendedores_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'ag_vendedores_ag_agencias_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ag_vendedores_ag_agenciasag_vendedores_idb',
      ),
    ),
  ),
);