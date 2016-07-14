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
}