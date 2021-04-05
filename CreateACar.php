<?php
//подключил все файлы
require_once "Avto.php";
require_once "factory.php";
require_once "Truck.php";
require_once "Avto.php";
require_once "PassengerCar.php";
require_once "Collection.php";
//создал объект класса фабрики
$factory = new Factory;
//создал объект класса коллекции
$collection = new Collection;

//создал объект класса Грузовик(Truck)
$truck = $factory->CreateACar('Truck');
//создал объект класса Легковое авто(PassengerCar)
$passengerCar = $factory->CreateACar('PassengerCar');


//Добавил грузовик в коллекцию
$collection->AddValue($truck,0);
//Запросил метод коллекции ,чтобы обаться с объектом.Вызвал у объекта метод "Кто быстреe"
$collection->GetValue(0)->WhoIsFaster(180,41);
echo "<br>";
//Запросил метод коллекции ,чтобы обаться с объектом.Вызвал у объекта метод "Узнать цену"
$collection->GetValue(0)->TripPrice(180,41);
//Добавил легковое авто в коллекцию
$collection->AddValue($passengerCar,1);
echo "<br>";
//Запросил метод коллекции ,чтобы обаться с объектом.Вызвал у объекта метод "Кто быстреe"
$collection->GetValue(1)->WhoIsFaster(180,41);
echo "<br>";
//Запросил метод коллекции ,чтобы обаться с объектом.Вызвал у объекта метод "Узнать цену"
$collection->GetValue(1)->TripPrice(180,41);





