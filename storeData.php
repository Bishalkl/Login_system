<?php
function storeData($email, $name, $password) {
    // create the directory
    $filepath = 'data.json';

    // check path
    if(!file_exists($filepath)) {
        file_put_contents($filepath, json_encode([], JSON_PRETTY_PRINT));
    }


    // ensure the file is writeable
    if(!is_writable($filepath)) {
        throw new Exception("Error: File $filepath is not writeable");
    }

    //Read the exisiting files
     $existingData = [];
     $jsonContent = file_get_contents($filepath);
     $existingData = json_decode($jsonContent, true) ?? [];


    //  creating the data entry
    $newEntry = [
        "email" => $email,
        "username" => $name,
        "password" => $password,
    ];

    // now putting new entry in $existingData
    $existingData [] = $newEntry;
    
    // now update the data back
    file_put_contents($filepath, json_encode($existingData, JSON_PRETTY_PRINT));
}

?>