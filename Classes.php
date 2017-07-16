<?php
 
interface Entity{
    public function setColor();
    public function setOwner();
    public function setDescription();
}
 
abstract class Subject{
    private $length;
    private $width;
    private $height;
    private $color;
    private $description;
 
    private $owner; // владелец
 
    public function __construct($length, $width, $height){
        $this->length = $length;
        $this->width  = $width;
        $this->height = $height;
    }
 
    public function setOwner($owner){
        if($owner == NULL){
            $this->owner = "Nobody";
        } else {
            $this->owner = $owner;
        }
    }
 
    public function getXYZ(){
        return array($this->length, $this->width, $this->height);
    }
 
    public function setColor($color){
        $this->color = $color;
    }
 
    public function setDescription($description){
        $this->description = $description;
    }
}
 
class Vehicle extends Subject{
    private $VIN; // Vehicle Identification Number
 
    public function setVIN($VIN){
        $this->VIN = $VIN;
    }
 
    public function getVIN(){
        return $this->VIN;
    }
   
}
 
interface TV_interface{
    public function setBrand($brand);
    public function changeChannel($channel);
}
 
class TV  extends Subject implements TV_interface{
    private $brand;
    private $state;
    private $currentChannel;
 
    public function setBrand($brand){
        $this->brand = $brand;
    }
 
    /*
    * $state: type boolean;
    */
    public function setState($state){
        if($state == true){
            $this->state = $state;
        } else {
            $this->state = false;
        }
    }
 
    public function getState(){
        return $this->state;
    }
 
    public function changeChannel($channel){
        $this->currentChannel = $channel;
    }
 
    public function getCurrentChannel(){
        return $this->currentChannel;
    }
}
 
interface Ballpen_interface{
    public function switchState();
    public function write($text, $color);
}
 
class Ballpen extends Subject implements Ballpen_interface{
    private $state;
 
    public function __construct(){
        $this->state = false;
    }
 
    public function switchState(){
        $this->state ? $this->state = false : $this->state = true;
    }
 
    public function write($text, $color){
        echo "<h3 style='color: $color'>$text</h3>";
    }
}
 
interface Duck_interface{
    public function fly();
}
 
class Duck extends Subject implements Duck_interface{
    private $sex; // sex -- это пол, а не то, что ты подумал
            // 0 - утка, 1 - селезень
 
    public function __construct(){
        $this->sex = random_int(0, 1);
    }
 
    public function fly(){
        // it flies! (just believe me, i don't know how it to implement)
    }
}  
 
interface Good_interface{
    public function sell($amount);
    public function goodReceipt($amount);
 
}
 
class Good extends Subject implements Good_interface{
    private $price;
    private $remainder; // остаток на складе
 
    public function __construct(){
        $this->remainder = 0;
    }
 
    public function goodReceipt($amount){
        $this->remainder += $amount;
    }
 
    public function sell($amount){
        $this->remainder -= $amount;
    }
 
    public function getRemainder(){
        return $this->remainder;
    }
}
 
$pen = new Ballpen;
$pen->write("Привет, юзер", "red");
$pen->write("Сегодня отличная погода", "green");
$pen->write("А этот текст никто, вероятно, не увидит", "white");
 
 
 
$good = new Good;
$good->goodReceipt(50);
$good->sell(20);
echo "<br>Осталось товара на складе: ".$good->getRemainder();