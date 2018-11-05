<?php
    
    require 'install.php';
    

   
    if (isset($_POST["excluir"])) {
        try {
          
    
          $id = $_POST['id'];
      
          $sql = "DELETE FROM cadastro WHERE id = :id";
      
          $statement = $connection->prepare($sql);
          $statement->bindValue(':id', $id);
          $statement->execute();
         
          echo '<script>window.location.replace(url+"#consulta");</script>';
          echo "<div class='alert alert-success alert-dismissible fade show text-center fixed-bottom w-25 "
          ." ml-auto ' id='excludeAlert' role='alert' tabindex='2'>".
          "<strong>O estabelecimento foi excluido com sucesso.</strong>".
          "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>".
          "<span aria-hidden='true'>&times;</span>".
          "</button>".
          "</div>";
          

        } catch(PDOException $error) {
          echo $sql . "<br>" . $error->getMessage();
        }
      }
      