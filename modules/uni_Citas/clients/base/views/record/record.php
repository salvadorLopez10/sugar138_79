<?php
$module_name = 'uni_Citas';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'cliente_id',
                'studio' => 'visible',
                'label' => 'LBL_CLIENTE_ID',
              ),
              1 => 
              array (
                'name' => 'duracion_cita',
                'label' => 'LBL_DURACION_CITA',
              ),
              2 => 
              array (
                'name' => 'duracion_traslado',
                'studio' => 'visible',
                'label' => 'LBL_DURACION_TRASLADO',
              ),
              3 => 
              array (
                'name' => 'referenciada',
                'label' => 'LBL_REFERENCIADA',
              ),
              4 => 
              array (
                'name' => 'acompaniante',
                'studio' => 'visible',
                'label' => 'LBL_ACOMPANIANTE',
              ),
              5 => 
              array (
                'name' => 'objetivo',
                'studio' => 'visible',
                'label' => 'LBL_OBJETIVO',
              ),
              6 => 
              array (
                'name' => 'estatus',
                'studio' => 'visible',
                'label' => 'LBL_ESTATUS',
              ),
              7 => 
              array (
                'name' => 'resultado',
                'studio' => 'visible',
                'label' => 'LBL_RESULTADO',
              ),
              8 => 
              array (
                'name' => 'id_meeting',
                'studio' => 'visible',
                'label' => 'LBL_ID_MEETING',
              ),
              9 => 'assigned_user_name',
              10 => 
              array (
                'name' => 'uni_citas_uni_brujula_name',
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'team_name',
              1 => 
              array (
              ),
              2 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              3 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
              4 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
        ),
      ),
    ),
  ),
);
