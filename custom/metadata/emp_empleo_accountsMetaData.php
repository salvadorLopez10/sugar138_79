<?php
// created: 2018-01-03 17:23:54
$dictionary["emp_empleo_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'emp_empleo_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'emp_empleo',
      'rhs_table' => 'emp_empleo',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'emp_empleo_accounts_c',
      'join_key_lhs' => 'emp_empleo_accountsaccounts_ida',
      'join_key_rhs' => 'emp_empleo_accountsemp_empleo_idb',
    ),
  ),
  'table' => 'emp_empleo_accounts_c',
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
    'emp_empleo_accountsaccounts_ida' => 
    array (
      'name' => 'emp_empleo_accountsaccounts_ida',
      'type' => 'id',
    ),
    'emp_empleo_accountsemp_empleo_idb' => 
    array (
      'name' => 'emp_empleo_accountsemp_empleo_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_emp_empleo_accounts_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_emp_empleo_accounts_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'emp_empleo_accountsaccounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_emp_empleo_accounts_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'emp_empleo_accountsemp_empleo_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'emp_empleo_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'emp_empleo_accountsemp_empleo_idb',
      ),
    ),
  ),
);