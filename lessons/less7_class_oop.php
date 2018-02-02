<?php 
	class Human {
		// св-ва

		public $name;
		public $age;
		// public $age = 18; 		// присв знач по умол-ию


		public function __construct($name="Человек"){ // вызыв при инициал-ции
			echo $this->name . " сказал: " . $speech;
		}

		// методы
		function speak($speech){
			$this->name = $name; //$this имеет отн-ие только к классу
		}


	}

// объ-ты только на основе созд-ых классов
$human = new Human("Иван");
$human->age = 27;
$human->speak("Привет");
var_dump( $human );

$human2 = new Human("Ben");
$human2->age = 90;
$human2->speak("говорит что то");

class Pupil extends Human {
	public function showAge() {
		echo $this->age . "<br>";
	}

}

$pupil = new Pupil("Коля");
$pupil->age = 10;
$pupil->speak("школьник говорит что то");

// модификаторы доступа
// public - методы и св-ва видны везде
// protected - методы и св-ва видны в самом классе (у объектов в нельзя) и дочерн классе
// private - методы и св-ва не видны негде





?>