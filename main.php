<?php

ob_start();

require_once 'html_generator.php';
require_once 'CSSGenerate.php';

if (file_exists('test.html') && file_exists('styles.css')) {
    unlink('test.html');
    unlink('styles.css');
}


$header = [
    createDiv('', "lefthead")->render(),
    createDiv('', "righthead")->render(),
];

$Home = createAnchor("#", "Home", "home")->render();
$Featured = createAnchor("#", "Featured", "feat")->render();
$Orders = createAnchor("#", "Orders", "order")->render();
$Deal = createAnchor("#", "Deal & Offers", "deal")->render();
$Reading = createAnchor("#", "Reading", "read")->render();

$readinglist = [
    createUnorderedList($sublist, "sub1")->render()
];

$Novels = createAnchor("#", "Novels", "novel")->render();
$Hard = createAnchor("#", "Hardbound", "hard")->render();
$Paperback = createAnchor("#", "Paperback", "paper")->render();
$Comics = createAnchor("#", "Comics", "comics")->render();
$Categories = createAnchor("#", "Categories", "category")->render();

$sublist = [
    $Novels,
    $Hard,
    $Paperback,
    $Comics,
    $Categories
];

$nav_items = [
    $Home,
    $Reading . createUnorderedList($sublist, "sub1")->render(),
    $Featured,
    $Orders,
    $Deal
];

$mainmenu_bar = [
    createUnorderedList($nav_items, "mainmenu")->render()
];

$headleft = [
    createImage("images/hunger_games_trilogy.jpg", "The Hunger Games Trilogy", "")->render()
];

$headright = [
    createBreak()->render(),
    createSpan("Special Offer!!!", "headlineimpact")->render(),
    createBreak()->render(),
    createSpan("Limited stocks only!!!", "headlinetext")->render(),
    createBreak()->render()
];

$headline_content = [
    createDiv($headleft, "headlleft")->render(),
    createDiv($headright, "headlright")->render()
];

