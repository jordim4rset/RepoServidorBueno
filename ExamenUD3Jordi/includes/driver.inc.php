<?php
class Driver{
    private string $name;
    private int $travels;
    private float $km;
    private float $balance;
    private bool $active;

    //CONSTRUCTOR
    public function __construct(string $name, int $travels = 0, float $km = 0, float $balance = 0, bool $active = true){
        $this->name = $name;
        if($travels < 0){
            $this->travels = 0; 
        }
        if($km < 0){
            $this->km = 0; 
        }
        if($balance < 0){
            $this->balence = 0; 
        }
        $this->travels = $travels;
        $this->km = $km;
        $this->balance = $balance;
        $this->active = $active;    
    }

    //GETTER MÁGICO

    public function __get($property){
        return $this->$property;
    }

    //SETTER MÁGICO
    public function __set($property, $value){
        if($property != 'km' && $property != 'balance' && $property != 'travels'){
            return $this->$property = $value;
        }
    }

    //MÉTODO REGISTRAR VIAJE
    public function travelRegistration(float $kmTravel):bool{
        if($this->active == 'true' && $kmTravel > 0){
            $this->travels += 1;
            $this->km += $kmTravel;
            $this->balance += ($kmTravel*2);
            return true;
        }else{
            return false;
        }
    }

    //MÉTODO RESETEAR CONDUCTOR
    public function resetDriver():void{
        $this->travels = 0;
        $this->km = 0;
        $this->balance = 0;
        $this->active = true;
    }


}

?>











$jordi = New Customer('Jordi');
        $carbonara = New Pizza('Carbonara',10,'L');

        $pedidoJordi = New Order('Pedido Jordi', 0.5, 0.10);

    
        echo '<h1>'.$jordi->name.'</h1>';