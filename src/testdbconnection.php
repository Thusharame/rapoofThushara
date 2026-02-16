<?php
include 'db.php';
if ($conn) {
    echo "Database connection OK";
} else {
    echo "Connection failed";
}
?>