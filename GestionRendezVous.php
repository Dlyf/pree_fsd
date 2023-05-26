<?php

class SocieteFinancement {
    public function __construct(
        private int $code,
        private string $name,
        private $expertises = []
    ) {}

     /**
         * Get the value of code
         */ 
        public function getCode()
        {
                return $this->code;
        }

        /**
         * Set the value of code
         *
         * @return  self
         */ 
        public function setCode($code)
        {
                $this->code = $code;

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

    public function SocieteFinancement(){

    }

    public function AjouterExpertisePool($expertise){
        $this->expertises[] = $expertise;
    }

    public function AjouterExpertiseClient(){

    }

    public function LesExpertisesIndispos(){
        $expertisesIndispos = [];
        foreach ($this->expertises as $expertise) {
        if ($expertise->isIndispos()) {
            $expertisesIndispos[] = $expertise;
        }
    }
    return $expertisesIndispos;
    }

    public function NbIndisponibilites(){
        $nbIndisponibilites = 0;
        foreach ($this->expertises as $expertise) {
          if ($expertise->isIndispos()) {
            $nbIndisponibilites++;
          }
        }
        return $nbIndisponibilites;
    }

    public function NbIndisponibilitesParMotif(){

    }

}

class Expertise {
    public function __construct(
        private $date,
        private $heure,
        private $immatriculation,
        private $marque,
        private $modele,
    ) {}

    public function getDate() {
        return $this->date;
      }

      public function getHeure() {
        return $this->heure;
      }

      public function getImmatriculation() {
        return $this->immatriculation;
      }

      public function getMarque() {
        return $this->marque;
      }

      public function getModele() {
        return $this->modele;
      }
}

class Pool_Garage {

}

class RDV_Client {

}

class Indisponibilité {
    public function __construct(
        private $clientResponsable,
        private $motif,
    ) {}

    public function getMotif() {
        return $this->motif;
      }

        
}