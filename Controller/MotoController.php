<?php
    class MotoController{
        private $motoManager;

        public function __construct(){
            $this->motoManager = new MotoManager();

        }

        public function list(){
            $motos = $this->motoManager->getAll();

            require 'Vue/motos/list.php';

        }
        public function detail($id){
            $moto = $this->motoManager->getOne($id);

            if(is_null($moto)){
                header("Location: index.php?controller=default&action=not-found");
                die();
            }

            require 'Vue/motos/detail.php';
    }

    public function delete($id){
        $moto = $this->motoManager->getOne($id);

        if(is_null($moto)){
            header("Location: index.php?controller=default&action=not-found");
            die();
        }
        $this->motoManager->delete($moto);
        header("Location: index.php?controller=moto&action=list");
    }

    public function ajout(){
        $errors = [];

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // Je vérifie qu'un model est saisie
            if(empty($_POST["marque"])){
                $errors["marque"] = 'Veuillez saisir une marque';
            }
            // Je vérifie que mon modele ne fait pas plus de 250 char
            if(strlen($_POST["marque"])>250){
                $errors["marque"] = 'Veuillez choisir une marque';
            }

            // Je vérifie qu'un model est saisie
            if(empty($_POST["modele"])){
                $errors["modele"] = 'Veuillez saisir un modele';
            }
            // Je vérifie que mon modele ne fait pas plus de 250 char
            if(strlen($_POST["modele"])>250){
                $errors["modele"] = 'Veuillez choisir un modele';
            }

            // Je vérifie qu'un model est saisie
            if(empty($_POST["type"])){
                $errors["type"] = 'Veuillez saisir un type';
            }
            // Je vérifie que mon modele ne fait pas plus de 250 char
            if(strlen($_POST["type"])>10){
                $errors["type"] = 'Veuillez choisir un type';
            }

            if(count($errors) == 0){
                $moto = new moto(null, $_POST["marque"], $_POST["modele"],
                $_POST["type"], null);

                if($_FILES["image"]["error"] != 4){
                  if(!in_array($_FILES["image"]['type'], self::$allowedFile)){
                      $errors["image"] = "Nous acceptons seulement les JPEG / PNG";
                  }

                  if($_FILES["image"]['error'] != 0){
                      $errors["image"] = "Une erreur s'est produite pendant l'upload";
                  }

                  if($_FILES["image"]["size"]>2000000){
                      $errors["image"] = "L'image est trop lourde elle doit faire moins de 2Mo";
                  }

                  if(count($errors) == 0){
                      $filename = uniqid().explode("/",$_FILES["image"]['type'])[1];
                      move_uploaded_file($_FILES["image"]["tmp_name"], 'public/img/'.$filename);
                      $moto->setImage($filename);
                  }
                }

                if(count($errors) == 0){
                    $this->motoManager->add($moto);
                    header("Location: index.php?controller=car&action=list");
                    die();
                }


            }

        }
        require 'Vue/motos/form.php';
    }




    

}
?>