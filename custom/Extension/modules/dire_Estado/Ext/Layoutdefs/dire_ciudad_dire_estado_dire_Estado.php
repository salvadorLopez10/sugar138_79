<?php
 // created: 2018-01-03 17:08:28
$layout_defs["dire_Estado"]["subpanel_setup"]['dire_ciudad_dire_estado'] = array (
  'order' => 100,
  'module' => 'dire_Ciudad',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DIRE_CIUDAD_DIRE_ESTADO_FROM_DIRE_CIUDAD_TITLE',
  'get_subpanel_data' => 'dire_ciudad_dire_estado',
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
