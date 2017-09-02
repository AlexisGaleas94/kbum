<?php

class Puesto extends CActiveRecord
{
	public function tableName()
	{
		return 'puesto';
	}

	public function rules()
	{
		return array(
			array('nombre, tusuario', 'required'),
			array('tusuario, idempresa, idusuario', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>100),

			array('id, nombre, tusuario, idempresa, idusuario', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'idempresa0' => array(self::BELONGS_TO, 'Empresa', 'idempresa'),
			'idusuario0' => array(self::BELONGS_TO, 'Usuario', 'idusuario'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'tusuario' => 'Tipo de Puesto',
			'idempresa' => 'Empresa',
			'idusuario' => 'Usuario',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('tusuario',$this->tusuario);
		$criteria->compare('idempresa',$this->idempresa);
		$criteria->compare('idusuario',$this->idusuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
