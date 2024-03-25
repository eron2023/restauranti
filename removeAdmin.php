<?php

$userId = $_GET['id'];
include_once 'userRepository.php';



$userRepository = new UserRepository();

$userRepository->removeAdmin($userId);

header("location:MonitoroUsers.php");


?>