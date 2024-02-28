

<?php
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['count'] = $_POST['count'];
    $_SESSION['area'] = $_POST['area'];

    // Redireccionar al siguiente paso
    header("Location: paso2.php");



    $imagen1_nombre = $_FILES['imagen1']['name'];
    $imagen2_nombre = $_FILES['imagen2']['name'];

    $_SESSION['imagen1'] = $imagen1_nombre;
    $_SESSION['imagen2'] = $imagen2_nombre;

    // Mover las imágenes al directorio de destino
    $targetDir = "uploads/";
    // move_uploaded_file($_FILES['imagen1']['tmp_name'], $targetDir . $imagen1_nombre);
    move_uploaded_file($_FILES['imagen2']['tmp_name'], $targetDir . $imagen2_nombre);






    if(!is_dir("uploads")){
        mkdir("uploads",0777);
    }
    
    // move_uploaded_file($_FILES['imagen1']['tmp_name'],'uploads/'.$imagen1_nombre);
    
    move_uploaded_file($_FILES['imagen2']['tmp_name'],'uploads/'.$imagen2_nombre);
   








    // Redireccionar al siguiente paso o al finalizar el formulario
    header("Location: paso3.php");







    exit();
}



?>






<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulario Multi-Pasos :: Ing. Urian Viera</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <div class="top-content">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	

                        <form  role="form" method="post" class="f1"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  enctype="multipart/form-data">

                        <h3>Registrar Nuevo Inmueble</h3>
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Paso 1</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>Paso 2</p>
                    			</div>


                                <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Paso 3</p>
                    			</div>



                                <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>Paso 4</p>
                    			</div>

                                <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>Paso 5</p>
                    			</div>



                                <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>Paso 6</p>
                    			</div>



                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                    				<p>Fin</p>
                    			</div>
                    		</div>
                    		
                            <!--paso 1 -->
                            <fieldset>
                                <br>
                    			<!-- <div class="form-group">

                                
                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="name" placeholder="Propietario" class="f1-first-name form-control" id="f1-first-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">count</label>
                                    <input type="text" name="count" placeholder="Ubicación del Inmueble" class="f1-last-name form-control" id="f1-last-name">
                                </div>
                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="area" placeholder="Ubicación del Inmueble" class="f1-last-name form-control" id="f1-last-name">
                                </div> -->

                                <br>


<h2>ingrese e 3 a 5 posibles nombres</h2>

<div class="form-group">

    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
    <input type="text" name="personauno" placeholder="persona 1" class="f1-first-name form-control" id="f1-first-name" required>
</div>
<div class="form-group">
    <label class="sr-only" for="f1-last-name">count</label>
    <input  required type="text" name="personados" placeholder="persona 2" class="f1-last-name form-control" id="f1-last-name">
</div>
<div class="form-group">
<label class="sr-only" for="f1-last-name">area</label>
    <input type="text"  required  name="personatres" placeholder="persona 3" class="f1-last-name form-control" id="f1-last-name">
</div>

<div class="form-group">
<label class="sr-only" for="f1-last-name">area</label>
    <input type="text" name="personacuatro" placeholder="persona 4" class="f1-last-name form-control" id="f1-last-name" >
</div>



<div class="form-group">
<label class="sr-only" for="f1-last-name">area</label>
    <input type="text" name="personacinco" placeholder="persona 5" class="f1-last-name form-control" id="f1-last-name" >
</div>


                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Siguiente</button>
                                </div>
                            </fieldset>
                            <!--fin del paso 1 -->

                                            <!---paso 2 -->
                                            <fieldset>
                             
                             <div class="form-group">

                            
                             <label for="opcion1" class="" for="f1-email">EIRL</label>
                             <input type="radio" id="opcion1" name="tipo" value="eirl" class="f1-email form-control" required>



                            
                             </div>

                             <div class="form-group">

                            
<label for="opcion1" class="" for="f1-email">SRC</label>
<input type="radio" id="opcion1" name="tipo" value="src" class="f1-email form-control" >




</div>


<div class="form-group">

                            
<label for="opcion1" class="" for="f1-email">SAC</label>
<input type="radio" id="opcion1" name="tipo" value="sac" class="f1-email form-control" >




