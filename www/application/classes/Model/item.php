<?php

/**
 * @property int    id
 * @property string question
 * @property string answer
 * @property date date_create
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

    public static function get_next()
    {
        $model = new self();

        return $model
            ->select(array('results.id', 'result_id'))
            ->join('results')
            ->on('results.item_id', '=', 'item.id')
            ->join('tests')
            ->on('tests.id', '=', 'results.test_id')
            ->where('tests.user_id', '=', Model_User::get_current_user()->id)
            ->where('results.result', 'IS', null)
            ->order_by('results.id', 'asc')
            ->find();
    }

    public static function get_next_for_set_result()
    {
        $model = new self();

        return $model
            ->select(array('results.id', 'result_id'))
            ->join('results')
            ->on('results.item_id', '=', 'item.id')
            ->join('tests')
            ->on('tests.id', '=', 'results.test_id')
            ->where('tests.user_id', '=', Model_User::get_current_user()->id)
            ->where('results.result', '=', 0)
            ->order_by('results.id', 'asc')
            ->find();
    }
}