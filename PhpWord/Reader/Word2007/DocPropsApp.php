<?php


namespace PhpOffice\PhpWord\Reader\Word2007;

/**
 * Extended properties reader
 *
 * @since 0.10.0
 */
class DocPropsApp extends DocPropsCore
{
    /**
     * Property mapping
     *
     * @var array
     */
    protected $mapping = array('Company' => 'setCompany', 'Manager' => 'setManager');

    /**
     * Callback functions
     *
     * @var array
     */
    protected $callbacks = array();
}
