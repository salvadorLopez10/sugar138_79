<?php
// created: 2018-01-03 17:08:31
$dictionary["dire_Colonia"]["fields"]["dire_colonia_dire_codigopostal_1"] = array (
  'name' => 'dire_colonia_dire_codigopostal_1',
  'type' => 'link',
  'relationship' => 'dire_colonia_dire_codigopostal_1',
  'source' => 'non-db',
  'module' => 'dire_CodigoPostal',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_DIRE_COLONIA_DIRE_CODIGOPOSTAL_1_FROM_DIRE_COLONIA_TITLE',
  'id_name' => 'dire_colonia_dire_codigopostal_1dire_codigopostal_ida',
  'link-type' => 'one',
);
$dictionary["dire_Colonia"]["fields"]["dire_colonia_dire_codigopostal_1_name"] = array (
  'name' => 'dire_colonia_dire_codigopostal_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DIRE_COLONIA_DIRE_CODIGOPOSTAL_1_FROM_DIRE_CODIGOPOSTAL_TITLE',
  'save' => true,
  'id_name' => 'dire_colonia_dire_codigopostal_1dire_codigopostal_ida',
  'link' => 'dire_colonia_dire_codigopostal_1',
  'table' => 'dire_codigopostal',
  'module' => 'dire_CodigoPostal',
  'rname' => 'name',
);
$dictionary["dire_Colonia"]["fields"]["dire_colonia_dire_codigopostal_1dire_codigopostal_ida"] = array (
  'name' => 'dire_colonia_dire_codigopostal_1dire_codigopostal_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_DIRE_COLONIA_DIRE_CODIGOPOSTAL_1_FROM_DIRE_COLONIA_TITLE_ID',
  'id_name' => 'dire_colonia_dire_codigopostal_1dire_codigopostal_ida',
  'link' => 'dire_colonia_dire_codigopostal_1',
  'table' => 'dire_codigopostal',
  'module' => 'dire_CodigoPostal',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
