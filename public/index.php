<?php

session_start();

require "../models/Book.php";
require "../models/User.php";
require "../models/Vote.php";
require "../functions.php";
require "../Database.php";

require "../Validation.php";



require "../Flash.php";


$config = require '../config.php';

require "../routes.php";
