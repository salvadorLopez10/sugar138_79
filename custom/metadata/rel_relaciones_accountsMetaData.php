<?php
// created: 2018-01-03 17:32:59
$dictionary["rel_relaciones_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'rel_relaciones_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Rel_Relaciones',
      'rhs_table' => 'rel_relaciones',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rel_relaciones_accounts_c',
      'join_key_lhs' => 'rel_relaciones_accountsaccounts_ida',
      'join_key_rhs' => 'rel_relaciones_accountsrel_relaciones_idb',
    ),
  ),
  'table' => 'rel_relaciones_accounts_c',
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
    'rel_relaciones_accountsaccounts_ida' => 
    array (
      'name' => 'rel_relaciones_accountsaccounts_ida',
      'type' => 'id',
    ),
    'rel_relaciones_accountsrel_relaciones_idb' => 
    array (
      'name' => 'rel_relaciones_accountsrel_relaciones_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_rel_relaciones_accounts_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_rel_relaciones_accounts_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rel_relaciones_accountsaccounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_rel_relaciones_accounts_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rel_relaciones_accountsrel_relaciones_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'rel_relaciones_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rel_relaciones_accountsrel_relaciones_idb',
      ),
    ),
  ),
);