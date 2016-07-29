<?php

/**
 * Date: 14.07.2016
 *
 * @property int    id
 * @property int    item_id
 * @property int    test_id
 * @property string result
 *
 * @property Model_Item     item
 */
class Model_Result extends ORM
{
    protected $_table_name = 'results';

    protected $_belongs_to = array(
        'items' => array(
            'model' => 'Item',
            'foreign_key' => 'item_id'
        ),
        'tests' => array(
            'model' => 'Test',
            'foreign_key' => 'test_id',
        ),
    );

    public static function mark_completed($id)
    {
        $result = new self($id);
        $result->result = 0;
        $result->save();
    }

    public static function set_result($id, $result)
    {
        $model_result = new self($id);
        $model_result->result = $result;
        $model_result->save();
    }
}