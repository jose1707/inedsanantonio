<?php


namespace PhpOffice\PhpWord\Style;

/**
 * 3D extrusion style
 *
 * @link http://www.schemacentral.com/sc/ooxml/t-o_CT_Extrusion.html
 * @since 0.12.0
 */
class Extrusion extends AbstractStyle
{
    /**
     * Type constants
     *
     * @const string
     */
    const EXTRUSION_PARALLEL = 'parallel';
    const EXTRUSION_PERSPECTIVE = 'perspective';

    /**
     * Type: parallel|perspective
     *
     * @var string
     */
    private $type;

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
        $enum = array(self::EXTRUSION_PARALLEL, self::EXTRUSION_PERSPECTIVE);
        $this->type = $this->setEnumVal($value, $enum, null);

        return $this;
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
