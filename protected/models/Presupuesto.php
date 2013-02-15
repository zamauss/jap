<?php

/**
 * This is the model class for table "Presupuesto".
 *
 * The followings are the available columns in table 'Presupuesto':
 * @property string $id
 * @property double $personaFisica
 * @property double $personaMoral
 * @property double $fundacionesNacionales
 * @property double $fundacionesExtranjeras
 * @property double $fondosGubernamentalesMunicipal
 * @property double $fondosGubernamentalesEstatal
 * @property double $fondosGubernamentalesFederal
 * @property double $especie
 * @property double $colectas
 * @property double $eventos
 * @property double $rifas
 * @property double $conferencias
 * @property double $importeCuotas
 * @property double $gaSueldos
 * @property double $gaHonorarios
 * @property double $gaCombustibles
 * @property double $gaLuzTelefono
 * @property double $gaPapeleria
 * @property double $gaImpuestosDerechos
 * @property double $gaAsimilables
 * @property double $gaOtros
 * @property double $goSueldos
 * @property double $goHonorarios
 * @property double $goCombustibles
 * @property double $goLuzTelefono
 * @property double $goPapeleria
 * @property double $goRenta
 * @property double $goImpuestosDerechos
 * @property double $goAsimilables
 * @property double $goOtros
 * @property double $terrenos
 * @property double $inmuebles
 * @property double $equipoOficina
 * @property double $vehiculosServicio
 * @property double $vehiculosAdministrativos
 * @property double $otros
 * @property double $inversionesBancos
 * @property double $promocion
 * @property integer $ejercicioFiscal_did
 * @property integer $institucion_aid
 * @property integer $estatus_did
 *
 * The followings are the available model relations:
 * @property EjercicioFiscal $ejercicioFiscal
 * @property Estatus $estatus
 * @property Institucion $institucion
 */
