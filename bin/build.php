<?php

declare(strict_types=1);

use Elements\Element\P;
use Elements\Keyword\AutocapitalizeKeyword;
use Elements\Keyword\ContentEditableKeyword;
use Elements\Keyword\DirKeyword;
use Elements\Keyword\DraggableKeyword;
use Elements\Keyword\EnterKeyHintKeyword;
use Elements\Microsyntax\SpaceSeparatedTokens\OrderedUniqueSpaceSeparatedTokens;
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
$someParagraph->setAccessKey(new OrderedUniqueSpaceSeparatedTokens('A 1'));
$someParagraph->setAutocapitalize(AutocapitalizeKeyword::none());
$someParagraph->setAutofocus();
$someParagraph->setContentEditable(ContentEditableKeyword::true());
$someParagraph->setDir(DirKeyword::ltr());
$someParagraph->setDraggable(DraggableKeyword::true());
$someParagraph->setEnterKeyHint(EnterKeyHintKeyword::enter());

$someParagraph->appendNode($secondLevel);
$someParagraph->appendNode($secondSubLevel);
$someParagraph->appendNode(new Text(']:-)'));

echo $someParagraph;
