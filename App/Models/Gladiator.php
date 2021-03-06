<?php

namespace App\Models;

class Gladiator
{
    protected $name;
    protected $heal;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);

            if(method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function name() {return $this->name;}
    
    public function heal() {return $this->heal;}

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setHeal($heal)
    {
        $this->heal = $heal;
    }

    public function suffer()
    {
        $this->heal -= 25;
    }
}