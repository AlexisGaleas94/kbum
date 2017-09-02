<?php

class Test extends CActiveRecord
{
	public static function getFilterusuario($id)
	{		
		$iduser = Usuario::model()->find('nombre=:id', array(':id'=>$id));
		return $iduser->id;
	}

	public function tableName()
	{
		return 'test';
	}

	public function rules()
	{

		return array(
			array('idempresa, idusuario', 'required'),
			array('idempresa, idusuario, estado', 'numerical', 'integerOnly'=>true),

			array('id, idempresa, idusuario, estado', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{

		return array(
			'idempresa0' => array(self::BELONGS_TO, 'Empresa', 'idempresa'),
			'idusuario0' => array(self::BELONGS_TO, 'Usuario', 'idusuario'),
			'testpres' => array(self::HAS_MANY, 'Testpre', 'idtest'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'Id Test',
			'idempresa' => 'Empresa',
			'idusuario' => 'Usuario',
			'estado' => 'Estado',
		);
	}

	public function search()
	{

		$criteria=new CDbCriteria;
		$criteria->with = array('idusuario0','idempresa0');
		$criteria->compare('id',$this->id);
		//$criteria->compare('idempresa',$this->idempresa);
		//$criteria->compare('idusuario',$this->idusuario);
		$criteria->compare('idempresa0.nombre',$this->idempresa,true);
		$criteria->compare('idusuario0.nombre',$this->idusuario,true);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
