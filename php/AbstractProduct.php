<?php


abstract class AbstractProduct
{
    protected $id;
    protected $name;
    protected $price;
    //public $productCurrency;
    protected $photo;
    protected $description;
    protected $file;
    protected $size;
    protected $amount;



    protected function __construct()
    {

        echo "I am";

    }

    public function __toString()
    {
        return serialize($this);
        // TODO: Implement __toString() method.
    }


    public function __destruct()
    {
        echo "die";
        die;
        // TODO: Implement __destruct() method.
    }

    public function setID($id)
    {
        if (preg_match("/^[0-9]+$/", $id)) {
            $this->id = $id;
        }
    }






    public function getDescription($description)
    {
        return $this->$description;
    }

    public function setFile($file)
    {
    if (property_exists($this,"$file")) {
        $this->file = $file;
    }

    }

    public function setSize($size)
    {
        if (preg_match("/^[0-9]+$/", $size)) {
            $this->size = $size;
        }
    }



    public function setAmount($amount){
        if (property_exists($this,"$amount") && preg_match("/^[0-9]+(\.[0-9]{2})?$/", $amount)) {
            $this->amount = $amount;
        }

    }

    public function getAmount($amount){
        return $this->$amount;
    }

    public function checkAddtocard()
    {
        if ($this->price != NULL && $this->amount < 1000) {
            return true;
        }
    }
    public function __set($name, $value)
    {
        $this->$name = $value;
        // TODO: Implement __set() method.
    }

    public function __get($name)
    {
        return $this->$name;
        // TODO: Implement __get() method.
    }

    public function __call($name, $arguments)
    {
        if (strpos($name, 'set' && $name === 0)){
            $name = substr($name, 0,3);
            $name = strtolower($name);
            echo "Super set";
            $this->$name = $arguments;

        } elseif (strpos($name, 'get' && $name === 0)){
            $name = substr($name, 0,3);
            $name = strtolower($name);
            echo "Super get";
            return $this->$name = $arguments;

        }
    echo "poszło";

        // TODO: Implement __call() method.
    }
}

