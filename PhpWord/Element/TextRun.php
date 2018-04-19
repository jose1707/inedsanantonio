<?php


namespace PhpOffice\PhpWord\Element;

use PhpOffice\PhpWord\Style\Paragraph;

/**
 * Textrun/paragraph element
 */
class TextRun extends AbstractContainer
{
    /**
     * @var string Container type
     */
    protected $container = 'TextRun';

    /**
     * Paragraph style
     *
     * @var string|\PhpOffice\PhpWord\Style\Paragraph
     */
    protected $paragraphStyle;

    /**
     * Create new instance
     *
     * @param string|array|\PhpOffice\PhpWord\Style\Paragraph $paragraphStyle
     */
    public function __construct($paragraphStyle = null)
    {
        $this->paragraphStyle = $this->setNewStyle(new Paragraph(), $paragraphStyle);
    }

    /**
     * Get Paragraph style
     *
     * @return string|\PhpOffice\PhpWord\Style\Paragraph
     */
    public function getParagraphStyle()
    {
        return $this->paragraphStyle;
    }
}
