<?php
 // created: 2018-01-03 16:33:24
$layout_defs["Accounts"]["subpanel_setup"]['ag_agencias_accounts'] = array (
  'order' => 100,
  'module' => 'AG_Agencias',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AG_AGENCIAS_ACCOUNTS_FROM_AG_AGENCIAS_TITLE',
  'get_subpanel_data' => 'ag_agencias_accounts',
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