</div>



<div class="form-group">

                            
<label for="opcion1" class="" for="f1-email">SACS</label>
<input type="radio" id="opcion1" name="tipo" value="sacs" class="f1-email form-control" checked >




</div>
                            
                             <div class="f1-buttons">
                                 <button type="button" class="btn btn-previous">Atrás</button>
                                 <button type="button" class="btn btn-next">Siguiente</button>
                             </div>
                         </fieldset>
                         <!--fin del paso 2 -->





<!---paso 3 -->
<fieldset>
                             
<div class="form-group">
                                 <label class="sr-only" for="f1-last-name">count</label>
                                 <input  required type="text" name="actividades" placeholder="actividades de tu empresa" class="f1-last-name form-control" id="f1-last-name">
                             </div>





                             <div class="form-group">
                            <textarea required  name="describir" id="" cols="30" rows="10" placeholder="Describir actividades" class="f1-last-name form-control"></textarea>
                            </div>

                            
                             <div class="f1-buttons">
                                 <button type="button" class="btn btn-previous">Atrás</button>
                                 <button type="button" class="btn btn-next">Siguiente</button>
                             </div>
                         </fieldset>
                         <!--fin del paso 3 -->













 <!---paso 4 -->
 <fieldset>
                                
        <div class="eres">
        <div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">si soy socio</label>
<input type="radio" id="opcion1" name="socio" value="si" class="f1-email form-control" checked>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">no soy socio</label>
<input type="radio" id="opcion1" name="socio" value="no" class="f1-email form-control"  >




</div>

        </div>                       



        <div class="persona1">

<!--datos necesario-->

<div class="general">

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona1nombre" placeholder="nombre de la persona 1" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>




                                <div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona1apellido" placeholder="apellido de la persona 1" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>




                                <div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona1correo" placeholder="correo de la persona 1" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>


</div>





        <!--  select-->                        

        <div class="form-group">

<label class="" for="f1-first-name">Que cargo tendra en la empresa</label>



<select id="opciones" name="cargo1" required class="f1-first-name form-control select">
   
    <option value="gerente general">gerente general</option>
    <option value="subgerente">subgerente</option>
    <option value="sin cargo">sin cargo</option>
  </select>





</div>


<!--tipo documento-->

<div class="tipo">

<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">DNI</label>
<input type="radio" id="opcion1" name="documento1" value="dni" class="f1-email form-control" checked>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PASS</label>
<input type="radio" id="opcion1" name="documento1" value="pass" class="f1-email form-control"  >




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">CE</label>
<input type="radio" id="opcion1" name="documento1" value="ce" class="f1-email form-control" >




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PTP</label>
<input type="radio" id="opcion1" name="documento1" value="ptp" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">RUC</label>
<input type="radio" id="opcion1" name="documento1" value="ruc" class="f1-email form-control" >




</div>




</div>




<!--numero documento-->

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="numero1" placeholder="numero de documento de la persona1" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>


<!--  estado civil -->


<div class="civil">


<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">soltero(a)</label>
<input type="radio" id="opcion1" name="civil1" value="soltero" class="f1-email form-control"  checked>




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">casado(a)</label>
<input type="radio" id="opcion1" name="civil1" value="casado" class="f1-email form-control" data-casado>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">viudo(a)</label>
<input type="radio" id="opcion1" name="civil1" value="viudo" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">divorciado(a)</label>
<input type="radio" id="opcion1" name="civil1" value="divorceado" class="f1-email form-control" >




</div>



</div>


<!--  si eres casado -->

<div class="visible">
<div class="separacion">

<p>cuentas con separcion de bienes</p>
<div class="respuesta">
<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">si</label>
<input type="radio" id="opcion1" name="bienes1" value="si" class="f1-email form-control"  checked>




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">no</label>
<input type="radio" id="opcion1" name="bienes1" value="no" class="f1-email form-control" >




</div>
</div>

</div>

<div class="conyugue">
    <p>datos de tu conyugue</p>


    <div class="tipo">

