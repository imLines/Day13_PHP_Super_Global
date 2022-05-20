<?php
session_start();

if(isset($_GET['name'])){
}else{
    $_GET['name'] = "platypus";

}
    echo "Bonjour ".$_GET['name'];

$_SESSION['name'] = $_GET['name'];
?>
