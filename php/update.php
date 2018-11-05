<?php

require 'install.php';

        
    



if (isset($_POST['update'])) {
    
    try {
        
        $id = $_POST['id'];
        $razaoSocial = $_POST['razaoSocial'];
        $nomeFantasia  = $_POST['nomeFantasia'];
        $cnpj = $_POST['cnpj'];
        $email     = $_POST['email'];
        $endereco = $_POST['endereco'];
        $cidade     = $_POST['cidade'];
        $estado  = $_POST['estado'];
        $telefone  = $_POST['telefone'];
        $dataDeCadastro  = $_POST['dataCadastro'];
        $categoria  = $_POST['categoria'];
        $agencia  = $_POST['agencia'];
        $conta  = $_POST['conta'];
        $status = $_POST['status'];
    
        


        $query = "UPDATE cadastro SET razaoSocial = :razaoSocial,
      nomeFantasia = :nomeFantasia,
      cnpj = :cnpj,
      email = :email,
      endereco = :endereco,
      cidade = :cidade,
      estado = :estado,
      telefone = :telefone,
      dataDeCadastro = :dataDeCadastro,
      categoria = :categoria,
      agencia = :agencia,
      conta = :conta,
      status = :status
      WHERE id =:id";
      
  
    
    
      $stmt = $connection->prepare($query);
      $stmt->bindValue(':razaoSocial', $razaoSocial);
      $stmt->bindValue(':nomeFantasia', $nomeFantasia);
      $stmt->bindValue(':cnpj', $cnpj);
      $stmt->bindValue(':email', $email);
      $stmt->bindValue(':endereco', $endereco);
      $stmt->bindValue(':cidade', $cidade);
      $stmt->bindValue(':estado', $estado);
      $stmt->bindValue(':telefone', $telefone);
      $stmt->bindValue(':dataDeCadastro', $dataDeCadastro);
      $stmt->bindValue(':categoria', $categoria);
      $stmt->bindValue(':agencia', $agencia);
      $stmt->bindValue(':conta', $conta);
      $stmt->bindValue(':status', $status);
      $stmt->bindValue(':id', $id);
      
      
        

      $stmt->execute();
    
     
      echo "<div class='alert alert-success alert-dismissible fade show text-center fixed-bottom w-25 "
      ." ml-auto ' id='updateAlert' role='alert' tabindex='2'>".
      "<strong>O estabelecimento foi atualizado com sucesso.</strong>".
      "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>".
      "<span aria-hidden='true'>&times;</span>".
      "</button>".
      "</div>"; 
  
    
    
}catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  
}
}