<?php
// created: 2018-01-03 16:33:24
$dictionary["ag_agencias_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ag_agencias_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'AG_Agencias',
      'rhs_table' => 'ag_agencias',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ag_agencias_accounts_c',
      'join_key_lhs' => 'ag_agencias_accountsaccounts_ida',
      'join_key_rhs' => 'ag_agencias_accountsag_agencias_idb',
    ),
  ),
  'table' => 'ag_agencias_accounts_c',
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
    'ag_agencias_accountsaccounts_ida' => 
    array (
      'name' => 'ag_agencias_accountsaccounts_ida',
      'type' => 'id',
    ),
    'ag_agencias_accountsag_agencias_idb' => 
    array (
      'name' => 'ag_agencias_accountsag_agencias_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_ag_agencias_accounts_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_ag_agencias_accounts_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ag_agencias_accountsaccounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_ag_agencias_accounts_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ag_agencias_accountsag_agencias_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'ag_agencias_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ag_agencias_accountsag_agencias_idb',
      ),
    ),
  ),
);