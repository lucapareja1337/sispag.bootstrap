<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cumpom Salarial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</head>
<body>
            <div class ="container">
                <h3 class="page-header p-4 text-white">CUPOM SALARIAL</h3>
                <div class="table-responsive">
                    <table class = "table table-striped table-hover">
                        <tbody>

                                <tr>
                                    <th scope ="row">Funcionario</th>
                                    <td><?php echo $_SESSION['Nome'];?></td>
                                </tr>

                                <tr>
                                    <th scope="row">Sobrenome</th>
                                    <td><?php echo $_SESSION['Sobrenome'];?></td>
                                </tr>
                                

                                <tr>
                                    <th scope ="row">CPF</th>
                                    <td><?php echo $_SESSION['CPF'];?></td>
                                </tr>

                                
                                <tr>
                                    <th scope ="row">Tempo de trabalho</th>
                                    <td><?php echo $_SESSION['TempoDeTrabalho'];?></td>
                                </tr>   
                            

                                
                                <tr>
                                    <th scope ="row">Salario</th>
                                    <td><?php echo $_SESSION['Salario'];?></td>
                                </tr>
                                

                                <tr> 
                                    <th scope="row">E-mail</th>
                                    <td><?php echo $_SESSION['Email'];?></td>
                                </tr>
                                


                                <tr>
                                    <th scope="row">Senha</th>
                                    <td><?php echo "Salva" ;?></td>
                                </tr>

                                <tr >
                                    <th scope ="row">Abono</th>
                                    <td><?php echo $_SESSION['abono']; ?></td>
                                </tr>

                                <tr>
                                    <th scope= "row">Reajuste</th>
                                    <td><?php echo $_SESSION['salario_ajustado'];?></td>
                                </tr>

                                <tr>
                                    <th scope = "row">Salario Familia</th>
                                    <td><?php echo $_SESSION['salario_familia'];?></td>    
                                </tr>

                                <tr>
                                    <th scope =>INSS</th>
                                    <td><?php echo $_SESSION['inss']; ?></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    <?php
        session_destroy();
    ?>
    
</body>
</html>