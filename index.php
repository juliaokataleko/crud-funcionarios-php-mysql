<?php
session_start();
# including the config app
include "config.php";

# including the helper file
include "functions/helper.php";

# the page passed on url as param
isset($_GET['page']) ? $page = $_GET['page'] : $page = 'home';

# loading the current page
pageInit($page);