<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Style;

use PhpOffice\PhpWord\Settings;
use PhpOffice\PhpWord\Shared\XMLWriter;

/**
 * Style writer
 *
 * @since 0.10.0
 */
abstract class AbstractStyle
{
    /**
     * XML writer
     *
     * @var \PhpOffice\PhpWord\Shared\XMLWriter
     */
    private $xmlWriter;

    /**
     * Style; set protected for a while
     *
     * @var string|\PhpOffice\PhpWord\Style\AbstractStyle
     */
    protected $style;

    /**
     * Write style
     */
    abstract public function write();

    /**
     * Create new instance.
     *
     * @param \PhpOffice\PhpWord\Shared\XMLWriter $xmlWriter
     * @param string|\PhpOffice\PhpWord\Style\AbstractStyle $style
     */
    public function __construct(XMLWriter $xmlWriter, $style = null)
    {
        $this->xmlWriter = $xmlWriter;
        $this->style = $style;
    }

    /**
     * Get XML Writer
     *
     * @return \PhpOffice\PhpWord\Shared\XMLWriter
     */
    protected function getXmlWriter()
    {
        return $this->xmlWriter;
    }

    /**
     * Get Style
     *
     * @return \PhpOffice\PhpWord\Style\AbstractStyle
     */
    protected function getStyle()
    {
        return $this->style;
    }

    /**
     * Convert twip value
     *
     * @param int|float $value
     * @param int $default (int|float)
     * @return int|float
     */
    protected function convertTwip($value, $default = 0)
    {
        $factors = array(
            Settings::UNIT_CM => 567,
            Settings::UNIT_MM => 56.7,
            Settings::UNIT_INCH => 1440,
            Settings::UNIT_POINT => 20,
            Settings::UNIT_PICA => 240,
        );
        $unit = Settings::getMeasurementUnit();
        $factor = 1;
        if (in_array($unit, $factors) && $value != $default) {
            $factor = $factors[$unit];
        }

        return $value * $factor;
    }

    /**
     * Write child style.
     *
     * @param \PhpOffice\PhpWord\Shared\XMLWriter $xmlWriter
     * @param string $name
     * @param mixed $value
     * @return void
     */
    protected function writeChildStyle(XMLWriter $xmlWriter, $name, $value)
    {
        if ($value !== null) {
            $class = "PhpOffice\\PhpWord\\Writer\\Word2007\\Style\\" . $name;

            /** @var \PhpOffice\PhpWord\Writer\Word2007\Style\AbstractStyle $writer */
            $writer = new $class($xmlWriter, $value);
            $writer->write();
        }
    }

    /**
     * Assemble style array into style string
     *
     * @param array $styles
     * @return string
     */
    protected function assembleStyle($styles = array())
    {
        $style = '';
        foreach ($styles as $key => $value) {
            if (!is_null($value) && $value != '') {
                $style .= "{$key}:{$value}; ";
            }
        }

        return trim($style);
    }
}