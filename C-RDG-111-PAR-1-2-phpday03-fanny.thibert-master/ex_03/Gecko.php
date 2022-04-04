<?php
class Gecko {
    private $name;
    public function __construct($name=null)
    {
        $this->name = $name;
        if($this->name != null)
        {
            echo "Hello " . $name . " !" . "\n";
        } else {
            echo "Hello !\n";
        }
    }
    public function __destruct()
    {
        if($this->name != null)
        {
        echo "Bye " . $this->name . " !\n";
        } else {
        echo "Bye !\n";
        }
    }
    public function getName()
    {
        return $this->name;
    }
}

/*$thomas = new Gecko("Thomas");
$anonymous = new Gecko();
$serguei = new Gecko("Serguei");
unset($serguei);
echo $thomas->getName() . "\n";
echo $anonymous->getName() . "\n";*/