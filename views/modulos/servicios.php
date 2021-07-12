
<?php
include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();


$consulta = "SELECT id_taller, nombre_tal, descrip_tal, inicio_tal, duracion_tal, horario_tal, img_tal FROM taller"; //TALLER
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$dataTal=$resultado->fetchAll(PDO::FETCH_ASSOC);

$consulta = "SELECT id_curso, nombre_cur, descrip_cur, inicio_cur, duracion_cur, horario_cur, img_cur FROM curso"; //CURSO
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$dataCur=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>



<section class="container py-5">
    <div class="">
        
        <h1 class="mb-5">Cursos</h1>


        <?php                            
            foreach($dataCur as $dat) {                                                        
        ?>
            <div class="card mb-4" style="">
                <div class="row">
                    <div class="col-xlg-5 col-lg-5 col-md-12 col-sm-12">
                        <img src="CMS/images/<?php echo $dat['img_cur'] ?>" class="card-img-top img-fluid" width="500" height="auto" alt="...">
                    </div>
                    <div class="col pe-5 py-2">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $dat['nombre_cur'] ?></h4>
                            <p class="card-subtitle mb-2 text-muted">Fecha de Inicio: <?php echo $dat['inicio_cur'] ?></p>
                            <p class="card-text mt-3 limite"><?php echo $dat['descrip_cur'] ?></p><br>
                            
                            <div class="card-footer row">
                                <div class="col">
                                    <p class="mt-2 mb-0"><strong>Horario: </strong><?php echo $dat['horario_cur'] ?> / <strong>Duracion: </strong><?php echo $dat['duracion_cur'] ?></p>  
                                </div>

                                <div class="col">
                                    <div class="d-flex"> 
                                    <p class="mb-0 mt-2">¿Quieres Inscribirte? </p>
                                    <a href="#" class="btn btn-primary ms-3 align-self-center">Contáctanos</a>
                                    
                                    </div>   
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>    



        <h1 class="mb-5">Talleres</h1>

        <?php                            
            foreach($dataTal as $dat) {                                                        
        ?>
            <div class="card mb-4" style="">
                <div class="row">
                    <div class="col-xlg-5 col-lg-5 col-md-12 col-sm-12">
                        <img src="CMS/images/<?php echo $dat['img_tal'] ?>" class="card-img-top" width="500" height="auto" alt="...">
                    </div>
                    <div class="col pe-5 py-2">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $dat['nombre_tal'] ?></h4>
                            <p class="card-subtitle mb-2 text-muted">Fecha de Inicio: <?php echo $dat['inicio_tal'] ?></p>
                            <p class="card-text mt-3 limite"><?php echo $dat['descrip_tal'] ?></p><br>
                            
                            <div class="card-footer row">
                                <div class="col">
                                    <p class="mt-2 mb-0"><strong>Horario: </strong><?php echo $dat['horario_tal'] ?> / <strong>Duracion: </strong><?php echo $dat['duracion_tal'] ?></p>  
                                </div>

                                <div class="col">
                                    <div class="d-flex"> 
                                    <p class="mb-0 mt-2">¿Quieres Asistir? </p>
                                    <a href="#" class="btn btn-primary ms-3 align-self-center">Contáctanos</a>
                                    </div>    
                                </div>
                            </div>
                           
                           <!--- <a href="#" class="btn btn-primary">Go somewhere</a>-->
                        </div>
                    </div>
                </div>
            </div>
        <?php
            }
        ?> 

        
    </div>
</section>