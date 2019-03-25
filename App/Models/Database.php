<?php
namespace App\Models;

use \PDO;

class Database
{
    const DB_DSN = 'mysql:host=localhost;dbname=php_po_tp1';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
    const DB_OPTIONS = [];

    /**
     * PDO instance.
     *
     * @var \PDO
     */
    protected static $pdo;

    public function __construct()
    {
        if(self::$pdo == null) {
            $this->setPDO();
        }
    }

    public function boot($tablename)
    {
        self::$tablename = $tablename;
    }

    protected static function index()
    {
        $request = self::$pdo->query('SELECT * FROM ' . self::$tablename);

        if($object){
            $request->setFetchMode(PDO::FETCH_OBJ);
        }

        return $request->fetchAll();
    }

    protected static function show($id)
    {

    }

    protected static function create()
    {

    }

    protected static function store()
    {

    }

    protected static function edit() 
    {

    }

    protected static function update()
    {

    }

    protected static function destroy()
    {

    }

    private function setPDO()
    {
        self::$pdo = new \PDO(self::DB_DSN, self::DB_USER, self::DB_PASSWORD, self::DB_OPTIONS);
    }
}