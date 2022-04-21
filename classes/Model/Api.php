<?php
class Api {
    public $uuid;
    public $name;
    public $description;
    public $code;
    public $status;

    function _construct($meta){
        $this::load($meta);
    }

    protected function load($meta){
        $this->uuid = $meta['uuid'];
        $this->name = $meta['name'];
        $this->description = $meta['description'];
        $this->code = $meta['code'];
        $this->status = $meta['status'];
    }


}