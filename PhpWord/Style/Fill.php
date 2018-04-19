<?php


namespace PhpOffice\PhpWord\Style;

/**
 * Fill style
 *
 * There are still lot of interesting things for this style that can be added, including gradient. See @link.
 *
 * @link http://www.schemacentral.com/sc/ooxml/t-v_CT_Fill.html
 * @since 0.12.0
 */
class Fill extends AbstractStyle
{
    /**
     * Color
     *
     * @var string
     */
    private $color;

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
}
