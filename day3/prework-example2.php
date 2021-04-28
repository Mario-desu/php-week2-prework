<?php
           class Test
           {
                    public $msg= "Hello World"; // this is a property


               public function printHello(){ // this is a method
                    echo $this->msg;
               }
           }

           $var = new Test();
           $var->printHello();
       ?>