<?php

/**
 * @property int id
 *
 * @property Model_NextRepeat next_repeat
 */
class Model_Item extends ORM
{
    protected $_table_name = 'items';

    public $_has_one = array(
        'next_repeat' => array(
            'model' => 'NextRepeat',
            'foreign_key' => 'item_id'
        )
    );

    public static function find_for_repeat($count = null)
    {
        $model = new self();
        $model
            ->with('next_repeat')
            ->where('next_repeat.next_date', '<=', DB::expr('curdate()'))
            ->order_by('next_repeat.next_date');

        if (!empty($count)) {
            $model->limit($count);
        }

        $tests = $model->find_all();

        return $tests;
    }
}