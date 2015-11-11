<?php

class clsRegistro{
	private $idPonencia;
	private $emailPonente;
	private $fechaHora;
	private $lugar;
	private $ponente;
	private $telPonente;
	private $tipo;
	private $titulo;

	/**
	* Constructor de la clase
	*/
	public function __construct(){
		$this->idPonencia = 0;
		$this->emailPonente = "";
		$this->fechaHora = "";
		$this->lugar = "";
		$this->ponente = "";
		$this->telPonente = 0;
		$this->tipo = "";
		$this->titulo = "";
	}

	/**
	*  Metodo que inicializa el atributo idPonencia
	*  @access public
	*  @param int $pidPonencia descripcion.
	*  
	*/
	public function set_idPonencia($pidPonencia){
		$this->idPonencia=$pidPonencia;
	}
	/**
	*  Metodo que obtiene el atributo idPonencia
	*  @access private
	*  @return int atributo idPonencia
	*  
	*/
	private function get_idPonencia(){
		return $this->idPonencia;
	}

	public function set_emailPonente($pemailPonente){
		$this->emailPonente=$pemailPonente;
	}
	private function get_emailPonente(){
		return $this->emailPonente;
	}

	public function set_fechaHora($pfechaHora){
		$this->fechaHora=$pfechaHora;
	}
	private function get_fechaHora(){
		return $this->fechaHora;
	}

	public function set_lugar($plugar){
		$this->lugar=$plugar;
	}
	private function get_lugar(){
		return $this->lugar;
	}

	public function set_ponente($pponente){
		$this->ponente=$pponente;
	}
	private function get_ponente(){
		return $this->ponente;
	}

	public function set_telPonente($ptelPonente){
		$this->telPonente=$ptelPonente;
	}
	private function get_telPonente(){
		return $this->telPonente;
	}

	public function set_tipo($ptipo){
		$this->tipo=$ptipo;
	}
	private function get_tipo(){
		return $this->tipo;
	}

	public function set_titulo($ptitulo){
		$this->titulo=$ptitulo;
	}
	private function get_titulo(){
		return $this->titulo;
	}

	public function ponenciaAgregarModificar(){
		require("../conexionBD.php");

		$iPonenciaID = $this->idPonencia;

		if($iPonenciaID == 0)
			$sql = "INSERT INTO tblponencias (tipo, titulo, ponente, telPonente, emailPonente, fechaHora, lugar) 
					VALUES ('".$this->tipo."', '".$this->titulo."', '".$this->ponente."', 
							".$this->telPonente.", '".$this->emailPonente."', '".$this->fechaHora."', 
							'".$this->lugar."')";
		else
			$sql = "UPDATE tblponencias 
					SET tipo='".$this->tipo."', titulo='".$this->titulo."', ponente='".$this->ponente."', 
						telPonente=".$this->telPonente.", emailPonente='".$this->emailPonente."', 
						fechaHora='".$this->fechaHora."', lugar='".$this->lugar."' 
					WHERE idPonencia = ".$iPonenciaID;
					
		//echo $sql;

		if ($conn->query($sql) === TRUE) {
		    $arrDatos['noError'] = 0;
		} else {
		    $arrDatos['noError'] = 1;
		    $arrDatos['msjError'] = $conn->error;
		}

		return json_encode($arrDatos);
	}


} // fin class
	


	/*$sql = "select * from tblponencias";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "Titulo: " . $row["titulo"] . "<br>";
	    }
	} else {
	    echo "0 results";
	}

	$conn->close();*/
?>