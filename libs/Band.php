<?php
include('interfaces/iBand.php');
class Band implements iBand
{
    protected $nameBand;
    protected $genreBand = array();
    protected $nameInstrument;
    protected $categoryInstrument;
    protected $bangAssignMusicion;
    protected $typeMusician;
    protected $bandGenre;
    public function addNameBand($nameBand)
    {
        $this->nameBand = $nameBand;
    }
    public function addGenreBand($genreBand)
    {
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
            $this->nameInstrument = $obj->getInstrument();
            $this->categoryInstrument = $obj->getInstrumentCategory();
            $this->typeMusician = $obj->getMusicianType();
            $this->bangAssignMusicion = $obj->getAssingBand();
            $this->bandGenre = $obj->getGenreBand();
            return true;
        }
        return false;
    }
    public function getMusician()
    {
        $arr = array($this->typeMusician,$this->bangAssignMusicion , $this->bandGenre, $this->nameInstrument, $this->categoryInstrument);
        return $arr;
    }


}


?>