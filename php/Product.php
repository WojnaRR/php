<?php

require_once 'AbstractProduct.php';

class Product extends AbstractProduct {

    protected $amount;

    public function __construct()
    {
        parent::__construct();
        echo "Real";
    }



    public function checkAddtocard(){
        if ($this->price != NULL && $this->amount < 1000)
        {
            return true;
        }
    }


}