<?php

namespace PhpOffice\PhpWord\Element;

use PhpOffice\PhpWord\Style\Shape as ShapeStyle;

/**
 * Shape element
 *
 * @since 0.12.0
 */
class Shape extends AbstractElement
{
    /**
     * Shape type arc|curve|line|polyline|rect|oval
     *
     * @var string
     */
    private $type;

    /**
     * Shape style
     *
     * @var \PhpOffice\PhpWord\Style\Shape
     */
    private $style;

    /**
     * Create new instance
     *
     * @param string $type
     * @param mixed $style
     */
    public function __construct($type, $style = null)
    {
        $this->setType($type);
        $this->style = $this->setNewStyle(new ShapeStyle(), $style);
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set pattern
     *
     * @param string $value
     * @return self
     */
    public function setType($value = null)
    {
        $enum = array('arc', 'curve', 'line', 'polyline', 'rect', 'oval');
        $this->type = $this->setEnumVal($value, $enum, null);

        return $this;
    }

    /**
     * Get shape style
     *
     * @return \PhpOffice\PhpWord\Style\Shape
     */
    public function getStyle()
    {
        return $this->style;
    }
}
