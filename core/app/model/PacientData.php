<?php
class PacientData {
	public static $tablename = "pacient";
	public function PacientData(){
		$this->title = "";
		$this->email = "";
		$this->image = "";
		$this->password = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (nombre,apellido,edad,telefono,direccion,quirurgicos,traumaticos,alergico,genero,medico,created_at) ";
		$sql .= "value (\"$this->nombre\",\"$this->apellido\",\"$this->edad\",\"$this->telefono\",\"$this->direccion\",\"$this->quirurgicos\",\"$this->traumaticos\",\"$this->alergico\",\"$this->genero\",\"$this->medico\",$this->created_at)";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto PacientData previamente utilizamos el contexto
	public function update_active(){
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set nombre=\"$this->nombre\",apellido=\"$this->apellido\",edad=\"$this->edad\",telefono=\"$this->telefono\",direccion=\"$this->direccion\",nombre_esp=\"$this->nombre_esp\",quirurgicos=\"$this->quirurgicos\",traumaticos=\"$this->traumaticos\",alergico=\"$this->alergico\",monarquia=\"$this->monarquia\",ciclos=\"$this->ciclos\",gestas=\"$this->gestas\",partos=\"$this->partos\",cesareas=\"$this->cesareas\",abortos=\"$this->abortos\",fur=\"$this->fur\",fpp=\"$this->fpp\",control_prenatal=\"$this->control_prenatal\",anti=\"$this->anti\", genero=\"$this->genero\",medico=\"$this->medico\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new PacientData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}

	public static function getAllActive(){
		$sql = "select * from client where last_active_at>=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}

	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}


}

?>