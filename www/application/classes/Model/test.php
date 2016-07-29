<?php

/**
 * Date: 14.07.2016
 *
 * @property int    id
 * @property int    user_id
 * @property date   date_finish
 *
 * @property Model_User     user
 */
class Model_Test extends ORM
{
    protected $_table_name = 'tests';

    protected $_belongs_to = array(
        'user' => array(
            'model' => 'Userx',
            'foreign_key' => 'user_id'
        ),
    );

    public static function get_current_test()
    {
        $model = new self;
        $current_test = $model
            ->where('user_id', '=', Model_User::get_current_user()->id)
            ->where('date_finish', 'IS', NULL)
            ->find();

        return $current_test;
    }

    public static function finish_current()
    {
        /** @var self $test */
        $test = self::get_current_test();

        $test->date_finish = date('Y-m-d');
        $test->save();
    }
}
