<?php
require 'install.php';
if(isset($_POST['atualizar'])){
   
    $id = $_POST['id'];    
    
    
    $stmt = $connection->prepare("SELECT * FROM cadastro where id= :id");
    $stmt->bindValue(':id', $id);
    if($stmt->execute()){
       
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);              
    }
    
}