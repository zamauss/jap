<?php

/**
 * This is the model class for table "IngresoPorEvento".
 *
 * The followings are the available columns in table 'IngresoPorEvento':
 * @property integer $id
 * @property double $colectas
 * @property double $eventos
 * @property double $rifas
 * @property double $conferencias
 * @property integer $institucion_aid
 * @property integer $ejercicioFiscal_did
 * @property integer $estatus_did
 * @property integer $editable
 * @property string $ultimaModificacion_dt
 *
 * The followings are the available model relations:
 * @property Institucion $institucion
 * @property EjercicioFiscal $ejercicioFiscal
 * @property Estatus $estatus
 */
class IngresoPorEvento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return IngresoPorEvento the static model class
	 */
	 
	public static function classNameLabel()
	{
		return 'IngresoPorEvento';
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
		return 'IngresoPorEvento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institucion_aid, ejercicioFiscal_did, estatus_did, editable, ultimaModificacion_dt', 'required'),
			array('institucion_aid, ejercicioFiscal_did, estatus_did, editable', 'numerical', 'integerOnly'=>true),
			array('colectas, eventos, rifas, conferencias, ventas, otros', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, colectas, eventos, rifas, conferencias, ventas, otros, institucion_aid, ejercicioFiscal_did, estatus_did, editable, ultimaModificacion_dt', 'safe', 'on'=>'search'),
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
			'institucion' => array(self::BELONGS_TO, 'Institucion', 'institucion_aid'),
			'ejercicioFiscal' => array(self::BELONGS_TO, 'EjercicioFiscal', 'ejercicioFiscal_did'),
			'estatus' => array(self::BELONGS_TO, 'Estatus', 'estatus_did'),
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
			'colectas' => 'Colectas',
			'eventos' => 'Eventos',
			'rifas' => 'Rifas',
			'conferencias' => 'Conferencias',
			'ventas' => 'Ventas',
			'otros' => 'Otros',
			'institucion_aid' => 'Institucion',
			'ejercicioFiscal_did' => 'Ejercicio fiscal',
			'estatus_did' => 'Estatus',
			'editable' => 'Editable',
			'ultimaModificacion_dt' => 'Ultima modificación',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('colectas',$this->colectas);
		$criteria->compare('eventos',$this->eventos);
		$criteria->compare('rifas',$this->rifas);
		$criteria->compare('conferencias',$this->conferencias);
		$criteria->compare('ventas',$this->ventas);
		$criteria->compare('otros',$this->otros);
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
