<?php


namespace PhpOffice\PhpWord\Writer\HTML\Element;

/**
 * Table element HTML writer
 *
 * @since 0.10.0
 */
class Table extends AbstractElement
{
    /**
     * Write table
     *
     * @return string
     */
    public function write()
    {
        if (!$this->element instanceof \PhpOffice\PhpWord\Element\Table) {
            return '';
        }

        $content = '';
        $rows = $this->element->getRows();
        $rowCount = count($rows);
        if ($rowCount > 0) {
            $content .= '<table>' . PHP_EOL;
            foreach ($rows as $row) {
                /** @var $row \PhpOffice\PhpWord\Element\Row Type hint */
                $rowStyle = $row->getStyle();
                // $height = $row->getHeight();
                $tblHeader = $rowStyle->isTblHeader();
                $content .= '<tr>' . PHP_EOL;
                foreach ($row->getCells() as $cell) {
                    $writer = new Container($this->parentWriter, $cell);
                    $cellTag = $tblHeader ? 'th' : 'td';
                    $content .= "<{$cellTag}>" . PHP_EOL;
                    $content .= $writer->write();
                    $content .= "</{$cellTag}>" . PHP_EOL;
                }
                $content .= '</tr>' . PHP_EOL;
            }
            $content .= '</table>' . PHP_EOL;
        }

        return $content;
    }
}
