<?php
include_once('class.php');
session_start();

if (!$_SESSION) {
    $_SESSION['list'] = new LinkList();
}

if (isset($_POST['first'])) {
    $data = $_POST['data'];
    $_SESSION['list']->insertFirst($data);
}

if (isset($_POST['last'])) {
    $data = $_POST['data'];
    $_SESSION['list']->insertLast($data);
}

if (isset($_POST['reset'])) {
    unset($_SESSION['list']);
}
?>