

<!-- Дом строется со следующими характеристиками: 
Что из низ задается через конструктор, а что потом - решайте сами 

1. какое-то количество подъездов 
2. какое-то количество этажей 
3. какое-то количество квартир на этаже 
4. адрес 

!! У дома должна быть возможность сообщить, сколько в нем квартир - метод 
!! У дома должна быть возможность показать адрес - метод 
У дома должна быть возможность сообщить, сколько людей в нем живет - метод 

Есть очередь людей (массив с объектами класса Human), 
каждый хочет заселиться в дом , но у каждого есть пожелание - этажность дома! 

Одновременно в дом можно заселить троих. 
$house->add(); при вызове этого метода можно заселить только 3х людей 

Людей из списка можно заселять в дом (по квартире на человека), 
если в нем есть еще свободные квартиры 
и если их пожелание можно учесть (желаемый этаж должен быть в доме). 

Если человека нельзя поселить, потому что его пожелание не выполняется, 
он перемещяется в конец очереди. 
Если не хватило места - остается на прежнем месте, ждать нового дома -->


<?php 
  class House {

    public $flatstage = 2; // сколько кв на этаже
    public $ent = 2; // подъезды
    public $stage = 5; // сколько этажей
    public $adress = "ul lenina 5"; // адрес дома
    public $humans_in_house = []; // сколько людей уже живет в доме


    public function getQuantFlat () { // подсчет кол-ва квартир
      return $this->ent * $this->stage * $this->flatstage;
    }

    public function getAdress() { // показ адреса
      return $this->adress;
    }

    //  public  add($added) { // метод заселения в дом
    //    $this->humans_in_house = humans_in_house = $this->$added; 
    //  }


   
  }

  class Human {

    public function __construct($wish){ // пожелание жителей по этажам 
        $this->wish = $wish;
    }

  }

  $house1 = new House;
  var_dump( "Кол-во квартир в доме: " . $house1->getQuantFlat() );
  var_dump( "Адрес: " . $house1->getAdress() );

  $human1 = new Human(2);
  $human2 = new Human(4);
  $human3 = new Human(1);

  $humans = [$human1, $human2, $human3]; // массив с жителями
  var_dump( $humans );


?>