<?php
require_once 'AbstractProduct.php';

class VirtualProduct extends AbstractProduct {

    protected $file;

    public function __construct()
    {
        parent::__construct();
        echo "Virtual";
    }



    public function checkAddtocard(){
        if ($this->price != NULL && $this->amount < 1000)
        {
            return true;
        }
    }


}
