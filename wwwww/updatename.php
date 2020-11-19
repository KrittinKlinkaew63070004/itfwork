<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'polarisdatabase.mysql.database.azure.com', 'kk_plr7@polarisdatabase', 'Neuatin2544', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['namechange'];
$id = $_POST['delnc'];


$sql = "UPDATE guestbook SET name='$name' WHERE id=$id";


if (mysqli_query($conn, $sql)) {
    echo "Update successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
