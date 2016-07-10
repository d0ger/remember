<?php

/**
 * Created by PhpStorm.
 * User: d0ger
 * Date: 16.05.2016
 * Time: 22:48
 *
 * @property Model_NextRepeat next_repeat
 */
class Model_Test extends ORM
{
    protected $_table_name = 'tests';

    public $_has_one = array(
        'next_repeat' => array(
            'model' => 'NextRepeat',
            'foreign_key' => 'test_id'
        )
    );

    public static function find_for_repeat()
    {
        $model = new self();
        $tests = $model
            ->with('next_repeat')
            ->where('next_repeat.next_date', '<=', DB::expr('curdate()'))
            ->order_by('next_repeat.next_date')
            ->find_all();

        return $tests;
    }
}