<?php
class ReservationData {
	public static $tablename = "reservation";


	public function ReservationData(){
		$this->nombre = "";
		$this->apellido = "";
		$this->email = "";
		$this->password = "";
		$this->created_at = "NOW()";
	}

	public function getMedic(){ return MedicData::getById($this->medic_id); }
	public function getStatus(){ return StatusData::getById($this->status_id); }
	public function getPayment(){ return PaymentData::getById($this->payment_id); }

	public function add(){
			$sql = "insert into reservation (descripcion,nota,medic_id,dia,hora,pacient_id,user_id,precio,status_id,payment_id,enfermedad,sintomas,medicamentos,created_at) ";
		$sql .= "value (\"$this->descripcion\",\"$this->nota\",\"$this->medic_id\",\"$this->dia\",\"$this->hora\",$this->created_at)";
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto ReservationData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set descripcion=\"$this->descripcion\",pacient_id=\"$this->pacient_id\",medic_id=\"$this->medic_id\",dia=\"$this->dia\",hora=\"$this->hora\",nota=\"$this->nota\",enfermedad=\"$this->enfermedad\",sintomas=\"$this->sintomas\",medicamentos=\"$this->medicamentos\",status_id=\"$this->status_id\",payment_id=\"$this->payment_id\",precio=\"$this->precio\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ReservationData());
	}

	public static function getRepeated($medic_id,$dia,$hora){
		$sql = "select * from ".self::$tablename." where medic_id=$medic_id and dia=\"$dia\" and hora=\"$hora\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ReservationData());
	}



	public static function getByMail($mail){
		$sql = "select * from ".self::$tablename." where mail=\"$mail\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ReservationData());
	}

	public static function getEvery(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ReservationData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." where date(dia)>=date(NOW()) order by dia";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ReservationData());
	}

	public static function getAllPendings(){
		$sql = "select * from ".self::$tablename." where date(dia)>=date(NOW()) and status_id=1 and payment_id=1 order by dia";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ReservationData());
	}


	public static function getAllByMedicId($id){
		$sql = "select * from ".self::$tablename." where medic_id=$id order by dia";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ReservationData());
	}

	public static function getBySQL($sql){
		$query = Executor::doit($sql);
		return Model::many($query[0],new ReservationData());
	}

	public static function getOld(){
		$sql = "select * from ".self::$tablename." where date(dia)<date(NOW()) order by dia";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ReservationData());
	}
	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where descripcion like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ReservationData());
	}


}

?>