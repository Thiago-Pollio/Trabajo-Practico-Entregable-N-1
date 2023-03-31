<?php

include 'entregable.php';

$prueba = new Viaje (0,0,0, array());

$salir = false;

while ($salir == false) {
    $menu= "Menú de opciones: \n" .
        "1) Ingresar datos  del viaje  \n".
        "2) Modificar datos  del viaje  \n" .
        "3) Ingresar datos  de pasajeros \n".
        "4) Modificar datos  de pasajeros \n" . 
        "5) Mostrar datos  del viaje y de los pasajeros \n" .  
        "6) Salir \n"; 
        echo $menu;
        echo "Ingrese una opcion: ";
        $opcion = trim(fgets(STDIN));
        

        switch ($opcion) {
            /*Dependiendo de la opción del menú que escoga el usuario, el programa ejecutará diferentes
            tareas. Se utiliza switch, que corresponde a la estructura de control alternativa (if)*/
            case 1: 
                
                echo "Ingrese el código del viaje: ";
                $codigo = trim(fgets(STDIN));
                echo "Ingrese el destino del viaje: ";
                $destino = trim(fgets(STDIN));
                echo "Ingrese la cantidad máxima de pasajeros: ";
                $cantMax = trim(fgets(STDIN));

                $prueba = new Viaje ($codigo, $destino, $cantMax, array ());
                
                break;
                
            case 2:
                echo "Ingrese el nuevo código del viaje: ";
                $codigo = trim(fgets(STDIN));
                echo "Ingrese el nuevo destino del viaje: ";
                $destino = trim(fgets(STDIN));
                echo "Ingrese la nueva cantidad máxima de pasajeros: ";
                $cantMax = trim(fgets(STDIN));

                $prueba -> setCodigo ($codigo);
                $prueba -> setDestino ($destino);
                $prueba -> setCantMax ($cantMax);
    
                break;
            case 3: 

                $contador = 0;

                for ($contador=0; $contador < $cantMax ; $contador++) { 
                    echo "Ingrese el nombre del pasajero: ";
                    $unNombre = trim(fgets(STDIN));
                    echo "Ingrese el apellido del pasajero: ";
                    $unApellido = trim(fgets(STDIN));
                    echo "Ingrese el numero de documento del pasajero: ";
                    $unDocumento = trim(fgets(STDIN));
                    $prueba -> losDatos($unNombre, $unApellido, $unDocumento);
                }
                
                break;
            case 4:

                echo "Ingrese el numero de documento: ";
                $nDni = trim(fgets(STDIN));
                echo "Ingrese el nombre del pasajero: ";
                $unNombre = trim(fgets(STDIN));
                echo "Ingrese el apellido del pasajero: ";
                $unApellido = trim(fgets(STDIN));
                echo "Ingrese el numero de documento del pasajero: ";
                $unDocumento = trim(fgets(STDIN));

                $funcionModificar = $prueba -> modificarElPasajero($nDni, $unNombre, $unApellido, $unDocumento);

        
                if ($funcionModificar == true) {
                    echo "Los datos fueron modificados.";
                } else {
                    echo "No existe el documento: " . $nDni;
                }
                
                break;
            case 5:
                echo "Codigo de viaje: ".$codigo. "\n";
                echo "Destino: ".$destino. "\n";
                echo "Cantidad máxima: ".$cantMax. "\n";

                $arrayP = $prueba->getDatosPasajeros();
                print_r($arrayP);

                break;
            case 6:
                $salir = true;
                
                break;
    }
    }







