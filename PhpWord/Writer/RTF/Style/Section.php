<?php



namespace PhpOffice\PhpWord\Writer\RTF\Style;

use PhpOffice\PhpWord\Style\Section as SectionStyle;

/**
 * RTF section style writer
 *
 * @since 0.12.0
 */
class Section extends AbstractStyle
{
    /**
     * Write style
     *
     * @return string
     */
    public function write()
    {
        $style = $this->getStyle();
        if (!$style instanceof SectionStyle) {
            return '';
        }

        $content = '';

        $content .= '\sectd ';

        // Size & margin
        $content .= $this->getValueIf($style->getPageSizeW() !== null, '\pgwsxn' . $style->getPageSizeW());
        $content .= $this->getValueIf($style->getPageSizeH() !== null, '\pghsxn' . $style->getPageSizeH());
        $content .= ' ';
        $content .= $this->getValueIf($style->getMarginTop() !== null, '\margtsxn' . $style->getMarginTop());
        $content .= $this->getValueIf($style->getMarginRight() !== null, '\margrsxn' . $style->getMarginRight());
        $content .= $this->getValueIf($style->getMarginBottom() !== null, '\margbsxn' . $style->getMarginBottom());
        $content .= $this->getValueIf($style->getMarginLeft() !== null, '\marglsxn' . $style->getMarginLeft());
        $content .= $this->getValueIf($style->getHeaderHeight() !== null, '\headery' . $style->getHeaderHeight());
        $content .= $this->getValueIf($style->getFooterHeight() !== null, '\footery' . $style->getFooterHeight());
        $content .= $this->getValueIf($style->getGutter() !== null, '\guttersxn' . $style->getGutter());
        $content .= ' ';

        // Borders
        if ($style->hasBorder()) {
            $styleWriter = new Border($style);
            $styleWriter->setParentWriter($this->getParentWriter());
            $styleWriter->setSizes($style->getBorderSize());
            $styleWriter->setColors($style->getBorderColor());
            $content .= $styleWriter->write();
        }

        return $content . PHP_EOL;
    }
}
