<?php
class API_Delete extends API_Base {

    function Delete($id){
        $this->table = "xsolla_api";
        Logic_API::Delete($id);
    }
}
