<?php

include_once('./config/config.php');
include_once('./config/database.php');

class usuario{

    public $conexion;

    function __construct()
    {
        $db=new Database();
        $this->conexion=$db->connectToDatabase();
}

function save($params){
    $nombres=$params['nombres'];
    $apellidos=$params['apellidos'];
    $celular=$params['celular'];
    $edad=$params['edad'];
    $email=$params['email'];
    $ciudad=$params['ciudad'];
    $observaciones=$params['observaciones'];

    $insert="INSERT INTO usuarios VALUES(null,'$nombres','$apellidos',$celular,'$edad','$email','$ciudad','$observaciones')";

    echo $insert;

    return mysqli_query($this->conexion,$insert);

}
function getALL(){
    $sql="SELECT * FROM usuarios";

    $result = mysqli_query($this->conexion,$sql);

    $objs = mysqli_fetch_all($result);

    return $objs;
}

function getOne($id)
{
    $sql="SELECT * FROM usuarios WHERE id =$id";

    $result = mysqli_query($this->conexion,$sql);

    $objs = mysqli_fetch_object($result);

    return $objs;

}

function update($params){
    $nombres=$params['nombres'];
    $apellidos=$params['apellidos'];
    $celular=$params['celular'];
    $edad=$params['edad'];
    $email=$params['email'];
    $ciudad=$params['ciudad'];
    $observaciones=$params['observaciones'];
    $id=$params['id'];

    $update="UPDATE usuarios SET nombres='$nombres',apellidos='$apellidos',celular='$celular',edad='$edad',email='$email',ciudad='$ciudad',observaciones='$observaciones' WHERE id=$id ";

    return mysqli_query($this->conexion,$update);
}



function delete($id){
    
    $delete="DELETE FROM usuarios WHERE id =$id";

    return mysqli_query($this->conexion,$delete);
}

}
?>