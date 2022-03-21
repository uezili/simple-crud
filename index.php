<?php
// conexão
$connection = new mysqli('localhost', 'root','','cadastro');

// delete

$sql = "delete from peplo where name = 'Ana Paula'";
$connection->query($sql);

// update
$sql = "update peplo set name = 'Uezili Maciel' where id='1'";
$connection->query($sql);


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