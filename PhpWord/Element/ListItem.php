<?php

namespace PhpOffice\PhpWord\Element;

use PhpOffice\PhpWord\Shared\String;
use PhpOffice\PhpWord\Style\ListItem as ListItemStyle;

/**
 * List item element
 */
class ListItem extends AbstractElement
{
    /**
     * Element style
     *
     * @var \PhpOffice\PhpWord\Style\ListItem
     */
    private $style;

    /**
     * Text object
     *
     * @var \PhpOffice\PhpWord\Element\Text
     */
    private $textObject;

    /**
     * Depth
     *
     * @var int
     */
    private $depth;

    /**
     * Create a new ListItem
     *
     * @param string $text
     * @param int $depth
     * @param mixed $fontStyle
     * @param array|string|null $listStyle
     * @param mixed $paragraphStyle
     */
    public function __construct($text, $depth = 0, $fontStyle = null, $listStyle = null, $paragraphStyle = null)
    {
        $this->textObject = new Text(String::toUTF8($text), $fontStyle, $paragraphStyle);
        $this->depth = $depth;

        // Version >= 0.10.0 will pass numbering style name. Older version will use old method
        if (!is_null($listStyle) && is_string($listStyle)) {
            $this->style = new ListItemStyle($listStyle);
        } else {
            $this->style = $this->setNewStyle(new ListItemStyle(), $listStyle, true);
        }
    }

    /**
     * Get style
     *
     * @return \PhpOffice\PhpWord\Style\ListItem
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Get Text object
     *
     * @return \PhpOffice\PhpWord\Element\Text
     */
    public function getTextObject()
    {
        return $this->textObject;
    }

    /**
     * Get depth
     *
     * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Get text
     *
     * @return string
     * @since 0.11.0
     */
    public function getText()
    {
        return $this->textObject->getText();
    }
}
