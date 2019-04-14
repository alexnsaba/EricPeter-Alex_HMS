<?php
$con= mysqli_connect("localhost","root","");
mysqli_query($con,"create database IF NOT EXISTS hostelManager");
$sel= mysqli_select_db($con,"hostelManager");
//creating table hosel
mysqli_query($con,"create table IF NOT EXISTS hostel(hostelId int(20) primary key not null auto_increment,hName varchar(30) not null ,
hLocation varchar(30) not null ,hPhone varchar(13) not null unique,hCustodian varchar(30) not null ,studentType varchar(10) not null,
hEmail varchar(30) unique not null,hPhoto blob not null)");



?>