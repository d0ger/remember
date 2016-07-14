<?php

/**
 * Date: 14.07.2016
 *
 * @property int    id
 * @property string result
 *
 * @property Model_Item     item
 */
class Model_Result extends ORM
{
    protected $_table_name = 'results';

    protected $_belongs_to = array(
        'item' => array(
            'model' => 'Test',
            'foreign_key' => 'item_id'
        ),
    );
}