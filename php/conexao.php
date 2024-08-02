<?php

 $dbHost = 'Localhost';
 $dbUsername = 'root';
 $dbPassword = '';
 $dbName = 'tse';

 $conecta = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

 $sql = mysqli_query($conecta, "SELECT * FROM cadastro");

 echo "Existem " .mysqli_num_rows($sql). " resgistros.";

?>
