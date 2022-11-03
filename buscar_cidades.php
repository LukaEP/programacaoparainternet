<?php
	require_once("conecta.php");

	if ($conn) {
		$id_estado = intval($_POST["id_estado"]);

		$sql = "SELECT id, municipio FROM cidades WHERE uf = $id_estado ORDER BY municipio ASC";

		$registros = mysqli_query($conn, $sql);

		if (mysqli_num_rows($registros) > 0){

			while ($registro = mysqli_fetch_array($registros)){
				$resposta[] = array(
					"id" => $registro["id"],
					"municipio" => $registro["municipio"]
				);
			}
			echo (json_encode($resposta));
		} 
	}
?>