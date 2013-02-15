<?php

/**
 * This is the model class for table "ActividadPreponderante".
 *
 * The followings are the available columns in table 'ActividadPreponderante':
 * @property string $id
 * @property string $nombre
 * @property integer $ambito_did
 *
 * The followings are the available model relations:
 * @property Ambito $ambito
 */
class ActividadPreponderante extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return ActividadPreponderante the static model class
	 */
	 
	public static function classNameLabel()
	{
		return 'ActividadPreponderante';
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
		return 'ActividadPreponderante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ambito_did', 'required'),
			array('ambito_did', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, ambito_did', 'safe', 'on'=>'search'),
		);
	}
	
	
	public function extendedRules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ambito_did','dropdownfield'),
			
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
			'ambito' => array(self::BELONGS_TO, 'Ambito', 'ambito_did'),
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
			'nombre' => 'Nombre',
			'ambito_did' => 'Ambito',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('ambito_did',$this->ambito_did);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
