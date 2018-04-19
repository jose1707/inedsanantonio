<?php

namespace PhpOffice\PhpWord\Element;

use PhpOffice\PhpWord\Style\Line as LineStyle;

/**
 * Line element
 */
class Line extends AbstractElement
{
    /**
     * Line style
     *
     * @var \PhpOffice\PhpWord\Style\Line
     */
    private $style;

    /**
     * Create new line element
     *
     * @param mixed $style
     */
    public function __construct($style = null)
    {
        $this->style = $this->setNewStyle(new LineStyle(), $style);
    }

    /**
     * Get line style
     *
     * @return \PhpOffice\PhpWord\Style\Line
     */
    public function getStyle()
    {
        return $this->style;
    }
}
