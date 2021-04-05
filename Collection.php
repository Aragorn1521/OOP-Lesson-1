<?php
//Класс коллекции - создает авто
class Collection{
	private $values = [];

	public function AddValue (Car $val,$key = null){
		if($key === null){
			$this->values = $val;
		}
		else{
			$this->values[$key] = $val;
		}
	}

	public function DellValue ($key){
		unset($this->values[$key]);

	}

	public function GetValue ($key){
		return ($this->values[$key]);
}
}