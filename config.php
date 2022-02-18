<?php
# App settings
define('MAIN_TITLE', 'Mega Men RH');

# Database settings
define('DB_HOST', 'localhost');
define('DB_NAME', 'funcionarios_bd');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

# connection to the database
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);