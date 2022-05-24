<?php

$HOSTNAME = "sql102.epizy.com";
$DATABASE = "epiz_31454912_bancao";
$USERNAME = "epiz_31454912";
$PASSWORD = "qMEm43eEaP7L";

if ($CONECTA = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE) ) {
    echo "BANCO CONECTADO!";
}else{
    echo "ERRO: ".mysqli_connect_error();
}
