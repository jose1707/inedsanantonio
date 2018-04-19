<?php


namespace PhpOffice\PhpWord\Writer\RTF\Element;

use PhpOffice\PhpWord\Writer\HTML\Element\Container as HTMLContainer;

/**
 * Container element RTF writer
 *
 * @since 0.11.0
 */
class Container extends HTMLContainer
{
    /**
     * Namespace; Can't use __NAMESPACE__ in inherited class (RTF)
     *
     * @var string
     */
    protected $namespace = 'PhpOffice\\PhpWord\\Writer\\RTF\\Element';
}
