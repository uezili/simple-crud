<?php
// conexão
$connection = new mysqli('localhost', 'root','','cadastro');

// insert
$sql = "insert into peplo (name, email, birth_date)
                        value ('Ana Paula', 'ana@gmail.com','21122003')";

$connection->query($sql);

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