<?php

/**
 * This is the model class for table "Ambito".
 *
 * The followings are the available columns in table 'Ambito':
 * @property integer $id
 * @property string $nombre
 * @property integer $estatus_did
 *
 * The followings are the available model relations:
 * @property Estatus $estatus
 * @property Institucion[] $institucions
 */
class Ambito extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Ambito the static model class
	 */
	 
	public static function classNameLabel()
	{
		return 'Ambito';
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
		return 'Ambito';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, estatus_did', 'required'),
			array('estatus_did', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>145),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, estatus_did', 'safe', 'on'=>'search'),
		);
	}
	
	
	public function extendedRules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estatus_did','dropdownfield'),
			
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
			'estatus' => array(self::BELONGS_TO, 'Estatus', 'estatus_did'),
			'institucions' => array(self::HAS_MANY, 'Institucion', 'ambito_did'),
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
		foreach ($this->$institucions as $institucionsn )
			$institucionsn->deleteCascade();

		$this->delete();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'estatus_did' => 'Estatus',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('estatus_did',$this->estatus_did);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
