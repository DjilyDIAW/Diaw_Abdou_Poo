<?php
spl_autoload_register(function($className){
    if(str_ends_with($className, "Controller")){
        require 'Controller/'.$className.'.php';
    }  elseif (str_ends_with($className, 'Manager')){
        require 'Modele/Manager/'.$className.'.php';
    }
    else {
        require 'Modele/Class/'.$className.'.php';
    }

});