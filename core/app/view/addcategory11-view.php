
<?php


if(count($_POST)>0){
	$user = new CategoryData();
	$user->motivo = $_POST["motivo"];
	$user->historial_enf = $_POST["historial_enf"];
	$user->p_a = $_POST["p_a"];
	$user->fc = $_POST["fc"];
	$user->pulso = $_POST["pulso"];
	$user->t = $_POST["t"];
	$user->w = $_POST["w"];
	$user->frec_resp = $_POST["frec_resp"];
	$user->detalle = $_POST["detalle"];
	$user->diagnostico = $_POST["diagnostico"];
	$user->tratamiento1 = $_POST["tratamiento1"];
	$user->tratamiento2 = $_POST["tratamiento2"];
	$user->rgb = $_POST["rgb"];
	$user->plt = $_POST["plt"];
	$user->hto = $_POST["hto"];
	$user->vse = $_POST["vse"];
	$user->seg = $_POST["seg"];
	$user->lint = $_POST["lint"];
	$user->mon = $_POST["mon"];
	$user->eos = $_POST["eos"];
	$user->tp = $_POST["tp"];
	$user->tpt = $_POST["tpt"];
	$user->fr = $_POST["fr"];
	$user->aso = $_POST["aso"];
	$user->pcr = $_POST["pcr"];
	$user->ag_prostatico = $_POST["ag_prostatico"];
	$user->glucosa = $_POST["glucosa"];
	$user->glucosa_post = $_POST["glucosa_post"];
	$user->nitrogeno = $_POST["nitrogeno"];
	$user->creatinina = $_POST["creatinina"];
	$user->bilirrubina_t = $_POST["bilirrubina_t"];
	$user->bilirrubina_d = $_POST["bilirrubina_d"];
	$user->bilirrubina_i = $_POST["bilirrubina_i"];
	$user->proteina = $_POST["proteina"];
	$user->albumina = $_POST["albumina"];
	$user->globulina = $_POST["globulina"];
	$user->relacion = $_POST["relacion"];
	$user->acido = $_POST["acido"];
	$user->ldh = $_POST["ldh"];
	$user->transaminasa_o = $_POST["transaminasa_o"];
	$user->transaminasa_p = $_POST["transaminasa_p"];
	$user->fosfata = $_POST["fosfata"];
	$user->colesterol_t = $_POST["colesterol_t"];
	$user->colesterol_h = $_POST["colesterol_h"];
	$user->colesterol_l = $_POST["colesterol_l"];
	$user->trigliceridos = $_POST["trigliceridos"];
	$user->lipasa = $_POST["lipasa"];
	$user->amilasa = $_POST["amilasa"];
	$user->ck_t = $_POST["ck_t"];
	$user->ck_mb = $_POST["ck_mb"];
	$user->otros = $_POST["otros"];

	$user->add();

print "<script>window.location='index.php?view=categories';</script>";


}


?>
