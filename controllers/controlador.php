<?php
    
    //require_once("../models/modelo.php");
    //$services = new Service();
    //$datos = $services->getServicios();
    //require_once("../views/vista.php");

    class mvccontroller{

        public function plantilla (){
           
            include "views/plantillaPrincipal.php";
        }

        public function enlacesPaginasController (){
       
            //$enlaces= $_GET ["action"];
            $enlaces = (isset($_GET['action'])) ? $_GET['action'] : '';
            //echo $enlaces;
            $clase = new EnlacesPaginas();
            $respuesta = $clase-> enlacesPaginasModel($enlaces);
            //$respuesta= EnlacesPaginas::enlacesPaginasModel($enlaces);
            //echo $respuesta;
            if (isset($respuesta)){
            include $respuesta;}
            
        }

        #redirecciones de prueba
        #-----------------------------------------------------------
        public function redireccionarController (){
            
            //$valor= $_GET ["id"];
            $valor = (isset($_GET['id'])) ? $_GET['id'] : '';
            //echo $enlaces;
            //$acertado= redireccionarPaginas::redireccionarPaginasModel($valor);

            $clase1 = new redireccionarPaginas();
            $acertado = $clase1-> redireccionarPaginasModel($valor);

            //echo $respuesta;
            if (isset($acertado)){
            include $acertado;}
            
        }


    }

?>