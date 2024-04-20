<?PHP
    //CONEXION DE BD   
    //delcara las variables donde se guardaran los valores de la conexio    
    $servidor = "localhost";
    $user = "root";
    $password = "";
    $db = "empreconnect";
    $puerto = "3306";

    $conecta = mysqli_connect($servidor, $user, $password, $db, $puerto);

    if ($conecta -> connect_error){
        die ("Error al conectar la base de datos de la Página" . $conecta-> connect_error);
    }
    /*else{
        echo "Conxion exitosa";
    }*/
?>
