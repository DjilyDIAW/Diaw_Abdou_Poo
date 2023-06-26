<?php
class DefaultController{
    public function notFound(){
        http_response_code(404);
        require 'Vue/errors/404.php';
    }

}