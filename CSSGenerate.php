<?php
class CSSGenerate
{
    public $file;
    public $style;

    public function __construct($filename)
    {
        $this->file = $filename;
    }

    public function generateFile()
    {
        file_put_contents($this->file, $this->style);
    }

    public function addTag($tag)
    {
        $this->style .= "$tag {\n";
        return $this;
    }

    public function endBracket()
    {
        $this->style .= "}\n";
        return $this;
    }

    public function fontSize($value)
    {
        $this->style .= "font-size: $value;\n";
        return $this;
    }

    public function fontWeight($value)
    {
        $this->style .=  "font-weight: $value;\n";
        return $this;
    }

    public function fontStyle($value)
    {
        $this->style .=  "font-style: $value;\n";
        return $this;
    }

    public function bgColor($value)
    {
        $this->style .=  "background-color: $value;\n";
        return $this;
    }

    public function fontColor($value)
    {
        $this->style .=  "color: $value;\n";
        return $this;
    }

    public function liststyle($value)
    {
        $this->style .= "list-style: $value;\n";
        return $this;
    }

    public function marginRight($value)
    {
        $this->style .= "margin-right: $value;\n";
        return $this;
    }
    public function color($value)
    {
        $this->style .= "color: $value;\n";
        return $this;
    }

    public function display($value)
    {
        $this->style .=  "display: $value;\n";
        return $this;
    }

    public function padding($value)
    {
        $this->style .= "padding: $value;\n";
        return $this;
    }

    public function paddingLeft($value)
    {
        $this->style .= "padding-left: $value;\n";
        return $this;
    }


    public function margin($value)
    {
        $this->style .= "margin: $value;\n";
        return $this;
    }

    public function marginTop($value)
    {
        $this->style .= "margin-top: $value;\n";
        return $this;
    }

    public function marginBottom($value)
    {
        $this->style .= "margin-bottom: $value;\n";
        return $this;
    }

    public function minHeight($value)
    {
        $this->style .= "min-height: $value;\n";
        return $this;
    }

    public function borderBottom($value)
    {
        $this->style .= "border-bottom: $value;\n";
        return $this;
    }

    public function borderBottomLeftRadius($value)
    {
        $this->style .= "border-bottom-left-radius: $value;\n";
        return $this;
    }

    public function borderBottomRightRadius($value)
    {
        $this->style .= "border-bottom-right-radius: $value;\n";
        return $this;
    }

    public function borderTopLeftRadius($value)
    {
        $this->style .= "border-top-left-radius: $value;\n";
        return $this;
    }

    public function borderTopRightRadius($value)
    {
        $this->style .= "border-top-right-radius: $value;\n";
        return $this;
    }

    public function paddingTop($value)
    {
        $this->style .= "padding-top: $value;\n";
        return $this;
    }

    public function borderWidth($value)
    {
        $this->style .= "border-width: $value;\n";
        return $this;
    }

    public function borderColor($value)
    {
        $this->style .= "border-color: $value;\n";
        return $this;
    }

    public function borderStyle($value)
    {
        $this->style .= "border-style: $value;\n";
        return $this;
    }

    public function textAlign($value)
    {
        $this->style .= "text-align: $value;\n";
        return $this;
    }

    public function textDecoration($value)
    {
        $this->style .= "text-decoration: $value;\n";
        return $this;
    }

    public function lineHeight($value)
    {
        $this->style .= "line-height: $value;\n";
        return $this;
    }

    public function width($value)
    {
        $this->style .= "width: $value;\n";
        return $this;
    }

    public function height($value)
    {
        $this->style .= "height: $value;\n";
        return $this;
    }

    public function borderRadius($value)
    {
        $this->style .= "border-radius: $value;\n";
        return $this;
    }

    public function border($value)
    {
        $this->style .= "border: $value;\n";
        return $this;
    }

    public function boxShadow($value)
    {
        $this->style .= "box-shadow: $value;\n";
        return $this;
    }

    public function opacity($value)
    {
        $this->style .= "opacity: $value;\n";
        return $this;
    }

    public function overflow($value)
    {
        $this->style .= "overflow: $value;\n";
        return $this;
    }

    public function background($value)
    {
        $this->style .= "background: $value;\n";
        return $this;
    }
    public function position($value)
    {
        $this->style .= "position: $value;\n";
        return $this;
    }

    public function top($value)
    {
        $this->style .= "top: $value;\n";
        return $this;
    }

    public function bottom($value)
    {
        $this->style .= "bottom: $value;\n";
        return $this;
    }

    public function left($value)
    {
        $this->style .= "left: $value;\n";
        return $this;
    }

    public function backgroundImage($value)
    {
        $this->style .= "background-image: url('$value');\n";
        return $this;
    }

    public function right($value)
    {
        $this->style .= "right: $value;\n";
        return $this;
    }

    public function float($value)
    {
        $this->style .= "float: $value;\n";
        return $this;
    }

    public function clear($value)
    {
        $this->style .= "clear: $value;\n";
        return $this;
    }

    public function fontFamily($value)
    {
        $this->style .= "font-family: $value;\n";
        return $this;
    }

    public function letterSpacing($value)
    {
        $this->style .= "letter-spacing: $value;\n";
        return $this;
    }

    public function wordSpacing($value)
    {
        $this->style .= "word-spacing: $value;\n";
        return $this;
    }

    public function textTransform($value)
    {
        $this->style .= "text-transform: $value;\n";
        return $this;
    }

    public function whiteSpace($value)
    {
        $this->style .= "white-space: $value;\n";
        return $this;
    }

    public function overflowX($value)
    {
        $this->style .= "overflow-x: $value;\n";
        return $this;
    }

    public function overflowY($value)
    {
        $this->style .= "overflow-y: $value;\n";
        return $this;
    }

    public function textDecorationColor($value)
    {
        $this->style .= "text-decoration-color: $value;\n";
        return $this;
    }

    public function textDecorationStyle($value)
    {
        $this->style .= "text-decoration-style: $value;\n";
        return $this;
    }

    public function textDecorationLine($value)
    {
        $this->style .= "text-decoration-line: $value;\n";
        return $this;
    }

    public function textDecorationSkip($value)
    {
        $this->style .= "text-decoration-skip: $value;\n";
        return $this;
    }

    public function textOverflow($value)
    {
        $this->style .= "text-overflow: $value;\n";
        return $this;
    }

    public function textShadow($value)
    {
        $this->style .= "text-shadow: $value;\n";
        return $this;
    }

    public function verticalAlign($value)
    {
        $this->style .= "vertical-align: $value;\n";
        return $this;
    }

    public function borderCollapse($value)
    {
        $this->style .= "border-collapse: $value;\n";
        return $this;
    }

    public function borderSpacing($value)
    {
        $this->style .= "border-spacing: $value;\n";
        return $this;
    }
}
