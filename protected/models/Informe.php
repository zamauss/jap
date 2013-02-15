<?php

/**
 * This is the model class for table "Informe".
 *
 * The followings are the available columns in table 'Informe':
 * @property string $id
 * @property integer $numeroPersonasNomina
 * @property integer $numeroPersonasAsimilables
 * @property integer $numeroPersonasProfesionales
 * @property integer $numeroPersonasVoluntarias
 * @property integer $numeroPersonasPrestadoresSS
 * @property integer $numeroPersonasTotales
 * @property integer $numeroBeneficiariosTotales
 * @property integer $numeroBeneficiariosNinosH
 * @property integer $numeroBeneficiariosNinosM
 * @property integer $numeroBeneficiariosJovenesH
 * @property integer $numeroBeneficiariosJovenesM
 * @property integer $numeroBeneficiariosAdultosH
 * @property integer $numeroBeneficiariosAdultosM
 * @property integer $numeroBeneficiariosMayorH
 * @property integer $numeroBeneficiariosMayorM
 * @property integer $numeroBeneficiariosIndirectos
 * @property string $nombreProgramaUno
 * @property string $nombreProgramaDos
 * @property string $nombreProgramaTres
 * @property string $nombreProgramaCuatro
 * @property string $nombreProgramaCinco
 * @property integer $horasVoluntariosProgramaUno
 * @property integer $horasVoluntariosProgramaDos
 * @property integer $horasVoluntariosProgramaTres
 * @property integer $horasVoluntariosProgramaCuatro
 * @property integer $horasVoluntariosProgramaCinco
 * @property string $nombreConvocatoriaUno
 * @property string $nombreConvocatoriaDos
 * @property string $nombreConvocatoriaTres
 * @property string $nombreConvocatoriaCuatro
 * @property string $nombreConvocatoriaCinco
 * @property string $nombreConvocatoriaSeis
 * @property string $nombreConvocatoriaSiete
 * @property string $nombreConvocatoriaOcho
 * @property string $nombreConvocatoriaNueve
 * @property string $nombreConvocatoriaDiez
 * @property integer $aprovadaConvocatoriaUno
 * @property integer $aprovadaConvocatoriaDos
 * @property integer $aprovadaConvocatoriaTres
 * @property integer $aprovadaConvocatoriaCuatro
 * @property integer $aprovadaConvocatoriaCinco
 * @property integer $aprovadaConvocatoriaSeis
 * @property integer $aprovadaConvocatoriaSiete
 * @property integer $aprovadaConvocatoriaOcho
 * @property integer $aprovadaConvocatoriaNueve
 * @property integer $aprovadaConvocatoriaDiez
 * @property integer $periodico
 * @property integer $radio
 * @property integer $espectaculares
 * @property integer $informeImpreso
 * @property integer $revistas
 * @property integer $television
 * @property integer $folletos
 * @property integer $redesSociales
 * @property integer $paginaWeb
 * @property integer $otros
 * @property integer $ninguna
 * @property integer $institucion_aid
 * @property integer $ejercicioFiscal_did
 * @property integer $estatus_did
 * @property integer $editable
 * @property string $ultimaModificacion_dt
 */
