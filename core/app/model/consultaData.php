<?php
class ConsultaData {
	public static $tablename = "consulta";
	public function ConsultaData(){
		$this->title = "";
		$this->email = "";
		$this->image = "";
		$this->password = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (motivo, historial_enf, p_a, fc, pulso, t, w, frec_resp, detalle, diagnostico, tratamiento1, tratamiento2, rgb, plt, hto, vse, seg, lint, mon, eos, tp, tpt, fr, aso, pcr, ag_prostatico, glucosa, glucosa_post, nitrogeno, creatinina, bilirrubina_t, bilirrubina_d, bilirrubina_i, proteina, albumina, globulina, relacion, acido, ldh, transaminasa_o, transaminasa_p, fosfata, colesterol_t, colesterol_h, colesterol_l, trigliceridos, lipasa, amilasa, ck_t, ck_mb, otros, paciente_id, created_at)";


$sql .= "value (\"$this->motivo\", \"$this->historial_enf\", \"$this->p_a\", \"$this->fc\", \"$this->pulso\", \"$this->t\", \"$this->w\", \"$this->frec_resp\", \"$this->detalle\", \"$this->diagnostico\", \"$this->tratamiento1\", \"$this->tratamiento2\", \"$this->rgb\", \"$this->plt\", \"$this->hto\", \"$this->vse\", \"$this->seg\", \"$this->lint\", \"$this->mon\", \"$this->eos\", \"$this->tp\", \"$this->tpt\", \"$this->fr\", \"$this->aso\", \"$this->pcr\", \"$this->ag_prostatico\", \"$this->glucosa\", \"$this->glucosa_post\", \"$this->nitrogeno\", \"$this->creatinina\", \"$this->bilirrubina_t\", \"$this->bilirrubina_d\", \"$this->bilirrubina_i\", \"$this->proteina\", \"$this->albumina\", \"$this->globulina\", \"$this->relacion\", \"$this->acido\", \"$this->ldh\", \"$this->transaminasa_o\", \"$this->transaminasa_p\", \"$this->fosfata\", \"$this->colesterol_t\", \"$this->colesterol_h\", \"$this->colesterol_l\", \"$this->trigliceridos\", \"$this->lipasa\", \"$this->amilasa\", \"$this->ck_t\", \"$this->ck_mb\", \"$this->otros\", \"$this->paciente_id\",$this->created_at)";
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

// partiendo de que ya tenemos creado un objecto ConsultaData previamente utilizamos el contexto
	public function update_active(){
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set motivo=\"$this->motivo\", historial_enf=\"$this->historial_enf\", p_a=\"$this->p_a\",fc=\"$this->fc\", pulso=\"$this->pulso\", t=\"$this->t\", w=\"$this->w\", frec_resp=\"$this->frec_resp\", detalle=\"$this->detalle\", diagnostico=\"$this->diagnostico\",tratamiento1=\"$this->tratamiento1\", tratamiento2=\"$this->tratamiento2\", rgb=\"$this->rgb\", plt=\"$this->plt\", hto=\"$this->hto\", vse=\"$this->vse\", seg=\"$this->seg\", lint=\"$this->lint\", mon=\"$this->mon\", eos=\"$this->eos\", tp=\"$this->tp\", tpt=\"$this->tpt\", fr=\"$this->fr\", aso=\"$this->aso\", pcr=\"$this->pcr\", ag_prostatico=\"$this->ag_prostatico\", glucosa=\"$this->glucosa\", glucosa_post=\"$this->glucosa_post\", nitrogeno=\"$this->nitrogeno\", creatinina=\"$this->creatinina\", bilirrubina_t=\"$this->bilirrubina_t\", bilirrubina_d=\"$this->bilirrubina_d\", bilirrubina_i=\"$this->bilirrubina_i\", proteina=\"$this->proteina\", albumina=\"$this->albumina\", globulina=\"$this->globulina\", relacion=\"$this->relacion\", acido=\"$this->acido\", ldh=\"$this->ldh\", transaminasa_o=\"$this->transaminasa_o\", transaminasa_p=\"$this->transaminasa_p\", fosfata=\"$this->fosfata\", colesterol_t=\"$this->colesterol_t\", colesterol_h=\"$this->colesterol_h\", colesterol_l=\"$this->colesterol_l\", trigliceridos=\"$this->trigliceridos\", lipasa=\"$this->lipasa\", amilasa=\"$this->amilasa\", ck_t=\"$this->ck_t\", ck_mb=\"$this->ck_mb\", otros=\"$this->otros\" where id=$this->id";

		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ConsultaData());
	}

public static function getRepeated($pacient_id){
		$sql = "select * from ".self::$tablename." where pacient_id=$pacient_id ";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ReservationData());
	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ConsultaData());
	}

	public static function getAllActive(){
		$sql = "select * from client where last_active_at>=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ConsultaData());
	}

	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ConsultaData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ConsultaData());
	}


}

?>