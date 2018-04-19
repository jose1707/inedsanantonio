<?php


namespace PhpOffice\PhpWord\Element;

use PhpOffice\PhpWord\Shared\String;
use PhpOffice\PhpWord\Style;

/**
 * Title element
 */
class Title extends AbstractElement
{
    /**
     * Title Text content
     *
     * @var string
     */
    private $text;

    /**
     * Title depth
     *
     * @var int
     */
    private $depth = 1;

    /**
     * Name of the heading style, e.g. 'Heading1'
     *
     * @var string
     */
    private $style;

    /**
     * Is part of collection
     *
     * @var bool
     */
    protected $collectionRelation = true;

    /**
     * Create a new Title Element
     *
     * @param string $text
     * @param int $depth
     */
    public function __construct($text, $depth = 1)
    {
        $this->text = String::toUTF8($text);
        $this->depth = $depth;
        if (array_key_exists("Heading_{$this->depth}", Style::getStyles())) {
            $this->style = "Heading{$this->depth}";
        }

        return $this;
    }

    /**
     * Get Title Text content
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Get depth
     *
     * @return integer
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Get Title style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }
}
