<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <title>AutoApp | Formulario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="assets/css/mi_estilo.css">   
         
    </head>

    <body class="hold-transition layout-fixed bg-dark p-4 text-center ">
        <section class="container-fluid bg-light p-3 mb-3 rounded ">
            <img src="assets\img\logo_car.png" class="img-fluid mb-4 p-1">
            
            <h2>¡Registros de Mantenimientos!</h2>
            <hr>
            <h5>Usted ha ingresado a la nueva aplicación de mantenimiento para su auto.</h5><br>
            <p>Para continuar con el proceso de registro de clic en <b class="warning"> Formulario</b>.<br><br>
                Oh si ya ha completado la instalación y registro puedo continuar en el botón
                 <b class="success"> Refrescar</b>.</p>
                          
                   <div > 
                    <table id="userTable" class="table table-bordered">
                        <thead>
                        <tr>
                        <th >Fecha</th>
                        <th >Nombre Taller</th>
                        <th >Costos</th>
                        <th >Kilometraje</th>
                        <th >Mantenimiento</th>
                        <th >Observaciones</th>
                          </tr>
                        </thead>
                        <tbody></tbody>
                        </table>
                        
              
                    </div>
                  
                <div class="container-fluid" >
                    <a href="form.php"  ><button class="btn btn-warning button"  name ="formulario" value="instalacion">Formulario</button></a>
                    <button class="btn btn-warning button"  id = "refrescar" name ="refrescar" value="aplicacion" >Refrescar</button>
                  
                </div>

        </section>
        
    </body>
    <script src="assets/js/myscript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <section>
        <footer class=" container text-sm-center text-warning">
            <strong>Copyright &copy; 2022 CGV</a></strong>
            <br> 
            Todos los derechos reservados.<br>
            <b>Version</b> 4.0
            </div>
        </footer>
    </section>

    

</html>