<?php
class API_GetAll extends API_Base {

    function GetAll(){
        $this->table = "xsolla_api";
        return Logic_API::GetAll();
    }
}