<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">DNI</label>
<input type="radio" id="opcion1" name="conyugued1" value="dni" class="f1-email form-control" checked>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PASS</label>
<input type="radio" id="opcion1" name="conyugued1" value="pass" class="f1-email form-control"  >




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">CE</label>
<input type="radio" id="opcion1" name="conyugued1" value="ce" class="f1-email form-control" >




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PTP</label>
<input type="radio" id="opcion1" name="conyugued1" value="ptp" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">RUC</label>
<input type="radio" id="opcion1" name="conyugued1" value="ruc" class="f1-email form-control" >




</div>




</div>




<!--numero documento-->

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="conyuguen1" placeholder="numero de documento de la conyugue" class="f1-first-name form-control" id="f1-first-name" >
                                </div>









</div>


</div>
































        </div>








<hr>



        <div class="persona2">

<!--datos necesario-->

<div class="general">

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona2nombre" placeholder="nombre de la persona 2" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>




                                <div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona2apellido" placeholder="apellido de la persona 2" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>




                                <div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona2correo" placeholder="correo de la persona 2" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>


</div>





        <!--  select-->                        

        <div class="form-group">

<label class="" for="f1-first-name">Que cargo tendra en la empresa</label>



<select id="opciones" name="cargo2" required class="f1-first-name form-control select">
   
    <option value="gerente general">gerente general</option>
    <option value="subgerente">subgerente</option>
    <option value="sin cargo">sin cargo</option>
  </select>





</div>


<!--tipo documento-->

<div class="tipo">

<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">DNI</label>
<input type="radio" id="opcion1" name="documento2" value="dni" class="f1-email form-control" checked>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PASS</label>
<input type="radio" id="opcion1" name="documento2" value="pass" class="f1-email form-control"  >




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">CE</label>
<input type="radio" id="opcion1" name="documento2" value="ce" class="f1-email form-control" >




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PTP</label>
<input type="radio" id="opcion1" name="documento2" value="ptp" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">RUC</label>
<input type="radio" id="opcion1" name="documento2" value="ruc" class="f1-email form-control" >




</div>




</div>




<!--numero documento-->

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="numero2" placeholder="numero de documento de la persona2" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>


<!--  estado civil -->


<div class="civil">


<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">soltero(a)</label>
<input type="radio" id="opcion2" name="civil2" value="soltero" class="f1-email form-control"  checked>




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">casado(a)</label>
<input type="radio" id="opcion2" name="civil2" value="casado" class="f1-email form-control" data-casado>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">viudo(a)</label>
<input type="radio" id="opcion2" name="civil2" value="viudo" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">divorciado(a)</label>
<input type="radio" id="opcion2" name="civil2" value="divorceado" class="f1-email form-control" >




</div>



</div>


<!--  si eres casado -->

<div class="visible-2">
<div class="separacion">

<p>cuentas con separcion de bienes</p>
<div class="respuesta">
<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">si</label>
<input type="radio" id="opcion1" name="bienes2" value="si" class="f1-email form-control"  checked>




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">no</label>
<input type="radio" id="opcion1" name="bienes2" value="no" class="f1-email form-control" >




</div>
</div>

</div>

<div class="conyugue">
    <p>datos de tu conyugue</p>


    <div class="tipo">

<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">DNI</label>
<input type="radio" id="opcion1" name="conyugued2" value="dni" class="f1-email form-control" checked>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PASS</label>
<input type="radio" id="opcion1" name="conyugued2" value="pass" class="f1-email form-control"  >




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">CE</label>
<input type="radio" id="opcion1" name="conyugued2" value="ce" class="f1-email form-control" >




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PTP</label>
<input type="radio" id="opcion1" name="conyugued2" value="ptp" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">RUC</label>
<input type="radio" id="opcion1" name="conyugued2" value="ruc" class="f1-email form-control" >




</div>




</div>




<!--numero documento-->

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="conyuguen2" placeholder="numero de documento de la conyugue" class="f1-first-name form-control" id="f1-first-name" >
                                </div>









</div>


</div>




































        </div>

<hr>









<div class="persona3">

<!--datos necesario-->

