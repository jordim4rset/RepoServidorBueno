<?php

class Order{

    private string $name;
    private float $discount;
    private float $iva;
    private array $pizzas = [];
    private array $customers = [];


    //CONSTRUCTOR
    public function __construct(string $name, float $discount = 0, float $iva = 10){
        $this->name = $name;
        $this->discount = $discount;
        $this->iva = $iva;
    }

    //GETTER MÁGICO
    public function __get($property){
        return $this->$property;
    }

    //SETTER MÁGICO
    public function __set($property, $value){
        return $this->$property = $value;
    }

    //MÉTODO AÑADIR PIZZA
    public function addPizza(Pizza $pizzaAUX){
        $this->pizzas[] = $pizzaAUX;
    }

    //MÉTODO AÑADIR CLIENTE
    public function addCustomer(Customer $customerAUX){
        $this->customers[] = $customerAUX;
    }

    //MÉTODO PRECIO FINAL
    public function finalPrice(){
        $precio = 0;
        foreach($this->pizzas as $pizza){
            $precio += $pizza->basePrice;
            if($pizza->size == 'S'){
                $precio -= 1;
            }
            if($pizza->size == 'L'){
                $precio += 1.5;
            }
            if($pizza->size == 'XL'){
                $precio += 2.5;
            }
        }
        
        //APLICAMOSEL DESCUENTO SI HAY
        if($this->discount > 0){
            $precio *= ($this->discount);
        }

        echo '<pre>';
        echo var_dump($this->customers);
        echo '</pre>';
        //APLICAMOS DESCUENTO 5% POR SER CLIENTE
        if($this->customers[0]->member == 'true'){
            $precio *= 0.95;
        }

        //AÑADIMOS EL IVA
        if($this->iva > 0){
            $precio *= ($this->iva/100); 
        }
        return $precio;

    }

}
?>