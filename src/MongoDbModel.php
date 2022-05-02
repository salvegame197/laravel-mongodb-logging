<?php
/**
 * Created by PhpStorm.
 * User: sergei.nechaenko
 * Date: 17.01.2019
 * Time: 11:24
 */

namespace Salvegame197\MongodbLogging;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class MongoDbModel extends Eloquent
{
    public $timestamps = false;

    protected $connection;
    protected $collection;

    public const FIELDS_TO_SET = [
        'message',
        'context',
        'level',
        'level_name',
        'channel',
        'datetime',
        'extra',
        'formatted',
    ];

    function __construct($connection = 'mongodb', $collection = 'log')
    {
        $this->connection = $connection;
        $this->collection = $collection;
    }
}
