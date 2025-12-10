<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAMEN</title>
</head>
<body>
    <!--------------------- EJERCICIO 1 --------------------->
    <?php
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/order.inc.php');
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/customer.inc.php');
        require_once($_SERVER['DOCUMENT_ROOT'] .'/includes/pizza.inc.php');


        $customer1 = New Customer('Rick Sanchez');
        $pizza1 = New Pizza('Barbacoa',12.0,'mm');
        $pizza2 = New Pizza('Carbonara',14.5);
        $pizza3 = New Pizza('Margarita',9.5,'XL');
        $pizza4 = New Pizza('Hawaiana',10.0,'S');
        $pizza5 = New Pizza('Personalizada',15.5,'L');
        $pizza6 = New Pizza('Personalizada2',15.5,'L');
        $order1 = New Order('Pedido Rick',8.0,10);
        $order1->addPizza($pizza1);
        $order1->addPizza($pizza2);
        $order1->addPizza($pizza3);
        $order1->addPizza($pizza4);
        $order1->addPizza($pizza5);
        $order1->addPizza($pizza6);
        $order1->addCustomer($customer1);


        echo '<pre>';
        echo var_dump($order1);
        echo '</pre>';

        echo '<h1>Pedido: '.$order1->name.'</h1>';
        echo 'Cliente: '.$order1->customers[0]->name.'<br>';
        echo 'Pizzas<br>';
        foreach($order1->pizzas as $pizza){
            echo $pizza->name.' ('.$pizza->size.') <br>';
        }
        echo 'Precio Final '.$order1->finalPrice();


        
    ?>

</body>
</html>