<?php
include('interfaces/iMusician.php');
class Musician implements iMusician
{
    protected $typeMysician = array();
    protected $instrument = array();
    protected $categoryInstrument = array();
    protected $band = array();
    protected $bandGebre = array();
    public function addTypeMusician($typeMysician)
    {
        $this->typeMysician[] = $typeMysician;
    }
    public function addInstrument(iInstrument $obj)
    {
        if(empty($obj) || !isset($obj))
        {
            return false;
        }
        if($obj)
        {
            $this->instrument[] = $obj->getName();
            $this->categoryInstrument[] = $obj->getCategory();

            return true;
        }
        return false;

    }
    public function getInstrument()
    {
        return    $this->instrument;
    }
    public function getInstrumentCategory()
    {
        return    $this->categoryInstrument;
    }
    public function assingToBand(iBand $nameBand)
    {
        if(empty($nameBand) || !isset($nameBand))
        {
            return false;
        }
        if($nameBand)
        {
            $this->band[] = $nameBand->getName();
            $this->bandGebre[] = $nameBand->getGenre();
            return true;
        }
        return false;
    }
    public function getAssingBand()
    {
        return $this->band;
    }
    public function getGenreBand()
    {
        return $this->bandGebre;
    }
    public function getMusicianType()
    {

        return   $this->typeMysician;
    }
}

?>

