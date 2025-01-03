<?php

function getUserData() {

    $data = file_get_contents('users.json');
    return json_decode($data, true);
}


function saveUserData($users) {

    $filepath = 'users.json';

    // create if the doesn't exist
    if(!file_exists($filepath)) {
        file_put_contents($filepath, json_encode([], JSON_PRETTY_PRINT));
    }

    file_put_contents($filepath, json_encode(['users' => $users], JSON_PRETTY_PRINT));

}

?>