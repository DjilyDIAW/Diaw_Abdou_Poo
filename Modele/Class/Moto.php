<?php
    class Moto{
        private $id;
        private $marque;
        private $modele;
        private $type;
        private $image;
    
/**
     * Moto constructor.
     * @param $id
     * @param $marque
     * @param $model
     * @param $type
     * @param $image
     */
    public function __construct($id, $marque, $modele, $type, $image)
    {
        $this->id = $id;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->type = $type;
        $this->image = $image;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return htmlentities($this->marque);
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return htmlspecialchars($this->modele);
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele): void
    {
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

}
?>
