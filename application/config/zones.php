<?php
//$zones = new ArrayObject(array(1)); // instantiates object of class ArrayObject
$employee_detail_array = array(
    (object)array(
        'zone' => 0,
        "locations" => array('Singapore')
    ), (object)array(
        'zone' => 1,
        "locations" => array('Macau', 'Hong Kong', 'Taiwan')
    ),
    (object)array(
        'zone' => 1,
        "locations" => array('Cambodia',
            'Malaysia',
            'Thailand',
            'Indonesia',
            'Vietnam')
    )
);


$config['zones'] = (object)$employee_detail_array;

