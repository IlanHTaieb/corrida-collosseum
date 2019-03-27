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
        
        if(isset($_SESSION['gladiator'])) {
            $this->session = $_SESSION['gladiator'];
        }

        if($this->pdo == null) {
            $this->setPDO();
        }
    }

    public function boot($tablename)
    {
        $this->tablename = $tablename;
    }

    public function index($object = true)
    {
        $query = $this->pdo->query("SELECT * FROM " . $this->tablename . " WHERE name <> '" . $this->session . "'");

        if($object){
            $query->setFetchMode(PDO::FETCH_OBJ);
        }

        return $query->fetchAll();
    }

    public function count(Gladiator $gladiator)
    {
        $request = $this->pdo->query("SELECT COUNT(*) FROM " . $this->tablename . " WHERE name = '" . $gladiator->name() . "'");

        return $request->fetch();
    }

    public function show($request)
    {
        $query = $this->pdo->query("SELECT name FROM " . $this->tablename . " WHERE name = '" . $request->name() . "'");

        $query->setFetchMode(PDO::FETCH_OBJ);
        
        return $query->fetch();
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

    public function update(Gladiator $gladiator)
    {
        $request = $this->pdo->prepare('UPDATE ' . $this->tablename . ' set heal = :heal WHERE name = :name');

        $request->execute([
            "name" => $gladiator->name(),
            "heal" => $gladiator->heal() 
        ]);

        if ($gladiator->heal() <= 0) {
            $this->destroy($gladiator);
        }
    }

    public function destroy(Gladiator $gladiator)
    {
        $this->pdo->exec("DELETE from " . $this->tablename . " WHERE name = '" . $gladiator->name() . "'");
    }

    private function setPDO()
    {
        $this->pdo = new \PDO(self::DB_DSN, self::DB_USER, self::DB_PASSWORD, self::DB_OPTIONS);
    }
}