<?php
    class MotoManager extends DbManager{
        public function getAll(){
            $query = $this->bdd->prepare("SELECT * FROM moto");
            $query->execute();
            $res = $query->fetchAll();

            $motos = [];

            foreach ($res as $moto){
                $motos[] =
                    new Moto($moto["id"], $moto["marque"],
                        $moto["modele"], $moto["type"],
                        $moto["image"]);
            }

            return $motos;

        }

        public function getOne($id){
            $query = $this->bdd->prepare("SELECT * FROM moto WHERE id = :id");
            $query->bindParam("id", $id);
            $query->execute();
            $result = $query->fetch();

            $moto = null;

            if($result){
                $moto = new moto($result["id"], $result["marque"],
                    $result["modele"], $result["type"],
                    $result["image"]);
            }

            return $moto;
        }

        public function delete($moto){
            $id = $moto->getId();
            $query =
                $this->bdd->prepare("DELETE FROM moto WHERE id = :id");

            $query->bindParam("id",$id);
            $query->execute();

        }

        public function add($moto){
            $model = $moto->getMarque();
            $energy = $moto->getModele();
            $isAuto = $moto->getType();
            $image = $moto->getImage();

            $query = $this->bdd->prepare(
                "INSERT INTO moto (marque, modele, type, image) 
                        VALUES (:marque, :modele, :type, :image)");
            $query->bindParam("marque", $marque);
            $query->bindParam('modele', $modele);
            $query->bindParam("type", $type);
            $query->bindParam("image", $image);

            $query->execute();
        }










    }
?>