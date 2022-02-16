<?php

  $name   = $_POST['name'];
  $user  = $_POST['user'];
  $grupo = $_POST['grupo'];
  $clave  = $_POST['clave'];
  $clave2 = $_POST['clave2'];

  if(empty($user) || empty($name) || empty($grupo) || empty($clave) || empty($clave2))
  {

    echo 'error_1'; // Un campo esta vacio y es obligatorio

  }else{

    if($clave == $clave2){

      if(intval($grupo) >= '1' and intval($grupo) <= '6') {
        if($grupo == intval($grupo).'A' or $grupo == intval($grupo).'B' or $grupo == intval($grupo).'C')
        {

            if($grupo == '1C' || $grupo == '2C' || $grupo == '3C' || $grupo == '4C')
            {

                echo 'error_4'; 
            }
            else
            {
              
                 # Incluimos la clase usuario
                require_once('../model/usuario.php');

                # Creamos un objeto de la clase usuario
                $usuario = new Usuario();

                # Llamamos al metodo login para validar los datos en la base de datos
                $usuario -> registroUsuario($name, $user, $grupo, $clave);
            }
        }
        else{
        echo 'error_4';
      }

      }else{
        echo 'error_4';
      }


    }else{
      echo 'error_2';
    }

  }




?>
