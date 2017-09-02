<?php

/**
 * This is the model class for table "conoce".
 *
 * The followings are the available columns in table 'conoce':
 * @property integer $idconoce
 * @property string $nombreempresa
 * @property string $objetivos
 * @property string $logotipo
 * @property string $tipo
 * @property string $ubicacion
 * @property string $size
 * @property string $mision
 * @property string $vision
 * @property string $fortalezas
 * @property string $oportunidades
 * @property string $debilidades
 * @property string $amenazas
 * @property integer $plan_idplan
 */
class Conoce extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'conoce';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('plan_idplan', 'required'),
			array('plan_idplan', 'numerical', 'integerOnly'=>true),
			array('nombreempresa, objetivos, logotipo, ubicacion', 'length', 'max'=>200),
			array('tipo, fortalezas, oportunidades, debilidades, amenazas', 'length', 'max'=>100),
			array('size', 'length', 'max'=>45),
			array('mision, vision', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idconoce, nombreempresa, objetivos, logotipo, tipo, ubicacion, size, mision, vision, fortalezas, oportunidades, debilidades, amenazas, plan_idplan', 'safe', 'on'=>'search'),
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
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idconoce' => 'Idconoce',
			'nombreempresa' => 'Nombreempresa',
			'objetivos' => 'Objetivos',
			'logotipo' => 'Logotipo',
			'tipo' => 'Tipo',
			'ubicacion' => 'Ubicacion',
			'size' => 'Size',
			'mision' => 'Mision',
			'vision' => 'Vision',
			'fortalezas' => 'Fortalezas',
			'oportunidades' => 'Oportunidades',
			'debilidades' => 'Debilidades',
			'amenazas' => 'Amenazas',
			'plan_idplan' => 'Plan Idplan',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idconoce',$this->idconoce);
		$criteria->compare('nombreempresa',$this->nombreempresa,true);
		$criteria->compare('objetivos',$this->objetivos,true);
		$criteria->compare('logotipo',$this->logotipo,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('ubicacion',$this->ubicacion,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('mision',$this->mision,true);
		$criteria->compare('vision',$this->vision,true);
		$criteria->compare('fortalezas',$this->fortalezas,true);
		$criteria->compare('oportunidades',$this->oportunidades,true);
		$criteria->compare('debilidades',$this->debilidades,true);
		$criteria->compare('amenazas',$this->amenazas,true);
		$criteria->compare('plan_idplan',$this->plan_idplan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Conoce the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
