<?php


class DescribeForm extends CActiveForm  {
	public	$nombreempresa;
	public	$giro;
	public	$ubicacion;
	public	$size;
	public  $plan_idplan;

	public function rules()
    {
        return array(
            array('nombreempresa', 'required'),
            array('giro', 'required'),
            array('ubicacion', 'required'),
            array('size', 'required'),
            array('plan_idplan','required'),

        );
    }




	
}