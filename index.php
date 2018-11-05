<!doctype html>
<html lang="en">
  <head>
    <?php
    require_once 'php/gathering.php'; 
    ?><meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
   
    <title>CRUD </title>
  </head>
  <body data-spy="scroll" data-target="#grad">
    
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark border-bottom wd-auto" id="grad">

        <a class="navbar-brand h1 my-1" href="#">CRUD </a>
          
              <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">            
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarSite">
                  
                  <ul class="navbar-nav ml-2">

                      <li class="nav-item ml-5">
                        
                        <a class="nav-link" href="#cadastro">Cadastro</a>

                      </li>

                      <li class="nav-item ml-5">
                        
                          <a class="nav-link" href="#consulta">Consulta</a>
          
                        </li>

                        <li class="nav-item ml-5">
                        
                            <a class="nav-link" href="#atualizacao">Atualização</a>
            
                          </li>

                          <li class="nav-item ml-5">
                        
                              <a class="nav-link" href="#consulta">Exclusão</a>
              
                            </li>
                  </ul>
            </div>
    </nav>

    
      
      <div class="container mb-5 text-center">

        <div class=" my-4  text-secondary  ">
          
          <h1 class="display-4">Sistema basico  CRUD  </h1>
          <h6>Cadastro, Consulta, Alteração e Exclusão</h6>

        </div>
       
       
      </div>

      <div class="container border rounded p-4 my-4 " id="cadastro">
        <h2 class="bold text-secondary mb-2">Cadastro</h1>
            <form method="post">
             <div class="row "  class="border border-secondary">
            
                <div class="col-6">
                  <input type="text" class="form-control my-3" id="razaoSocial" name="razaoSocial" placeholder="Razão Social" required/>
                  <input type="text" class="form-control my-3" id="cnpj" name="cnpj" placeholder="CNPJ" required/>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control my-3" id="nomeFantasia" name="nomeFantasia" placeholder="Nome Fantasia">
                    <input type="email" class="form-control my-3" id="email" name="email" placeholder="E-mail" >
                </div>
                <div class="col-12">
                    <input type="text" class="form-control my-1" id="endereco" name="endereco" placeholder="Endereço" > 
                  </div>
                  <div class="col-6">
                      
                      <input type="text" class="form-control my-3" id="nomeFantasia" name="cidade" placeholder="Cidade">
                      <input type="text" class="form-control my-3" id="telefone" name="telefone" name="telefone" placeholder="Telefone">

                      <select  class="form-control my-3" id="categoria" name="categoria" name="categoria"  required>
                        <option hidden selected> Categoria</option>
                        <option value="Supermercado">Supermercado</option>
                        <option value="Restaurante">Restaurante</option>
                        <option value="Borracharia">Borracharia</option>
                        <option value="Posto">Posto</option>
                        <option value="Oficina">Oficina</option>
                      </select>

                      <div class="row my-2">
                        <div class="col-6">
                          <input type="text" class="form-control " id="agencia" name="agencia" placeholder="Agência">
                        </div> 
                        <div class="col-6">
                          <input type="text" class="form-control " id="conta" name="conta" placeholder="Conta">
                        </div> 
                      </div>
                  </div>
                    <div class="col-6 text-secondary">
                        <select  class="form-control my-3" id="estado" name="estado" placeholder="Estado" required>
                            <option selected hidden>Estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                        <input type="text" class="form-control my-3" id="dataCadastro" name="dataCadastro" placeholder="Data de Cadastro">
                        
                        <select class="form-control my-3" id="status" name="status">
                          <option hidden>Status</option>
                          <option value="Ativo">Ativo</option>
                          <option value="Inativo">Inativo</option>
                        </select>
                            
                        <button class="btn btn-danger float-right " name="submit" value="Submit">Cadastrar</button>  
                        </div>
                        
                        </form>
             </div>
             
            </div>
            
      </div>
     
      
      <div class="container border rounded p-4 my-4 " id="consulta">
          <h2 class="bold text-secondary mb-3">Consulta</h1>
          
              <?php require_once 'php/exclude.php'; ?>
     
               <div class="row"  class="border border-primary">
               
               <?php include 'php/read.php';
                     
                     foreach( $linha as $rs) :?>
           
                 <div class='col-6'>
                     <ul class='list-group mb-2'>
                          <li class='list-group-item'>
                            <div class='row p-2'>
                            <form  method='POST'  >
                              
                              <div class='col-12 p-1 '>Nome Fantasia : <?php echo $rs['nomeFantasia']; ?> </div>
                              <div class='col-12 p-1'>Categoria : <?php echo $rs['categoria']; ?> </div>
                              <div class='col-12 p-1'>CNPJ : <?php echo $rs['cnpj']; ?> </div>
                              <div class='col-12 p-1'>E-mail : <?php echo $rs['email']; ?> </div>
                              <div class='col-12 p-1'><input type='text' class=" d-none" name='id' id='id' value="<?php echo $rs['id']; ?>"></div>
                            </div>
                            <div class='row float-right'>
                              <button class="btn btn-danger float-right mx-2"  name="excluir" id="excluir" > Excluir</button>
                              </form>
                              <form method="POST" id="att">
                             <button class='btn btn-secondary float-right text-white mx-2 ' id="atualizar" name='atualizar'> Editar</button>
                             <input type='text' class=" d-none" name='id' id='id' value="<?php echo $rs['id']; ?>">
                             </form>
                              
                              </div>
                          </li>
                        </ul>
                      </div>
                    <?php endforeach;?>
              </div>

            </div>
        </div>    
    
    
    
    
    
      </div>
      <div id="phpMessage" class ="d-none">
        <?php require 'php/readUpdate.php';
        if (isset ($r)){ $result = ""; }
        foreach ($r as $result): ?>
        </div>
       <div class="container border rounded p-4 my-4   " id="atualizacao">
        <h2 class="bold text-secondary mb-2">Atualizacao de dados.</h1>
        
        <form method="post">
             <div class="row " id="content" class="border border-secondary d-none">
                  <div class="col-12 p-1"><input type="text" class=" d-none" name="id" id="id" value="<?php echo $result['id'] ; ?>" ></div>
                <div class="col-6">
                  <input type="text" class="form-control my-3" id="razaoSocial" name="razaoSocial" placeholder="Razão Social"  value="<?php echo $result['razaoSocial'] ; ?>" required/>
                  <input type="text" class="form-control my-3" id="cnpj" name="cnpj" placeholder="CNPJ" value="<?php echo $result['cnpj'] ; ?>" required/>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control my-3" id="nomeFantasia" name="nomeFantasia" placeholder="Nome Fantasia" value="<?php echo $result['nomeFantasia'] ; ?>">
                    <input type="email" class="form-control my-3" id="email" name="email" placeholder="E-mail"value="<?php echo $result['email'] ; ?>" >
                </div>
                <div class="col-12">
                    <input type="text" class="form-control my-1" id="endereco" name="endereco" placeholder="Endereço" value="<?php echo $result['endereco'] ; ?>" > 
                  </div>
                  <div class="col-6">
                      
                      <input type="text" class="form-control my-3" id="nomeFantasia" name="cidade"  placeholder="Cidade" value="<?php echo $result['cidade'] ; ?>">
                      <input type="text" class="form-control my-3" id="telefone" name="telefone" name="telefone" placeholder="Telefone" value="<?php echo $result['telefone'] ; ?>">

                      <select  class="form-control my-3" id="categoria" name="categoria" name="categoria"  required>
                        <option hidden > Categoria</option>
                        <option value="Supermercado" <?php echo $result['categoria']=="Supermercado" ? "selected" : '' ?>>Supermercado</option>
                        <option value="Restaurante" <?php echo $result['categoria']=="Restaurante" ? "selected" : '' ?>>Restaurante</option>
                        <option value="Borracharia" <?php echo $result['categoria']=="Borracharia" ? "selected" : '' ?>>Borracharia</option>
                        <option value="Posto" <?php echo $result['categoria']=="Posto" ? "selected" : '' ?>>Posto</option>
                        <option value="Oficina" <?php echo $result['categoria']=="Oficina" ? "selected" : '' ?>>Oficina</option>
                      </select>

                      <div class="row my-2">
                        <div class="col-6">
                          <input type="text" class="form-control " id="agencia" name="agencia" placeholder="Agência" value="<?php echo $result['agencia'] ; ?>">
                        </div> 
                        <div class="col-6">
                          <input type="text" class="form-control " id="conta" name="conta" placeholder="Conta" value="<?php echo $result['conta'] ; ?>">
                        </div> 
                      </div>
                  </div>
                    <div class="col-6 text-secondary">
                        <select  class="form-control my-3" id="estado" name="estado" placeholder="Estado" required>
                            <option hidden> Estado </option>
                            <option value="AC" <?php echo $result['estado']=="AC" ? 'selected="selected"'  :  ""  ;?> >Acre</option>
                            <option value="AL" <?php echo $result['estado']=="AL" ?  'selected="selected"' :  ""  ;?>>Alagoas</option>
                            <option value="AP" <?php echo $result['estado']=="AB" ?  'selected="selected"' :  ""  ;?>>Amapá</option>
                            <option value="AM" <?php echo $result['estado']=="AM" ?  'selected="selected"' :  ""  ;?>>Amazonas</option>
                            <option value="BA" <?php echo $result['estado']=="BA" ?  'selected="selected"' :  ""  ;?>>Bahia</option>
                            <option value="CE" <?php echo $result['estado']=="CE" ?  'selected="selected"' :  ""  ;?>>Ceará</option>
                            <option value="DF" <?php echo $result['estado']=="DF" ?  'selected="selected"' :  ""  ;?>>Distrito Federal</option>
                            <option value="ES" <?php echo $result['estado']=="ES" ?  'selected="selected"' :  ""  ;?>>Espírito Santo</option>
                            <option value="GO" <?php echo $result['estado']=="GO" ?  'selected="selected"' :  ""  ;?>>Goiás</option>
                            <option value="MA" <?php echo $result['estado']=="MA" ?  'selected="selected"' :  ""  ;?>>Maranhão</option>
                            <option value="MT" <?php echo $result['estado']=="MT" ?  'selected="selected"' :  ""  ;?>>Mato Grosso</option>
                            <option value="MS" <?php echo $result['estado']=="MS" ?  'selected="selected"' :  ""  ;?>>Mato Grosso do Sul</option>
                            <option value="MG" <?php echo $result['estado']=="MG" ?  'selected="selected"' :  ""  ;?>>Minas Gerais</option>
                            <option value="PA" <?php echo $result['estado']=="PA" ?  'selected="selected"' :  ""  ;?>>Pará</option>
                            <option value="PB" <?php echo $result['estado']=="PB" ?  'selected="selected"' :  ""  ;?>>Paraíba</option>
                            <option value="PR" <?php echo $result['estado']=="PR" ?  'selected="selected"' :  ""  ;?>>Paraná</option>
                            <option value="PE" <?php echo $result['estado']=="PE" ?  'selected="selected"' :  ""  ;?>>Pernambuco</option>
                            <option value="PI" <?php echo $result['estado']=="PI" ?  'selected="selected"' :  ""  ;?>>Piauí</option>
                            <option value="RJ" <?php echo $result['estado']=="RJ" ?  'selected="selected"' :  ""  ;?>>Rio de Janeiro</option>
                            <option value="RN" <?php echo $result['estado']=="RN" ?  'selected="selected"' :  ""  ;?>>Rio Grande do Norte</option>
                            <option value="RS" <?php echo $result['estado']=="RS" ?  'selected="selected"' :  ""  ;?>>Rio Grande do Sul</option>
                            <option value="RO" <?php echo $result['estado']=="RO" ?  'selected="selected"' :  ""  ;?>>Rondônia</option>
                            <option value="RR" <?php echo $result['estado']=="RR" ?  'selected="selected"' :  ""  ;?>>Roraima</option>
                            <option value="SC" <?php echo $result['estado']=="SC" ?  'selected="selected"' :  ""  ;?>>Santa Catarina</option>
                            <option value="SP" <?php echo $result['estado']=="SP" ?  'selected="selected"' :  ""  ;?>>São Paulo</option>
                            <option value="SE" <?php echo $result['estado']=="SE" ?  'selected="selected"' :  ""  ;?>>Sergipe</option>
                            <option value="TO" <?php echo $result['estado']=="TO" ?  'selected="selected"' :  ""  ;?>>Tocantins</option>
                        </select>
                        <input type="text" class="form-control my-3" id="dataCadastro" name="dataCadastro" placeholder="Data de Cadastro" value="<?php echo $result['dataDeCadastro'] ; ?>">
                        
                        <select class="form-control my-3" id="status" name="status">
                          <option hidden>Status</option>
                          <option value="Ativo" <?php echo $result['status']=="Ativo" ?  "selected" :  ""  ;?>>Ativo</option>
                          <option value="Inativo" <?php echo $result['status']=="Inativo" ?  "selected" :  ""  ;?>>Inativo</option>
                        </select>
                            
                        <button class="btn btn-danger float-right mx-2 " name="update" value="update" >Atualizar</button> 
                        <button class="btn btn-secondary float-right mx-2" >Cancelar</button>   
                        </div>
                        
                        </form>                       
                         </div>

               <?php endforeach;?>
            </div>
        </div>


   
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="node_modules/jquery/dist/jquery.mask.js"></script>
    <script src="node_modules/jquery/dist/myscript.js"></script>
  </body>
</html>