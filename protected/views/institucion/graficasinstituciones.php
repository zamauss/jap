<?php
$this->pageCaption='Análisis global de las IAP';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='';
$this->breadcrumbs=array(
	'Crear',
);
$usuarioActual = Usuario::model()->find('usuario = "' . Yii::app()->user->name . '"');

if($usuarioActual->tipousuario->nombre == "Administrador")
{
	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('institucion/cuadrogeneral')),
	);
}
else
{
	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('institucion/acciones')),
	);
}


//Ingresos
$donativos = IngresoPorDonativo::model()->findAll();
$cuotasRecuperacion = IngresoPorCuotasdeRecuperacion::model()->findAll();
$eventos = IngresoPorEvento::model()->findAll();

foreach($donativos as $donativo)
{
	$totalDonativo += 	$donativo->personaFisica + 
						$donativo->personaMoral + 
						$donativo->fundacionesNacionales + 
						$donativo->fundacionesExtrajeras + 
						$donativo->fondosGubernamentalesMunicipal +
						$donativo->fondosGubernamentalesEstatal +
						$donativo->fondosGubernamentalesFederal;

}

foreach($eventos as $evento)
{
	$totalEvento += 	$evento->colectas + 
					$evento->eventos + 
					$evento->rifas + 
					$evento->conferencias + 
					$evento->ventas +
					$evento->otros;

}

foreach($cuotasRecuperacion as $cuotaRecuperacion)
{
	$totalCuotaRecuperacion += $cuotaRecuperacion->consultas;
}

$totalIngresos = array(
					0=> array(
						'ingreso'=>'Donativo',
						'cantidad'=>$totalDonativo,
					),
					1=> array(
						'ingreso'=>'Cuota de Recuperación',
						'cantidad'=>$totalCuotaRecuperacion,
					),
					2=> array(
						'ingreso'=>'Evento',
						'cantidad'=>$totalEvento,
					),
				);


//Total de beneficiarios
$connection = Yii::app()->db;
$queryBeneficiarios = 'select 
					sum(numeroBeneficiariosNinosH) as niños,
					sum(numeroBeneficiariosNinosM) as niñas,
					sum(numeroBeneficiariosJovenesH) as "Jóvenes hombres",
					sum(numeroBeneficiariosJovenesM) as "Jóvenes mujeres",
					sum(numeroBeneficiariosAdultosH) as "Adultos hombres",
					sum(numeroBeneficiariosAdultosM) as "Adultos mujeres",
					sum(numeroBeneficiariosMayorH) as "Mayores hombres",
					sum(numeroBeneficiariosMayorM) as "Mayores mujeres",
					sum(numeroBeneficiariosTotales) as Totales
					from Informe;';
$commandBeneficiarios = $connection->createCommand($queryBeneficiarios);
$beneficiarios = $commandBeneficiarios->queryAll();

$queryDonativosTotales = 'select 
						sum(personaFisica) as pf,
						sum(personaMoral) as pm,
						sum(fundacionesNacionales) as fn,
						sum(fundacionesExtrajeras) as fe,
						sum(fondosGubernamentalesMunicipal) as fgm,
						sum(fondosGubernamentalesEstatal) as fge,
						sum(fondosGubernamentalesFederal) as fgf,
						sum(especie) as especie,
						(select sum(consultas) from IngresoPorCuotasdeRecuperacion) as cuotas,
						(select sum(colectas) + sum(eventos) + sum(rifas) + sum(conferencias) as con from IngresoPorEvento) as evento
						from IngresoPorDonativo;';
$commandDonativosTotales = $connection->createCommand($queryDonativosTotales);
$donativosTotales = $commandDonativosTotales->queryAll();


//Gráfica Objetivos Pendientes por Colaborador
echo '<script type="text/javascript">
		// Load the Visualization API and the piechart package.
		google.load("visualization", "1.0", {"packages":["corechart"]});

		// Set a callback to run when the Google Visualization API is loaded.
		google.setOnLoadCallback(drawChart);

		// Callback that creates and populates a data table, 
		// instantiates the pie chart, passes in the data and
		// draws it.
		function drawChart() {

		// Create the data table.
		var data = new google.visualization.DataTable();
		data.addColumn("string", "Instituciones");
		data.addColumn("number", "Cantidad");
		data.addColumn({type: "string", role: "tooltip"});';
		foreach($totalIngresos as $valor){
			echo 'data.addRows([["' . $valor['ingreso'] . '",' . $valor['cantidad'] . ',"' . $valor['ingreso'] . ':' . number_format($valor['cantidad']) . '"]]);';
		}

		echo '
		// Set chart options
		var options = {
			"title":"Ingresos por categorías",
			"width":550,
			"height":500,
			hAxis: {title: "Tipo de Ingresos"},
			vAxis: 
			{
				title: "Cant. Ingreso",
				viewWindowMode: "explicit",
				viewWindow: 
				{					
					min: 0,
		        },	        
			},
			legend:"none",
			colors:["#39AECF"],
		};

		// Instantiate and draw our chart, passing in some options.
		var chart = new google.visualization.ColumnChart(document.getElementById("barrasIngresos"));
		chart.draw(data, options);
    }
    	
    </script>';

