<?php 
include 'Logics/Autoload.php';

$f_connection = Logics\Connection::get_first_connection();
$bd = Logics\Connection::bd;
$request0 = "CREATE DATABASE `$bd`";
$rezult0 = mysqli_query($f_connection, $request0);

$connection = Logics\Connection::get_connection();
$request1 = "CREATE TABLE `users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`login` VARCHAR(50) DEFAULT NULL,
	`password` VARCHAR(50) DEFAULT NULL,
	`name` VARCHAR(50) DEFAULT NULL,
	`role` VARCHAR(50) DEFAULT NULL,
	PRIMARY KEY (`id`)
)";
$request2 = "CREATE TABLE `products` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`group` VARCHAR(100) DEFAULT NULL,
	`article` VARCHAR(100) DEFAULT NULL,
	`code` VARCHAR(100) DEFAULT NULL,
	`name` VARCHAR(100) DEFAULT NULL,
	`description` VARCHAR(100) DEFAULT NULL,
	`foto` VARCHAR(300) DEFAULT NULL,
	`auth_id` INT DEFAULT NULL,
	PRIMARY KEY (`id`)
)";
$request3 = "CREATE TABLE `prices` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`article` VARCHAR(100) DEFAULT NULL,
	`price` INT(100) DEFAULT NULL,
	`timestamp` VARCHAR(100),
	`auth_id` INT DEFAULT NULL,
	PRIMARY KEY (`id`)
);";
$request4 = "CREATE TABLE `checks` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`z_id` INT DEFAULT NULL,
	`auth_id` INT DEFAULT NULL,
	`auth_name` VARCHAR(50) DEFAULT NULL,
	`timestamp` VARCHAR(100) DEFAULT NULL,
	`type` VARCHAR(50) DEFAULT NULL,
	`body` VARCHAR(9000) DEFAULT NULL,
	`received_cash` VARCHAR(50) DEFAULT NULL,
	`received_card` VARCHAR(50) DEFAULT NULL,
	`change` VARCHAR(50) DEFAULT NULL,
	`sum` VARCHAR(50) DEFAULT NULL,
	`sum_a` VARCHAR(50) DEFAULT NULL,
	`sum_b` VARCHAR(50) DEFAULT NULL,
	`sum_v` VARCHAR(50) DEFAULT NULL,
	`sum_g` VARCHAR(50) DEFAULT NULL,
	`sum_m` VARCHAR(50) DEFAULT NULL,
	`sum_tax_a` VARCHAR(50) DEFAULT NULL,
	`sum_tax_b` VARCHAR(50) DEFAULT NULL,
	`sum_tax_v` VARCHAR(50) DEFAULT NULL,
	`sum_tax_g` VARCHAR(50) DEFAULT NULL,
	`sum_tax_m` VARCHAR(50) DEFAULT NULL,
	PRIMARY KEY (`id`)
);";
$request5 = "CREATE TABLE `branches` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`z_id` INT DEFAULT NULL,
	`auth_id` INT DEFAULT NULL,
	`auth_name` VARCHAR(50) DEFAULT NULL,
	`timestamp` VARCHAR(50) DEFAULT NULL,
	`type` VARCHAR(50) DEFAULT NULL,	
	`sum` VARCHAR(50) DEFAULT NULL,
	PRIMARY KEY (`id`)
);";
$request6 = "CREATE TABLE `balances` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`auth_id` INT DEFAULT NULL,
	`auth_name` VARCHAR(50) DEFAULT NULL,
	`timestamp` VARCHAR(50) DEFAULT NULL,
	`staff_in` VARCHAR(50) DEFAULT NULL,
	`staff_out` VARCHAR(50) DEFAULT NULL,
	`null_id_first` VARCHAR(50) DEFAULT NULL,
	`null_id_last` VARCHAR(50) DEFAULT NULL,
	`null_timestamp_first` VARCHAR(50) DEFAULT NULL,
	`null_timestamp_last` VARCHAR(50) DEFAULT NULL,
	`null_checks` VARCHAR(50) DEFAULT NULL,
	`sale_id_first` VARCHAR(50) DEFAULT NULL,
	`sale_id_last` VARCHAR(50) DEFAULT NULL,
	`sale_timestamp_first` VARCHAR(50) DEFAULT NULL,
	`sale_timestamp_last` VARCHAR(50) DEFAULT NULL,
	`sale_checks` VARCHAR(50) DEFAULT NULL,
	`sale_received_cash` VARCHAR(50) DEFAULT NULL,
	`sale_received_card` VARCHAR(50) DEFAULT NULL,
	`sale_change` VARCHAR(50) DEFAULT NULL,
	`sale_sum_cash` VARCHAR(50) DEFAULT NULL,
	`sale_sum_card` VARCHAR(50) DEFAULT NULL,
	`sale_sum` VARCHAR(50) DEFAULT NULL,
	`sale_sum_a` VARCHAR(50) DEFAULT NULL,
	`sale_sum_b` VARCHAR(50) DEFAULT NULL,
	`sale_sum_v` VARCHAR(50) DEFAULT NULL,
	`sale_sum_g` VARCHAR(50) DEFAULT NULL,
	`sale_sum_m` VARCHAR(50) DEFAULT NULL,
	`sale_sum_tax_a` VARCHAR(50) DEFAULT NULL,
	`sale_sum_tax_b` VARCHAR(50) DEFAULT NULL,
	`sale_sum_tax_v` VARCHAR(50) DEFAULT NULL,
	`sale_sum_tax_g` VARCHAR(50) DEFAULT NULL,
	`sale_sum_tax_m` VARCHAR(50) DEFAULT NULL,
	`sale_sum_tax` VARCHAR(50) DEFAULT NULL,
	`return_id_first` VARCHAR(50) DEFAULT NULL,
	`return_id_last` VARCHAR(50) DEFAULT NULL,
	`return_timestamp_first` VARCHAR(50) DEFAULT NULL,
	`return_timestamp_last` VARCHAR(50) DEFAULT NULL,
	`return_checks` VARCHAR(50) DEFAULT NULL,
	`return_received_cash` VARCHAR(50) DEFAULT NULL,
	`return_received_card` VARCHAR(50) DEFAULT NULL,
	`return_change` VARCHAR(50) DEFAULT NULL,
	`return_sum_cash` VARCHAR(50) DEFAULT NULL,
	`return_sum_card` VARCHAR(50) DEFAULT NULL,
	`return_sum` VARCHAR(50) DEFAULT NULL,
	`return_sum_a` VARCHAR(50) DEFAULT NULL,
	`return_sum_b` VARCHAR(50) DEFAULT NULL,
	`return_sum_v` VARCHAR(50) DEFAULT NULL,
	`return_sum_g` VARCHAR(50) DEFAULT NULL,
	`return_sum_m` VARCHAR(50) DEFAULT NULL,
	`return_sum_tax_a` VARCHAR(50) DEFAULT NULL,
	`return_sum_tax_b` VARCHAR(50) DEFAULT NULL,
	`return_sum_tax_v` VARCHAR(50) DEFAULT NULL,
	`return_sum_tax_g` VARCHAR(50) DEFAULT NULL,
	`return_sum_tax_m` VARCHAR(50) DEFAULT NULL,
	`return_sum_tax` VARCHAR(50) DEFAULT NULL,
	`sum_cash` VARCHAR(50) DEFAULT NULL,
	`sum_card` VARCHAR(50) DEFAULT NULL,
	`sum` VARCHAR(50) DEFAULT NULL,
	`balance_open` VARCHAR(50) DEFAULT NULL,
	`balance_close` VARCHAR(50) DEFAULT NULL,
	PRIMARY KEY (`id`)
);";
$rezult1 = mysqli_query($connection, $request1);
$rezult2 = mysqli_query($connection, $request2);
$rezult3 = mysqli_query($connection, $request3);
$rezult4 = mysqli_query($connection, $request4);
$rezult5 = mysqli_query($connection, $request5);
$rezult6 = mysqli_query($connection, $request6);

echo "<pre>";
echo "===== DATA BASE ===============================<br>";
var_dump($rezult0);
echo "<br><br>===== USERS TABLE =============================<br>";
var_dump($rezult1);
echo "<br><br>===== PRODUCTS TABLE ==========================<br>";
var_dump($rezult2);
echo "<br><br>===== PRICES TABLE ============================<br>";
var_dump($rezult3);
echo "<br><br>===== CHECKS TABLE ============================<br>";
var_dump($rezult4);
echo "<br><br>===== BRANCHES TABLE ==========================<br>";
var_dump($rezult5);
echo "<br><br>===== Z-BALANCE TABLE =========================<br>";
var_dump($rezult6);