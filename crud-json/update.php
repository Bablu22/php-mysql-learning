<?php
include 'partials/header.php';
require __DIR__ .'/users.php';

if (!isset($_GET['id'])) {
    include 'not_found.php';
    exit;
}

$userID=$_GET['id'];
$user=getUserById($userID);

if (!$user) {
    include 'not_found.php';
    exit;
};


if ($_SERVER['REQUEST_METHOD']==='POST') {
   updateUser($_POST,$userID);
   header("Location:index.php");
}


include '_form.php';
include 'partials/footer.php';
?>