<div class="general">

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona3nombre" placeholder="nombre de la persona 3" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>




                                <div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona3apellido" placeholder="apellido de la persona 3" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>




                                <div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona3correo" placeholder="correo de la persona 3" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>


</div>





        <!--  select-->                        

        <div class="form-group">

<label class="" for="f1-first-name">Que cargo tendra en la empresa</label>



<select id="opciones" name="cargo3" required class="f1-first-name form-control select">
   
    <option value="gerente general">gerente general</option>
    <option value="subgerente">subgerente</option>
    <option value="sin cargo">sin cargo</option>
  </select>





</div>


<!--tipo documento-->

<div class="tipo">

<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">DNI</label>
<input type="radio" id="opcion1" name="documento3" value="dni" class="f1-email form-control" checked>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PASS</label>
<input type="radio" id="opcion1" name="documento3" value="pass" class="f1-email form-control"  >




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">CE</label>
<input type="radio" id="opcion1" name="documento3" value="ce" class="f1-email form-control" >




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PTP</label>
<input type="radio" id="opcion1" name="documento3" value="ptp" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">RUC</label>
<input type="radio" id="opcion1" name="documento3" value="ruc" class="f1-email form-control" >




</div>




</div>




<!--numero documento-->

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="numero3" placeholder="numero de documento de la persona2" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>


<!--  estado civil -->


<div class="civil">


<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">soltero(a)</label>
<input type="radio" id="opcion2" name="civil3" value="soltero" class="f1-email form-control"  checked>




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">casado(a)</label>
<input type="radio" id="opcion2" name="civil3" value="casado" class="f1-email form-control" data-casado>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">viudo(a)</label>
<input type="radio" id="opcion2" name="civil3" value="viudo" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">divorciado(a)</label>
<input type="radio" id="opcion2" name="civil3" value="divorceado" class="f1-email form-control" >




</div>



</div>


<!--  si eres casado -->

<div class="visible-3">
<div class="separacion">

<p>cuentas con separcion de bienes</p>
<div class="respuesta">
<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">si</label>
<input type="radio" id="opcion1" name="bienes3" value="si" class="f1-email form-control"  checked>




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">no</label>
<input type="radio" id="opcion1" name="bienes3" value="no" class="f1-email form-control" >




</div>
</div>

</div>

<div class="conyugue">
    <p>datos de tu conyugue</p>


    <div class="tipo">

<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">DNI</label>
<input type="radio" id="opcion1" name="conyugued3" value="dni" class="f1-email form-control" checked>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PASS</label>
<input type="radio" id="opcion1" name="conyugued3" value="pass" class="f1-email form-control"  >




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">CE</label>
<input type="radio" id="opcion1" name="conyugued3" value="ce" class="f1-email form-control" >




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PTP</label>
<input type="radio" id="opcion1" name="conyugued3" value="ptp" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">RUC</label>
<input type="radio" id="opcion1" name="conyugued3" value="ruc" class="f1-email form-control" >




</div>




</div>




<!--numero documento-->

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="conyuguen3" placeholder="numero de documento de la conyugue" class="f1-first-name form-control" id="f1-first-name" >
                                </div>









</div>


</div>




































        </div>



        <hr>












        <div class="persona4">

<!--datos necesario-->

<div class="general">

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona4nombre" placeholder="nombre de la persona 4" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>




                                <div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona4apellido" placeholder="apellido de la persona 4" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>




                                <div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona4correo" placeholder="correo de la persona 4" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>


</div>





        <!--  select-->                        

        <div class="form-group">

<label class="" for="f1-first-name">Que cargo tendra en la empresa</label>



<select id="opciones" name="cargo4" required class="f1-first-name form-control select">
   
    <option value="gerente general">gerente general</option>
    <option value="subgerente">subgerente</option>
    <option value="sin cargo">sin cargo</option>
  </select>





</div>


<!--tipo documento-->

<div class="tipo">

