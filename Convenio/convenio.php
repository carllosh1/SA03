<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
    <link rel="stylesheet" href="../style.css">
    <title>Clínica XYZ</title>
    
</head>
<body>
   
    <nav>
        <div class="nav-wrapper deep-orange accent-1">
            <a href="../index.php" class="brand-logo">Clínica XYZ</a>
            <a href="../index.php" data-activates="menu-mobile" class="button-collapse">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li class="navbar-item ">
                        <a href="../index.php">Home</a>
                </li>
                    <li class="navbar-item">
                        <a href="../Paciente/paciente.php"> Paciente</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Medico/medico.php"> Médico</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="Convenio.php"> Convênio</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Especialidade/especialidade.php"> Especialidade</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Procedimentos/procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Padroes/padroes.php"> Padrões</a>
                    </li>
            </ul>
            <ul class="side-nav" id="menu-mobile">
                    <li class="navbar-item active">
                        <a href="../index.php">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Paciente/paciente.php"> Paciente</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Medico/medico.php"> Médico</a>
                    </li>
                    <li class="navbar-item">
                        <a href="convenio.php"> Convênio</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Especialidade/especialidade.php"> Especialidade</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Procedimentos/procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Padroes/padroes.php"> Padrões</a>
                    </li>
            </ul>
        </div>
    </nav>
    <form action="registro.php" method="post">
        <fieldset class="margin-border">
           
            <h4 class="title">Cadastro de Convênio - COM CRUD</h4>
            <hr>
            
        <table class="flex">  
            <tr>
                <td>
                    <label  for="dataCadastroConvenio">Data: </label>
                    
                    <input type="date" required="required" required="required" name="dataCadastroConvenio" id="dataCadastroConvenio" placeholder="dd/mm/aaaa">
                </td>  
                  
            </tr>
            </table>
         <table>
            <tr>
                <td>    
                    <label for="nomeFantasiaConvenio">Nome Fantasia: </label>
                    <input type="text" required="required" name="nomeFantasiaConvenio" id="nomeFantasiaConvenio" placeholder="Nome fatansia">
                </td>
                <td>  
                    <label for="CNPJConvenio">CNPJ: </label>
                    <input type="text" required="required" name="CNPJConvenio" id="CNPJConvenio" minlength="14" maxlength="14" placeholder="111111111111111">

                </td>
                    
            </tr>   
        </table>
        <table>
       
            <tr>
                <td>
                    <label for="nomeEmpresaConvenio">Nome da Empresa</label>
                    <input type="text" required="required" name="nomeEmpresaConvenio" id="nomeEmpresaConvenio" placeholder="Nome da Empresa">
                </td>
                <td>
                    <label for="emailConvenio">E-mail:</label>
                    <input type="email" name="emailConvenio" id="emailConvenio" placeholder="email@email.com">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nomeContratoConvenio">Nome do Contrato:</label>
                    <input type="text" required="required" name="nomeContratoConvenio" id="nomeContratoConvenio" placeholder="Nome do contrato">
                </td>
               
                <td>
                    <label for="homePageConvenio">Home Page Convenio</label>
                    <input type="url" required="required" name="homePageConvenio" id="homePageConvenio" placeholder="https://www.homepage.com.br">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="telefone1Convenio">Telefone 1</label>
                    <input type="tel" required="required" name="telefone1Convenio" id="telefone1Convenio" placeholder="(dd)9xxxx-xxxx">
                </td>

                <td>
                    <label for="telefone2Convenio">Telefone 2</label>
                    <input type="tel" required="required" name="telefone2Convenio" id="telefone2Convenio" placeholder="(dd)9xxxx-xxxx">
                </td>
            </tr>
        </table>      
               
            
                    
            <div class="row">
                <div class="col s4"> 
                    <button class="btn waves-effect waves-light" type="submit" name="save">Salvar
                        <i class="material-icons right">save</i>
                    </button>
                </div>
                <div class="col s4">
                    <button class="btn waves-effect grey darken-3" type="reset" name="delete">limpar
                        <i class="material-icons right">delete_sweep</i>
                    </button>

                </div>
                <div class="col s4">
                    <a href="index.php" class="btn waves-effect green accent-4">
                        Editar
                        <i class="material-icons right">edit</i>
                     </button>   
                    </a>
                </div>

            </div>

           
        </fieldset>
        

</form>




    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script>
        $(function(){
        $(".button-collapse").sideNav();
        });
    </script>
    </body>
</html>