<?php

class ComuniModel {
    
    /**
     * Elenco dei comuni
     * @var array
     */
    private $comuni = [];
    public function __construct() {
        $comuni = file_get_contents("https://comuni-ita.herokuapp.com/api/comuni/piemonte");
        // var_dump($comuni);
        $this->comuni = json_decode($comuni,true);
    }

    public function all()
    {
        return $this->comuni;
    }

    public function findByName(string $nomeComune):array
    {
        $risultato = array();
        foreach ($this->comuni as $comune) {
            if(cercaInArray($comune,'nome',$nomeComune)){
                // Aggiunge un comune all'array dei risultati
                $risultato[] = $comune;
            }
        }
        
        return $risultato;
    }
 
}