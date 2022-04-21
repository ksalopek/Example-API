<?php

function getAll()
{
    $API = new API_GetAll();
    $results = $API->GetAll();
    echo $results;
    exit;
}

function create($meta){
    $API = new API_Create($meta);
    $API->Create($meta);
}

function update($meta){
    $API = new API_Update($meta);
    $API->Update($meta);
}

function delete($meta){
    $API = new API_Delete($meta);
    $API->Delete($meta['id']);
}