class Informe extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Informe the static model class
	 */
	 
	public static function classNameLabel()
	{
		return 'Informe';
	}
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Informe';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('periodico, ultimaModificacion_dt, responsableLlenado', 'required'),
			array('numeroPersonasNomina, numeroPersonasAsimilables, numeroPersonasProfesionales, numeroPersonasVoluntarias, numeroPersonasPrestadoresSS, numeroPersonasTotales, numeroBeneficiariosTotales, numeroBeneficiariosNinosH, numeroBeneficiariosNinosM, numeroBeneficiariosJovenesH, numeroBeneficiariosJovenesM, numeroBeneficiariosAdultosH, numeroBeneficiariosAdultosM, numeroBeneficiariosMayorH, numeroBeneficiariosMayorM, numeroBeneficiariosIndirectos, horasVoluntariosProgramaUno, horasVoluntariosProgramaDos, horasVoluntariosProgramaTres, horasVoluntariosProgramaCuatro, horasVoluntariosProgramaCinco, aprovadaConvocatoriaUno, aprovadaConvocatoriaDos, aprovadaConvocatoriaTres, aprovadaConvocatoriaCuatro, aprovadaConvocatoriaCinco, aprovadaConvocatoriaSeis, aprovadaConvocatoriaSiete, aprovadaConvocatoriaOcho, aprovadaConvocatoriaNueve, aprovadaConvocatoriaDiez, periodico, radio, espectaculares, informeImpreso, revistas, television, folletos, redesSociales, paginaWeb, otros, ninguna, institucion_aid, ejercicioFiscal_did, estatus_did, editable', 'numerical', 'integerOnly'=>true),
			array('nombreProgramaUno, nombreProgramaDos, nombreProgramaTres, nombreProgramaCuatro, nombreProgramaCinco, nombreConvocatoriaUno, nombreConvocatoriaDos, nombreConvocatoriaTres, nombreConvocatoriaCuatro, nombreConvocatoriaCinco, nombreConvocatoriaSeis, nombreConvocatoriaSiete, nombreConvocatoriaOcho, nombreConvocatoriaNueve, nombreConvocatoriaDiez,responsableLlenado', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, numeroPersonasNomina, numeroPersonasAsimilables, numeroPersonasProfesionales, numeroPersonasVoluntarias, numeroPersonasPrestadoresSS, numeroPersonasTotales, numeroBeneficiariosTotales, numeroBeneficiariosNinosH, numeroBeneficiariosNinosM, numeroBeneficiariosJovenesH, numeroBeneficiariosJovenesM, numeroBeneficiariosAdultosH, numeroBeneficiariosAdultosM, numeroBeneficiariosMayorH, numeroBeneficiariosMayorM, numeroBeneficiariosIndirectos, nombreProgramaUno, nombreProgramaDos, nombreProgramaTres, nombreProgramaCuatro, nombreProgramaCinco, horasVoluntariosProgramaUno, horasVoluntariosProgramaDos, horasVoluntariosProgramaTres, horasVoluntariosProgramaCuatro, horasVoluntariosProgramaCinco, nombreConvocatoriaUno, nombreConvocatoriaDos, nombreConvocatoriaTres, nombreConvocatoriaCuatro, nombreConvocatoriaCinco, nombreConvocatoriaSeis, nombreConvocatoriaSiete, nombreConvocatoriaOcho, nombreConvocatoriaNueve, nombreConvocatoriaDiez, aprovadaConvocatoriaUno, aprovadaConvocatoriaDos, aprovadaConvocatoriaTres, aprovadaConvocatoriaCuatro, aprovadaConvocatoriaCinco, aprovadaConvocatoriaSeis, aprovadaConvocatoriaSiete, aprovadaConvocatoriaOcho, aprovadaConvocatoriaNueve, aprovadaConvocatoriaDiez, periodico, radio, espectaculares, informeImpreso, revistas, television, folletos, redesSociales, paginaWeb, otros, ninguna, responsableLlenado, institucion_aid, ejercicioFiscal_did, estatus_did, editable, ultimaModificacion_dt', 'safe', 'on'=>'search'),
		);
	}
	
	
	public function extendedRules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ejercicioFiscal_did, estatus_did','dropdownfield'),
			array('institucion_aid','autocompletefield'),
			
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}
	
	
	/**
	*
	*/
	public function setLinkedRelations(){
		/*return array('municipio_id'=>array(
				'model'=>'Estado',
				'attribute' =>'estado_id',
				'value'=> $this->municipio->estado->id,
			),);*/
			
		return array();
	}
	
	
	/**
	* elimina en cascada
	**/
	public function deleteCascade()
	{
		$this->delete();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'numeroPersonasNomina' => 'Nómina',
			'numeroPersonasAsimilables' => 'Asimilables',
			'numeroPersonasProfesionales' => 'Profesionales',
			'numeroPersonasVoluntarias' => 'Voluntarias',
			'numeroPersonasPrestadoresSS' => 'Prestadores servicio social',
			'numeroPersonasTotales' => 'Totales',
			'numeroBeneficiariosTotales' => 'Beneficiarios totales',
			'numeroBeneficiariosNinosH' => 'Niños',
			'numeroBeneficiariosNinosM' => 'Niñas',
			'numeroBeneficiariosJovenesH' => 'Jóvenes hombres',
			'numeroBeneficiariosJovenesM' => 'Jóvenes mujeres',
			'numeroBeneficiariosAdultosH' => 'Adultos hombres',
			'numeroBeneficiariosAdultosM' => 'Adultos mujeres',
			'numeroBeneficiariosMayorH' => 'Adutos mayores hombres',
			'numeroBeneficiariosMayorM' => 'Adutos mayores mujeres',
			'numeroBeneficiariosIndirectos' => 'Beneficiarios indirectos',
			'nombreProgramaUno' => 'Programa 1',
			'nombreProgramaDos' => 'Programa 2',
			'nombreProgramaTres' => 'Programa 3',
			'nombreProgramaCuatro' => 'Programa 4',
			'nombreProgramaCinco' => 'Programa 5',
			'horasVoluntariosProgramaUno' => 'Horas de voluntarios',
			'horasVoluntariosProgramaDos' => 'Horas de voluntarios',
			'horasVoluntariosProgramaTres' => 'Horas de voluntarios',
			'horasVoluntariosProgramaCuatro' => 'Horas de voluntarios',
			'horasVoluntariosProgramaCinco' => 'Horas de voluntarios',
			'nombreConvocatoriaUno' => 'Convocatoria 1',
			'nombreConvocatoriaDos' => 'Convocatoria 2',
			'nombreConvocatoriaTres' => 'Convocatoria 3',
			'nombreConvocatoriaCuatro' => 'Convocatoria 4',
			'nombreConvocatoriaCinco' => 'Convocatoria 5',
			'nombreConvocatoriaSeis' => 'Convocatoria 6',
			'nombreConvocatoriaSiete' => 'Convocatoria 7',
			'nombreConvocatoriaOcho' => 'Convocatoria 8',
			'nombreConvocatoriaNueve' => 'Convocatoria 9',
			'nombreConvocatoriaDiez' => 'Convocatoria 10',
			'aprovadaConvocatoriaUno' => 'Aprobada',
			'aprovadaConvocatoriaDos' => 'Aprobada',
			'aprovadaConvocatoriaTres' => 'Aprobada',
			'aprovadaConvocatoriaCuatro' => 'Aprobada',
			'aprovadaConvocatoriaCinco' => 'Aprobada',
			'aprovadaConvocatoriaSeis' => 'Aprobada',
			'aprovadaConvocatoriaSiete' => 'Aprobada',
			'aprovadaConvocatoriaOcho' => 'Aprobada',
			'aprovadaConvocatoriaNueve' => 'Aprobada',
			'aprovadaConvocatoriaDiez' => 'Aprobada',
			'periodico' => 'Periodico',
			'radio' => 'Radio',
			'espectaculares' => 'Espectaculares',
			'informeImpreso' => 'Informe impreso',
			'revistas' => 'Revistas',
			'television' => 'Televisión',
			'folletos' => 'Folletos',
			'redesSociales' => 'Redes sociales',
			'paginaWeb' => 'Página web',
			'otros' => 'Otros',
			'ninguna' => 'Ninguna',
			'institucion_aid' => 'Institución',
			'ejercicioFiscal_did' => 'Ejercicio fiscal',
			'estatus_did' => 'Estatus',
			'editable' => 'Editable',
			'ultimaModificacion_dt' => 'Última modificación Dt',
			'responsableLlenado' => 'Nombre responsable de llenado',
		);
	}
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('numeroPersonasNomina',$this->numeroPersonasNomina);
		$criteria->compare('numeroPersonasAsimilables',$this->numeroPersonasAsimilables);
		$criteria->compare('numeroPersonasProfesionales',$this->numeroPersonasProfesionales);
		$criteria->compare('numeroPersonasVoluntarias',$this->numeroPersonasVoluntarias);
		$criteria->compare('numeroPersonasPrestadoresSS',$this->numeroPersonasPrestadoresSS);
		$criteria->compare('numeroPersonasTotales',$this->numeroPersonasTotales);
		$criteria->compare('numeroBeneficiariosTotales',$this->numeroBeneficiariosTotales);
		$criteria->compare('numeroBeneficiariosNinosH',$this->numeroBeneficiariosNinosH);
		$criteria->compare('numeroBeneficiariosNinosM',$this->numeroBeneficiariosNinosM);
		$criteria->compare('numeroBeneficiariosJovenesH',$this->numeroBeneficiariosJovenesH);
		$criteria->compare('numeroBeneficiariosJovenesM',$this->numeroBeneficiariosJovenesM);
		$criteria->compare('numeroBeneficiariosAdultosH',$this->numeroBeneficiariosAdultosH);
		$criteria->compare('numeroBeneficiariosAdultosM',$this->numeroBeneficiariosAdultosM);
		$criteria->compare('numeroBeneficiariosMayorH',$this->numeroBeneficiariosMayorH);
		$criteria->compare('numeroBeneficiariosMayorM',$this->numeroBeneficiariosMayorM);
		$criteria->compare('numeroBeneficiariosIndirectos',$this->numeroBeneficiariosIndirectos);
		$criteria->compare('nombreProgramaUno',$this->nombreProgramaUno,true);
		$criteria->compare('nombreProgramaDos',$this->nombreProgramaDos,true);
		$criteria->compare('nombreProgramaTres',$this->nombreProgramaTres,true);
		$criteria->compare('nombreProgramaCuatro',$this->nombreProgramaCuatro,true);
		$criteria->compare('nombreProgramaCinco',$this->nombreProgramaCinco,true);
		$criteria->compare('horasVoluntariosProgramaUno',$this->horasVoluntariosProgramaUno);
		$criteria->compare('horasVoluntariosProgramaDos',$this->horasVoluntariosProgramaDos);
		$criteria->compare('horasVoluntariosProgramaTres',$this->horasVoluntariosProgramaTres);
		$criteria->compare('horasVoluntariosProgramaCuatro',$this->horasVoluntariosProgramaCuatro);
		$criteria->compare('horasVoluntariosProgramaCinco',$this->horasVoluntariosProgramaCinco);
		$criteria->compare('nombreConvocatoriaUno',$this->nombreConvocatoriaUno,true);
		$criteria->compare('nombreConvocatoriaDos',$this->nombreConvocatoriaDos,true);
		$criteria->compare('nombreConvocatoriaTres',$this->nombreConvocatoriaTres,true);
		$criteria->compare('nombreConvocatoriaCuatro',$this->nombreConvocatoriaCuatro,true);
		$criteria->compare('nombreConvocatoriaCinco',$this->nombreConvocatoriaCinco,true);
		$criteria->compare('nombreConvocatoriaSeis',$this->nombreConvocatoriaSeis,true);
		$criteria->compare('nombreConvocatoriaSiete',$this->nombreConvocatoriaSiete,true);
		$criteria->compare('nombreConvocatoriaOcho',$this->nombreConvocatoriaOcho,true);
		$criteria->compare('nombreConvocatoriaNueve',$this->nombreConvocatoriaNueve,true);
		$criteria->compare('nombreConvocatoriaDiez',$this->nombreConvocatoriaDiez,true);
		$criteria->compare('aprovadaConvocatoriaUno',$this->aprovadaConvocatoriaUno);
		$criteria->compare('aprovadaConvocatoriaDos',$this->aprovadaConvocatoriaDos);
		$criteria->compare('aprovadaConvocatoriaTres',$this->aprovadaConvocatoriaTres);
		$criteria->compare('aprovadaConvocatoriaCuatro',$this->aprovadaConvocatoriaCuatro);
		$criteria->compare('aprovadaConvocatoriaCinco',$this->aprovadaConvocatoriaCinco);
		$criteria->compare('aprovadaConvocatoriaSeis',$this->aprovadaConvocatoriaSeis);
		$criteria->compare('aprovadaConvocatoriaSiete',$this->aprovadaConvocatoriaSiete);
		$criteria->compare('aprovadaConvocatoriaOcho',$this->aprovadaConvocatoriaOcho);
		$criteria->compare('aprovadaConvocatoriaNueve',$this->aprovadaConvocatoriaNueve);
		$criteria->compare('aprovadaConvocatoriaDiez',$this->aprovadaConvocatoriaDiez);
		$criteria->compare('periodico',$this->periodico);
		$criteria->compare('radio',$this->radio);
		$criteria->compare('espectaculares',$this->espectaculares);
		$criteria->compare('informeImpreso',$this->informeImpreso);
		$criteria->compare('revistas',$this->revistas);
		$criteria->compare('television',$this->television);
		$criteria->compare('folletos',$this->folletos);
		$criteria->compare('redesSociales',$this->redesSociales);
		$criteria->compare('paginaWeb',$this->paginaWeb);
		$criteria->compare('otros',$this->otros);
		$criteria->compare('ninguna',$this->ninguna);
		$criteria->compare('responsableLlenado',$this->responsableLlenado);
		$criteria->compare('institucion_aid',$this->institucion_aid);
		$criteria->compare('ejercicioFiscal_did',$this->ejercicioFiscal_did);
		$criteria->compare('estatus_did',$this->estatus_did);
		$criteria->compare('editable',$this->editable);
		$criteria->compare('ultimaModificacion_dt',$this->ultimaModificacion_dt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
