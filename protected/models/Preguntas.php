<?php

class Preguntas extends CActiveRecord
{
	public function tableName()
	{
		return 'preguntas';
	}

	public function rules()
	{
		return array(
			array('pregunta, respuesta, tpre, ttest', 'required'),
			array('pregunta', 'length', 'max'=>200),
			array('tpre, ttest', 'length', 'max'=>45),

			array('id, pregunta, respuesta, tpre, ttest', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'testpres' => array(self::HAS_MANY, 'Testpre', 'idpre'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pregunta' => 'Pregunta',
			'respuesta' => 'Respuesta',
			'tpre' => 'Tipo de Test',
			'ttest'=>'Test Clasificación'
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('pregunta',$this->pregunta,true);
		$criteria->compare('respuesta',$this->respuesta,true);
		$criteria->compare('tpre',$this->tpre,true);
		$criteria->compare('ttest',$this->ttest,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
