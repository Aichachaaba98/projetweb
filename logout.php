<?php
session_start();
session_destroy();
unset($_SESSION['login']);
unset($_SESSION['mdp']);
header("location:index.html");