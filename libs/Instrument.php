<?php
namespace libs;
use interfaces\iInstrument;

class Instrument implements iInstrument
{
    protected $nameInstrument;
    protected $categoriesInstrument;
    public function __construct($nameInstr,$categor)
    {
        $this->nameInstrument = $nameInstr;
        $this->categoriesInstrument = $categor;
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