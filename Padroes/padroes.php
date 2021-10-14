
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
                    <li class="navbar-item ">
                        <a href="../Medico/medico.php"> Médico</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Convenio/Convenio.php"> Convênio</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Especialidade/especialidade.php"> Especialidade</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Procedimentos/procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="padroes.php"> Padrões</a>
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
                        <a href="../Convenio/Convenio.php"> Convênio</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Especialidade/especialidade.php"> Especialidade</a>
                    </li>
                    <li class="navbar-item">
                        <a href="../Procedimentos/procedimentos.php"> Procedimento</a>
                    </li>
                    <li class="navbar-item">
                        <a href="padroes.php"> Padrões</a>
                    </li>
            </ul>
        </div>
    </nav>
        
    <form action="cadastro.php" method="post">
        <fieldset class="margin-border">
           
            <h4 class="title">Cadastro de padrões - COM CRUD</h4>
            <hr>
            
        <table class="flex">  
            <tr >    
                <td>
                    <label  for="dataCadastroPadrao">Data: </label>
                    
                    <input type="date" required="required"  name="dataCadastroPadrao" id="dataCadastroPadrao" placeholder="dd/mm/aaaa">
                </td>   
            </tr>
        </table>  
        <table>  
            <tr>
                <td>    
                    <label for="tempoPadrao">Tempo médio de consulta: </label>
                    <input type="time" required="required" name="tempoPadrao" id="tempoPadrao">
                </td>
            </tr> 
            <tr>
                <td> 
                    <label for="inicioPadrao">Inicial: </label>
                    <input type="time" required="required" name="inicioPadrao" id="inicioPadrao">
                </td>
                <td> 
                    <label for="finalPadrao">Final: </label>
                    <input type="time" required="required" name="finalPadrao" id="finalPadrao">
               
                </td>
                    
            </tr>   
       
                    
            <tr>
                <td>
                    <label>Dias de funcionamento:</label>
                </td>
                 
            </tr>
        </table> 
        <table>         
            <tr>
                <td>
               
                    
                        <label for="Segunda">Segunda:</label>
                        <input type="checkbox" class="filled-in" style="position:relative; left:1px; opacity:1;" id="Segunda" value="Segunda"name="checkValores[]">
                    
                </td>
                <td>
                
                        <label for="Terca">Terça:<label>
                        <input type="checkbox" class="filled-in" style="position:relative; left:1px; opacity:1;" id="Terca"value="Terça"name="checkValores[]">
             
                </td>   
                <td>
                
                        <label for="Quarta">Quarta:</label>
                        <input type="checkbox" class="filled-in" style="position:relative; left:1px; opacity:1;" id="Quarta" value="Quarta"name="checkValores[]">
                  
                </td> 
                <td>
                   
                        <label for="Quinta">Quinta:</label>
                        <input type="checkbox" class="filled-in" style="position:relative; left:1px; opacity:1;" id="Quinta" value="Quinta"name="checkValores[]">
                    
                </td> 
                <td>
                   
                        <label for="Sexta">Sexta:</label>
                        <input type="checkbox" class="filled-in" style="position:relative; left:1px; opacity:1;" id="Sexta"value="Sexta"name="checkValores[]">
                 
                </td> 
                <td>
                    
                 
                        <label for="Sabado">Sábado:</label>
                        <input type="checkbox" class="filled-in" style="position:relative; left:1px; opacity:1;" id="Sabado"value="Sábado"name="checkValores[]">
                  
                </td> 
                <td>
                
                        <label for="Domingo">Domingo:</label>
                        <input type="checkbox" class="filled-in" style="position:relative; left:1px; opacity:1;" id="Domingo" value="Domingo"name="checkValores[]">
                  
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