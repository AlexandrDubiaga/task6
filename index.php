<?php
include ('config.php');
include('libs/Band.php');
include('libs/Musician.php');
include('libs/Instrument.php');
$gitara = new Instrument();
$pianino = new Instrument();
$baraban = new Instrument();
$musicianFirst = new Musician();
$musicianSecond = new Musician();
$vagos = new Band();
$rifa = new Band();
$rifa->addNameBand('Riva');
$rifa->addGenreBand('gancster');
$vagos->addNameBand('Vagos');
$vagos->addGenreBand('LKN');

$gitara->addInstrument('Gitara');
$gitara->addInstrumenCategory('Electro');

$baraban->addInstrument('Baranan');
$baraban->addInstrumenCategory('Udarnie');

$pianino->addInstrument('Pianino');
$pianino->addInstrumenCategory('Dram-Base');


$musicianWithInstrumentGitara = $musicianFirst->addInstrument($gitara);
$musicianWithInstrumentPiano = $musicianFirst->addInstrument($pianino);
if(!$musicianWithInstrumentGitara || !$musicianWithInstrumentPiano){
   $errorAddinstrument =  Error_add_Instrument;
}else
{
    $goodAddinstrument =  Good_add_Instrument;
}
$musicianFirst->addTypeMusician('Solist');


$assingMusicianIntoTheGroupRifa = $musicianFirst->assingToBand($rifa);
$assingMusicianIntoTheGroupVagos = $musicianFirst->assingToBand($vagos);
if(!$assingMusicianIntoTheGroupRifa && !$assingMusicianIntoTheGroupVagos){
   $errorAssignMusician =  Error_assing_musician;
}else
{
    $goodAssignMusician =  Good_assing_musician;
}
$addedMusicianIntotheGroup = $rifa->addMusician($musicianFirst);
if(!$addedMusicianIntotheGroup){
    $errorAddedMusician =  Error_added_musician;
}else
{
    $goodAddedMusician = Good_added_musician;
}
$musicianInBand = $rifa->getMusician();


$musicianWithInstrumentBaraban = $musicianSecond->addInstrument($baraban);
if(!$musicianWithInstrumentBaraban){
    $errorAddinstrumentForSecondMusician =  Error_add_Instrument;
}else
{
    $goodAddinstrumentForSecondMusician =  Good_add_Instrument;
}
$musicianSecond->addTypeMusician('Back-Vokalist');
$assingMusicianIntoTheGroupRivaBand = $musicianSecond->assingToBand($rifa);
if(!$assingMusicianIntoTheGroupRivaBand){
    $errorAssignMusicianForSecondMusician =  Error_assing_musician;
}else
{
    $goodAssignMusicianForSecondMusician =  Good_assing_musician;
}
$addedMusicianIntotheGroupRifaband = $rifa->addMusician($musicianSecond);
if(!$addedMusicianIntotheGroupRifaband){
    $errorAddedMusicianForSecondMusician =  Error_added_musician;
}else
{
    $goodAddedMusicianForSecondMusician = Good_added_musician;
}
$musicianSecondinBand = $rifa->getMusician();


include('templates/index.php');

?>