<?php

/**
 * This is the model class for table "programa".
 *
 * The followings are the available columns in table 'programa':
 * @property integer $id
 * @property string $nombre
 * @property string $objetivos
 * @property string $metas
 * @property integer $ambito
 * @property string $recursos_humanos
 * @property string $recursos_materiales
 * @property string $recursos_financieros
 * @property integer $editable
 * @property integer $estatus_id
 */
class Programa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Programa the static model class
	 */
	 
	public static function classNameLabel()
	{
		return 'Programa';
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
		return 'programa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, fechaFin_dt, fechaInicio_dt, objetivos, metas, ambito, recursos_humanos, recursos_materiales, recursos_financieros, estatus_id', 'required'),
			array('ambito, categoria, estatus_id', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>145),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fechaFin_dt, fechaInicio_dt, nombre, objetivos, metas, ambito, categoria, recursos_humanos, recursos_materiales, recursos_financieros, editable, estatus_id', 'safe', 'on'=>'search'),
		);
	}
	
	
	public function extendedRules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estatus_id','dropdownfield'),
			
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
	public function getAmbitoLabels(){
		return array('Localidad','Municipio','Estado','Nacional','Extranjero');
	}
	
	public function getCategoriaLabels(){
		return array('Actividad Asistencial','Difusión','Procuración de Fondos');
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
			'objetivos' => 'Objetivos',
			'metas' => 'Metas',
			'ambito' => 'Ámbito de influencia',
			'recursos_humanos' => 'Recursos humanos',
			'recursos_materiales' => 'Recursos materiales',
			'recursos_financieros' => 'Recursos financieros',
			'editable' => 'Editable',
			'estatus_id' => 'Estatus',
			'categoria' => 'Categoría',
			'fechaInicio_dt' =>'Inicio del periodo de ejecucion',
			'fechaFin_dt' => 'Final del periodo de ejecucion',
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
		$criteria->compare('objetivos',$this->objetivos,true);
		$criteria->compare('metas',$this->metas,true);
		$criteria->compare('ambito',$this->ambito);
		$criteria->compare('recursos_humanos',$this->recursos_humanos,true);
		$criteria->compare('recursos_materiales',$this->recursos_materiales,true);
		$criteria->compare('recursos_financieros',$this->recursos_financieros,true);
		$criteria->compare('editable',$this->editable);
		$criteria->compare('estatus_id',$this->estatus_id);
		$criteria->compare('categoria',$this->categoria);
		$criteria->compare('fechaInicio_dt',$this->fechaInicio_dt,true);
		$criteria->compare('fechaFin_dt',$this->fechaFin_dt,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
