<?php

	$this->pageCaption='Dashboard';
	$this->pageTitle='Estadísticas';
	$this->pageDescription='';
	$this->breadcrumbs=array(
		'Gráficas',
	);
	
	$this->menu=array(
		array('label'=>'Volver ', 'url'=>array('site/index')),
	);	
	$connection = Yii::app()->db;
	
	//------------------------------------------------------------------------------------------------//
	
	$queryMunicipio = 'select m.nombre as nombre, count(*) as cantidad from Institucion i
						inner join Municipio m on m.id = i.domicilioMunicipio_aid
						group by domicilioMunicipio_aid';
	$commandMunicipios = $connection->createCommand($queryMunicipio);
	$municipios = $commandMunicipios->queryAll();
	
	//------------------------------------------------------------------------------------------------//
	
	$queryRFCPorMunicipio = 'select m.nombre as nombre, sum(CASE WHEN i.rfc IS NULL or i.rfc = "" THEN 0
						ELSE 1 END) AS cantidad
						FROM Institucion i
						inner join Municipio m on m.id = i.domicilioMunicipio_aid
						group by i.domicilioMunicipio_aid;';
	$commandRFCPorMunicipios = $connection->createCommand($queryRFCPorMunicipio);
	$rfcPorMunicipios = $commandRFCPorMunicipios->queryAll();
	
	//------------------------------------------------------------------------------------------------//
	
	$queryCluniPorMunicipio = 'select m.nombre as nombre, sum(CASE WHEN i.cluni IS NULL or i.cluni = "" THEN 0
						ELSE 1 END) AS cantidad
						FROM Institucion i
						inner join Municipio m on m.id = i.domicilioMunicipio_aid
						group by i.domicilioMunicipio_aid;';
	$commandCluniPorMunicipios = $connection->createCommand($queryCluniPorMunicipio);
	$cluniPorMunicipios = $commandCluniPorMunicipios->queryAll();
	
	//------------------------------------------------------------------------------------------------//
	
	$totalInst = Institucion::model()->count();
	
	
	//------------------------------------------------------------------------------------------------//

	//Gráfica Impresiones Columnas
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
			data.addColumn("string", "IAPs");
			data.addColumn("number", "Impresiones");';
			foreach($municipios as $valor){
				echo 'data.addRows([["' . $valor['nombre'] . '",' . $valor['cantidad'] . ']]);';
			}
	
			echo '
			var options = {
				"title":"IAP por Municipio",				
				hAxis: {title: "Municipios"},
				vAxis: {
					title: "Cantidad IAPs",
					viewWindowMode: "explicit",
					viewWindow: 
					{
			          max: ' . $totalInst . ',
			          min: 0,
			        },
					gridlines: 
					{
			          count: 1,
			        },			        
				},
				legend: "none",				
				colors:["#3F8FD2"],
			};
	
			// Instantiate and draw our chart, passing in some options.
			var chart = new google.visualization.ColumnChart(document.getElementById("municipio"));
			chart.draw(data, options);
	    }
	    </script>';
	 
	 //Gráfica Impresiones Columnas
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
			data.addColumn("string", "IAPs");
			data.addColumn("number", "Impresiones");';
			foreach($rfcPorMunicipios as $valor){
				echo 'data.addRows([["' . $valor['nombre'] . '",' . $valor['cantidad'] . ']]);';
			}
	
			echo '
			var options = {
				"title":"IAP con RFC por Municipio",				
				vAxis: {
					viewWindowMode: "implicit",
					viewWindow: 
					{
			          max: ' . $totalInst . ',
			          min: 0,
			        },
					gridlines: 
					{
			          count: 1,
			        },			        
				},
				legend: "none",				
				colors:["#3F8FD2"],
			};
	
			// Instantiate and draw our chart, passing in some options.
			var chart = new google.visualization.ColumnChart(document.getElementById("rfcMunicipio"));
			chart.draw(data, options);
	    }
	    </script>';
	    //Gráfica Impresiones Columnas
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
			data.addColumn("string", "IAPs");
			data.addColumn("number", "Cantidad IAP");';
			foreach($cluniPorMunicipios as $valor){
				echo 'data.addRows([["' . $valor['nombre'] . '",' . $valor['cantidad'] . ']]);';
			}
	
			echo '
			var options = {
				"title":"IAP con Cluni por Municipio",				
				vAxis: {				
					viewWindowMode: "implicit",
					viewWindow: 
					{
			          max: ' . $totalInst . ',
			          min: 0,
			        },
					gridlines: 
					{
			          count: 1,
			        },			        
				},
				legend: "none",				
				colors:["#3F8FD2"],
			};
	
			// Instantiate and draw our chart, passing in some options.
			var chart = new google.visualization.ColumnChart(document.getElementById("cluniMunicipio"));
			chart.draw(data, options);
	    }
	    </script>';
	    
	    
	    
	    //Gráfica Impresiones Por Giro Pastel
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
				data.addColumn("string", "Giro");
				data.addColumn("number", "Impresiones");';
				foreach($cluniPorMunicipios as $valor){
					echo 'data.addRows([["' . $valor['nombre'] . '",' . $valor['cantidad'] . ']]);';
				}

				echo '
				// Set chart options
				var options = {
					"title":"Impactos visuales por giro",
					"width":450,
					"height":300,
					//hAxis: {title: "Impresiones"},
					vAxis: {title: "Giros"},
					"legend":{
						position:"in",
						alignment:"center",
						textStyle:{
							fontSize:8,
						}
					},
					is3D:"true",
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
						3: {
							color: "#216477"
						},
						4: {
							color: "#025167"
						}
					},
				};

				// Instantiate and draw our chart, passing in some options.
				var chart = new google.visualization.PieChart(document.getElementById("impresionesPorGiro"));
				chart.draw(data, options);
		    }
		    </script>';
?>
<div class="alert alert-info">
	<h4>Gráficas por Municipios</h4>
</div>
<div style="height: 1200px;">
	<div id="municipio" style="width:450px; height:300px; float:left; margin-left=350px;"></div>
	<div id="rfcMunicipio" style="width:450px; height:300px; float:left; margin-left=700px;"></div>
	<div id="cluniMunicipio" style="width:450px; height:300px; float:left; margin-left=350px;"></div>
	<div id="impresionesPorGiro" style="width:450px; height:300px; float:left; margin-left=350px;"></div>
</div>
<div class="alert alert-info">
	<h4>Gráficas por Ámbitos</h4>
</div>