<?php

namespace PhpOffice\PhpWord\Writer\HTML\Element;

use PhpOffice\PhpWord\Element\AbstractElement as Element;
use PhpOffice\PhpWord\Writer\AbstractWriter;

/**
 * Abstract HTML element writer
 *
 * @since 0.11.0
 */
abstract class AbstractElement
{
    /**
     * Parent writer
     *
     * @var \PhpOffice\PhpWord\Writer\AbstractWriter
     */
    protected $parentWriter;

    /**
     * Element
     *
     * @var \PhpOffice\PhpWord\Element\AbstractElement
     */
    protected $element;

    /**
     * Without paragraph
     *
     * @var bool
     */
    protected $withoutP = false;

    /**
     * Write element
     */
    abstract public function write();

    /**
     * Create new instance
     *
     * @param \PhpOffice\PhpWord\Writer\AbstractWriter $parentWriter
     * @param \PhpOffice\PhpWord\Element\AbstractElement $element
     * @param bool $withoutP
     */
    public function __construct(AbstractWriter $parentWriter, Element $element, $withoutP = false)
    {
        $this->parentWriter = $parentWriter;
        $this->element = $element;
        $this->withoutP = $withoutP;
    }

    /**
     * Set without paragraph.
     *
     * @param bool $value
     * @return void
     */
    public function setWithoutP($value)
    {
        $this->withoutP = $value;
    }
}
