<?php
class API_Base {

    public $table;
    public $error;
    public $meta;
    public $id;

    abstract function Create($meta){
        //abstract function to be implemented in class that extends
    }

    abstract function Delete($meta){
        //abstract function to be implemented in class that extends
    }

    abstract function Update($meta){
        //abstract function to be implemented in class that extends
    }

    abstract function GetAll($meta){
        //abstract function to be implemented in class that extends
    }
}



}