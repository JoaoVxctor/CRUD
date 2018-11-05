<?php

require 'install.php';


if (isset($_POST['submit'])) {
    $connection = new PDO($dsn, $username, $password, $options);
   
    
   
    
    $cadastro = array(
        "razaoSocial" => $_POST['razaoSocial'],
        "nomeFantasia"  => $_POST['nomeFantasia'],
        "cnpj" => $_POST['cnpj'],
        "email"     => $_POST['email'],
        "endereco" => $_POST['endereco'],
        "cidade"     => $_POST['cidade'],
        "estado"  => $_POST['estado'],
        "telefone"  => $_POST['telefone'],
        "dataDeCadastro"  => $_POST['dataCadastro'],
        "estado"  => $_POST['estado'],
        "categoria"  => $_POST['categoria'],
        "agencia"  => $_POST['agencia'],
        "conta"  => $_POST['conta'],
        "status" => $_POST['status']
    );
    
    $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "cadastro",
            implode(", ", array_keys($cadastro)),
            ":" . implode(", :", array_keys($cadastro))
    );
    
    $statement = $connection->prepare($sql);
    $statement->execute($cadastro);
    echo "<div class='alert alert-success alert-dismissible fade show text-center fixed-bottom w-25 "
          ." ml-auto ' id='createAlert' role='alert' tabindex='2'>".
          "<strong>O estabelecimento foi cadastrado com sucesso.</strong>".
          "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>".
          "<span aria-hidden='true'>&times;</span>".
          "</button>".
          "</div>";
          
   //header('location:'.$index."#cadastro");
    
 
    
    
}
