<?php


namespace PhpOffice\PhpWord\Element;

use PhpOffice\PhpWord\Style\Table as TableStyle;

/**
 * Table element
 */
class Table extends AbstractElement
{
    /**
     * Table style
     *
     * @var \PhpOffice\PhpWord\Style\Table
     */
    private $style;

    /**
     * Table rows
     *
     * @var \PhpOffice\PhpWord\Element\Row[]
     */
    private $rows = array();

    /**
     * Table width
     *
     * @var int
     */
    private $width = null;

    /**
     * Create a new table
     *
     * @param mixed $style
     */
    public function __construct($style = null)
    {
        $this->style = $this->setNewStyle(new TableStyle(), $style);
    }

    /**
     * Add a row
     *
     * @param int $height
     * @param mixed $style
     * @return \PhpOffice\PhpWord\Element\Row
     */
    public function addRow($height = null, $style = null)
    {
        $row = new Row($height, $style);
        $row->setParentContainer($this);
        $this->rows[] = $row;

        return $row;
    }

    /**
     * Add a cell
     *
     * @param int $width
     * @param mixed $style
     * @return \PhpOffice\PhpWord\Element\Cell
     */
    public function addCell($width = null, $style = null)
    {
        $index = count($this->rows) - 1;
        $row = $this->rows[$index];
        $cell = $row->addCell($width, $style);

        return $cell;
    }

    /**
     * Get all rows
     *
     * @return \PhpOffice\PhpWord\Element\Row[]
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Get table style
     *
     * @return \PhpOffice\PhpWord\Style\Table
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Get table width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set table width.
     *
     * @param int $width
     * @return void
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * Get column count
     *
     * @return int
     */
    public function countColumns()
    {
        $columnCount = 0;
        if (is_array($this->rows)) {
            $rowCount = count($this->rows);
            for ($i = 0; $i < $rowCount; $i++) {
                /** @var \PhpOffice\PhpWord\Element\Row $row Type hint */
                $row = $this->rows[$i];
                $cellCount = count($row->getCells());
                if ($columnCount < $cellCount) {
                    $columnCount = $cellCount;
                }
            }
        }

        return $columnCount;
    }
}
