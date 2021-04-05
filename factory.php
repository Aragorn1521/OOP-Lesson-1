<?php
//Класс Фабрика позволяет создавать объекты Truc and PassengerCar
class Factory{
	public function CreateACar($type){
		switch ($type) {
			case 'Truck': return new Truck;
			case 'PassengerCar': return new PassengerCar;
			default:
				echo "Авто не может быть создано!";
		}

	}
}