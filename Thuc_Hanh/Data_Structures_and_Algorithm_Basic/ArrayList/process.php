<?php
include_once('class.php');
session_start();

if (!$_SESSION) {
    $_SESSION['array'] = new ArrayList();
    $_SESSION['array']->arrayList();
}

if (isset($_POST['add'])) {
    $obj = $_POST['object'];
    $_SESSION['array']->add($obj);
}

if (isset($_POST['get'])) {
    $index = $_POST['index'];
    $value = $_SESSION['array']->get($index);
}

if (isset($_POST['reset'])) {
    unset($_SESSION['array']);
}
?>