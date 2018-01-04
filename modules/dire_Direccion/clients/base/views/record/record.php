<?php
$module_name = 'dire_Direccion';
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
            'fields' => 
            array (
              0 => 'assigned_user_name',
              1 => 'team_name',
              2 => 
              array (
                'name' => 'dire_direccion_dire_pais_name',
              ),
              3 => 
              array (
              ),
              4 => 
              array (
                'name' => 'dire_direccion_dire_estado_name',
              ),
              5 => 
              array (
              ),
              6 => 
              array (
                'name' => 'dire_direccion_dire_municipio_name',
              ),
              7 => 
              array (
              ),
              8 => 
              array (
                'name' => 'dire_direccion_dire_ciudad_name',
              ),
              9 => 
              array (
              ),
              10 => 
              array (
                'name' => 'dire_direccion_dire_codigopostal_name',
              ),
              11 => 
              array (
              ),
              12 => 
              array (
                'name' => 'dire_direccion_dire_colonia_name',
              ),
              13 => 
              array (
              ),
              14 => 
              array (
              ),
              15 => 
              array (
                'name' => 'dire_direccion_dire_pais_1_name',
              ),
              16 => 
              array (
                'name' => 'dire_direccion_dire_pais_1_name',
              ),
              17 => 
              array (
              ),
              18 => 
              array (
                'name' => 'dire_direccion_dire_estado_1_name',
              ),
              19 => 
              array (
              ),
              20 => 
              array (
                'name' => 'dire_direccion_dire_estado_1_name',
              ),
              21 => 
              array (
              ),
              22 => 
              array (
                'name' => 'dire_direccion_dire_municipio_1_name',
              ),
              23 => 
              array (
              ),
              24 => 
              array (
                'name' => 'dire_direccion_dire_municipio_1_name',
              ),
              25 => 
              array (
              ),
              26 => 
              array (
                'name' => 'dire_direccion_dire_ciudad_1_name',
              ),
              27 => 
              array (
              ),
              28 => 
              array (
                'name' => 'dire_direccion_dire_ciudad_1_name',
              ),
              29 => 
              array (
              ),
              30 => 
              array (
                'name' => 'dire_direccion_dire_codigopostal_1_name',
              ),
              31 => 
              array (
              ),
              32 => 
              array (
                'name' => 'dire_direccion_dire_codigopostal_1_name',
              ),
              33 => 
              array (
              ),
              34 => 
              array (
                'name' => 'dire_direccion_dire_colonia_1_name',
              ),
              35 => 
              array (
              ),
              36 => 
              array (
                'name' => 'dire_direccion_dire_colonia_1_name',
              ),
              37 => 
              array (
              ),
              38 => 
              array (
                'name' => 'dire_direccion_dire_pais_1_name',
              ),
              39 => 
              array (
              ),
              40 => 
              array (
                'name' => 'dire_direccion_dire_estado_1_name',
              ),
              41 => 
              array (
              ),
              42 => 
              array (
                'name' => 'dire_direccion_dire_pais_1_name',
              ),
              43 => 
              array (
              ),
              44 => 
              array (
                'name' => 'dire_direccion_dire_estado_1_name',
              ),
              45 => 
              array (
              ),
              46 => 
              array (
                'name' => 'dire_direccion_dire_municipio_1_name',
              ),
              47 => 
              array (
              ),
              48 => 
              array (
                'name' => 'dire_direccion_dire_estado_1_name',
              ),
              49 => 
              array (
              ),
              50 => 
              array (
                'name' => 'dire_direccion_dire_ciudad_1_name',
              ),
              51 => 
              array (
              ),
              52 => 
              array (
                'name' => 'dire_direccion_dire_municipio_1_name',
              ),
              53 => 
              array (
              ),
              54 => 
              array (
                'name' => 'dire_direccion_dire_codigopostal_1_name',
              ),
              55 => 
              array (
              ),
              56 => 
              array (
                'name' => 'dire_direccion_dire_ciudad_1_name',
              ),
              57 => 
              array (
              ),
              58 => 
              array (
                'name' => 'dire_direccion_dire_colonia_1_name',
              ),
              59 => 
              array (
              ),
              60 => 
              array (
                'name' => 'dire_direccion_dire_codigopostal_1_name',
              ),
              61 => 
              array (
              ),
              62 => 
              array (
                'name' => 'dire_direccion_dire_colonia_1_name',
              ),
              63 => 
              array (
              ),
              64 => 
              array (
                'name' => 'dire_direccion_dire_pais_1_name',
              ),
              65 => 
              array (
              ),
              66 => 
              array (
                'name' => 'dire_direccion_dire_estado_1_name',
              ),
              67 => 
              array (
              ),
              68 => 
              array (
                'name' => 'dire_direccion_dire_municipio_1_name',
              ),
              69 => 
              array (
              ),
              70 => 
              array (
                'name' => 'dire_direccion_dire_ciudad_1_name',
              ),
              71 => 
              array (
              ),
              72 => 
              array (
                'name' => 'dire_direccion_dire_codigopostal_1_name',
              ),
              73 => 
              array (
              ),
              74 => 
              array (
                'name' => 'dire_direccion_dire_colonia_1_name',
              ),
              75 => 
              array (
              ),
              76 => 
              array (
                'name' => 'dire_direccion_dire_pais_1_name',
              ),
              77 => 
              array (
              ),
              78 => 
              array (
                'name' => 'dire_direccion_dire_estado_1_name',
              ),
              79 => 
              array (
              ),
              80 => 
              array (
                'name' => 'dire_direccion_dire_municipio_1_name',
              ),
              81 => 
              array (
              ),
              82 => 
              array (
                'name' => 'dire_direccion_dire_ciudad_1_name',
              ),
              83 => 
              array (
              ),
              84 => 
              array (
                'name' => 'dire_direccion_dire_codigopostal_1_name',
              ),
              85 => 
              array (
              ),
              86 => 
              array (
                'name' => 'dire_direccion_dire_colonia_1_name',
              ),
              87 => 
              array (
              ),
              88 => 
              array (
                'name' => 'dire_direccion_dire_pais_1_name',
              ),
              89 => 
              array (
              ),
              90 => 
              array (
                'name' => 'dire_direccion_dire_estado_1_name',
              ),
              91 => 
              array (
              ),
              92 => 
              array (
                'name' => 'dire_direccion_dire_municipio_1_name',
              ),
              93 => 
              array (
              ),
              94 => 
              array (
                'name' => 'dire_direccion_dire_ciudad_1_name',
              ),
              95 => 
              array (
              ),
              96 => 
              array (
                'name' => 'dire_direccion_dire_codigopostal_1_name',
              ),
              97 => 
              array (
              ),
              98 => 
              array (
                'name' => 'dire_direccion_dire_colonia_1_name',
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
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              1 => 
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
              2 => 
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
      ),
    ),
  ),
);
