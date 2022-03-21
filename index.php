<?php
// conexão
$connection = new mysqli('localhost', 'root','','cadastro');


// read
$sql = "select * from peplo";

$results = $connection->query($sql);

if ($results->num_rows){
    while($peplo = $results->fetch_object()){
        echo "{$peplo->id} - {$peplo->name} <br>";
    }
}else{
    echo "not content";
}