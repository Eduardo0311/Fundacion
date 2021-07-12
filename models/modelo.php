<?php


/*class Service {
    
    private $servicio;
    private $db;

    public function __construct() {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=ejemplo_mvc', "root", "");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    //FUNCION PARA MOSTRAR
    public function getServicios() {

        self::setNames();
        $sql = "SELECT id, nombre, precio FROM servicio";
        foreach ($this->db->query($sql) as $res) {
            $this->servicio[] = $res;
        }
        return $this->servicio;
        $this->db = null;
    }

    //FUNCION PARA AGREGAR
    public function setServicio($nombre, $precio) {

        self::setNames();
        $sql = "INSERT INTO servicio(nombre, precio) VALUES ('" . $nombre . "', '" . $precio . "')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}*/

class EnlacesPaginas{

    public function enlacesPaginasModel($enlacesModel){
        $modulo= null;

        if (isset($enlacesModel)) {

            if($enlacesModel=="inicio" ||
            $enlacesModel=="nosotros" ||
            $enlacesModel=="noticias" ||
            $enlacesModel=="servicios"){

                $modulo="views/modulos/".$enlacesModel.".php";

            }

        } /*else {
                $modulo="views/modulos/inicio.php";
        }*/

        return $modulo;
    }


}


class redireccionarPaginas{

    
    public function redireccionarPaginasModel($valorModel){
        $modulo1= null;

        if (isset($valorModel)) {
            
            if(is_numeric($valorModel)){

                //$modulo="views/Redireccionar/".$valorModel.".php";
                $modulo1="views/Redireccionar/redireccionar1.php";
            }
        }/*else {

                $modulo1= $valorModel; //"views/modulos/inicio.php";
                echo $valorModel;
        }*/

        return $modulo1;
    }


}


?>