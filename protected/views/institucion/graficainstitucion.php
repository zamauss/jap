<?php
$this->pageCaption='Informe de actividades ' . date('Y', strtotime('-1 year')) ; // resta 1 año;
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
		array('label'=>'Imprimir ', 'url'=>array('institucion/reporteinformedeactividades','institucion'=>$_GET['institucion'])),
		array('label'=>'Gráfica ', 'url'=>array('institucion/graficainstitucion','institucion'=>$_GET['institucion'])),
	);
}
else
{
	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('institucion/acciones')),
		array('label'=>'Imprimir ', 'url'=>array('institucion/reporteinformedeactividades','institucion'=>$_GET['institucion'])),
	);
}

//Ingresos
$donativo = IngresoPorDonativo::model()->find('institucion_aid = ' . $_GET['institucion']);
$cuotaRecuperacion = IngresoPorCuotasdeRecuperacion::model()->find('institucion_aid = ' . $_GET['institucion']);
$evento = IngresoPorEvento::model()->find('institucion_aid = ' . $_GET['institucion']);
$inversion = Inversion::model()->find('institucion_aid = ' . $_GET['institucion']);
$totalDonativo = 	$donativo->personaFisica + 
					$donativo->personaMoral + 
					$donativo->fundacionesNacionales + 
					$donativo->fundacionesExtrajeras + 
					$donativo->fondosGubernamentalesMunicipal +
					$donativo->fondosGubernamentalesEstatal +
					$donativo->fondosGubernamentalesFederal;
					
$totalCuotaRecuperacion = $cuotaRecuperacion->consultas;
$totalEvento = 	$evento->colectas + 
				$evento->eventos + 
				$evento->rifas + 
				$evento->conferencias + 
				$evento->ventas +
				$evento->otros;
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
		data.addColumn("number", "Cantidad");';
		foreach($totalIngresos as $valor){
			echo 'data.addRows([["' . $valor['ingreso'] . '",' . $valor['cantidad'] . ']]);';
		}

		echo '
		// Set chart options
		var options = {
			"title":"Objetivos pendientes por colaborador",
			"width":450,
			"height":300,
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
			legend: "none",
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
		data.addColumn("number", "Cantidad");';
		foreach($totalIngresos as $valor){
			echo 'data.addRows([["' . $valor['ingreso'] . '",' . $valor['cantidad'] . ']]);';
		}

		echo '
		// Set chart options
		var options = {
			"title":"Objetivos pendientes por colaborador",
			"width":450,
			"height":300,
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
			slices: {
						0: {
							color: "#61B7CF"
						}, 
						1: {
							color: "#39AECF"
						},
						2: {
							color: "#057D9F"
						},
					},
			is3D:true,
		};

		// Instantiate and draw our chart, passing in some options.
		var chart = new google.visualization.PieChart(document.getElementById("pastelIngresos"));
		chart.draw(data, options);
    }
    </script>';

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
		data.addColumn("number", "Cantidad");';
		foreach($totalIngresos as $valor){
			echo 'data.addRows([["' . $valor['ingreso'] . '",' . $valor['cantidad'] . ']]);';
		}

		echo '
		// Set chart options
		var options = {
			"title":"Objetivos pendientes por colaborador",
			"width":450,
			"height":300,
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
			legend: "none",
			colors:["#39AECF"],
		};

		// Instantiate and draw our chart, passing in some options.
		var chart = new google.visualization.ColumnChart(document.getElementById("barrasBeneficiarios"));
		chart.draw(data, options);
    }
    </script>';

?>
<h2><?php echo $donativo->institucion->nombre; ?></h2>
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
	
</div>


<div class="alert alert-info">		  
	<h3>Gastos</h3>
</div>
<div class="row">
	<div class="span12">
		
	</div>
</div>