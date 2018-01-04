<?php
// created: 2018-01-03 17:29:36
$dictionary["refba_referencia_bancaria_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'refba_referencia_bancaria_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'RefBa_Referencia_Bancaria',
      'rhs_table' => 'refba_referencia_bancaria',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'refba_referencia_bancaria_accounts_c',
      'join_key_lhs' => 'refba_referencia_bancaria_accountsaccounts_ida',
      'join_key_rhs' => 'refba_referencia_bancaria_accountsrefba_referencia_bancaria_idb',
    ),
  ),
  'table' => 'refba_referencia_bancaria_accounts_c',
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
    'refba_referencia_bancaria_accountsaccounts_ida' => 
    array (
      'name' => 'refba_referencia_bancaria_accountsaccounts_ida',
      'type' => 'id',
    ),
    'refba_referencia_bancaria_accountsrefba_referencia_bancaria_idb' => 
    array (
      'name' => 'refba_referencia_bancaria_accountsrefba_referencia_bancaria_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_refba_referencia_bancaria_accounts_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_refba_referencia_bancaria_accounts_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'refba_referencia_bancaria_accountsaccounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_refba_referencia_bancaria_accounts_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'refba_referencia_bancaria_accountsrefba_referencia_bancaria_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'refba_referencia_bancaria_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'refba_referencia_bancaria_accountsrefba_referencia_bancaria_idb',
      ),
    ),
  ),
);