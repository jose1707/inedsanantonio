<?php


namespace PhpOffice\PhpWord\Metadata;

/**
 * Compatibility setting class
 *
 * @since 0.12.0
 * @link http://www.datypic.com/sc/ooxml/t-w_CT_Compat.html
 */
class Compatibility
{
    /**
     * OOXML version
     *
     * 12 = 2007
     * 14 = 2010
     * 15 = 2013
     *
     * @var int
     * @link http://msdn.microsoft.com/en-us/library/dd909048%28v=office.12%29.aspx
     */
    private $ooxmlVersion = 12;

    /**
     * Get OOXML version
     *
     * @return int
     */
    public function getOoxmlVersion()
    {
        return $this->ooxmlVersion;
    }

    /**
     * Set OOXML version
     *
     * @param int $value
     * @return self
     */
    public function setOoxmlVersion($value)
    {
        $this->ooxmlVersion = $value;

        return $this;
    }
}
