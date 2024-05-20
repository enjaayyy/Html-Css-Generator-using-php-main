<?php
class HtmlElement
{
    private $tag;
    private $content;
    private $attributes;

    public function __construct($tag, $content = '', $attributes = [])
    {
        $this->tag = $tag;
        $this->content = $content;
        $this->attributes = $attributes;
    }

    private function stringifyAttributes()
    {
        $attrString = '';
        foreach ($this->attributes as $key => $value) {
            $attrString .= " $key='$value'";
        }
        return $attrString;
    }

    public function render()
    {
        return "<{$this->tag}{$this->stringifyAttributes()}>{$this->content}</{$this->tag}>";
    }
}

class HtmlBuilder
{
    private $elements = [];

    public function addElement(HtmlElement $element)
    {
        $this->elements[] = $element;
        return $this;
    }

    public function render()
    {
        $html = '';
        foreach ($this->elements as $element) {
            $html .= $element->render();
        }
        return $html;
    }

    public function saveToFile($filename)
    {
        file_put_contents($filename, $this->render());
    }
}

function createElement($tag, $content = '', $attributes = [])
{
    return new HtmlElement($tag, $content, $attributes);
}

function createLinkCss($filename)
{
    return createElement('link', '', ['rel' => 'stylesheet', 'type' => 'text/css', 'href' => $filename]);
}

function createHeader($level, $text, $class = '')
{
    return createElement("h$level", $text, ['class' => $class]);
}

function createParagraph($text, $class = '')
{
    return createElement('p', $text, ['class' => $class]);
}

function createBreak()
{
    return createElement('br');
}

function createAnchor($href, $text, $class = '')
{
    return createElement('a', $text, ['href' => $href, 'class' => $class]);
}

function createImage($src, $alt, $class = '')
{
    return createElement('img', '', ['src' => $src, 'alt' => $alt, 'class' => $class]);
}

function createSpan($text, $class = '')
{
    return createElement('span', $text, ['class' => $class]);
}

function createOrderedList($items, $class = '')
{
    $content = '';
    foreach ($items as $item) {
        $content .= createListItem($item)->render();
    }
    return createElement('ol', $content, ['class' => $class]);
}

function createUnorderedList($items, $class = '')
{
    $content = '';
    foreach ($items as $item) {
        $content .= createListItem($item)->render();
    }
    return createElement('ul', $content, ['class' => $class]);
}

function createListItem($content)
{
    return createElement('li', $content);
}

function createTable($data, $class = '')
{
    $content = '';
    foreach ($data as $row) {
        $rowContent = '';
        foreach ($row as $cell) {
            $rowContent .= createElement('td', $cell)->render();
        }
        $content .= createElement('tr', $rowContent)->render();
    }
    return createElement('table', $content, ['class' => $class]);
}

function createForm($action, $method, $class = '')
{
    return createElement('form', '', ['action' => $action, 'method' => $method, 'class' => $class]);
}

function createInput($type, $name, $placeholder = '', $class = '')
{
    return createElement('input', '', ['type' => $type, 'name' => $name, 'placeholder' => $placeholder, 'class' => $class]);
}

function createButton($text, $type = 'button', $class = '')
{
    return createElement('button', $text, ['type' => $type, 'class' => $class]);
}

function createDiv($elements, $class = '')
{
    $content = '';
    foreach ($elements as $element) {
        $content .= $element;
    }
    return createElement('div', $content, ['class' => $class]);
}

function createCheckbox($name, $checked = false, $class = '')
{
    $attributes = ['type' => 'checkbox', 'name' => $name, 'class' => $class];
    if ($checked) {
        $attributes['checked'] = 'checked';
    }
    return createElement('input', '', $attributes);
}

function createTextarea($name, $id, $placeholder = '', $class = '')
{
    return createElement('textarea', '', ['name' => $name, 'id' => $id, 'placeholder' => $placeholder, 'class' => $class]);
}

function createSection($content, $class = '')
{
    return createElement('section', $content, ['class' => $class]);
}

function createDt($text, $class = '')
{
    return createElement('dt', $text, ['class' => $class]);
}

function createDd($text, $class = '')
{
    return createElement('dd', $text, ['class' => $class]);
}
