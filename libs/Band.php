<?php
namespace libs;
use interfaces\iBand;
use interfaces\iMusician;
use interfaces\iInstrument;

class Band implements iBand{
    protected $nameBand;
    protected $genreBand;
    protected $styleMusician;
    protected $nameCategoryMusicianInstrument;
    protected $nameInstrument;
    protected $typeInstrument;
    protected $bangAssignMusicion;
    protected $typeMusician;
    public function __construct($nameBand,$genreBand)
    {
        $this->nameBand = $nameBand;
        $this->genreBand = $genreBand;
    }
    public function getName()
    {
        return $this->nameBand;
    }
    public function getGenre()
    {
        return $this->genreBand;
    }
    public function addMusician(iMusician $obj)
    {
        if(empty($obj) || !isset($obj))
        {
            return false;
        }
        if($obj){
            $this->nameCategoryMusicianInstrument = $obj->getInstrument();
            $this->nameInstrument = $this->nameCategoryMusicianInstrument[0];
            $this->typeInstrument = $this->nameCategoryMusicianInstrument[1];
            $this->typeMusician = $obj->getMusicianType();
            $this->bangAssignMusicion = $obj->getAssingBand();
            return true;
        }
        return false;
    }
    public function getMusician()
    {
        $arr = array($this->nameBand,$this->genreBand,$this->typeMusician,$this->bangAssignMusicion , $this->nameInstrument,  $this->typeInstrument);
        return $arr;
    }


}


?>