<?php

require "../models/Book.php";
require "../models/User.php";
require "../models/Vote.php";
require "../functions.php";
require "../Database.php";

require "../Validation.php";

session_start();

require "../Flash.php";


$config = require '../config.php';

require "../routes.php";
