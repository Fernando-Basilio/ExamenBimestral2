<?php         
          include('conexion.php');

          class validarusuario
          {
                public function validaruser($user,$pass)
                {
                     $us=new conexion();
                     $q="SELECT * FROM `usuarios` WHERE `user` = '$user' AND `password`='$pass' ;";
                     $usuario=$us->query($q);
                     $us->close();
                     return $usuario;
                     }       
		  }
?>

 <?php
         include('validaruser.php');
         $validar = new validarusuario;      

         $nombre=$_POST['Nombre'];
         $password=$_POST['Password'];

         $resultado=$validar->validaruser($nombre,$password);
             
         if ($resultado->num_rows== 1) 
         {
           header("location:Menú.php");
                               
         }
         else 
         {
	        header("location:Inicio.html");
                     
         }
?>  