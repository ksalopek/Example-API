<?php

class API_Update extends API_Base {

    function Update($meta){
        $this->table = "xsolla_api";
        Logic_API::Update($meta);
    }
}