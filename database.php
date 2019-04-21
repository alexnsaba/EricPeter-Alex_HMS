<<<<<<< HEAD
<?php
$con= mysqli_connect("localhost","root","");
mysqli_query($con,"create database IF NOT EXISTS hostelManager");
$sel= mysqli_select_db($con,"hostelManager");
//creating table hosel
mysqli_query($con,"create table IF NOT EXISTS hostel(hostelId int(20) primary key not null auto_increment,hName varchar(30) not null ,
hLocation varchar(30) not null ,hPhone varchar(13) not null unique,hCustodian varchar(30) not null ,studentType varchar(10) not null,
hEmail varchar(30) unique not null,hPhoto blob not null,status varchar(10) not null)");
//creating admin table
mysqli_query($con,"create table IF NOT EXISTS admin(Username varchar(100) not null unique ,Password varchar(100) not null)");
//creating table custodian
mysqli_query($con,"create table IF NOT EXISTS Custodian(FirstName varchar(100) not null,LastName varchar(100) not null,
Username varchar(100) unique not null ,Gender varchar(13),HostelEmail varchar(100) not null unique ,PhoneNumber varchar(12) not null,
Password varchar(100) not null,HostelSuburbAddress varchar(100) not null,HostelStreetAddress varchar(100),HostelPlotNumber varchar(100),image blob not null)");
// creating table Student
mysqli_query($con,"create table IF NOT EXISTS Student(FirstName varchar(100) not null,LastName varchar(100) not null ,
Username varchar(100) unique not null ,Gender varchar(13),Email varchar(100) not null unique ,Phone_number varchar(12) not null,
Password varchar(100) not null,Country varchar(100) not null,District varchar(100))");
//creating table 
mysqli_query($con,"create table IF NOT EXISTS Room(RoomId int(20) primary key not null auto_increment,roomNumber varchar(100) not null,roomCategory varchar(100) not null ,
roomFloor varchar(100) not null ,roomPrice int(20) not null,roomStatus varchar(100) not null  ,hostelId  int(20) not null,
roomImage blob not null not null)");
=======
<?php
$con= mysqli_connect("localhost","root","");
mysqli_query($con,"CREATE database IF NOT EXISTS hostelManager");
$sel= mysqli_select_db($con,"hostelManager");
//creating table hosel
mysqli_query($con,"CREATE table IF NOT EXISTS hostel(hostelId int(20) primary key not null auto_increment,hName varchar(30) not null ,hLocation varchar(30) not null ,hPhone varchar(13) not null unique,hCustodian varchar(30) not null,studentType varchar(10) not null,hEmail varchar(30) unique not null,name varchar(20) not null,image longblob not null,status varchar(10) not null)");
//creating admin table
mysqli_query($con,"CREATE table IF NOT EXISTS admin(Username varchar(100) not null unique ,Password varchar(100) not null)");
//creating table custodian
mysqli_query($con,"CREATE table IF NOT EXISTS Custodian(FirstName varchar(100) not null,LastName varchar(100) not null,
Username varchar(100) unique not null ,Gender varchar(13),HostelEmail varchar(100) not null unique ,PhoneNumber varchar(12) not null,
Password varchar(100) not null,HostelSuburbAddress varchar(100) not null,HostelStreetAddress varchar(100),HostelPlotNumber varchar(100),image longblob not null)");
// creating table
mysqli_query($con,"CREATE table IF NOT EXISTS Student(FirstName varchar(100) not null,LastName varchar(100) not null ,
Username varchar(100) unique not null ,Gender varchar(13),Email varchar(100) not null unique ,Phone_number varchar(12) not null,
Password varchar(100) not null,Country varchar(100) not null,District varchar(100))");

>>>>>>> 0aa37e175676fee83d40b37abac3fbaeaf2d75b6
?>