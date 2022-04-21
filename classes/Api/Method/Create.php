<?php
class API_Create extends API_Base {

    function Create($meta){
        $this->table = "xsolla_api";
        Logic_API::Create($meta);
    }
}