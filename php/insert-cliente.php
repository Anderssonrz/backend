<?php
require_once("conexao.php");

print_r($_REQUEST);
$request = (object) $_REQUEST;

try{
    $stmt = $conn->prepare("INSERT INTO cliente (nome, email) VALUES (?,?)") ;
    $stmt->execute([$request->nome,$request->email]); 
    
    // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $jsan = json_encode($results);
    // print($jsan);

} catch(PDOexception $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>