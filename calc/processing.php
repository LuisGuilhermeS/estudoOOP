<?php
class Calculadora{

    private $value1;
    private $value2;


public function __construct($value1, $value2){
    $this->value1 = $value1;
    $this->value2 = $value2;
}

public function get_somar(){
    return $this->value1 + $this->value2;
}

public function get_subtrair(){
    return $this->value1 - $this->value2;
}

public function get_multiplicar (){
    return $this->value1 * $this->value2;
}

public function get_dividir(){
    if ($this->value2 == 0 ){
    return "Divisão por zero não é permitida.";
}
return $this->value1 / $this->value2;
}
}

$resut = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value1 = $_POST['value1'];
    $value2 = $_POST['value2'];
}

$calculadora = new Calculadora($value1, $value2);

if (isset($_POST['operation'])) {

    switch ($_POST['operation']) {
        case 'soma':
            $result = $calculadora->get_somar();
            break;
        case 'subtracao':
            $result = $calculadora->get_subtrair();
            break;
        case 'multiplicacao':
            $result = $calculadora->get_multiplicar();
            break;
        case 'divisao':
            $result = $calculadora->get_dividir();
            break;
        default:
            $result = "Operação inválida.";
    }
} else {
    $result = "Nenhuma operação selecionada.";
} 

?>