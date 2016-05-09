<?php
$xpdo_meta_map['msdSaleMember']= array (
  'package' => 'msdiscount',
  'version' => '1.1',
  'table' => 'ms2d_sale_members',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'sale_id' => NULL,
    'group_id' => NULL,
    'type' => NULL,
    'relation' => 'in',
  ),
  'fieldMeta' => 
  array (
    'sale_id' => 
    array (
      'dbtype' => 'integer',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'pk',
    ),
    'group_id' => 
    array (
      'dbtype' => 'integer',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'pk',
    ),
    'type' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'string',
      'null' => false,
      'index' => 'pk',
    ),
    'relation' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '10',
      'phptype' => 'varchar',
      'null' => true,
      'default' => 'in',
    ),
  ),
  'indexes' => 
  array (
    'PRIMARY' => 
    array (
      'alias' => 'PRIMARY',
      'primary' => true,
      'unique' => true,
      'columns' => 
      array (
        'sale_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'group_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'type' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'relation' => 
    array (
      'alias' => 'relation',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'relation' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'aggregates' => 
  array (
    'Sale' => 
    array (
      'class' => 'msdSale',
      'local' => 'sale_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
