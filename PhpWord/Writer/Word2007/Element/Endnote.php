<?php


namespace PhpOffice\PhpWord\Writer\Word2007\Element;

/**
 * Endnote element writer
 *
 * @since 0.10.0
 */
class Endnote extends Footnote
{
    /**
     * Reference type
     *
     * @var string
     */
    protected $referenceType = 'endnoteReference';
}
