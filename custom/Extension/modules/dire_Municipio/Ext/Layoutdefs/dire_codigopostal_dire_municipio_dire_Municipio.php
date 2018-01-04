<?php
 // created: 2018-01-03 17:08:34
$layout_defs["dire_Municipio"]["subpanel_setup"]['dire_codigopostal_dire_municipio'] = array (
  'order' => 100,
  'module' => 'dire_CodigoPostal',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DIRE_CODIGOPOSTAL_DIRE_MUNICIPIO_FROM_DIRE_CODIGOPOSTAL_TITLE',
  'get_subpanel_data' => 'dire_codigopostal_dire_municipio',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
