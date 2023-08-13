<?php

namespace App\Models;

use App\Utils\Database;

class Character extends CoreModel
{
    /**
     * @var string
     */
    private $firstname;
    /**
     * @var string
     */
    private $lastname;
    /**
     * @var string
     */
    private $alias;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $picture;
    /**
     * @var string
     */
    private $type_id;

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM'
    }
}