<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">DNI</label>
<input type="radio" id="opcion1" name="documento4" value="dni" class="f1-email form-control" checked>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PASS</label>
<input type="radio" id="opcion1" name="documento4" value="pass" class="f1-email form-control"  >




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">CE</label>
<input type="radio" id="opcion1" name="documento4" value="ce" class="f1-email form-control" >




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PTP</label>
<input type="radio" id="opcion1" name="documento4" value="ptp" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">RUC</label>
<input type="radio" id="opcion1" name="documento4" value="ruc" class="f1-email form-control" >




</div>




</div>




<!--numero documento-->

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="numero4" placeholder="numero de documento de la persona2" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>


<!--  estado civil -->


<div class="civil">


<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">soltero(a)</label>
<input type="radio" id="opcion2" name="civil4" value="soltero" class="f1-email form-control"  checked>




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">casado(a)</label>
<input type="radio" id="opcion2" name="civil4" value="casado" class="f1-email form-control" data-casado>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">viudo(a)</label>
<input type="radio" id="opcion2" name="civil4" value="viudo" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">divorciado(a)</label>
<input type="radio" id="opcion2" name="civil4" value="divorceado" class="f1-email form-control" >




</div>



</div>


<!--  si eres casado -->

<div class="visible-4">
<div class="separacion">

<p>cuentas con separcion de bienes</p>
<div class="respuesta">
<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">si</label>
<input type="radio" id="opcion1" name="bienes4" value="si" class="f1-email form-control"  checked>




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">no</label>
<input type="radio" id="opcion1" name="bienes4" value="no" class="f1-email form-control" >




</div>
</div>

</div>

<div class="conyugue">
    <p>datos de tu conyugue</p>


    <div class="tipo">

<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">DNI</label>
<input type="radio" id="opcion1" name="conyugued4" value="dni" class="f1-email form-control" checked>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PASS</label>
<input type="radio" id="opcion1" name="conyugued4" value="pass" class="f1-email form-control"  >




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">CE</label>
<input type="radio" id="opcion1" name="conyugued4" value="ce" class="f1-email form-control" >




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PTP</label>
<input type="radio" id="opcion1" name="conyugued4" value="ptp" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">RUC</label>
<input type="radio" id="opcion1" name="conyugued4" value="ruc" class="f1-email form-control" >




</div>




</div>




<!--numero documento-->

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="conyuguen4" placeholder="numero de documento de la conyugue" class="f1-first-name form-control" id="f1-first-name" >
                                </div>









</div>


</div>






<hr>





























        </div>




<hr>








<div class="persona5">

<!--datos necesario-->

<div class="general">

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona5nombre" placeholder="nombre de la persona 5" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>




                                <div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona5apellido" placeholder="apellido de la persona 5" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>




                                <div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="persona5correo" placeholder="correo de la persona 5" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>


</div>





        <!--  select-->                        

        <div class="form-group">

<label class="" for="f1-first-name">Que cargo tendra en la empresa</label>



<select id="opciones" name="cargo5" required class="f1-first-name form-control select">
   
    <option value="gerente general">gerente general</option>
    <option value="subgerente">subgerente</option>
    <option value="sin cargo">sin cargo</option>
  </select>





</div>


<!--tipo documento-->

<div class="tipo">

<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">DNI</label>
<input type="radio" id="opcion1" name="documento5" value="dni" class="f1-email form-control" checked>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PASS</label>
<input type="radio" id="opcion1" name="documento5" value="pass" class="f1-email form-control"  >




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">CE</label>
<input type="radio" id="opcion1" name="documento5" value="ce" class="f1-email form-control" >




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PTP</label>
<input type="radio" id="opcion1" name="documento5" value="ptp" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">RUC</label>
<input type="radio" id="opcion1" name="documento5" value="ruc" class="f1-email form-control" >




</div>




</div>




<!--numero documento-->

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="numero5" placeholder="numero de documento de la persona2" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>


<!--  estado civil -->


<div class="civil">


<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">soltero(a)</label>
<input type="radio" id="opcion2" name="civil5" value="soltero" class="f1-email form-control"  checked>




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">casado(a)</label>
<input type="radio" id="opcion2" name="civil5" value="casado" class="f1-email form-control" data-casado>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">viudo(a)</label>
<input type="radio" id="opcion2" name="civil5" value="viudo" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">divorciado(a)</label>
<input type="radio" id="opcion2" name="civil5" value="divorceado" class="f1-email form-control" >




