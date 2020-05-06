<?php

namespace App\Model;

abstract class Model {

	protected $table;

	protected $fillable; 

	private $columnName;

	private $columnValues;



	public function __call($methodName, $arguments) 
	{	
		if(!$methodName == 'save')
		{
			throw new \Exception("$propertyName is not defined in the model");	
		}
		$this->getFieldNameAndValue();

		$sql = "Insert INTO $this->table ($this->columnName) VALUES ($this->columnValues)";

		echo $sql;
		echo '<br/>';

		//execute this sql

		return true;

	}

	public function __callStatic($methodName, $arguments)
	{
		return (new static)->$method(...$parameters);
	}

	public function __set($propertyName, $value)
	{
		if(!in_array($propertyName, $this->fillable)) {
			throw new \Exception("$propertyName is not defined in the model");		
		} 

		$this->{$propertyName} = $value;
	}

	private function getFieldNameAndValue()
	{

		$fieldName = '';
		$fieldValue =  '';

		foreach($this->fillable as $property)
		{	
			if(isset($this->{$property})){
				$fieldName .= $property . ','; 
				$fieldValue .= $this->{$property} . ',';
			}
		}

		$this->columnName = rtrim($fieldName, ',');
		$this->columnValues = rtrim($fieldValue, ',');

	}

	private function create($param1, $param2)
	{
		return "i am called";
	}
}