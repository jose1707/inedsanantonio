<?php


namespace PhpOffice\PhpWord\Metadata;

/**
 * Document protection class
 *
 * @since 0.12.0
 * @link http://www.datypic.com/sc/ooxml/t-w_CT_DocProtect.html
 * @todo Password!
 */
class Protection
{
    /**
     * Editing restriction readOnly|comments|trackedChanges|forms
     *
     * @var string
     * @link http://www.datypic.com/sc/ooxml/a-w_edit-1.html
     */
    private $editing;

    /**
     * Create a new instance
     *
     * @param string $editing
     */
    public function __construct($editing = null)
    {
        $this->setEditing($editing);
    }

    /**
     * Get editing protection
     *
     * @return string
     */
    public function getEditing()
    {
        return $this->editing;
    }

    /**
     * Set editing protection
     *
     * @param string $editing
     * @return self
     */
    public function setEditing($editing = null)
    {
        $this->editing = $editing;

        return $this;
    }
}
