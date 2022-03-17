<?php
require_once "models/Conexion.php";

class LoginController
{
    private function __construct()
    {
    }

    public static function Main($option, $array = [])
    {
        $login = new LoginController();

        switch ($option) {
            case 0:
                $result = $login->Consult($array);
                break;
            case 1:
                $result = $login->Insert();
                break;
            case 2:
                $result = $login->Update();
                break;
            case 3:
                $result = $login->Delete();
                break;
        }
        return $result;
    }

    public function Consult($array)
    {
        $conexion = Conexion::connection();
        $sql = "SELECT * FROM vendedores WHERE correo = '$array[0]' AND contrasena = '$array[1]'"; 
        $stmt = $conexion->query($sql);
        $respuesta = $stmt->fetch_row();
     
        if($respuesta[0] != null){
            echo "Registro exitoso";
        }else{ echo "fallido";}
        return $respuesta;

    }

    public function Insert()
    {
    }

    public function Update()
    {
    }

    public function Delete()
    {
    }
}
