<?php

namespace PhpOffice\PhpWord\Writer\ODText\Element;

use PhpOffice\PhpWord\Writer\Word2007\Element\Container as Word2007Container;

/**
 * Container element writer (section, textrun, header, footnote, cell, etc.)
 *
 * @since 0.11.0
 */
class Container extends Word2007Container
{
    /**
     * Namespace; Can't use __NAMESPACE__ in inherited class (ODText)
     *
     * @var string
     */
    protected $namespace = 'PhpOffice\\PhpWord\\Writer\\ODText\\Element';
}
