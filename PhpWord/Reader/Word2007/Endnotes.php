<?php


namespace PhpOffice\PhpWord\Reader\Word2007;

/**
 * Endnotes reader
 *
 * @since 0.10.0
 */
class Endnotes extends Footnotes
{
    /**
     * Collection name
     *
     * @var string
     */
    protected $collection = 'endnotes';

    /**
     * Element name
     *
     * @var string
     */
    protected $element = 'endnote';
}
