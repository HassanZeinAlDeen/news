<?php
include("connection.php");

$query = $mysql->prepare("SELECT * FROM news");
$query->execute();
$result = $query->get_result();

while($data = $result->fetch_assoc())

?>