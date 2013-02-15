<?php

/**
 * This is the model class for table "programa_de_trabajo".
 *
 * The followings are the available columns in table 'programa_de_trabajo':
 * @property integer $id
 * @property integer $ejercicio_fiscal_id
 * @property string $reviso_nombre
 * @property string $reviso_puesto
 * @property string $autorizo_nombre
 * @property string $autorizo_puesto
 * @property integer $editable
 * @property integer $estatus_id
 * @property integer $institucion_id
 *
 * The followings are the available model relations:
 * @property Institucion $institucion
 * @property EjercicioFiscal $ejercicioFiscal
 * @property Estatus $estatus
 */
class ProgramaDeTrabajo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return ProgramaDeTrabajo the static model class
	 */
	 
	public static function classNameLabel()
	{
		return 'ProgramaDeTrabajo';
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
		return 'programa_de_trabajo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ejercicio_fiscal_id, estatus_id, institucion_id', 'required'),
			array('ejercicio_fiscal_id, editable, estatus_id, institucion_id', 'numerical', 'integerOnly'=>true),
			array('reviso_nombre, reviso_puesto, autorizo_nombre, autorizo_puesto', 'length', 'max'=>145),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ejercicio_fiscal_id, reviso_nombre, reviso_puesto, autorizo_nombre, autorizo_puesto, editable, estatus_id, institucion_id', 'safe', 'on'=>'search'),
		);
	}
	
	
	public function extendedRules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
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
			'institucion' => array(self::BELONGS_TO, 'Institucion', 'institucion_id'),
			'ejercicioFiscal' => array(self::BELONGS_TO, 'EjercicioFiscal', 'ejercicio_fiscal_id'),
			'estatus' => array(self::BELONGS_TO, 'Estatus', 'estatus_id'),
			'programas' => array(self::HAS_MANY, 'Programa', 'programa_de_trabajo'),
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
			'ejercicio_fiscal_id' => 'Ejercicio Fiscal',
			'reviso_nombre' => 'Reviso Nombre',
			'reviso_puesto' => 'Reviso Puesto',
			'autorizo_nombre' => 'Autorizo Nombre',
			'autorizo_puesto' => 'Autorizo Puesto',
			'editable' => 'Editable',
			'estatus_id' => 'Estatus',
			'institucion_id' => 'Institucion',
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
		$criteria->compare('ejercicio_fiscal_id',$this->ejercicio_fiscal_id);
		$criteria->compare('reviso_nombre',$this->reviso_nombre,true);
		$criteria->compare('reviso_puesto',$this->reviso_puesto,true);
		$criteria->compare('autorizo_nombre',$this->autorizo_nombre,true);
		$criteria->compare('autorizo_puesto',$this->autorizo_puesto,true);
		$criteria->compare('editable',$this->editable);
		$criteria->compare('estatus_id',$this->estatus_id);
		$criteria->compare('institucion_id',$this->institucion_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