echo '<script type="text/javascript">
		// Load the Visualization API and the piechart package.
		google.load("visualization", "1.0", {"packages":["corechart"]});

		// Set a callback to run when the Google Visualization API is loaded.
		google.setOnLoadCallback(drawChart);

		// Callback that creates and populates a data table, 
		// instantiates the pie chart, passes in the data and
		// draws it.
		function drawChart() {

		// Create the data table.
		var data = new google.visualization.DataTable();
		data.addColumn("string", "Instituciones");
		data.addColumn("number", "Cantidad");
		data.addColumn({type: "string", role: "tooltip"});';
		foreach($totalIngresos as $valor){
			echo 'data.addRows([["' . $valor['ingreso'] . '",' . $valor['cantidad'] . ',"' . $valor['ingreso'] . ':' . number_format($valor['cantidad']) . '"]]);';
		}

		echo '
		// Set chart options
		var options = {
			"title":"Porcentaje de ingresos por categorías",
			"width":550,
			"height":500,
			hAxis: {title: "Tipo de Ingresos"},
			vAxis: 
			{
				title: "Cant. Ingreso",
				viewWindowMode: "explicit",
				viewWindow: 
				{					
					min: 0,
		        },	        
			},
			"legend":"right",
		};

		// Instantiate and draw our chart, passing in some options.
		var chart = new google.visualization.PieChart(document.getElementById("pastelIngresos"));
		chart.draw(data, options);
    }
    </script>';
    
echo '<script type="text/javascript">
		// Load the Visualization API and the piechart package.
		google.load("visualization", "1.0", {"packages":["corechart"]});

		// Set a callback to run when the Google Visualization API is loaded.
		google.setOnLoadCallback(drawChart);

		// Callback that creates and populates a data table, 
		// instantiates the pie chart, passes in the data and
		// draws it.
		function drawChart() {

		// Create the data table.
		var data = new google.visualization.DataTable();
		data.addColumn("string", "Beneficiarios");
		data.addColumn("number", "Cantidad");
		data.addColumn({type: "string", role: "tooltip"});';
		foreach($beneficiarios as $valor){
			echo 'data.addRows([["Niños",' . $valor['niños'] . ',"Niños:' . number_format($valor['niños']) . '"]]);';
			echo 'data.addRows([["Niñas",' . $valor['niñas'] . ',"Niñas:' . number_format($valor['niños']) . '"]]);';
			echo 'data.addRows([["Jóvenes hombres",' . $valor['Jóvenes hombres'] . ',"Jóvenes hombres:' . number_format($valor['Jóvenes hombres']) . '"]]);';
			echo 'data.addRows([["Jóvenes mujeres",' . $valor['Jóvenes mujeres'] . ',"Jóvenes mujeres:' . number_format($valor['Jóvenes mujeres']) . '"]]);';
			echo 'data.addRows([["Adultos hombres",' . $valor['Adultos hombres'] . ',"Adultos hombres:' . number_format($valor['Adultos hombres']) . '"]]);';
			echo 'data.addRows([["Adultos mujeres",' . $valor['Adultos mujeres'] . ',"Adultos mujeres:' . number_format($valor['Adultos mujeres']) . '"]]);';
			echo 'data.addRows([["Mayores hombres",' . $valor['Mayores hombres'] . ',"Mayores hombres:' . number_format($valor['Mayores hombres']) . '"]]);';
			echo 'data.addRows([["Mayores mujeres",' . $valor['Mayores mujeres'] . ',"Mayores mujeres:' . number_format($valor['Mayores mujeres']) . '"]]);';			
		}

		echo '
		// Set chart options
		var options = {
			"title":"Beneficiarios 2012 - Total ' . number_format($beneficiarios[0]['Totales']) . '",
			"width":550,
			"height":500,
			hAxis: {title: "Tipos de Beneficiarios"},
			vAxis: 
			{
				title: "Cant. Beneficiarios",
				viewWindowMode: "explicit",
				viewWindow: 
				{					
					min: 0,
		        },	        
			},
			legend:"none",
			colors:["#39AECF"],
		};


		// Instantiate and draw our chart, passing in some options.
		var chart = new google.visualization.ColumnChart(document.getElementById("beneficiariosBarras"));
		chart.draw(data, options);
    }
    </script>';
    
