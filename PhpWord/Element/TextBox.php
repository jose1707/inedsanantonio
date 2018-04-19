<?php


namespace PhpOffice\PhpWord\Element;

use PhpOffice\PhpWord\Style\TextBox as TextBoxStyle;

/**
 * TextBox element
 *
 * @since 0.11.0
 */
class TextBox extends AbstractContainer
{
    /**
     * @var string Container type
     */
    protected $container = 'TextBox';

    /**
     * TextBox style
     *
     * @var \PhpOffice\PhpWord\Style\TextBox
     */
    private $style;

    /**
     * Create a new textbox
     *
     * @param mixed $style
     */
    public function __construct($style = null)
    {
        $this->style = $this->setNewStyle(new TextBoxStyle(), $style);
    }

    /**
     * Get textbox style
     *
     * @return \PhpOffice\PhpWord\Style\TextBox
     */
    public function getStyle()
    {
        return $this->style;
    }
}
