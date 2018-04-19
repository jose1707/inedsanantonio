<?php


namespace PhpOffice\PhpWord\Writer\HTML\Style;

/**
 * Paragraph style HTML writer
 *
 * @since 0.10.0
 */
class Paragraph extends AbstractStyle
{
    /**
     * Write style
     *
     * @return string
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof \PhpOffice\PhpWord\Style\Paragraph) {
            return '';
        }
        $css = array();

        // Alignment
        $align = $style->getAlign();
        $css['text-align'] = $this->getValueIf(!is_null($align), $align);

        // Spacing
        $spacing = $style->getSpace();
        if (!is_null($spacing)) {
            $before = $spacing->getBefore();
            $after = $spacing->getAfter();
            $css['margin-top'] = $this->getValueIf(!is_null($before), ($before / 20) . 'pt');
            $css['margin-bottom'] = $this->getValueIf(!is_null($after), ($after / 20) . 'pt');
        }

        return $this->assembleCss($css);
    }
}