echo '<script type="text/javascript">
		// Load the Visualization API and the piechart package.
		google.load("visualization", "1.0", {"packages":["corechart"]});

		// Set a callback to run when the Google Visualization API is loaded.
		google.setOnLoadCallback(drawChart);

		// Callback that creates and populates a data table, 
		// instantiates the pie chart, passes in the data and
		// draws it.
		function drawChart() {

		// Create the data table.
		var data = new google.visualization.DataTable();
		data.addColumn("string", "Ingresos");
		data.addColumn("number", "Cantidad");
		data.addColumn({type: "string", role: "tooltip"});';
		foreach($beneficiarios as $valor){
			echo 'data.addRows([["Niños",' . $valor['niños'] . ',"Niños:' . number_format($valor['niños']) . '"]]);';
			echo 'data.addRows([["Niñas",' . $valor['niñas'] . ',"Niñas:' . number_format($valor['niños']) . '"]]);';
			echo 'data.addRows([["Jóvenes hombres",' . $valor['Jóvenes hombres'] . ',"Jóvenes hombres:' . number_format($valor['Jóvenes hombres']) . '"]]);';
			echo 'data.addRows([["Jóvenes mujeres",' . $valor['Jóvenes mujeres'] . ',"Jóvenes mujeres:' . number_format($valor['Jóvenes mujeres']) . '"]]);';
			echo 'data.addRows([["Adultos hombres",' . $valor['Adultos hombres'] . ',"Adultos hombres:' . number_format($valor['Adultos hombres']) . '"]]);';
			echo 'data.addRows([["Adultos mujeres",' . $valor['Adultos mujeres'] . ',"Adultos mujeres:' . number_format($valor['Adultos mujeres']) . '"]]);';
			echo 'data.addRows([["Mayores hombres",' . $valor['Mayores hombres'] . ',"Mayores hombres:' . number_format($valor['Mayores hombres']) . '"]]);';
			echo 'data.addRows([["Mayores mujeres",' . $valor['Mayores mujeres'] . ',"Mayores mujeres:' . number_format($valor['Mayores mujeres']) . '"]]);';			
		}

		echo '
		// Set chart options
		var options = {
			"title":"Porcentaje de beneficiarios",
			"width":550,
			"height":500,
			hAxis: {title: "Tipo de Ingresos"},
			vAxis: 
			{
				title: "Cant. Beneficiarios",
				viewWindowMode: "explicit",
				viewWindow: 
				{
					min: 0,
		        },
			},
			"legend":"right",
		};

		// Instantiate and draw our chart, passing in some options.
		var chart = new google.visualization.PieChart(document.getElementById("beneficiariosPastel"));
		chart.draw(data, options);
    }
    </script>';
    
