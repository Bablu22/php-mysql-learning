<?php

// Get all users from json file
function getUsers(){
  return json_decode(file_get_contents(__DIR__.'/users.json'),true);
    
}

//  Get single user from json file by id
function getUserById($id){
    $users=getUsers();
    
    foreach($users as $user){
        if ($user['id']==$id ) {
            return $user;
        }
    }
    return null;
}



function createUser($data){
    $users = getUsers();

    $data['id'] = rand(1000000, 2000000);

    $users[] = $data;

    file_put_contents(__DIR__.'/users.json',json_encode($users));

    return $data;
}


// Update user
function updateuser($data,$id){
    $users=getUsers();
    
    foreach ($users as $i => $user) {
        if ($user['id']==$id) {
            $users[$i]=array_merge($user,$data);
        }
    }
    file_put_contents(__DIR__.'/users.json',json_encode($users));
}



// Delete user
function deleteUser($id){
    $users = getUsers();

    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            array_splice($users, $i, 1);
        }
    }

    file_put_contents(__DIR__.'/users.json',json_encode($users));
}


// validate form 
function validateUser($user, &$errors)
{
    $isValid = true;
    // Start of validation
    if (!$user['name']) {
        $isValid = false;
        $errors['name'] = 'Name is mandatory';
    }
    if (!$user['username'] || strlen($user['username']) < 6 || strlen($user['username']) > 16) {
        $isValid = false;
        $errors['username'] = 'Username is required and it must be more than 6 and less then 16 character';
    }
    if ($user['email'] && !filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        $errors['email'] = 'This must be a valid email address';
    }

    if (!filter_var($user['phone'], FILTER_VALIDATE_INT)) {
        $isValid = false;
        $errors['phone'] = 'This must be a valid phone number';
    }
    // End Of validation

    return $isValid;
}