</div>



</div>


<!--  si eres casado -->

<div class="visible-5">
<div class="separacion">

<p>cuentas con separcion de bienes</p>
<div class="respuesta">
<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">si</label>
<input type="radio" id="opcion1" name="bienes5" value="si" class="f1-email form-control"  checked>




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">no</label>
<input type="radio" id="opcion1" name="bienes5" value="no" class="f1-email form-control" >




</div>
</div>

</div>

<div class="conyugue">
    <p>datos de tu conyugue</p>


    <div class="tipo">

<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">DNI</label>
<input type="radio" id="opcion1" name="conyugued5" value="dni" class="f1-email form-control" checked>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PASS</label>
<input type="radio" id="opcion1" name="conyugued5" value="pass" class="f1-email form-control"  >




</div>




<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">CE</label>
<input type="radio" id="opcion1" name="conyugued5" value="ce" class="f1-email form-control" >




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">PTP</label>
<input type="radio" id="opcion1" name="conyugued5" value="ptp" class="f1-email form-control"  >




</div>





<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">RUC</label>
<input type="radio" id="opcion1" name="conyugued5" value="ruc" class="f1-email form-control" >




</div>




</div>




<!--numero documento-->

<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="conyuguen5" placeholder="numero de documento de la conyugue" class="f1-first-name form-control" id="f1-first-name" >
                                </div>









</div>


</div>










        </div>























                               
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Atrás</button>
                                    <button type="button" class="btn btn-next">Siguiente</button>
                                </div>
                            </fieldset>
                            <!--fin del paso 4 -->









<!--paso 5-->



<fieldset>
                                


                                <h2>Define la estructura del capital de tu futura empresa</h2>

                    			<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="number" name="capitaltotal" placeholder="capital total de la empresa" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>


                                <h2>Define la inversión y la participación de cada socio agregado</h2>
<div class="persona1__capital">

<p>persona1</p>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">count</label>
                                    <input  required type="number" name="efectivo1" placeholder="capital en efectivo" class="f1-last-name form-control" id="f1-last-name">
                                </div>
                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number"  required  name="cbienes1" placeholder="capital en bienes" class="f1-last-name form-control" id="f1-last-name">
                                </div>



                                <p>Registrar bien</p>
                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="cantidadbien1" placeholder="cantidad" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="preciobien1" placeholder="precio unitario en soles" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="marca1" placeholder="ingrese marca y modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="model1" placeholder="ingrese numero de modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <hr>




                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="cantidadbien12" placeholder="cantidad" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="preciobien12" placeholder="precio unitario en soles" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="marca12" placeholder="ingrese marca y modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="model12" placeholder="ingrese numero de modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>
















</div>
              















<div class="persona2__capital">

<p>persona2</p>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">count</label>
                                    <input  required type="number" name="efectivo1" placeholder="capital en efectivo" class="f1-last-name form-control" id="f1-last-name">
                                </div>
                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number"  required  name="cbienes1" placeholder="capital en bienes" class="f1-last-name form-control" id="f1-last-name">
                                </div>



                                <p>Registrar bien</p>
                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="cantidadbien1" placeholder="cantidad" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="preciobien1" placeholder="precio unitario en soles" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="marca1" placeholder="ingrese marca y modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="model1" placeholder="ingrese numero de modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <hr>




                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="cantidadbien12" placeholder="cantidad" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="preciobien12" placeholder="precio unitario en soles" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="marca12" placeholder="ingrese marca y modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="model12" placeholder="ingrese numero de modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>
















</div>





























<div class="persona3__capital">

<p>persona3</p>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">count</label>
                                    <input  required type="number" name="efectivo1" placeholder="capital en efectivo" class="f1-last-name form-control" id="f1-last-name">
                                </div>
                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number"  required  name="cbienes1" placeholder="capital en bienes" class="f1-last-name form-control" id="f1-last-name">
                                </div>



                                <p>Registrar bien</p>
                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="cantidadbien1" placeholder="cantidad" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="preciobien1" placeholder="precio unitario en soles" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="marca1" placeholder="ingrese marca y modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="model1" placeholder="ingrese numero de modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <hr>




                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="cantidadbien12" placeholder="cantidad" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="preciobien12" placeholder="precio unitario en soles" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="marca12" placeholder="ingrese marca y modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="model12" placeholder="ingrese numero de modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>
