echo '<script type="text/javascript">
		// Load the Visualization API and the piechart package.
		google.load("visualization", "1.0", {"packages":["corechart"]});

		// Set a callback to run when the Google Visualization API is loaded.
		google.setOnLoadCallback(drawChart);

		// Callback that creates and populates a data table, 
		// instantiates the pie chart, passes in the data and
		// draws it.
		function drawChart() {

		// Create the data table.
		var data = new google.visualization.DataTable();
		data.addColumn("string", "Beneficiarios");
		data.addColumn("number", "Cantidad");
		data.addColumn({type: "string", role: "tooltip"});';		
		foreach($donativosTotales as $valor){
			echo 'data.addRows([["Persona Física",' . $valor['pf'] . ',"Persona Física:' . number_format($valor['pf']) . '"]]);';
			echo 'data.addRows([["Persona Moral",' . $valor['pm'] . ',"Persona Moral:' . number_format($valor['pm']) . '"]]);';
			echo 'data.addRows([["Fund. Nacionales",' . $valor['fn'] . ',"Fund. Nacionales:' . number_format($valor['fn']) . '"]]);';
			echo 'data.addRows([["Fund. Extranjeras",' . $valor['fe'] . ',"Fund. Extranjeras:' . number_format($valor['fe']) . '"]]);';
			echo 'data.addRows([["Gobierno Municipal",' . $valor['fgm'] . ',"Gobierno Municipal:' . number_format($valor['fgm']) . '"]]);';
			echo 'data.addRows([["Gobierno Estatal",' . $valor['fge'] . ',"Gobierno Estatal:' . number_format($valor['fge']) . '"]]);';
			echo 'data.addRows([["Gobierno Federal",' . $valor['fgf'] . ',"Gobierno Federal:' . number_format($valor['fgf']) . '"]]);';
			echo 'data.addRows([["Especie",' . $valor['especie'] . ',"Especie:' . number_format($valor['especie']) . '"]]);';
			echo 'data.addRows([["Coutas Recup.",' . $valor['cuotas'] . ',"Coutas Recup.:' . number_format($valor['cuotas']) . '"]]);';
			echo 'data.addRows([["Eventos",' . $valor['evento'] . ',"Eventos:' . number_format($valor['evento']) . '"]]);';
		}

		echo '
		// Set chart options
		var options = {
			"title":"Ingresos 2012",
			"width":550,
			"height":500,
			hAxis: {title: "Tipo de Ingresos"},
			vAxis: 
			{
				title: "Cant. Ingreso",
				viewWindowMode: "explicit",
				viewWindow: 
				{					
					min: 0,
		        },	        
			},
			legend:"none",
			colors:["#39AECF"],
		};


		// Instantiate and draw our chart, passing in some options.
		var chart = new google.visualization.ColumnChart(document.getElementById("donativosTotalesBarras"));
		chart.draw(data, options);
    }
    </script>';

echo '<script type="text/javascript">
		// Load the Visualization API and the piechart package.
		google.load("visualization", "1.0", {"packages":["corechart"]});

		// Set a callback to run when the Google Visualization API is loaded.
		google.setOnLoadCallback(drawChart);

		// Callback that creates and populates a data table, 
		// instantiates the pie chart, passes in the data and
		// draws it.
		function drawChart() {

		// Create the data table.
		var data = new google.visualization.DataTable();
		data.addColumn("string", "Instituciones");
		data.addColumn("number", "Cantidad");';
		foreach($donativosTotales as $valor){
			echo 'data.addRows([["Persona Física",' . $valor['pf'] . ']]);';
			echo 'data.addRows([["Persona Moral",' . $valor['pm'] . ']]);';
			echo 'data.addRows([["Fund. Nacionales",' . $valor['fn'] . ']]);';
			echo 'data.addRows([["Fund. Extranjeras",' . $valor['fe'] . ']]);';
			echo 'data.addRows([["Gobierno Municipal",' . $valor['fgm'] . ']]);';
			echo 'data.addRows([["Gobierno Estatal",' . $valor['fge'] . ']]);';
			echo 'data.addRows([["Gobierno Federal",' . $valor['fgf'] . ']]);';
			echo 'data.addRows([["Especie",' . $valor['especie'] . ']]);';
			echo 'data.addRows([["Coutas Recup.",' . $valor['cuotas'] . ']]);';
			echo 'data.addRows([["Eventos",' . $valor['evento'] . ']]);';
		}

		echo '
		// Set chart options
		var options = {
			"title":"Porcentaje de ingresos 2012",
			"width":550,
			"height":500,
			hAxis: {title: "Tipo de Ingresos"},
			vAxis: 
			{
				title: "Cant. Ingreso",
				viewWindowMode: "explicit",
				viewWindow: 
				{					
					min: 0,
		        },	        
			},
			"legend":"right",
		};

		// Instantiate and draw our chart, passing in some options.
		var chart = new google.visualization.PieChart(document.getElementById("donativosTotalesPastel"));
		chart.draw(data, options);
    }
    </script>';
 
?>
<div class="alert alert-info">		  
	<h3>Ingresos</h3>
</div>
<div class="row">
	<div class="span12">
		<div class="span5">
			<div id="barrasIngresos"></div>
		</div>
		<div class="span5">
			<div id="pastelIngresos"></div>
		</div>
	</div>
	<div class="span12">
		<div class="span5">
			<div id="donativosTotalesBarras"></div>
		</div>
		<div class="span5">
			<div id="donativosTotalesPastel"></div>
		</div>
	</div>
</div>
<div class="alert alert-info">		  
	<h3>Beneficiarios</h3>
</div>
<div class="row">
	<div class="span12">
		<div class="span5">
			<div id="beneficiariosBarras"></div>
		</div>
		<div class="span5">
			<div id="beneficiariosPastel"></div>
		</div>
	</div>
</div>