<?php

/**
 * Date: 14.07.2016
 *
 * @property int    id
 * @property string email
 * @property string name
 * @property int current_test_id
 *
 * @property Model_Test     current_test
 */
class Model_User extends ORM
{
    private static $current_user;

    protected $_table_name = 'users';

    protected $_has_one = array(
        'current_test' => array(
            'model' => 'Test',
            'foreign_key' => 'current_test_id'
        ),
    );

    public static function get_current_user()
    {
        if (empty(self::$current_user)) {
            self::$current_user = new Model_User(1);
        }

        return self::$current_user;
    }
}