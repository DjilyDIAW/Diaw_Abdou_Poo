# Diaw_Abdou_Poo
1__construct(): Cette méthode magique est appelée automatiquement lors de l'instanciation d'un objet. Elle est utilisée pour effectuer des actions d'initialisation sur l'objet nouvellement créé.

class MyClass {
    public function __construct() {
        echo "L'objet a été instancié.";
    }
}

$obj = new MyClass();

2__destruct(): Cette méthode magique est appelée automatiquement lorsque l'objet n'est plus utilisé, généralement lorsque sa référence atteint zéro. Elle est utilisée pour effectuer des actions de nettoyage ou de libération de ressources.

class MyClass {
    public function __destruct() {
        echo "L'objet est détruit.";
    }
}

$obj = new MyClass();
unset($obj);

3__get(): Cette méthode magique est appelée lorsque l'on tente d'accéder à une propriété inaccessible d'un objet (propriété non déclarée ou privée). Elle permet de définir un comportement personnalisé pour l'accès en lecture à ces propriétés.

class MyClass {
    private $data = [];

    public function __get($name) {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } else {
            return null;
        }
    }
}

$obj = new MyClass();
$obj->property = "Valeur"; 
echo $obj->property;

4__set(): Cette méthode magique est appelée lorsqu'on tente de définir une valeur à une propriété inaccessible d'un objet (propriété non déclarée ou privée). Elle permet de définir un comportement personnalisé pour l'accès en écriture à ces propriétés.

class MyClass {
    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
}

$obj = new MyClass();
$obj->property = "Valeur"; 
echo $obj->property;

5__call(): Cette méthode magique est appelée lorsqu'on tente d'appeler une méthode inaccessible d'un objet (méthode non déclarée ou privée). Elle permet de définir un comportement personnalisé pour l'appel de ces méthodes.

class MyClass {
    private function privateMethod() {
        echo "Ceci est une méthode privée.";
    }

    public function __call($name, $arguments) {
        echo "La méthode $name() n'existe pas.";
    }
}

$obj = new MyClass();
$obj->undefinedMethod();git 