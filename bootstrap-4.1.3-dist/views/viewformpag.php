<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../cssforviews/estilo.css" rel="stylesheet">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title></title>

  </head>
  <body>
  <div class="container">
      
    <div class="page-header">
        <h1>Formulario de cadastro</h1>
     </div>
        <div class="row">
            <div class="col-sm-8">
                <h3>Cadastre-se</h3>
                    <form method="POST" action="../controller/formcontroller.php">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input  name="_nome" type="text" id="nome" maxlength=10 placeholder="informe seu nome" class="form-control"> 
                        </div>

                        <div class="form-group">
                            <label for="sobrenome">Sobrenome</label>
                            <input  name="_sobrenome" type="text" id="sobrenome" maxlength=10 placeholder="informe seu sobrenome" class="form-control"> 
                        </div>

                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input  name="_cpf" type="text" id="cpf" maxlength=11 placeholder="informe seu cpf" class="form-control"> 
                        </div>

                        <div class="form-group">
                            <label for="salario">Salario</label>
                            <input  name="_salario" type="text" id="salario" minlength=3 placeholder="informe seu salario" class="form-control"> 
                        </div>

                        <div class="form-group">
                            <label for="ttrabalho">Tempo de trabalho</label>
                            <input  name="_ttrabalho" type="text" id="ttrabalho" maxlength=2 placeholder="informe seu tempo de trabalho" class="form-control"> 
                        </div>

                        <div class="form-group">
                            <label for="filhos">Quantidade de filhos</label>
                            <input  name="_filhos" type="text" id="filhos" maxlength=2 placeholder="informe sua quantidade de filhos" class="form-control"> 
                        </div>


                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input name="_email" type="email" id="email" placeholder="informe seu e-mail" class="form-control"> 
                        </div>

                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input name="_senha" type="password" id="senha" placeholder="informe sua senha" class="form-control"> 
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Aceito os termos de servico.
                            </label>
                        </div>    

                        <div class="radio">
                            <label>
                                <input type="radio" name="opcao">PHP
                            </label>
                            <label>
                                <input type="radio" name="opcao">C#
                            </label>
                        </div>   
                         <button type="submit" class="btn btn-default">Cadastrar</button>    

                    </form>
                        </div>   
                        <div class="col-sm-4">
                            <h3>Logar<h3>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="_email" placeholder="Digite seu e-mail">
                                    </div>

                                    <div>
                                        <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
                                    </div>

                                     

                                        <button type="submit" class="btn btn-primary">Logar</button>

                
    </div>

   
  </body>
</html>