<?php
// created: 2018-01-03 17:08:23
$dictionary["dire_Direccion"]["fields"]["dire_direccion_dire_municipio"] = array (
  'name' => 'dire_direccion_dire_municipio',
  'type' => 'link',
  'relationship' => 'dire_direccion_dire_municipio',
  'source' => 'non-db',
  'module' => 'dire_Municipio',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_DIRE_DIRECCION_DIRE_MUNICIPIO_FROM_DIRE_DIRECCION_TITLE',
  'id_name' => 'dire_direccion_dire_municipiodire_municipio_ida',
  'link-type' => 'one',
);
$dictionary["dire_Direccion"]["fields"]["dire_direccion_dire_municipio_name"] = array (
  'name' => 'dire_direccion_dire_municipio_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DIRE_DIRECCION_DIRE_MUNICIPIO_FROM_DIRE_MUNICIPIO_TITLE',
  'save' => true,
  'id_name' => 'dire_direccion_dire_municipiodire_municipio_ida',
  'link' => 'dire_direccion_dire_municipio',
  'table' => 'dire_municipio',
  'module' => 'dire_Municipio',
  'rname' => 'name',
);
$dictionary["dire_Direccion"]["fields"]["dire_direccion_dire_municipiodire_municipio_ida"] = array (
  'name' => 'dire_direccion_dire_municipiodire_municipio_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_DIRE_DIRECCION_DIRE_MUNICIPIO_FROM_DIRE_DIRECCION_TITLE_ID',
  'id_name' => 'dire_direccion_dire_municipiodire_municipio_ida',
  'link' => 'dire_direccion_dire_municipio',
  'table' => 'dire_municipio',
  'module' => 'dire_Municipio',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
