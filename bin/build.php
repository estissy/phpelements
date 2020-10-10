<?php

declare(strict_types=1);

use Elements\Element\P;
use Elements\Keyword\AutocapitalizeKeyword;
use Elements\Text;

require_once __DIR__ . '/../vendor/autoload.php';

$phrases = [
    'Welcome to the jungle :-)',
    'Welcome to reality :-)',
];

$thirdLevel = new P();
$thirdLevel->setAutocapitalize(AutocapitalizeKeyword::characters());

foreach ($phrases as $phrase) {
    $thirdLevel->appendNode(new Text($phrase));
}

$secondLevel = new P();
$secondLevel->appendNode($thirdLevel);

$secondSubLevel = new P();

$someParagraphToAppend = new P();
$someParagraphToAppend->setAutocapitalize(AutocapitalizeKeyword::words());
$someParagraphToAppend->appendNode(new Text('A'));

$someParagraph = new P();
$someParagraph->setAutocapitalize(AutocapitalizeKeyword::none());
$someParagraph->appendNode($secondLevel);
$someParagraph->appendNode($secondSubLevel);

echo $someParagraph;
