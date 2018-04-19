<?php

namespace PhpOffice\PhpWord\Element;

use PhpOffice\PhpWord\Style\ListItem as ListItemStyle;
use PhpOffice\PhpWord\Style\Paragraph;

/**
 * List item element
 */
class ListItemRun extends TextRun
{
    /**
     * @var string Container type
     */
    protected $container = 'ListItemRun';

    /**
     * ListItem Style
     *
     * @var \PhpOffice\PhpWord\Style\ListItem
     */
    private $style;

    /**
     * ListItem Depth
     *
     * @var int
     */
    private $depth;

    /**
     * Create a new ListItem
     *
     * @param int $depth
     * @param array|string|null $listStyle
     * @param mixed $paragraphStyle
     */
    public function __construct($depth = 0, $listStyle = null, $paragraphStyle = null)
    {
        $this->depth = $depth;

        // Version >= 0.10.0 will pass numbering style name. Older version will use old method
        if (!is_null($listStyle) && is_string($listStyle)) {
            $this->style = new ListItemStyle($listStyle);
        } else {
            $this->style = $this->setNewStyle(new ListItemStyle(), $listStyle, true);
        }
        $this->paragraphStyle = $this->setNewStyle(new Paragraph(), $paragraphStyle);
    }

    /**
     * Get ListItem style.
     *
     * @return \PhpOffice\PhpWord\Style\ListItem
     */
    public function getStyle()
    {
        return $this->style;
    }

     /**
     * Get ListItem depth.
      *
      * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }
}
