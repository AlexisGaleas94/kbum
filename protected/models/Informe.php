<?php

class Informe extends CActiveRecord
{

	public function tableName()
	{
		return 'informe';
	}

	public function rules()
	{
		return array(
			array('idempresa', 'required'),
			array('idempresa', 'numerical', 'integerOnly'=>true),
			array('informe', 'safe'),

			array('id, informe, idempresa', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'idempresa0' => array(self::BELONGS_TO, 'Empresa', 'idempresa'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'informe' => 'Informe',
			'idempresa' => 'Empresa',
		);
	}

	public function searchadmin()
	{
		$criteria=new CDbCriteria;
		$criteria->with='idempresa0';
		
		$criteria->compare('id',$this->id);		
		$criteria->compare('informe',$this->informe,true);
		//$criteria->compare('idempresa',$this->idempresa);
		$criteria->compare('idempresa0.nombre',$this->idempresa);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchdirect()
	{
		$criteria=new CDbCriteria;
		$criteria->with='idempresa0';
		$criteria->condition=('idempresa = (SELECT idempresa FROM empredirector WHERE idusuario ='.Yii::app()->user->id.')');
		
		$criteria->compare('id',$this->id);		
		$criteria->compare('informe',$this->informe,true);
		//$criteria->compare('idempresa',$this->idempresa);
		$criteria->compare('idempresa0.nombre',$this->idempresa);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
