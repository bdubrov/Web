<?php
require "Header.php";
$page = $_GET['page'] ?? 'Landing_content';
$page = htmlspecialchars($page);
require $page.'.php';
require "Footer.php";