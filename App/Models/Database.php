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
    protected $pdo;

    /**
     *
     *
     * @var string
     */
    protected $tablename;

    public function __construct()
    {
        if($this->pdo == null) {
            $this->setPDO();
        }
    }

    public function boot($tablename)
    {
        var_dump($this->tablename);
        $this->tablename = $tablename;
    }

    public function index($object = true)
    {
        $query = $this->pdo->query('SELECT * FROM ' . $this->tablename);

        if($object){
            $query->setFetchMode(PDO::FETCH_OBJ);
        }

        return $query->fetchAll();
    }

    public function show($id)
    {

    }

    public function create()
    {

    }

    public function store($request)
    {
        $query = $this->pdo->prepare('INSERT INTO ' . $this->tablename . '(name, heal) VALUES (:name, 100)');
        $query->execute([
            "name" => $request->name()
        ]);
    }

    public function edit() 
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

    private function setPDO()
    {
        $this->pdo = new \PDO(self::DB_DSN, self::DB_USER, self::DB_PASSWORD, self::DB_OPTIONS);
    }
}