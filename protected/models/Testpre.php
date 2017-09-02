<?php

/**
 * This is the model class for table "testpre".
 *
 * The followings are the available columns in table 'testpre':
 * @property integer $id
 * @property integer $idpre
 * @property integer $idtest
 * @property integer $ttest
 * @property string $respuesta
 *
 * The followings are the available model relations:
 * @property Preguntas $idpre0
 * @property Test $idtest0
 */
class Testpre extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'testpre';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idpre, idtest, ttest, respuesta', 'required'),
			array('idpre, idtest, ttest', 'numerical', 'integerOnly'=>true),
			array('respuesta', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idpre, idtest, ttest, respuesta', 'safe', 'on'=>'search'),
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
			'idpre0' => array(self::BELONGS_TO, 'Preguntas', 'idpre'),
			'idtest0' => array(self::BELONGS_TO, 'Test', 'idtest'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idpre' => 'Idpre',
			'idtest' => 'Idtest',
			'ttest' => 'Ttest',
			'respuesta' => 'Respuesta',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('idpre',$this->idpre);
		$criteria->compare('idtest',$this->idtest);
		$criteria->compare('ttest',$this->ttest);
		$criteria->compare('respuesta',$this->respuesta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Testpre the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
