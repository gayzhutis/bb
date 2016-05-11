<?php
return array(
   'fields' => array(
        'currency' => NULL,
        'currency_price' => 0,
        'currency_skidka_price' => 0,
        'manufacturer' => NULL,
        'category' => NULL,
        'subcategs' => NULL,
        'sport' => NULL,
        'goal' => NULL,
        'packing' => NULL,
        'packing_unit' => NULL,
        'number_of_servings' => NULL,
        'taste' => NULL,
        'composition' => NULL,
        'recommendations' => NULL,
        'barcode' => NULL,
        'gender' => NULL,
        'ingredients' => NULL,
        'analogs' => '',
        'not_available' => 0,
        'free_shaker' => 0,
        'free_shipping' => 0,
        'custom' => 0,
        'total_remains' => 0
    ),
    'fieldMeta' => array(
        'manufacturer' => array(
            'dbtype' => 'varchar',
            'precision' => '255',
            'phptype' => 'string',
            'null' => true,
            'default' => NULL
        ),
        'category' => array(
            'dbtype' => 'varchar',
            'precision' => '255',
            'phptype' => 'string',
            'null' => true,
            'default' => NULL
        ),
        'subcategs' => array(
            'dbtype' => 'varchar',
            'precision' => '255',
            'phptype' => 'string',
            'null' => true,
            'default' => NULL
        ),
        'sport' => array(
            'dbtype' => 'varchar',
            'precision' => '255',
            'phptype' => 'string',
            'null' => true,
            'default' => NULL
        ),
        'goal' => array(
            'dbtype' => 'varchar',
            'precision' => '255',
            'phptype' => 'string',
            'null' => true,
            'default' => NULL
        ),
        'packing' => array(
            'dbtype' => 'decimal',
            'precision' => '12,3',
            'phptype' => 'float',
            'null' => false,
            'default' => 0
        ),
        'packing_unit' => array(
            'dbtype' => 'varchar',
            'precision' => '255',
            'phptype' => 'string',
            'null' => true,
            'default' => NULL
        ),
        'number_of_servings' => array(
            'dbtype' => 'int',
            'precision' => '4',
            'phptype' => 'integer',
            'null' => false
        ),
        'taste' => array(
            'dbtype' => 'varchar',
            'precision' => '255',
            'phptype' => 'string',
            'null' => true,
            'default' => NULL
        ),
        'composition' => array(
            'dbtype' => 'mediumtext',
            'phptype' => 'string',
            'null' => true,
            'default' => NULL
        ),
        'gender' => array(
            'dbtype' => 'varchar',
            'precision' => '20',
            'phptype' => 'string',
            'null' => true,
            'default' => NULL
        ),
        'recommendations' => array(
            'dbtype' => 'varchar',
            'precision' => '255',
            'phptype' => 'string',
            'null' => true,
            'default' => NULL
        ),
        'barcode' => array(
            'dbtype' => 'varchar',
            'precision' => '50',
            'phptype' => 'string',
            'null' => true,
            'default' => NULL
        ),
        'currency_price' => array(
            'dbtype' => 'decimal',
            'precision' => '12,2',
            'phptype' => 'float',
            'null' => false,
            'default' => 0
        ),
        'currency_skidka_price' => array(
            'dbtype' => 'decimal',
            'precision' => '12,2',
            'phptype' => 'float',
            'null' => false,
            'default' => 0
        ),
        'currency' => array(
            'dbtype' => 'varchar',
            'precision' => '3',
            'phptype' => 'string',
            'null' => true,
            'default' => NULL
        ),
        'ingredients' => array(
            'dbtype' => 'varchar',
            'precision' => '255',
            'phptype' => 'string',
            'null' => true,
            'default' => NULL
        ),
        'analogs' => array(
            'dbtype' => 'varchar',
            'precision' => '255',
            'phptype' => 'string',
            'null' => false,
            'default' => ''
        ),
        'not_available' => array(
            'dbtype' => 'int',
            'precision' => '1',
            'phptype' => 'integer',
            'null' => false
        ),
        'free_shaker' => array(
            'dbtype' => 'int',
            'precision' => '1',
            'phptype' => 'integer',
            'null' => false
        ),
        'free_shipping' => array(
            'dbtype' => 'int',
            'precision' => '1',
            'phptype' => 'integer',
            'null' => false
        ),
        'custom' => array(
            'dbtype' => 'int',
            'precision' => '1',
            'phptype' => 'integer',
            'null' => false
        ),
        'total_remains' => array(
            'dbtype' => 'int',
            'precision' => '6',
            'phptype' => 'integer',
            'null' => false
        )
    ),
    'indexes' => array(
        'category' => array (
            'alias' => 'category',
            'primary' => false,
            'unique' => false,
            'type' => 'BTREE',
            'columns' => array (
                'action' => array (
                    'length' => '',
                    'collation' => 'A',
                    'null' => false
                )
            )
        ),
        'subcategs' => array (
            'alias' => 'subcategs',
            'primary' => false,
            'unique' => false,
            'type' => 'BTREE',
            'columns' => array (
                'action' => array (
                    'length' => '',
                    'collation' => 'A',
                    'null' => false
                )
            )
        ),
        'sport' => array (
            'alias' => 'sport',
            'primary' => false,
            'unique' => false,
            'type' => 'BTREE',
            'columns' => array (
                'action' => array (
                    'length' => '',
                    'collation' => 'A',
                    'null' => false
                )
            )
        ),
        'ingridients' => array (
            'alias' => 'ingridients',
            'primary' => false,
            'unique' => false,
            'type' => 'BTREE',
            'columns' => array (
                'action' => array (
                    'length' => '',
                    'collation' => 'A',
                    'null' => false
                )
            )
        ),
        'goal' => array (
            'alias' => 'goal',
            'primary' => false,
            'unique' => false,
            'type' => 'BTREE',
            'columns' => array (
                'action' => array (
                    'length' => '',
                    'collation' => 'A',
                    'null' => false
                )
            )
        ),
        'packing' => array (
            'alias' => 'packing',
            'primary' => false,
            'unique' => false,
            'type' => 'BTREE',
            'columns' => array (
                'action' => array (
                    'length' => '',
                    'collation' => 'A',
                    'null' => false
                )
            )
        ),
        'packing_unit' => array (
            'alias' => 'packing_unit',
            'primary' => false,
            'unique' => false,
            'type' => 'BTREE',
            'columns' => array (
                'action' => array (
                    'length' => '',
                    'collation' => 'A',
                    'null' => false
                )
            )
        ),
        'number_of_servings' => array (
            'alias' => 'number_of_servings',
            'primary' => false,
            'unique' => false,
            'type' => 'BTREE',
            'columns' => array (
                'action' => array (
                    'length' => '',
                    'collation' => 'A',
                    'null' => false
                )
            )
        ),
        'taste' => array (
            'alias' => 'taste',
            'primary' => false,
            'unique' => false,
            'type' => 'BTREE',
            'columns' => array (
                'action' => array (
                    'length' => '',
                    'collation' => 'A',
                    'null' => false
                )
            )
        ),
        'composition' => array (
            'alias' => 'composition',
            'primary' => false,
            'unique' => false,
            'type' => 'BTREE',
            'columns' => array (
                'action' => array (
                    'length' => '',
                    'collation' => 'A',
                    'null' => false
                )
            )
        ),
        'gender' => array (
            'alias' => 'gender',
            'primary' => false,
            'unique' => false,
            'type' => 'BTREE',
            'columns' => array (
                'action' => array (
                    'length' => '',
                    'collation' => 'A',
                    'null' => false
                )
            )
        ),
        'recommendations' => array (
            'alias' => 'recommendations',
            'primary' => false,
            'unique' => false,
            'type' => 'BTREE',
            'columns' => array (
                'action' => array (
                    'length' => '',
                    'collation' => 'A',
                    'null' => false
                )
            )
        ),
        'barcode' => array (
            'alias' => 'barcode',
            'primary' => false,
            'unique' => false,
            'type' => 'BTREE',
            'columns' => array (
                'action' => array (
                    'length' => '',
                    'collation' => 'A',
                    'null' => false
                )
            )
        ),
        'ingredients' => array (
            'alias' => 'ingredients',
            'primary' => false,
            'unique' => false,
            'type' => 'BTREE',
            'columns' => array (
                'action' => array (
                    'length' => '',
                    'collation' => 'A',
                    'null' => false
                )
            )
       )
    )
);