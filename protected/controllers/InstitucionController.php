<?php

class InstitucionController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('autocompletesearch'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index',
					'view',
					'create',
					'update',
					'admin',
					'delete',
					'dynamicList',
					'crearingreso',
					'acciones',
					'termino',
					'actualizaringreso',
					'reportes',
					'reportepresupuesto',
					'crearinversion',
					'actualizarinversion',
					'actualizadeducibles',
					'actualizafiltro',
					'estadisticacluni',
					'graficas',
					'programa',
					'actualizaactividad',
					'cuadrogeneral',
					'verinformedeactividades',
					'reporteinformedeactividades',
					'reporteprogramas',
					'verprogramas',
					'verpresupuesto',
					'graficainstitucion',
					'graficasinstituciones',
				),
				'users'=>array('@'),
			),
			/*
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),*/
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Institucion;
					
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		

		if(isset($_POST['Institucion']))
		{
			$model->attributes=$_POST['Institucion'];
			$model->donativoDeducible = $_POST['donativoDeducible'];
			$model->donativoConvenio = $_POST['donativoConvenio'];
			$model->actividadPreponderante = $_POST['actividadPreponderante'];
			$model->dictaminas = $_POST['dictaminas'];
			if($_POST['Institucion']=="")
				$model->cluni = "NULL";
			$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
			$model->usuario_did = $usuarioActual->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		$this->render('create',array(
				'model'=>$model,
		));		
	}
	
	public function actionCrearingreso()
	{
		$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
		$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
		
		$modelDonativo = new IngresoPorDonativo;
		$modelIngresoPorCuotasDeRecuperacion = new IngresoPorCuotasdeRecuperacion;
		$modelIngresoPorEvento = new IngresoPorEvento;
		$modelGastoDeAdministracion = new GastoDeAdministracion;
		$modelGastoOperativo = new GastoOperativo;
		$modelInversion = new Inversion;
		$modelInforme = new Informe;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['IngresoPorDonativo'],$_POST['IngresoPorCuotasdeRecuperacion'],$_POST['IngresoPorEvento'], $_POST['GastoDeAdministracion'], $_POST['GastoOperativo'], $_POST['Informe'], $_POST['Inversion']))			
		{
			$modelDonativo->attributes=$_POST['IngresoPorDonativo'];
			$modelIngresoPorCuotasDeRecuperacion->attributes=$_POST['IngresoPorCuotasdeRecuperacion'];
			$modelIngresoPorEvento->attributes = $_POST['IngresoPorEvento'];
			$modelGastoDeAdministracion->attributes = $_POST['GastoDeAdministracion'];
			$modelGastoOperativo->attributes = $_POST['GastoOperativo'];
			$modelInversion->attributes=$_POST['Inversion'];
			$modelInforme->attributes=$_POST['Informe'];
			
			$modelDonativo->institucion_aid = $usuarioActual->institucion->id;
			$modelDonativo->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelDonativo->estatus_did = 1;
			$modelDonativo->editable = 1;
			$modelDonativo->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelIngresoPorCuotasDeRecuperacion->institucion_aid = $usuarioActual->institucion->id;
			$modelIngresoPorCuotasDeRecuperacion->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelIngresoPorCuotasDeRecuperacion->estatus_did = 1;
			$modelIngresoPorCuotasDeRecuperacion->editable = 1;
			$modelIngresoPorCuotasDeRecuperacion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelIngresoPorEvento->institucion_aid = $usuarioActual->institucion->id;
			$modelIngresoPorEvento->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelIngresoPorEvento->estatus_did = 1;
			$modelIngresoPorEvento->editable = 1;
			$modelIngresoPorEvento->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelGastoDeAdministracion->institucion_aid = $usuarioActual->institucion->id;
			$modelGastoDeAdministracion->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelGastoDeAdministracion->estatus_did = 1;
			$modelGastoDeAdministracion->editable = 1;
			$modelGastoDeAdministracion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelGastoOperativo->institucion_aid = $usuarioActual->institucion->id;
			$modelGastoOperativo->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelGastoOperativo->estatus_did = 1;
			$modelGastoOperativo->editable = 1;
			$modelGastoOperativo->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelInversion->institucion_aid = $usuarioActual->institucion->id;
			$modelInversion->ejercicio_did = $ejercicioFiscal->id;
			$modelInversion->estatus_did = 1;
			$modelInversion->editable = 1;
			$modelInversion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelInforme->institucion_aid = $usuarioActual->institucion->id;
			$modelInforme->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelInforme->estatus_did = 1;
			$modelInforme->editable = 1;
			$modelInforme->ultimaModificacion_dt = date("Y-m-d H:i:s");
			$modelInforme->numeroPersonasTotales =  $_POST['Informe']['numeroPersonasNomina'] +
													$_POST['Informe']['numeroPersonasAsimilables'] +
													$_POST['Informe']['numeroPersonasProfesionales'] +
													$_POST['Informe']['numeroPersonasVoluntarias'] +
													$_POST['Informe']['numeroPersonasPrestadoresSS'];			
			$modelInforme->numeroBeneficiariosTotales =  $_POST['Informe']['numeroBeneficiariosNinosH'] +
													$_POST['Informe']['numeroBeneficiariosNinosM'] +
													$_POST['Informe']['numeroBeneficiariosJovenesH'] +
													$_POST['Informe']['numeroBeneficiariosJovenesM'] +
													$_POST['Informe']['numeroBeneficiariosAdultosH'] +
													$_POST['Informe']['numeroBeneficiariosAdultosM'] +
													$_POST['Informe']['numeroBeneficiariosMayorH'] +
													$_POST['Informe']['numeroBeneficiariosMayorM'];										
					
			$valido = $modelDonativo->validate();
			$valido = $modelIngresoPorCuotasDeRecuperacion->validate();
			$valido = $modelIngresoPorEvento->validate();
			$valido = $modelInforme->validate();			
			
			if($valido)
			{
				if(
					$modelDonativo->save() && 
					$modelIngresoPorCuotasDeRecuperacion->save() && 
					$modelIngresoPorEvento->save() &&
					$modelGastoDeAdministracion->save() &&
					$modelGastoOperativo->save() &&
					$modelInversion->save() &&
					$modelInforme->save()
				)
					$this->redirect(array('termino','que'=>'Ingreso','ac'=>'crear'));
			}			
		}

		$this->render('crearingreso',array(
			'modelDonativo'=>$modelDonativo,
			'modelIngresoPorCuotasDeRecuperacion'=>$modelIngresoPorCuotasDeRecuperacion,
			'modelIngresoPorEvento'=>$modelIngresoPorEvento,
			'modelGastoDeAdministracion'=>$modelGastoDeAdministracion,
			'modelGastoOperativo'=>$modelGastoOperativo,
			'modelInversion'=>$modelInversion,
			'modelInforme'=>$modelInforme,
		));
	}	
	
	public function actionCrearinversion()
	{
		$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
		$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
		
		$modelInversion=new Inversion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Inversion']))			
		{
			$modelInversion->attributes=$_POST['Inversion'];
			
			$modelInversion->institucion_aid = $usuarioActual->institucion->id;
			$modelInversion->ejercicio_did = $ejercicioFiscal->id;
			$modelInversion->estatus_did = 1;
			$modelInversion->editable = 1;
			$modelInversion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$valido = $modelInversion->validate();
			
			if($valido)
			{
				if(
					$modelInversion->save()
				)
					$this->redirect(array('termino','que'=>'Inversion','ac'=>'crear'));
			}			
		}

		$this->render('crearinversion',array(
			'modelInversion'=>$modelInversion,
		));
	}

	
	public function actionActualizaringreso()
	{
		$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
		$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
		
		
		
		$modelDonativo = IngresoPorDonativo::model()->find('institucion_aid=:donativo',
			array(':donativo'=>$usuarioActual->institucion_aid));
					
		$modelIngresoPorCuotasDeRecuperacion=IngresoPorCuotasdeRecuperacion::model()->find('institucion_aid=:donativo',
			array(':donativo'=>$usuarioActual->institucion_aid));
			
		$modelIngresoPorEvento = IngresoPorEvento::model()->find('institucion_aid=:donativo',
			array(':donativo'=>$usuarioActual->institucion_aid));
			
		$modelGastoDeAdministracion = GastoDeAdministracion::model()->find('institucion_aid=:donativo',
			array(':donativo'=>$usuarioActual->institucion_aid));
					
		$modelGastoOperativo=GastoOperativo::model()->find('institucion_aid=:donativo',
			array(':donativo'=>$usuarioActual->institucion_aid));
		
		$modelInversion = Inversion::model()->find('institucion_aid=:donativo',
			array(':donativo'=>$usuarioActual->institucion_aid));	
		
		$modelInforme = Informe::model()->find('institucion_aid=:donativo',
			array(':donativo'=>$usuarioActual->institucion_aid));					
			
		if(isset($_POST['IngresoPorDonativo'],$_POST['IngresoPorCuotasdeRecuperacion'],$_POST['IngresoPorEvento'],$_POST['GastoDeAdministracion'],$_POST['GastoOperativo'], $_POST['Inversion'], $_POST['Informe']))			
		{
			$modelDonativo->attributes=$_POST['IngresoPorDonativo'];
			$modelIngresoPorCuotasDeRecuperacion->attributes=$_POST['IngresoPorCuotasdeRecuperacion'];
			$modelIngresoPorEvento->attributes = $_POST['IngresoPorEvento'];
			$modelGastoDeAdministracion->attributes = $_POST['GastoDeAdministracion'];
			$modelGastoOperativo->attributes = $_POST['GastoOperativo'];
			$modelInversion->attributes=$_POST['Inversion'];
			$modelInforme->attributes=$_POST['Informe'];
			
			$modelDonativo->institucion_aid = $usuarioActual->institucion->id;
			$modelDonativo->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelDonativo->estatus_did = 1;
			$modelDonativo->editable = 1;
			$modelDonativo->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelIngresoPorCuotasDeRecuperacion->institucion_aid = $usuarioActual->institucion->id;
			$modelIngresoPorCuotasDeRecuperacion->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelIngresoPorCuotasDeRecuperacion->estatus_did = 1;
			$modelIngresoPorCuotasDeRecuperacion->editable = 1;
			$modelIngresoPorCuotasDeRecuperacion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelIngresoPorEvento->institucion_aid = $usuarioActual->institucion->id;
			$modelIngresoPorEvento->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelIngresoPorEvento->estatus_did = 1;
			$modelIngresoPorEvento->editable = 1;
			$modelIngresoPorEvento->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelGastoDeAdministracion->institucion_aid = $usuarioActual->institucion->id;
			$modelGastoDeAdministracion->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelGastoDeAdministracion->estatus_did = 1;
			$modelGastoDeAdministracion->editable = 1;
			$modelGastoDeAdministracion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelGastoOperativo->institucion_aid = $usuarioActual->institucion->id;
			$modelGastoOperativo->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelGastoOperativo->estatus_did = 1;
			$modelGastoOperativo->editable = 1;
			$modelGastoOperativo->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelInversion->institucion_aid = $usuarioActual->institucion->id;
			$modelInversion->ejercicio_did = $ejercicioFiscal->id;
			$modelInversion->estatus_did = 1;
			$modelInversion->editable = 1;
			$modelInversion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelInforme->institucion_aid = $usuarioActual->institucion->id;
			$modelInforme->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelInforme->estatus_did = 1;
			$modelInforme->editable = 1;
			$modelInforme->ultimaModificacion_dt = date("Y-m-d H:i:s");
			$modelInforme->numeroPersonasTotales =  $_POST['Informe']['numeroPersonasNomina'] +
													$_POST['Informe']['numeroPersonasAsimilables'] +
													$_POST['Informe']['numeroPersonasProfesionales'] +
													$_POST['Informe']['numeroPersonasVoluntarias'] +
													$_POST['Informe']['numeroPersonasPrestadoresSS'];
			$modelInforme->numeroBeneficiariosTotales =  $_POST['Informe']['numeroBeneficiariosNinosH'] +
													$_POST['Informe']['numeroBeneficiariosNinosM'] +
													$_POST['Informe']['numeroBeneficiariosJovenesH'] +
													$_POST['Informe']['numeroBeneficiariosJovenesM'] +
													$_POST['Informe']['numeroBeneficiariosAdultosH'] +
													$_POST['Informe']['numeroBeneficiariosAdultosM'] +
													$_POST['Informe']['numeroBeneficiariosMayorH'] +
													$_POST['Informe']['numeroBeneficiariosMayorM'];	
			
			if($modelDonativo->save() && 
				$modelIngresoPorCuotasDeRecuperacion->save() && 
				$modelIngresoPorEvento->save() &&
				$modelGastoDeAdministracion->save() &&
				$modelGastoOperativo->save() &&
				$modelInforme->save() &&
				$modelInversion->save()
			)
				$this->redirect(array('termino','que'=>'Ingreso','ac'=>'actualizar'));
		}
		
		$this->render('crearingreso',array(
			'modelDonativo'=>$modelDonativo,
			'modelIngresoPorCuotasDeRecuperacion'=>$modelIngresoPorCuotasDeRecuperacion,
			'modelIngresoPorEvento'=>$modelIngresoPorEvento,
			'modelGastoDeAdministracion'=>$modelGastoDeAdministracion,
			'modelGastoOperativo'=>$modelGastoOperativo,
			'modelInversion'=>$modelInversion,
			'modelInforme'=>$modelInforme,
		));

	}
	
	public function actionActualizaregreso()
	{
		$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
		$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
		
		$modelGastoDeAdministracion = GastoDeAdministracion::model()->find('institucion_aid=:donativo',
			array('donativo'=>$usuarioActual->institucion_aid));
					
		$modelGastoOperativo=GastoOperativo::model()->find('institucion_aid=:donativo',
			array('donativo'=>$usuarioActual->institucion_aid));
			
		if(	isset($_POST['GastoDeAdministracion']) &&
			isset($_POST['GastoOperativo'])) 
		{
			$modelGastoDeAdministracion->attributes = $_POST['GastoDeAdministracion'];
			$modelGastoOperativo->attributes = $_POST['GastoOperativo'];
			
			$modelGastoDeAdministracion->institucion_aid = $usuarioActual->institucion->id;
			$modelGastoDeAdministracion->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelGastoDeAdministracion->estatus_did = 1;
			$modelGastoDeAdministracion->editable = 1;
			$modelGastoDeAdministracion->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			$modelGastoOperativo->institucion_aid = $usuarioActual->institucion->id;
			$modelGastoOperativo->ejercicioFiscal_did = $ejercicioFiscal->id;
			$modelGastoOperativo->estatus_did = 1;
			$modelGastoOperativo->editable = 1;
			$modelGastoOperativo->ultimaModificacion_dt = date("Y-m-d H:i:s");
			
			if(	$modelGastoDeAdministracion->save() &&
				$modelGastoOperativo->save()
			)
				$this->redirect(array('termino','que'=>'Egreso','ac'=>'crear'));
		}

		$this->render('crearegreso',array(
			'modelGastoDeAdministracion'=>$modelGastoDeAdministracion,
			'modelGastoOperativo'=>$modelGastoOperativo,
		));

	}
	
	public function actionActualizarinversion()
	{
		$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
		$ejercicioFiscal = EjercicioFiscal::model()->find('estatus_did=1');
		
		$modelInversion = Inversion::model()->find('institucion_aid=:donativo',
			array('donativo'=>$usuarioActual->institucion_aid));					
					
		if(isset($_POST['Inversion']))			
		{
			$modelInversion->attributes=$_POST['Inversion'];
			
			$modelInversion->institucion_aid = $usuarioActual->institucion->id;
			$modelInversion->ejercicio_did = $ejercicioFiscal->id;
			$modelInversion->estatus_did = 1;
			$modelInversion->editable = 1;
									
			if($modelInversion->save()
			)
				$this->redirect(array('termino','que'=>'Inversión','ac'=>'actualizar'));
		}
		
		$this->render('actualizarinversion',array(
			'modelInversion'=>$modelInversion,			
		));

	}


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Institucion']))
		{			
			$model->attributes=$_POST['Institucion'];
			$model->donativoDeducible = $_POST['Institucion']['donativoDeducible'];
			$model->donativoConvenio = $_POST['Institucion']['donativoConvenio'];
			$model->actividadPreponderante_did = $_POST['Institucion']['actividadPreponderante_did'];
			$model->dictaminas = $_POST['Institucion']['dictaminas'];
			$model->ambito_did = $_POST['Institucion']['ambito_did'];
			
			/*
				echo '<pre>';
				print_r($_POST);
				echo '</pre>';
				echo '<pre>';
				print_r($model);
				echo '</pre>';
			*/
			
			if(!isset($_POST['Institucion']['estatus_did']))
				$model->estatus_did = 1;

			if($_POST['Institucion']=="")
				$model->cluni = "No";
			$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
			$model->usuario_did = $usuarioActual->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model=$this->loadModel($id);
		$model->estatus_did = 2;
		$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
		$model->usuario_did = $usuarioActual->id;
		if($model->save()){
			$this->redirect(array('view','id'=>$model->id));
		}

		exit;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidat
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Institucion', array(
		    'criteria'=>array(
		        'condition'=>'',
		        'order'=>'estatus_did ASC',
		        'with'=>array(),
		    ),
		    'pagination'=>array(
		        'pageSize'=>20,
		    ),
		));
		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Institucion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Institucion']))
			$model->attributes=$_GET['Institucion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Institucion::model()->findByPk((int)$id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='institucion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	
	public function actionAutocompletesearch()
	{
	    $q = "%". $_GET['term'] ."%";
	 	$result = array();
	    if (!empty($q))
	    {
			$criteria=new CDbCriteria;
			$criteria->select=array('id', "CONCAT_WS(' ',nombre) as nombre");
			$criteria->condition="lower(CONCAT_WS(' ',nombre)) like lower(:nombre) ";
			$criteria->params=array(':nombre'=>$q);
			$criteria->limit='10';
	       	$cursor = Institucion::model()->findAll($criteria);
			foreach ($cursor as $valor)	
				$result[]=Array('label' => $valor->nombre,  
				                'value' => $valor->nombre,
				                'id' => $valor->id, );
	    }
	    echo json_encode($result);
	    Yii::app()->end();
	}
	
	
	public function actionDynamicList()
	{
		echo CHtml::tag('option',array(),CHtml::encode('Seleccione un Institución'),true);
		if(Yii::app()->request->isAjaxRequest)
		{
			$criteria=new CDbCriteria;
			
			$model = new Institucion;
			$relations =$model->relations();
			
			$bandera =false;
			
			foreach($relations as $nombre=>$relacion)
			{
				if( $relacion[0]==Institucion::BELONGS_TO && isset($_POST[$relacion[2]]) && !empty($_POST[$relacion[2]]) )
				{
					$criteria->compare($relacion[2],$_POST[$relacion[2]]);
					$bandera = true;
				}
			}
			$criteria->order='nombre';
			
			if($bandera)
				$data=CHtml::listData(Institucion::model()->findAll($criteria), 'id', 'nombre');
			else
				$data=array();
			foreach($data as $value=>$name)
			{
				echo CHtml::tag('option',
				array('value'=>$value),CHtml::encode($name),true);
			}
			
		}
	}
	
	public function actionAcciones()
	{
		$this->render('acciones',array());
	}
	
	public function actionTermino()
	{
		$this->render('termino',array());
	}
	
	public function actionCuadrogeneral()
	{
		$this->render('cuadrogeneral',array());
	}
	
	public function actionReportes()
	{
		$this->render('reportes',array());
	}
	
	public function actionVerprogramas()
	{
		$model=ProgramaDeTrabajo::model()->find('institucion_id = ' . $_GET['institucion']);
	
		$this->render('verprogramas', array('model'=>$model));
	}
	
	public function actionVerinformedeactividades()
	{
		$this->render('verinformedeactividades', array());
	}
	
	public function actionVerpresupuesto()
	{
		$this->render('verpresupuesto', array());
	}
	
	public function actionReportepresupuesto()
	{
		$this->layout="//layouts/pdf";
		$this->render('reportepresupuesto',array());
	}
	
	public function actionReporteinformedeactividades()
	{
		$this->layout="//layouts/pdf";
		$this->render('reporteinformedeactividades',array('institucion'=>$_GET['institucion']));
	}
	public function actionReporteprogramas()
	{
		$this->layout="//layouts/pdf";
		$model=ProgramaDeTrabajo::model()->find('institucion_id = ' . $_GET['institucion']);
		$this->render('verprogramas', array('model'=>$model));
	}
	
	public function actionActualizadeducibles()
    {    	        
        if($_POST['Institucion']['donativoDeducible'] == 1)
        {
	        echo CHtml::tag('option',array('value' => '1'),'Nacional',true);
	        echo CHtml::tag('option',array('value' => '2'),'Nacional/Extranjera',true);
	    }
	    else
	    	echo CHtml::tag('option',array('value' => '0'),'Ninguna',true);
    }
    
    public function actionActualizaactividad()
    {    	        
    	/*
    	echo $_POST['Institucion']['ambito_did'];
        if(isset($_POST['Institucion']['ambito_did']))
        {
        	
        	$actividades = ActividadPreponderante::model()->findAll('ambito_did='.$_POST['Institucion']['ambito_did']);
        	$actividades = CHtml::listData($actividades,'id','nombre');
        	foreach($actividades as $id  => $value)
        	{
	        	echo CHtml::tag('option',array('value' => $id),CHtml::encode($value),true);
        	}
	    }
	    else
	    	echo CHtml::tag('option',array('value' => '0'),'Ninguna',true);
	    */
	    
	    echo CHtml::tag('option',array(),CHtml::encode('Seleccione una Actividad'),true);
        if(Yii::app()->request->isAjaxRequest  )
        {
            $criteria=new CDbCriteria;
            
            $model = new ActividadPreponderante;
            $relations =$model->relations();
            
            $bandera =false;
            
            foreach($relations as $nombre=>$relacion)
            {
                if( $relacion[0]==ActividadPreponderante::BELONGS_TO && isset($_POST[$relacion[2]]) && !empty($_POST[$relacion[2]]) )
                {
                    $criteria->compare($relacion[2],$_POST[$relacion[2]]);
                    $bandera = true;
                }
            }
            $criteria->order='nombre';
            
            if($bandera)
                $data=CHtml::listData(ActividadPreponderante::model()->findAll($criteria), 'id', 'nombre');
            else
                $data=array();
            foreach($data as $value=>$name)
            {
                echo CHtml::tag('option',
                array('value'=>$value),CHtml::encode($name),true);
            }            
        }
    }
    
    public function actionActualizafiltro()
    {	
    	
    	/*
	    	$municipio = "";
	    	$ambito = "";	    	
	    	$mensaje="";
	    	$reporte = "";
		    if($_POST['domicilioMunicipio_aid'] != "" && $_POST['ambito_did'] != "" && $_POST['reporte'] != "")
		    {
			    $municipio = $_POST['domicilioMunicipio_aid'];
			    $ambito = $_POST['ambito_did'];
			    $instituciones = Institucion::model()->findAll('domicilioMunicipio_aid = :x && ambito_did = :y', 
			    			array(':x'=>$municipio, ':y' => $ambito));
			    $mensaje = 'dos';
		    }
		    if($_POST['domicilioMunicipio_aid'] == "" && $_POST['ambito_did'] == "" && $_POST['reporte'] == "")
		    {
			    $municipio = $_POST['domicilioMunicipio_aid'];
			    $ambito = $_POST['ambito_did'];
			    $instituciones = Institucion::model()->findAll();
			    $mensaje = 'dos';
		    }
		    else if($_POST['domicilioMunicipio_aid'] != "" && $_POST['ambito_did'] == "")
		    {
			    $municipio = $_POST['domicilioMunicipio_aid'];
			    $instituciones = Institucion::model()->findAll('domicilioMunicipio_aid = :x', 
			    			array(':x'=>$municipio));
			    $mensaje = 'municipio';
		    }
		    else if($_POST['domicilioMunicipio_aid'] == "" && $_POST['ambito_did'] != "")
		    {
			    $ambito = $_POST['ambito_did'];
			    $instituciones = Institucion::model()->findAll('ambito_did = :y', 
			    			array(':y' => $ambito));
			    $mensaje = 'ambito';
		    }
		    echo 'municipio ' . $municipio . '<br/>';
		    echo 'ambito ' . $ambito . '<br/>';
		    echo 'reporte ' . $reporte . '<br/>';
		    echo 'mensaje ' . $mensaje;
	
			    
		    */
		    $instituciones = array();
		    $municipio = $_POST['domicilioMunicipio_aid'];
		    $ambito = $_POST['ambito_did'];
		    $reporte = $_POST['reporte'];
		    
		    if(empty($_POST['reporte']))
		    {
			    echo 'Sin reporte ';
		    }
		    else
		    {
		    	echo 'Con reporte ';
				if($_POST['reporte'] == 'rfc')
			    {
			    	echo 'rfc';
				    
				    $instituciones = Institucion::model()->findAll('domicilioMunicipio_aid LIKE ":x" && 
				    ambito_did LIKE ":y" && rfc <> ""', array(':x'=> "%" . $municipio . "%", 
				    ':y' => "%" .$ambito . "%"));				    
			    }
		    }		    
		    
		    echo '
		    	<table class="table table-bordered">
		    		<thead class="thead">
		    			<tr>
		    				<td class="span3"><strong>Nombre	</strong></td>
		    				<td class="span3"><strong>Municipio	</strong></td>
		    				<td class="span3"><strong>Ámbito	</strong></td>
		    				<td class="span3"><strong>Estatus	</strong></td>
		    			</tr>
		    		</thead>
		    		<tbody>
		    	';
		    foreach($instituciones as $institucion)
		    {
			    echo '<tr>';
			    echo 	'<td>' . $institucion->nombre . '</td>';
			    echo 	'<td>' . $institucion->domicilioMunicipio->nombre . '</td>';
			    echo 	'<td>' . $institucion->ambito->nombre . '</td>';
			    echo 	'<td style="width:50px;">' . $institucion->estatus->nombre . '</td>';
			    echo '</tr>';
		    }
		    
		    echo '
		    		</tbody>
		    	</table>
		    	';
    }
    
    public function actionGraficas()
    {
	    $this->render('graficas',array());
    }
	
	public function actionGraficainstitucion()
    {
	    $this->render('graficainstitucion',array());
    }
    
    public function actionGraficasinstituciones()
    {
	    $this->render('graficasinstituciones',array());
    }

	    
    public function actionPrograma()
    {
    	$usuarioActual = Usuario::model()->find('usuario=:x',array(':x'=>Yii::app()->user->name));
		
    	$institucionActual= $usuarioActual->institucion;

    	$ejercicioFiscalActual = EjercicioFiscal::model()->find('estatus_did=1');
    	$programatmp = new Programa;


    	$programaTrabajo = ProgramaDeTrabajo::model()->find('institucion_id=:institucion and ejercicio_fiscal_id=:ejercicio',
    		array(':institucion'=>$institucionActual->id,':ejercicio'=>$ejercicioFiscalActual->id));

    	if(!isset($programaTrabajo) || empty($programaTrabajo))
    	{
    		$programaTrabajo= new ProgramaDeTrabajo;
    		$programaTrabajo->institucion_id= $institucionActual->id;
    		$programaTrabajo->ejercicio_fiscal_id= $ejercicioFiscalActual->id;
    		$programaTrabajo->estatus_id = 1;
    		$programaTrabajo->save();

    	}
    	if(isset($_POST['Programa']))
    	{
    		$db = Yii::app()->db;
        	$transaction = $db->beginTransaction();
        	$guardado=true;
        	
        	

    		foreach ($_POST['Programa'] as $key => $value) {
    			if(isset($value['id']) && $value['id']>0)
    				$programatmp=Programa::model()->findByPk($value['id']);
    			else
    				$programatmp = new Programa;
    			$programatmp->attributes = $value;
    			$programatmp->estatus_id = 1;
    			$programatmp->programa_de_trabajo= $programaTrabajo->id;
    			$guardado = $guardado && $programatmp->save();
    			if(!$guardado)
    				break;
    			
    		}
    		if ($guardado) {
						$transaction->commit();
						$this->redirect(array('termino','que'=>'Program','ac'=>'crear'));
					}
				//	return;
    	}
    	$progs =array();
    	try{
	    	foreach ($programaTrabajo->programas as $prog) {
	    		$progs[]=array('sheepItForm_#index#_id'=>$prog->id,
	    			'sheepItForm_#index#_nombre'=>$prog->nombre,
	    			'sheepItForm_#index#_ambito'=>$prog->ambito,
	    			'sheepItForm_#index#_categoria'=>$prog->categoria,
	    			'sheepItForm_#index#_fechaFin_dt'=>$prog->fechaFin_dt,
	    			'sheepItForm_#index#_fechaInicio_dt'=>$prog->fechaInicio_dt,
	    			'sheepItForm_#index#_metas'=>$prog->metas,
	    			'sheepItForm_#index#_objetivos'=>$prog->objetivos,
	    			'sheepItForm_#index#_recursos_humanos'=>$prog->recursos_humanos,
	    			'sheepItForm_#index#_recursos_materiales'=>$prog->recursos_materiales,
	    			'sheepItForm_#index#_recursos_financieros'=>$prog->recursos_financieros,
	    			);
	    
	    	}
    	}
    	catch(Exception $ex){}
   
    	$this->render('crearprograma',array('programaTrabajo'=>$programaTrabajo,
    		'programa'=>$programatmp,'jsonprogs'=>CJSON::encode($progs)));

    }
}
