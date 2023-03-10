<?php
session_start();
require_once('inc/dbconnection.php');
if (strlen($_SESSION['id'] == 0)) {
include('inc/non-pro-header.php');
} 
else {
    include('inc/signed-pro-header.php');
}
?>