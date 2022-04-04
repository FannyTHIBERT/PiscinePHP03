<?php
class Gecko {
    private $name;
    private $age;
    public function __construct($name=null, $age=0)
    {
        $this->name = $name;
        $this->age = $age;
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
  
    public function getAge()
    {
        return $this->age;
    }
    
    public function setAge($age)
    {
       return $this->age = $age;
    }
    
    public function status()
    {
       switch(true)
       {
           case ($this->age == 0):
            echo "Unborn Gecko\n";
            break;
           case ($this->age>=1 && $this->age<=2):
            echo "Baby Gecko\n";
            break;
           case ($this->age>=3 && $this->age<=10):
            echo "Adult Gecko\n";
            break;
           case ($this->age>=11 && $this->age<=13):
            echo "Old Gecko\n";
            break;
           default:
            echo "Impossible Gecko\n";
       }
    }
}
