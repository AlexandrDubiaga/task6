<?php
namespace libs;
use interfaces\iMusician;
use interfaces\iInstrument;
use interfaces\iBand;

class Musician implements iMusician
{
    protected $typeMysician;
    protected $instrument;
    protected $categoryInstrument;
    protected $band;
    public function __construct($typeMusician)
    {
        $this->typeMysician = $typeMusician;

    }
    public function addInstrument(iInstrument $obj)
    {
        if(empty($obj) || !isset($obj))
        {
            return false;
        }
        if($obj)
        {
            $this->instrument = $obj->getName();
            $this->categoryInstrument = $obj->getCategory();
            return true;
        }
        return false;

    }
    public function getInstrument()
    {   $arr = array($this->instrument,$this->categoryInstrument);
        return $arr;
    }
    public function assingToBand(iBand $nameBand)
    {
        if(empty($nameBand) || !isset($nameBand))
        {
            return false;
        }
        if($nameBand) {
            $this->band = $nameBand->getName();
            return true;
        }
        return false;
    }
    public function getAssingBand()
    {
        return $this->band;
    }
    public function getMusicianType()
    {
        return $this->typeMysician;
    }
}

?>