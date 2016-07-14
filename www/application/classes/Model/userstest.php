<?php

/**
 * Date: 14.07.2016
 *
 * @property int    id
 * @property date date_finish
 *
 * @property Model_User     user
 */
class Model_UsersTest extends ORM
{
    protected $_table_name = 'results';

    protected $_belongs_to = array(
        'user' => array(
            'model' => 'User',
            'foreign_key' => 'user_id'
        ),
    );
}