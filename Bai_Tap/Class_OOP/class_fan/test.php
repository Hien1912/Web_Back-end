<?php
include_once('fan.php');
    session_start();
    // Fan 1
    if ($_SESSION['fan']??false) {
        $fan1 = $_SESSION['fan1'];
        $fan2 = $_SESSION['fan2'];
    }
    else{
        $fan1 = new Fan();
        $fan1->setSpeed("FAST");
        $fan1->setRadius(10);
        $fan1->setColor("yellow");
        $fan1->switchStatus();
        // Fan 2
        $fan2 = new Fan();
        $fan2->setSpeed("MEDIUM");
        $_SESSION['fan1'] = $fan1;
        $_SESSION['fan2'] = $fan2;
        $_SESSION['fan'] = true;
    }

    // Switch Speed

    if (isset($_GET['speed'])) {
        header("location: index.php");
        switch($_GET["speed"]){
            case 's1':
                $fan1->setSpeed("SLOW");
                break;
            case 's2':
                $fan2->setSpeed("SLOW");
                break;
            case 'm1':
                $fan1->setSpeed("MEDIUM");
                break;
            case 'm2':
                $fan2->setSpeed("MEDIUM");
                break;
            case 'f1':
                $fan1->setSpeed("FAST");
                break;
            case 'f2':
                $fan2->setSpeed("FAST");
                break;
        }
    }
    // Switch Status
    if (isset($_GET["power"])) {
        header("location: index.php");
        switch($_GET["power"]){
            case 'f1':
                $fan1->switchStatus();
                break;
            case 'f2':
                $fan2->switchStatus();
                break;
        }
    }

?>