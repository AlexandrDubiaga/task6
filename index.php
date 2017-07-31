<?php
include('autoload.php');
include ('config.php');
use libs\Band;
use libs\Instrument;
use libs\Musician;

$instrument = new Instrument('Gitara','Electro');
$musician = new Musician('ROCK');
$group = new Band('PICABU','Dup_Step');

$musicianWithInstrument = $musician->addInstrument($instrument);
if(!$musicianWithInstrument){
    echo Error_add_Instrument;
}else
{
    echo Good_add_Instrument;
}
$assingMusicianIntoTheGroup = $musician->assingToBand($group);
if(!$assingMusicianIntoTheGroup){
    echo Error_assing_musician;
}else
{
    echo Good_assing_musician;
}

$addedMusicianIntotheGroup = $group->addMusician($musician);
if(!$addedMusicianIntotheGroup){
    echo Error_added_musician;
}else
{
    echo Good_added_musician;
}
$musicianInBand = $group->getMusician();
include('templates/index.php');

?>