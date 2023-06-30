<?php
include_once 'Conexion.php';
class Usuario{
    private $acceso;
    var $objetos;
    public function __construct()
    {
        $db=new Conexion();
        $this->acceso= $db->pdo;
        
    }

    function Loguearse($dni,$pass){
        $sql="SELECT * FROM usuario inner join tipo_usuario on usuario.id_tipo=tipo_usuario.id_tipo where  dni=:dni and contrasena=:pass";
        $query= $this -> acceso->prepare($sql);
        $query->execute(array(':dni'=>$dni,':pass'=>$pass));
        $this->objetos=$query->fetchall();
        return $this->objetos;
    }
}
?>