class Presupuesto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Presupuesto the static model class
	 */
	 
	public static function classNameLabel()
	{
		return 'Presupuesto';
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
		return 'Presupuesto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ejercicioFiscal_did, institucion_aid, estatus_did, responsableLlenado', 'required'),
			array('ejercicioFiscal_did, institucion_aid, estatus_did', 'numerical', 'integerOnly'=>true),
			array('personaFisica, personaMoral, fundacionesNacionales, fundacionesExtranjeras, fondosGubernamentalesMunicipal, fondosGubernamentalesEstatal, fondosGubernamentalesFederal, especie, colectas, eventos, rifas, conferencias, ventas, ieOtros, importeCuotas, gaSueldos, gaHonorarios, gaCombustibles, gaLuzTelefono, gaPapeleria, gaImpuestosDerechos, gaAsimilables, gaOtros, goSueldos, goHonorarios, goCombustibles, goLuzTelefono, goPapeleria, goRenta, goImpuestosDerechos, goAsimilables, goOtros, terrenos, inmuebles, equipoOficina, equipoTransporte, institucionBancaria, otros, inversionesBancos, promocion', 'numerical'),
			array('ultimaModificacion_dt', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, personaFisica, personaMoral, fundacionesNacionales, fundacionesExtranjeras, fondosGubernamentalesMunicipal, fondosGubernamentalesEstatal, fondosGubernamentalesFederal, especie, colectas, eventos, rifas, conferencias, importeCuotas, gaSueldos, gaHonorarios, gaCombustibles, gaLuzTelefono, gaPapeleria, gaImpuestosDerechos, gaAsimilables, gaOtros, goSueldos, goHonorarios, goCombustibles, goLuzTelefono, goPapeleria, goRenta, goImpuestosDerechos, goAsimilables, goOtros, terrenos, inmuebles, equipoOficina, vehiculosServicio, vehiculosAdministrativos, otros, inversionesBancos, promocion, responsableLlenado, ejercicioFiscal_did, institucion_aid, estatus_did', 'safe', 'on'=>'search'),
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
			'ejercicioFiscal' => array(self::BELONGS_TO, 'EjercicioFiscal', 'ejercicioFiscal_did'),
			'estatus' => array(self::BELONGS_TO, 'Estatus', 'estatus_did'),
			'institucion' => array(self::BELONGS_TO, 'Institucion', 'institucion_aid'),
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
			'personaFisica' => 'Persona física',
			'personaMoral' => 'Persona moral',
			'fundacionesNacionales' => 'Fundaciones nacionales',
			'fundacionesExtranjeras' => 'Fundaciones extranjeras',
			'fondosGubernamentalesMunicipal' => 'Municipal',
			'fondosGubernamentalesEstatal' => 'Estatal',
			'fondosGubernamentalesFederal' => 'Federal',
			'especie' => 'Especie',
			'colectas' => 'Colectas',
			'eventos' => 'Eventos',			
			'rifas' => 'Rifas',
			'conferencias' => 'Conferencias',
			'vetnas' => 'Ventas',
			'ieOtros' => 'Otros',
			'importeCuotas' => 'Importe',
			'gaSueldos' => 'Sueldos',
			'gaHonorarios' => 'Honorarios',
			'gaCombustibles' => 'Combustibles',
			'gaLuzTelefono' => 'Luz, agua y teléfono',
			'gaPapeleria' => 'Papelería',
			'gaImpuestosDerechos' => 'Impuestos y derechos',
			'gaAsimilables' => 'Asimilables',
			'gaOtros' => 'Otros',
			'goSueldos' => 'Sueldos',
			'goHonorarios' => 'Honorarios',
			'goCombustibles' => 'Combustibles',
			'goLuzTelefono' => 'Luz, agua y teléfono',
			'goPapeleria' => 'Papelería',
			'goRenta' => 'Renta',
			'goImpuestosDerechos' => 'Impuestos y derechos',
			'goAsimilables' => 'Asimilables',
			'goOtros' => 'Otros',
			'terrenos' => 'Terrenos',
			'inmuebles' => 'Inmuebles',
			'equipoOficina' => 'Equipo de oficina',
			'equipoTransporte' => 'Equipo de transporte',
			'institucionBancaria' => 'Institución bancaria',
			'otros' => 'Otros',
			'inversionesBancos' => 'Importe',
			'promocion' => 'Importe',
			'responsableLlenado' => 'Nombre responsable de llenado',
			'ejercicioFiscal_did' => 'Ejercicio fiscal',
			'institucion_aid' => 'Institución',
			'estatus_did' => 'Estatus',
			'ultimaModificacion_dt' => 'Fecha modificación',
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
		$criteria->compare('personaFisica',$this->personaFisica);
		$criteria->compare('personaMoral',$this->personaMoral);
		$criteria->compare('fundacionesNacionales',$this->fundacionesNacionales);
		$criteria->compare('fundacionesExtranjeras',$this->fundacionesExtranjeras);
		$criteria->compare('fondosGubernamentalesMunicipal',$this->fondosGubernamentalesMunicipal);
		$criteria->compare('fondosGubernamentalesEstatal',$this->fondosGubernamentalesEstatal);
		$criteria->compare('fondosGubernamentalesFederal',$this->fondosGubernamentalesFederal);
		$criteria->compare('especie',$this->especie);
		$criteria->compare('colectas',$this->colectas);
		$criteria->compare('eventos',$this->eventos);
		$criteria->compare('rifas',$this->rifas);
		$criteria->compare('conferencias',$this->conferencias);
		$criteria->compare('importeCuotas',$this->importeCuotas);
		$criteria->compare('gaSueldos',$this->gaSueldos);
		$criteria->compare('gaHonorarios',$this->gaHonorarios);
		$criteria->compare('gaCombustibles',$this->gaCombustibles);
		$criteria->compare('gaLuzTelefono',$this->gaLuzTelefono);
		$criteria->compare('gaPapeleria',$this->gaPapeleria);
		$criteria->compare('gaImpuestosDerechos',$this->gaImpuestosDerechos);
		$criteria->compare('gaAsimilables',$this->gaAsimilables);
		$criteria->compare('gaOtros',$this->gaOtros);
		$criteria->compare('goSueldos',$this->goSueldos);
		$criteria->compare('goHonorarios',$this->goHonorarios);
		$criteria->compare('goCombustibles',$this->goCombustibles);
		$criteria->compare('goLuzTelefono',$this->goLuzTelefono);
		$criteria->compare('goPapeleria',$this->goPapeleria);
		$criteria->compare('goRenta',$this->goRenta);
		$criteria->compare('goImpuestosDerechos',$this->goImpuestosDerechos);
		$criteria->compare('goAsimilables',$this->goAsimilables);
		$criteria->compare('goOtros',$this->goOtros);
		$criteria->compare('terrenos',$this->terrenos);
		$criteria->compare('inmuebles',$this->inmuebles);
		$criteria->compare('equipoOficina',$this->equipoOficina);
		$criteria->compare('vehiculosServicio',$this->vehiculosServicio);
		$criteria->compare('vehiculosAdministrativos',$this->vehiculosAdministrativos);
		$criteria->compare('otros',$this->otros);
		$criteria->compare('inversionesBancos',$this->inversionesBancos);
		$criteria->compare('promocion',$this->promocion);
		$criteria->compare('ejercicioFiscal_did',$this->ejercicioFiscal_did);
		$criteria->compare('institucion_aid',$this->institucion_aid);
		$criteria->compare('estatus_did',$this->estatus_did);
		$criteria->compare('ultimaModificacion_dt',$this->ultimaModificacion_dt);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
