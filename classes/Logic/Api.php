<?php
/**Logic class to handle logic for performing CRUD actions for API**/

class Logic_API {

    //Add a row to the database with given meta
    function Create($meta)
    {
        DataRepository_API::Create($meta);
    }

    //Delete row from database by Id
    function Delete($id)
    {
        DataRepository_API::Delete($id);
    }

    //Update a row with new data from UI
    function Update($meta)
    {
        DataRepository_Update::Create($meta);
    }

    //return all current data in the database
    function GetAll($meta)
    {
        return DataRepository_API::GetAll();
    }
}


