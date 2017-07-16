<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<style>

body {
	text-align:center
font-family: Arial, Helvetica, sans-serif;}
   </style>

<?php

//<?php class MyClass { 
    //свойства класса 
  //  public $var1 = '1'; 
   // public $var2 = '2'; 
     
    //методы класса 
   // public function func1() { 
        //обращаемся к методу этого же класса 
    //    $this->func2(); 
   // } 
     
  //  public function func2() { 
     
  //  } 
// }




class классN1
{
    public $Question = "Question"; // - это свойство класса доступное снаружи класса
    //private $Private_name;     // - это свойство доступно только методам класса
    //protected $Protected_name;  // это свойство доступно методам собственного класса, а также методам наследуемых классов
    
function __construct($obj) {
		$this->obj = $obj;
		}

    function Answer () // - это метод класса
    {
        return "{$this->obj} ";	
	}
    
   // function Пока( $a )
    
        //$this->имя = $a;
       // echo "<H1>".$this->имя."! Пока!</H1>";
    
}
$obj = new классN1('Инкапсуляция — один из важнейших механизмов ООП (наряду с абстракцией, полиморфизмом и наследованием) 
Сам по себе этот термин означает «сокрытие».  
Служит для того чтобы сделать невозможным изменения критичных для работы класса свойств. 
Пользователю не нужно задумываться о сложности реализации используемого программного компонента, пользователь работает только с интерфейсом объекта, к которому ему предоставлен доступ 
Всё то, что не входит в интерфейс, (закрытые данные и методы) пользователь использовать не может.');

echo '<b> Ответ на первый вопрос домашнего задания: </b> '.$obj->Answer(),'</br>';
echo "<br>";
$obj2 = new классN1 (' 
Объектно программирование служит для облегчения процесса разработки 
 
Подходит для больших проектов 
Новому разработчику проще основится 
Код становится более читаемым 
 
  
Возможность каждому участнику проекта работать со своей частью кода, 
После чего будет не сложно объединять все части в одно приложение  
 
Возможность расширить функционал 
расширить объект и создать абсолютно новый, который будет содержать  
все необходимые свойства и методы родительского объекта от которого  
происходит новый, а потом уже добавить в него новые функции. 
 
Проще переосмыслить код, сделать из "плохого" кода - сделать "хороший" 
 
 
Сама идея Объектного подхода к написанию кода выглядит более эффективной 
 
Задача разбивается на несколько маленьких подзадач и постепенно решается.');

echo '<b> Ответ на второй вопрос домашнего задания: </b>'.$obj2->Answer(),'</br>';

echo "<br>";
$obj3 = new классN1 ('
1)Необходимо понимать базовые концепции, такие как классы, наследование и динамическое связывание
2)Многоразовое использование требует от программиста познакомиться с большими библиотеками классов
3)Проектирование классов — задача более сложная, чем их использование
4)Очень трудно изучать классы, не имея возможности их «пощупать»');
echo '<b> Теперь про недостатки ООП: </b>'.$obj3->Answer(),'</br>';



echo "<H1>  Описываем классы: </H1>";

class CarBlueprint1
{
	public $img = "ссылка на рис." ;	
	public $marka = "Марка Авто";
	public $productName = "Модель";
	public $productYear = "год выпуска";
	public $price = 0;

	
	function __construct($img, $marka, $productName, $productYear, $price) {
		$this->img = $img;
		$this->marka = $marka;
		$this->productName = $productName;
		$this->productYear = $productYear;
		$this->price = $price;
		}
	
	function getProduct() {
		return "{$this->img} {$this->marka} {$this->productName} {$this->productYear} ";	
	}
}

// Удобная инициализация объектов, за счет использования конструктора
$product1 = new CarBlueprint1 ('<img src = http://d254andzyoxz3f.cloudfront.net/tumblr_n31rxqknva1rnxn7co1_500.gif' ,'width= 250> , </br>','Chevrolet Camaro',  '2008', 10.99);
$product2 = new CarBlueprint1 ('<img src = https://media.giphy.com/media/P4tASPRgclibS/source.gif','width= 250> , </br>', 'Nissan Murano', '2007', 5.99);

// Вызов метода

echo 'Авто: <b>'.$product1->getProduct().'</b>';
echo '<br>' ;
echo 'Авто: <b>'.$product2->getProduct().'</b>';
echo '<br>' ;
echo '<br>' ;








class Item
{
    public $name, $type;
    function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }
     
    function getInfo()
    {
        echo "Название: $this->name, Тип вещи: $this->type <br>";
    }
}
 
$TV1 = new Item("телевизор LG", "Smart TV");
$TV1->getInfo();
$TV2 = new Item("телевизор Samsung", "3D TV");
$TV2->getInfo();


$Pen1 = new Item ("Ручка", "Blue");
$Pen1->getInfo();
$Pen2= new Item ("Ручка", "Red");
$Pen2->getInfo();

$Duck1 = new Item ("Утка", "Желтая");
$Duck1->getInfo();
$Duck2 = new Item ("Утка", "Белая");
$Duck2->getInfo();


?>






</body>
</html>
