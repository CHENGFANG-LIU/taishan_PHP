<?php
session_start();
echo "已登出使用者".$_SESSION["name"];

unset($_SESSION['name']);