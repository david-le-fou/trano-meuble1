<?php
include '../config.php';

session_destroy();
header('location:'.url_admin);