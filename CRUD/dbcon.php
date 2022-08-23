<?php

$con = mysqli_connect("localhost", "root", "", "dbrii");

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}
