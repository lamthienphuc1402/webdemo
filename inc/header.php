<?php
session_start();
require_once('inc/dbconnection.php');

if (strlen($_SESSION['id'] == 0)) {
include('inc/non-header.php');
} 
else {
    include('inc/signed-header.php');
}
?>