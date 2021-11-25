<?php

include("header.php");


include("refuse.php");

$id=htmlentities(addslashes($_GET["id"]));

echo $id;

$sql="DELETE FROM Obras WHERE id = '$id' ";

$eliminar=mysqli_query($miconexion,$sql);

header("location:verObras.php");

include("footer.php");

?>