<?php

class Empresa extends CActiveRecord
{
	public function tableName()
	{
		return 'empresa';
	}

	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, empleados, giro, razon, ubicacion, email, sitioweb, acteconomica, telefono, njefe, emailjefe, anios', 'required', 'message'=>'El campo {attribute} no puede estar vacío.'),
			array('empleados, anios', 'numerical', 'integerOnly'=>true),
			array('folio, email, sitioweb, telefono', 'length', 'max'=>45),
			array('nombre, giro, razon, ubicacion, acteconomica, njefe', 'length', 'max'=>200),
			array('emailjefe', 'length', 'max'=>100),
			array('email, emailjefe','email'),
			array('sitioweb','url'),			

			array('id, folio, nombre, empleados, giro, razon, ubicacion, email, sitioweb, acteconomica, telefono, njefe, emailjefe, anios', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{

		return array(
			'empredirectors' => array(self::HAS_MANY, 'Empredirector', 'idempresa'),
			'informes' => array(self::HAS_MANY, 'Informe', 'idempresa'),
			'puestos' => array(self::HAS_MANY, 'Puesto', 'idempresa'),
			'tests' => array(self::HAS_MANY, 'Test', 'idempresa'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'folio' => 'Fólio',
			'nombre' => 'Nombre Empresa',
			'empleados' => 'N° Empleados',
			'giro' => 'Giro',
			'razon' => 'Razón social',
			'ubicacion' => 'Ubicación',
			'email' => 'Email',
			'sitioweb' => 'Sitio web',
			'acteconomica' => 'Act. económica',
			'telefono' => 'Teléfono',
			'njefe' => 'Nombre Directivo',
			'emailjefe' => 'Email Directivo',
			'anios' => 'Años de creación',
		);
	}

	public function searchadmin()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('folio',$this->folio,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('empleados',$this->empleados);
		$criteria->compare('giro',$this->giro,true);
		$criteria->compare('razon',$this->razon,true);
		$criteria->compare('ubicacion',$this->ubicacion,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('sitioweb',$this->sitioweb,true);
		$criteria->compare('acteconomica',$this->acteconomica,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('njefe',$this->njefe,true);
		$criteria->compare('emailjefe',$this->emailjefe,true);
		$criteria->compare('anios',$this->anios);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchdirect()
	{

		$criteria=new CDbCriteria;
		//condicion
		$criteria->condition=('id in(select idempresa FROM empredirector WHERE idusuario = '.Yii::app()->user->id.')');

		$criteria->compare('id',$this->id);
		$criteria->compare('folio',$this->folio,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('empleados',$this->empleados);
		$criteria->compare('giro',$this->giro,true);
		$criteria->compare('razon',$this->razon,true);
		$criteria->compare('ubicacion',$this->ubicacion,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('sitioweb',$this->sitioweb,true);
		$criteria->compare('acteconomica',$this->acteconomica,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('njefe',$this->njefe,true);
		$criteria->compare('emailjefe',$this->emailjefe,true);
		$criteria->compare('anios',$this->anios);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
