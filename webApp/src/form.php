<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen_CV | FOrmulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">       

</head>
<script src="assets/js/mantenimieto.js"></script>

    <body class="hold-transition layout-fixed bg-dark p-4 text-center fondo"> 

        <section class="container-fluid bg-light p-3 mb-3 rounded fondo">
            <img src="assets\img\logo_car.png" class="img-fluid mb-4 p-1">
            <div>
                <h3>DATOS DEL MANTENIMIENTO</h3>
                <hr>
            </div>
            <div class="mb-3 fondo">

                <form class="container" action="registro.php" method='POST'>
                    <div class="row sm-2">
                        <div class="col-2">
                          <div class="p-3 bg-light"><label class="form-label" for="date">Fecha:</label></div>
                        </div>
                        <div class="col-2">
                          <div class="p-3 bg-light"><input type="date" id="date" name="date" ></div>
                        </div>
                    </div>
                    <div class="row sm-2">
                        <div class="col-2">
                          <div class="p-3 bg-light"><label  class="form-label" for="taller">Nombre del taller : </label></div>
                        </div>
                        <div class="col-2">
                          <div class="p-3 bg-light"><input type="text" id="n_taller" name="n_taller" ></div>
                        </div>
                    </div>
                    <div class="row sm-2">
                        <div class="col-2">
                          <div class="p-3 bg-light"><label class="form-label" for="costos">Costos: </label></div>
                        </div>
                        <div class="col-2">
                          <div class="p-3 bg-light"><input type ="number" id="costos" name="costos"></div>
                        </div>
                    </div>
                    <div class="row sm-2">
                        <div class="col-2">
                          <div class="p-3 bg-light"><label  class="form-label" for="Kilometraje">Kilometraje: </label></div>
                        </div>
                        <div class="col-2">
                          <div class="p-3 bg-light"><input type ="number" id="kilometraje" name="n_kilometros"></div>
                        </div>
                    </div>

                  
              
                    <div class="row sm-2">
                      <div class="col-2">
                          <div class="p-3 bg-light">Seleccionar tipo de mantenimiento:</div>
                      </div>
                      
                      <div class="col-2">
                        <div class="p-3 bg-light"><div>
                          <input type='radio' name='mantenimiento' value='preventivo' id="mantenimiento"  onclick=" mostrar()" /> Preventivo <br><br>
                        <input type='radio' name='mantenimiento' value='correctivo' id="mantenimiento" onclick=" borrar()"  /> correctivo<br><br>
                          </div></div>
                      </div>
                     
                      </div>
                  </div>

                      <div class="row sm-2" id="preventivo_m">
                       
                    
                    
                    
                      </div>                           
                    
                    
                    <div class="row sm-2">
                        <div class="col-2">
                          <div class="p-3 bg-light"><label class="form-label" for="observaciones">Observaciones:</label><br></div>
                        </div>
                        <div class="col-2">
                          <div class="p-3 bg-light"><textarea id="observaciones" name="observaciones" rows="4" cols="50"></textarea></div>
                        </div>
                    </div>
                    <div>                    
                        <input type="submit" id="enviar" class="btn btn-warning button" value="Registrar">
                    </div>
        
                </form>

            </div>
          
        </section>
        
        
            <section>
              <footer class=" container text-sm-center text-warning">
                <strong>Copyright &copy; 2022 CGV</a></strong>
                <br> 
                Todos los derechos reservados.<br>
                <b>Version</b> 4.0
                </div>
              </footer>
            </section>
    
        
    </body>
 

</html>