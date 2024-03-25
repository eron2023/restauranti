<?php

$userId = $_GET['id'];
include_once 'userRepository.php';



$userRepository = new UserRepository();

$userRepository->makeAdmin($userId);

header("location:MonitoroUsers.php");


?>