<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$dictionary['emp_empleo'] = array(
    'table' => 'emp_empleo',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_NAME',
    'type' => 'name',
    'link' => true,
    'dbType' => 'varchar',
    'len' => '100',
    'unified_search' => true,
    'full_text_search' => 
    array (
      'boost' => '3',
      'enabled' => true,
    ),
    'required' => true,
    'importable' => 'required',
    'duplicate_merge' => 'enabled',
    'merge_filter' => 'selected',
    'duplicate_on_record_copy' => 'always',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'duplicate_merge_dom_value' => '3',
    'audited' => false,
    'reportable' => true,
    'calculated' => false,
    'size' => '20',
  ),
  'tipo_empresa' => 
  array (
    'required' => false,
    'name' => 'tipo_empresa',
    'vname' => 'LBL_TIPO_EMPRESA',
    'type' => 'enum',
    'massupdate' => true,
    'default' => 'PUBLICA',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'tipo_empresa_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'tipo_contrato' => 
  array (
    'required' => false,
    'name' => 'tipo_contrato',
    'vname' => 'LBL_TIPO_CONTRATO',
    'type' => 'enum',
    'massupdate' => true,
    'default' => 'FIJO',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'tipo_contrato_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'numero_trabajador' => 
  array (
    'required' => false,
    'name' => 'numero_trabajador',
    'vname' => 'LBL_NUMERO_TRABAJADOR',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '20',
    'size' => '20',
  ),
  'puesto_ocupa' => 
  array (
    'required' => false,
    'name' => 'puesto_ocupa',
    'vname' => 'LBL_PUESTO_OCUPA',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '100',
    'size' => '20',
  ),
  'antiguedad' => 
  array (
    'required' => false,
    'name' => 'antiguedad',
    'vname' => 'LBL_ANTIGUEDAD',
    'type' => 'decimal',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '1',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '1',
  ),
  'nombre_jefe_directo' => 
  array (
    'required' => false,
    'name' => 'nombre_jefe_directo',
    'vname' => 'LBL_NOMBRE_JEFE_DIRECTO',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '100',
    'size' => '20',
  ),
  'puesto_jefe_directo' => 
  array (
    'required' => false,
    'name' => 'puesto_jefe_directo',
    'vname' => 'LBL_PUESTO_JEFE_DIRECTO',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '20',
    'size' => '20',
  ),
  'empleo_actual' => 
  array (
    'required' => false,
    'name' => 'empleo_actual',
    'vname' => 'LBL_EMPLEO_ACTUAL',
    'type' => 'bool',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  ),
  'actividad_empresa' => 
  array (
    'required' => false,
    'name' => 'actividad_empresa',
    'vname' => 'LBL_ACTIVIDAD_EMPRESA',
    'type' => 'enum',
    'massupdate' => true,
    'default' => 'pendiente',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'actividad_empresa_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
);

if (!class_exists('VardefManager')){
}
VardefManager::createVardef('emp_empleo','emp_empleo', array('basic','team_security','assignable'));