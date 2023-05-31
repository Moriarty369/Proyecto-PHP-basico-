<?php 

    try{

        

        $conn=new PDO('mysql:host=localhost; dbname=cenesgetafe','root','' );
        $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET UTF8");

        //echo "conexion establecida";

    }catch(Exception $e){
        die('Error'.$e->getMessage());
        echo "Linea del error".$e->getLine();

    }



?>