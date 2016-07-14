<?php

/**
 * Date: 14.07.2016
 *
 * @property int    id
 * @property string email
 * @property string name
 *
 * @property Model_User_Test     current_test
 */
class Model_User extends ORM
{
    protected $_table_name = 'users';

    protected $_has_one = array(
        'current_test' => array(
        ),
    );
}