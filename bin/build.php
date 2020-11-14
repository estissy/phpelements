<?php

declare(strict_types=1);

use Elements\Element\Head;
use Elements\Element\Html;
use Elements\Element\Li;
use Elements\Element\Link;
use Elements\Element\Ol;
use Elements\Element\P;
use Elements\Element\Title;
use Elements\Keyword\AutocapitalizeKeyword;
use Elements\Keyword\ContentEditableKeyword;
use Elements\Keyword\CustomElementName;
use Elements\Keyword\DirKeyword;
use Elements\Keyword\DraggableKeyword;
use Elements\Keyword\EnterKeyHintKeyword;
use Elements\Keyword\InputModeKeyword;
use Elements\Keyword\LanguageKeyword;
use Elements\Keyword\SpellcheckKeyword;
use Elements\Keyword\TranslateKeyword;
use Elements\Microsyntax\SpaceSeparatedTokens\OrderedUniqueSpaceSeparatedTokens;
use Elements\Microsyntax\SpaceSeparatedTokens\UnorderedUniqueSpaceSeparatedTokens;
use Elements\Number\IntegerValue;
use Elements\Text;
use Elements\TextValue;
use Elements\Url\UrlPotentiallySurroundedBySpaces;

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
$someParagraph->setHidden();
$someParagraph->setInputMode(InputModeKeyword::text());
$someParagraph->setIs(new CustomElementName('welcome'));
$someParagraph->setItemId(new UrlPotentiallySurroundedBySpaces('http://worldcat.org/entity/work/id/2292573321'));
$someParagraph->setItemProp(new UnorderedUniqueSpaceSeparatedTokens('welcome'));
$someParagraph->setItemRef(new UnorderedUniqueSpaceSeparatedTokens('hello :-)'));
$someParagraph->setItemScope();
$someParagraph->setLang(LanguageKeyword::plPL());
$someParagraph->setNonce(TextValue::fromString('???'));
$someParagraph->setSpellcheck(SpellcheckKeyword::true());
$someParagraph->setStyle(TextValue::fromString('background-color: red;'));
$someParagraph->setTabIndex(new IntegerValue(-20));
$someParagraph->setTitle(TextValue::fromString('Elo :-)'));
$someParagraph->setTranslate(TranslateKeyword::yes());

$someParagraph->appendNode($secondLevel);
$someParagraph->appendNode($secondSubLevel);
$someParagraph->appendNode(new Text(']:-)'));
$someParagraph->appendNode(new Text('World :-)'));

$title = new Title();
$title->appendNode(new Text('My personal website :-)'));

$head = new Head();

$head->appendNode($title);

$html = new Html();
$html->appendNode($head);

$link = new Link();
$ol = new Ol();
$someLi = new Li();
$someLi->appendNode(new Text('Hello'));
$ol->appendNode($someLi);

echo $ol;