</div>










<div class="persona4__capital">

<p>persona4</p>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">count</label>
                                    <input  required type="number" name="efectivo1" placeholder="capital en efectivo" class="f1-last-name form-control" id="f1-last-name">
                                </div>
                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number"  required  name="cbienes1" placeholder="capital en bienes" class="f1-last-name form-control" id="f1-last-name">
                                </div>



                                <p>Registrar bien</p>
                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="cantidadbien1" placeholder="cantidad" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="preciobien1" placeholder="precio unitario en soles" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="marca1" placeholder="ingrese marca y modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="model1" placeholder="ingrese numero de modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <hr>




                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="cantidadbien12" placeholder="cantidad" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="preciobien12" placeholder="precio unitario en soles" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="marca12" placeholder="ingrese marca y modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="model12" placeholder="ingrese numero de modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>
















</div>








<div class="persona5__capital">

<p>persona5</p>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">count</label>
                                    <input  required type="number" name="efectivo1" placeholder="capital en efectivo" class="f1-last-name form-control" id="f1-last-name">
                                </div>
                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number"  required  name="cbienes1" placeholder="capital en bienes" class="f1-last-name form-control" id="f1-last-name">
                                </div>



                                <p>Registrar bien</p>
                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="cantidadbien1" placeholder="cantidad" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="preciobien1" placeholder="precio unitario en soles" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="marca1" placeholder="ingrese marca y modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="model1" placeholder="ingrese numero de modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <hr>




                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="cantidadbien12" placeholder="cantidad" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="number" name="preciobien12" placeholder="precio unitario en soles" class="f1-last-name form-control" id="f1-last-name" >
                                </div>


                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="marca12" placeholder="ingrese marca y modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>



                                <div class="form-group">
                                <label class="sr-only" for="f1-last-name">area</label>
                                    <input type="text" name="model12" placeholder="ingrese numero de modelo" class="f1-last-name form-control" id="f1-last-name" >
                                </div>
















</div>















                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Atrás</button>
                                    <button type="button" class="btn btn-next">Siguiente</button>
                                </div>
                            </fieldset>


    <!--fin del paso 5 -->




































    <fieldset>
                                     <h2>Ingresa los siguientes datos para la comunicación con Sunat</h2>

                    			<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="personauno" placeholder="correo de la empresa" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>

                                <div class="form-group">

<label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
<input type="text" name="personauno" placeholder="celular  o teléfono  de la empresa" class="f1-first-name form-control" id="f1-first-name" required>
</div>


<div class="form-group">

                    			    <label class="sr-only" for="f1-first-name">Nombre del Propietario</label>
                                    <input type="text" name="personauno" placeholder="direccion exacta donde operara la empresa" class="f1-first-name form-control" id="f1-first-name" required>
                                </div>


                               

<div class="empresa__fisico">


<h2>el domicilio de la empresa es:</h2>


<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">Alquilado</label>
<input type="radio" id="opcion1" name="local" value="alquilado" class="f1-email form-control" checked>




</div>



<div class="form-group">

                               
<label for="opcion1" class="" for="f1-email">propio</label>
<input type="radio" id="opcion1" name="local" value="propio" class="f1-email form-control"  >

<h2>adjuntar rercibo de agua o luz </h2>

<div class="form-group">
                                    <label class="sr-only" for="f1-facebook">Valor de Inmueble</label>
                                    <input type="file" name="imagen2"  class="f1-facebook form-control" id="f1-facebook">
                                </div>

</div>







                             








</div>


                           
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Atrás</button>
                                    <button type="submit"  name="submit" class="btn btn-submit">Guardar Información</button>
                                </div>
                            </fieldset>
                    	
                    	</form>
                    </div>
                </div>
                    
            </div>
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="app.js"></script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>