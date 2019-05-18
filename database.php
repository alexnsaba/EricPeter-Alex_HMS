<?php
$con= mysqli_connect("localhost","root","");
mysqli_query($con,"create database IF NOT EXISTS hosteldb");
$sel= mysqli_select_db($con,"hosteldb");
//creating table hosel
mysqli_query($con,"create table IF NOT EXISTS hostel(hostelId int(20) primary key not null auto_increment,hName varchar(100) not null ,
hLocation varchar(30) not null ,hPhone varchar(13) not null unique,hCustodian varchar(30) not null ,studentType varchar(10) not null,
hEmail varchar(30) unique not null,name varchar(20) not null,image longblob not null,status varchar(10) not null)");
//creating admin table
mysqli_query($con,"create table IF NOT EXISTS admin(Username varchar(100) not null unique ,Password varchar(100) not null)");
//creating table custodian
mysqli_query($con,"create table IF NOT EXISTS Custodian(FirstName varchar(100) not null,LastName varchar(100) not null,
Username varchar(100) unique not null ,Gender varchar(13),HostelEmail varchar(100) not null unique ,PhoneNumber varchar(12)  not null,
Password varchar(100) not null,HostelSuburbAddress varchar(100) not null,HostelStreetAddress varchar(100),HostelPlotNumber varchar(100),image_name varchar(100) not null,image blob not null)");
// creating table Student
mysqli_query($con,"create table IF NOT EXISTS Student(FirstName varchar(100) not null,LastName varchar(100) not null ,
Username varchar(100) unique not null ,Gender varchar(13),Email varchar(100) not null unique ,Phone_number varchar(12) not null,
Password varchar(100) not null,Country varchar(100) not null,District varchar(100),name varchar(100),image longblob not null)");
//creating table 
mysqli_query($con,"create table IF NOT EXISTS Room(RoomId int(20) primary key not null auto_increment,roomNumber varchar(100) not null,roomCategory varchar(100) not null ,
roomFloor varchar(100) not null ,roomPrice int(20) not null,roomStatus varchar(100) not null  ,hostelId  int(20) not null,name varchar(100) not null,
roomImage longblob not null)");
//CREATING Table for comments
mysqli_query($con,"CREATE table IF NOT EXISTS comments(id int(20) primary key not null auto_increment,username varchar(200) not null  ,message varchar(200) not null ,date timestamp  not null DEFAULT CURRENT_TIMESTAMP,code varchar(200) not null)");
//table for payment references
mysqli_query($con,"CREATE table IF NOT EXISTS reference(id int(20) primary key not null auto_increment,ref int(200) not null )");
//booking table
mysqli_query($con,"CREATE table IF NOT EXISTS booking(bookingId int(20) primary key not null auto_increment,amount int(20) not null,phone varchar(14) ,RoomId int(20) not null )");
mysqli_query($con,"CREATE table IF NOT EXISTS children(username varchar(200) not null  ,message varchar(200) not null ,date timestamp  not null DEFAULT CURRENT_TIMESTAMP,par_code varchar(200) not null)");





?>
