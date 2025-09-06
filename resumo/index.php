<?php
//fundamentos de POO (Programação Orientada a Objetos) em PHP
//como escrever uma classe e estanciar um objeto

class animal{
// as propriedades são os atributos das classes, ou seja, são as variáveis que definem o estado do objeto
    public $nome;
    public $habitat;

}
$cachorro = new animal();// criando ou instanciando um objeto da classe animal
$cachorro->nome = "rex";// atribuindo o valor "rex" para a propriedade nome do objeto cachorro
$cachorro->habitat = "casa";// atribuindo o valor "casa" para a propriedade habitat do objeto cachorro

$macaco = new animal();
$macaco->nome = "macaco"; //atribuindo valor "macaco" para a propriedade "nome" do objeto macaco da classe animal
$macaco->habitat = "floresta";//valor "floresta" atribuído para a propriedade habitat do objeto "macaco" da classe animal

//faço a chamada do echo para exibir os valores instanciados acima.
// ao digitar $cachorro->nome o objeto cachorro, que é independente de outro objeto, "aponta" para sua propriedade nome, assim o valor "rex" é exibido
// o mesmo acontece com a propriedade habitat, que exibe o valor "casa"   
echo "esse animal chama-se $cachorro->nome e habita em $cachorro->habitat";
echo "<br>";
echo "esse animal chama-se $macaco->nome e habita em $macaco->habitat";

// apesar de serem objetos diferentes, ambos compartilham a mesma estrutura da classe animal, mas possuem valores distintos para suas propriedades.
echo "<hr>";
//===============================================================================================================================================
// os metodos são as funções que definem o comportamento do objeto
class animais{
 //propriedades
public $raça;
public $idade;

public function exibirAnimal()
{
    return "esse animal é da raça {$this->raça} e tem {$this->idade} anos.";
    // a palavra $this refere-se as propriedades do objeto atual, ou seja, o objeto que está chamando o método 
}

}
// criando ou instanciando objetos da classe animais
// os objetos cachorro e gato são instâncias da classe animais, cada um com suas próprias propriedades
$cachorro = new animais();
$cachorro->raça = "poodle";
$cachorro->idade = 50;

$gato = new animais();
$gato->raça = "persa";
$gato->idade = 5;


// chamando o método exibirAnimal para exibir as informações dos objetos cachorro e gato
// o método exibirAnimal retorna uma string formatada com as propriedades do objeto, que são
echo $cachorro->exibirAnimal();
echo "<br>";
echo $gato->exibirAnimal();
echo "<hr>";
//============================================================ACCESS MODIFIERS=========================================

// os access modifiers são palavras-chave que controlam a visibilidade das propriedades e métodos de uma classe
// existem três tipos de modificadores de acesso: public, protected e private.
//public: as propriedades e métodos são acessíveis de qualquer lugar, tanto dentro quanto fora da classe.
//protected: as propriedades e métodos são acessíveis apenas dentro da classe e em classes que herdam dela.
//private: as propriedades e métodos são acessíveis apenas dentro da própria classe, não podendo ser acessados por classes que herdam dela.
// funções também podem conter access modifiers para acesso de seus dados. 
//obs: os acess modifiers são importantes para encapsular os dados e funções das classes
class pessoa{
    public $nome;
    private $apelido;
    protected $idade;
    function set_apelido($apelido)
    {// o método set_apelido é usado para definir o valor da propriedade apelido
        
        //$this->apelido = "joaozinho"; atribuindo o valor "joaozinho" para a propriedade privada apelido porém o método não é flexivel, sempre resultará no valor "joaozinho" 
        return $this->apelido = $apelido;// o $this->apelido = $apelido torna a classe mais flexível, permitindo que o valor da propriedade apelido seja definido dinamicamente ao chamar o método set_apelido 
    }
    function get_apelido()
    {// o método get_apelido é usado para obter o valor da propriedade apelido
        return $this->apelido;
    }

    function exibirApelido()
    {
        return "o apelido é {$this->get_apelido()}";
    }
   //criando os métodos set e get para acessar a propriedade privada apelido

}

$h = new pessoa();
$h->nome = "joão";// atribuindo o valor "joão" para a propriedade nome do objeto h da classe pessoa
// $h->apelido = "joaozinho";(private) não funcionará devido os access modifiers, pois a propriedade apelido é privada e só pode ser acessada dentro da classe pessoa
// $h->idade = 20; (protected)não funcionará devido os access modifiers, pois a propriedade idade é protegida e só pode ser acessada dentro da classe pessoa e em classes que herdam dela
// para exibir o apelido, é necessário criar a função set_ apelido() e get_apelido() dentro da classe pessoa, isso permitirá acessar e exibir a propriedade "apelido"
$h->set_apelido("joaozinho");// chamando o método set_apelido(), o método recebe o valor "joaozinho" e o atribui à propriedade apelido do objeto h
echo $h->exibirApelido();
// o método exibirApelido() chama o método get_apelido() para obter o valor da propriedade apelido e exibi-lo

echo "<hr>";
//===============================================================CONSTRUCTOR=========================================================================
/* o constructor é um conceito de POO que está relacionada com a existencia de um método especial
dentro da classe que vai ser executado automaticamente sempre que um novo objeto é criado a partir dessa classe*/

class carro {
private $ano;
private $modelo;
// o método pode ter parâmetros ou não, mas geralmente é usado para inicializar as propriedades do objeto
//dentro do metodo estou dizendo que o ano do carro é igual o parâmetro $a e assim funciona com o modelo.  
public function __construct($a, $m){
    $this->ano = $a;
    $this->modelo = $m;
}
//como os atributos são privados, necessito de criar métodos get e set para buscar o valo e exibir
function get_ano(){

    return $this->ano;
}

function get_modelo(){

    return $this->modelo;
}

function exibirCarro(){
    return "esse carro é um {$this->get_modelo()} do ano de {$this->get_ano()}";
}

}
/*quando vamos fazer a instanciação da classe num objeto,
 essa instanciação vai obrigar a definição dos argumentos que o método
  especial __construct está pedindo */

  $carro1 = new carro(2020, "gol");// devo passar os parâmetros que o método construtor está pedindo
  //(2020, "gol"); estou passando os valores para os parâmetros $a e $m do método construtor.
    echo $carro1->exibirCarro();
    echo "<hr>";
// quando usar?
// O construtor é usado quando queremos garantir que um objeto seja criado com um estado inicial válido.
// Por exemplo, ao criar um carro, queremos ter certeza de que ele tenha um ano e um modelo definidos desde o início.

//==========================================DESTRUCT=========================================
// __destruct é um método especial que é chamado automaticamente quando um objeto é destruído ou sai do escopo.
// ele é usado para liberar recursos, fechar conexões ou realizar outras tarefas de limpeza antes que o objeto seja removido da memória.
// o método __destruct não pode receber parâmetros e não retorna nenhum valor.
// quando usar?
// o método __destruct é usado quando precisamos garantir que certas ações sejam realizadas antes que um objeto seja destruído.
// por exemplo, se um objeto representa uma conexão de banco de dados, podemos usar o método __destruct para fechar a conexão automaticamente quando o objeto não for mais necessário.

class pessoas {
    private $nome;
    private $apelido;
    protected $idade;

    function __construct($nome, $apelido, $idade)
    {
        $this->nome = $nome;
        $this->apelido = $apelido;
        $this->idade = $idade;
    }

    function __destruct()
    {
        // O que fazer quando o objeto é destruído
        echo "O objeto da classe pessoa foi destruído.";
    }
}



















?>