$Literature = [
    createParagraph("Literature", " ")->render(),
    createSpan("
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.", "sectiontext")->render()
];

$arts = [
    createParagraph("Arts", " ")->render(),
    createSpan("
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.", "sectiontext")->render()
];

$drama = [
    createParagraph("Drama", " ")->render(),
    createSpan("
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.", "sectiontext")->render()
];

$scifi = [
    createParagraph("Science/Fiction", " ")->render(),
    createSpan("
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.", "sectiontext")->render()
];

$horror = [
    createParagraph("Horror", " ")->render(),
    createSpan("
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.", "sectiontext")->render()
];

$lovestory = [
    createParagraph("Love Story", " ")->render(),
    createSpan("
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.", "sectiontext")->render()
];

$placeholder = [
    createDiv($Literature, "sections")->render(),
    createDiv($arts, "sections")->render(),
    createBreak()->render(),
    createDiv($drama, "sections")->render(),
    createDiv($scifi, "sections")->render(),
    createBreak()->render(),
    createDiv($horror, "sections")->render(),
    createDiv($lovestory, "sections")->render()
];

$right_content = [
    createSpan("Book News", "blockheadings")->render(),
    createDiv($placeholder, "placeholder")->render()
];

$maincontainer_content = [
    createDiv($headline_content, "headline")->render(),
    createDiv("", "left")->render(),
    createDiv($right_content, "right")->render()
];

$footer = [
    createSpan("Copyright © International Web Development, All rights reserved 2013", "copyrighttext")->render()
];

$builder = new HtmlBuilder();
$builder->addElement(createLinkCss('styles.css'))
    ->addElement(createDiv($header, "header"))
    ->addElement(createDiv($mainmenu_bar, "mainmenubar"))
    ->addElement(createDiv($maincontainer_content, "maincontainer"))
    ->addElement(createDiv($footer, "footer"))
    ->saveToFile('test.html');


$css = new CSSGenerate("styles.css");
$css
    ->addTag('*')->margin('0px')->padding('0px')->endBracket()
    ->addTag('body')->marginTop('20px')->bgColor('#ccc')->fontFamily('arial, verdana, tahoma, sans-serif')->endBracket()
    ->addTag('.mainmenu, .sub1, .sub2')->listStyle('none')->endBracket()
    ->addTag('.mainmenu li')->width('125px')->position('relative')->float('left')->marginRight('4px')->textAlign('center')->endBracket()
    ->addTag('.mainmenu a')->fontWeight('bold')->bgColor('#fff')->color('#000')->textDecoration('none')->display('block')->width('125px')->height('35px')->lineHeight('35px')->endBracket()
    ->addTag('.mainmenu .sub1 a')->fontSize('12px')->endBracket()
    ->addTag('.mainmenu li:hover > a')->bgColor('#237291')->color('#fff')->endBracket()
    ->addTag('.mainmenu li:hover a:hover')->bgColor('aqua')->color('#000')->endBracket()
    ->addTag('.mainmenu .sub1')->display('none')->position('absolute')->endBracket()
    ->addTag('.mainmenu .sub2')->display('none')->position('absolute')->top('0px')->left('127px')->endBracket()
    ->addTag('.mainmenu li:hover .sub1')->display('block')->endBracket()
    ->addTag('.mainmenu .sub1 li:hover .sub2')->display('block')->endBracket()
    ->addTag('.header')->margin('0 auto')->width('1000px')->minHeight('200px')->endBracket()
    ->addTag('.lefthead')->height('200px')->width('200px')->background('url("images/libretto2_200px.png") no-repeat #fff')->borderTopLeftRadius('25px')->float('left')->endBracket()
    ->addTag('.righthead')->height('200px')->width('800px')->background('url("images/libretto_banner.png") no-repeat #fff')->borderTopRightRadius('25px')->float('left')->endBracket()
    ->addTag('.mainmenubar')->margin('0 auto')->width('1000px')->height('35px')->bgColor('#fff')->borderBottom('2px solid black')->endBracket()
    ->addTag('.maincontainer')->overflow('hidden')->margin('0 auto')->width('1000px')->height('auto')->bgColor('#fff')->borderBottom('1px solid black')->endBracket()
    ->addTag('.headline')->width('1000px')->height('350px')->endBracket()
    ->addTag('.headlleft img')->display('block')->paddingTop('40px')->margin('0 auto')->endBracket()
    ->addTag('.headlleft')->width('600px')->float('left')->endBracket()
    ->addTag('.headlright')->width('400px')->float('left')->endBracket()
    ->addTag('.left')->width('300px')->minHeight('200px')->height('auto')->bgColor('#fff')->float('left')->endBracket()
    ->addTag('.right')->width('700px')->height('auto')->bgColor('#fff')->float('left')->endBracket()
    ->addTag('.right .blockheadings')->display('block')->fontFamily('"Arial Narrow", arial, sans-serif')->fontSize('30px')->color('#fff')->paddingLeft('10px')->bgColor('#65A9D6')->endBracket()
    ->addTag('.right .placeholder')->margin('0 auto')->height('auto')->paddingTop('30px')->width('600px')->endBracket()
    ->addTag('.right .sections')->padding('2px')->float('left')->marginRight('50px')->marginBottom('50px')->width('220px')->minHeight('50px')->borderTopLeftRadius('10px')->borderTopRightRadius('10px')->border('1px solid #ccc')->fontSize('12px')->endBracket()
    ->addTag('.right .sections p')->borderTopLeftRadius('10px')->borderTopRightRadius('10px')->bgColor('#65A9D6')->fontFamily('"Arial Narrow", arial, sans-serif')->fontSize('30px')->color('#fff')->paddingLeft('5px')->height('40px')->endBracket()
    ->addTag('.right .sectiontext')->textAlign('justify')->endBracket()
    ->addTag('.footer')->margin('0 auto')->width('1000px')->minHeight('200px')->bgColor('#000')->borderBottomLeftRadius('25px')->borderBottomRightRadius('25px')->position('relative')->endBracket()
    ->addTag('.headlright .headlineimpact')->display('block')->fontFamily('tahoma, sans-serif')->fontSize('45px')->fontWeight('normal')->color('#00f')->textAlign('center')->endBracket()
    ->addTag('.headlright .headlinetext')->display('block')->fontFamily('arial, verdana, sans-serif')->fontSize('30px')->fontWeight('normal')->color('#f00')->textAlign('center')->endBracket()
    ->addTag('.footer .copyrighttext')->display('block')->textAlign('right')->fontSize('13px')->color('#fff')->position('absolute')->bottom('20px')->right('10px')->endBracket()
    ->generateFile();


ob_end_clean();
header('Location: test.html');
exit();
