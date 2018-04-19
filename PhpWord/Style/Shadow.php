<?php


namespace PhpOffice\PhpWord\Style;

/**
 * Shadow style
 *
 * @link http://www.schemacentral.com/sc/ooxml/t-v_CT_Shadow.html
 * @since 0.12.0
 */
class Shadow extends AbstractStyle
{
    /**
     * Color
     *
     * @var string
     */
    private $color;

    /**
     * Offset; Format: 3pt,3pt
     *
     * @var string
     */
    private $offset;

    /**
     * Create a new instance
     *
     * @param array $style
     */
    public function __construct($style = array())
    {
        $this->setStyleByArray($style);
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set color
     *
     * @param string $value
     * @return self
     */
    public function setColor($value = null)
    {
        $this->color = $value;

        return $this;
    }

    /**
     * Get offset
     *
     * @return string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Set offset
     *
     * @param string $value
     * @return self
     */
    public function setOffset($value = null)
    {
        $this->offset = $value;

        return $this;
    }
}
