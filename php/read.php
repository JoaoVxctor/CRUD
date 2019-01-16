<?php



require  'install.php';
    try{
        
    $stmt = $connection->prepare("SELECT * FROM cadastro");

            if($stmt->execute()){
                
                $linha = $stmt->fetchAll(PDO::FETCH_ASSOC);

              

    } else {
        echo "Erro: Não foi possível recuperar os dados do banco de dados";
    }
} catch (PDOException $erro) {
echo "Erro: ".$erro->getMessage();
}
