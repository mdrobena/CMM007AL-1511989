<?php
/**
 * Created by PhpStorm.
 * User: 1511989
 * Date: 14/03/2016
 * Time: 10:03
 */

define('DB_SERVER', 'br-cdbr-azure-south-b.cloudapp.net');
define('DB_USERNAME', 'b814b08ab14753');
define('DB_PASSWORD', 'fe89857c');
define('DB_DATABASE', 'CMM007ALDB-1511989');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>
