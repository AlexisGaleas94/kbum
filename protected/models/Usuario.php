<?php

class Usuario extends CActiveRecord
{
	public $confirmar;
	public function tableName()
	{
		return 'usuario';
	}

	public function rules()
	{

		return array(
			array('nombre, email, puesto, password, confirmar', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>200),
			array('email, puesto, password, confirmar', 'length', 'max'=>45),
			array('roles', 'length', 'max'=>11),
			array('email','email'),
			array('confirmar', 'compare','compareAttribute'=>'password','allowEmpty'=>false),
			array('confirmar, password', 'length', 'min'=>7,),
			array('id, nombre, email, puesto, password, status, roles', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'empredirectors' => array(self::HAS_MANY, 'Empredirector', 'idusuario'),
			'puestos' => array(self::HAS_MANY, 'Puesto', 'idusuario'),
			'tests' => array(self::HAS_MANY, 'Test', 'idusuario'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'email' => 'Email',
			'puesto' => 'Puesto',
			'password' => 'Password',
			'status' => 'Status',
			'roles' => 'Roles',
			'confirmar'=>'Confirmar password'
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('puesto',$this->puesto,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('roles',$this->roles,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
