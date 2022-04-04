<?php
class Gecko {
    public $name;
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
}

