<?php
$link = mysqli_connect("localhost:3306","root", "","projetoweb");

if(!$link){
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
     echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
     exit;
}else{
echo "Sucesso: Sucesso ao connectar-se com a base de dados MySQL.". PHP_EOL;
}

$id = 5;
$nome = "Rodrigo Luiz";
$endereco = "R. Sonho Gaucho";
$bairro = "jardizinho";
$cep = "0215654658";

$sql = "INSERT INTO agendamentos (id, nome, endereco, bairro, cep) VALUES (?,?,?,?,?)";
$link->prepare($sql)->execute([$id, $nome, $endereco, $bairro, $cep]);

$stmt = $link->query("SELECT * FROM agendamentos");
while($row = $stmt->fetch_assoc()){
    echo $row['id']."<br/>\n";
    echo $row['nome']."<br/>\n";
    echo $row['endereco']."<br/>\n";
    echo $row['bairro']."<br/>\n";
    echo $row['cep']."<br/>\n";


}

mysqli_close($link);

?>