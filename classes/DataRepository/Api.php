<?php
/**DataRepository class responsible for performing CRUD opperations for API**/
class DataRepository_API {

    //Create
    function Create($meta){
        $sql = "INSERT INTO api_records (uuid,name,description,code,status) 
VALUES ({$meta['uuid']},'{$meta['name']}','{$meta['description']}',{$meta['code']},{$meta['status']})";
        _db_query($sql);
    }

    //Delete
    function Delete($id){
        $sql = "DELETE FROM api_records WHERE id = {$id}";
        _db_query($sql);
    }

    //Update
    function Update($meta){
        $sql = "UPDATE api_records SET uuid = ({$meta['uuid']}, name = '{$meta['name']}', description = '{$meta['description']}',
                               code = {$meta['code']}, status = {$meta['status']})";
        _db_query($sql);
    }

    //Get All records
    function GetAll(){
        $sql = "SELECT * FROM api_records";
        $results = _db_query($sql);
        return json_encode($results);
    }
}