<?php
include('interfaces/iInstrument.php');
class Instrument implements iInstrument
{
    protected $nameInstrument = array();
    protected $categoriesInstrument = array();
    public function addInstrument($var)
    {
        $this->nameInstrument = $var;
    }
    public function addInstrumenCategory($var)
    {
        $this->categoriesInstrument = $var;
    }
    public function getName()
    {
        return $this->nameInstrument;
    }
    public function getCategory()
    {
        return $this->categoriesInstrument;
    }
}

?>