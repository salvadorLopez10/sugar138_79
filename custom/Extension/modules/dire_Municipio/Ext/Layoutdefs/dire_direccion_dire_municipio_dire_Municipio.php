<?php
 // created: 2018-01-03 17:08:20
$layout_defs["dire_Municipio"]["subpanel_setup"]['dire_direccion_dire_municipio'] = array (
  'order' => 100,
  'module' => 'dire_Direccion',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DIRE_DIRECCION_DIRE_MUNICIPIO_FROM_DIRE_DIRECCION_TITLE',
  'get_subpanel_data' => 'dire_direccion_dire_municipio',
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
