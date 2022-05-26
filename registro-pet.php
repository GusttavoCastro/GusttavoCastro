<?php

include("conexao.php");

$nomePet = $_POST["nomepet"];
$corPet = $_POST["corpet"];
$endereco = $_POST["endereco"];
$especie = $_POST["especie"];

$sql = "INSERT INTO registropet (nomepet, corpet, endereco, especie) VALUES ('$nomePet', '$corPet', '$endereco', '$especie')";

if (mysqli_query($connect, $sql)) {
       echo "New record create successfully";
} else {
      echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}
header ('Location: registro-pet.html');
mysqli_close($connect);

?>
