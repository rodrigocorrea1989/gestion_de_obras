<?php

include("header.php");


include("refuse.php");

$id=htmlentities(addslashes($_GET["id"]));

echo $id;

$sql="DELETE FROM usuarios WHERE id = '$id' ";

$eliminar=mysqli_query($miconexion,$sql);

header("location:allUsers.php");

include("footer.php");

?>