<?php
class Gecko {
    private $name;
    private $age; 
    private $energy;
    public function __construct($name=null, $age=0, $energy=100)
    {
        $this->name = $name;
        $this->age = $age;
        $this->energy = $energy;
        if($this->name != null)
        {
            echo "Hello " . $name . " !" . "\n";
        } else 
        {
            echo "Hello !\n";
        }
        if($this->energy>100)
        {
            $this->energy = 100;
        }
        if($this->energy<0)
        {
            $this->energy = 0;
        }
    }
    public function __destruct()
    {
        if($this->name != null)
        {
        echo "Bye " . $this->name . " !\n";
        } else 
        {
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
    public function hello($string=null)
    {
    switch(true)
        { 
        case ($this->name!==null && $string!==null && !is_int($string)):     
            echo "Hello $string, I'm $this->name!\n";
            break;
        case ($this->name==null && $string!==null && !is_int($string)):
            echo "Hello $string!\n";
            break;
        case (is_int($string) && $string>=0):
            if($this->name!==null) 
            {
                echo str_repeat("Hello, I'm $this->name!\n", $string);
            } else {
                echo str_repeat("Hello !\n", $string);
            }
            break;
        case ($this->name==null && $string!==null && !is_int($string)): 
            echo "Hello !\n";
            break;
        default:
        break;
        } 
    }
    public function eat($str)
    {
        if(strcasecmp($str,"Meat") == 0)
        {
            echo "Yummy!\n";
            $this->energy = $this->energy + 10;
        }
        elseif(strcasecmp($str,"Vegetable") == 0)
        {
            echo "Erk!\n";
            $this->energy = $this->energy - 10;
        }
        else
        {
            echo "I can't eat this.\n";
        }
        if($this->energy>100)
        {
            $this->energy = 100;
        }
        if($this->energy<0)
        {
            $this->energy = 0;
        }
    }
    public function getEnergy()
    {
        return $this->energy;
    }
    
    public function setEnergy($energy)
    {
        if($energy>100)
        {
            $energy = 100;
        }
        if($energy<0)
        {
            $energy = 0;
        }
        $this->energy = $energy;
    }

    public function work()
    {
        if($this->energy>=25)
        {
            echo "I'm working T.T\n";
            $this->energy = $this->energy - 9;
        }
        elseif($this->energy<25)
        {
            echo "Heyyy... I'm too sleepy, better take a nap!\n";
            $this->energy = $this->energy + 50;        
        }
    }
}
/*$monGecko = new Gecko();
echo $monGecko->getEnergy() . PHP_EOL;
$monGecko->eat("meat");
echo $monGecko->getEnergy() . PHP_EOL;
$monGecko->work();*/