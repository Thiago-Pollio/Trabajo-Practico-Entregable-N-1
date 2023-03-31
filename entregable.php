<?php 

class Viaje {

    private $codigo;
    private $destino;
    private $cantMax;
    private $datosPasajeros = array();

    public function __construct ($codigo, $destino, $cantMax, $datosPasajeros) {
        
        
        $this -> codigo = $codigo;
        $this -> destino = $destino;
        $this -> cantMax = $cantMax;
        $this -> datosPasajeros = $datosPasajeros;


    }

    public function getCodigo (){
        return $this -> codigo;
    }

    public function getDestino (){
        return $this -> destino;
    }

    public function getCantMax (){
        return $this -> cantMax;
    }

    public function getDatosPasajeros (){
        return $this -> datosPasajeros;
    }

    public function setCodigo ($codigo){
        $this -> codigo = $codigo;
    }

    public function setDestino ($destino){
        $this -> destino = $destino;
    }

    public function setCantMax ($cantMax){
        $this -> cantMax = $cantMax;
    }

    public function setDatosPasajeros ($datosPasajeros){
        $this -> datosPasajeros = $datosPasajeros;
    }

    /**
     * 
     * @param string $elNombre
     * @param string $elApellido
     * @param float $elDocumento
     */
    public function losDatos ($elNombre, $elApellido, $elDocumento){
    
        array_push($this->datosPasajeros, array('Nombre'=>$elNombre,'Apellido'=>$elApellido, 'Documento'=>$elDocumento));
        

        }

    /**
     * @param string $nuevoDocumento
     * @param string $elNombre
     * @param string $elApellido
     * @param float $elDocumento
     * @return boolean
     */

    public function modificarElPasajero ($nuevoDocumento , $elNombre, $elApellido, $elDocumento, ){

        $llamarArray = $this->datosPasajeros;


        $co = count($llamarArray);

        $encontrado = false;

        $i = 0;

        while ($i < $co && $encontrado == false) {
            if ($llamarArray [$i]['Documento']== $nuevoDocumento) {
                $llamarArray [$i]['Nombre']= $elNombre;
                $llamarArray [$i]['Apellido']= $elApellido;
                $llamarArray [$i]['Documento']= $elDocumento;

                $encontrado = true;

                $this->setDatosPasajeros($llamarArray);
            }

            $i++;
        }

        return ($encontrado);



    }


    public function __toString(){
        
        return "Codigo: ".$this->getCodigo()."\n".
        "Destino: ".$this->getDestino()."\n".
        "Cantidad maxima de pasajeros: ".$this->getCantMax()."\n".
        "Pasajeros: ".$this->getDatosPasajeros();
        }

}
