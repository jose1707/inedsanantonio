<?php


namespace PhpOffice\PhpWord\Element;

/**
 * Structured document tag (SDT) element
 *
 * @since 0.12.0
 */
class SDT extends Text
{
    /**
     * Form field type: comboBox|dropDownList|date
     *
     * @var string
     */
    private $type;

    /**
     * Value
     *
     * @var string|bool|int
     */
    private $value;

    /**
     * CheckBox/DropDown list entries
     *
     * @var array
     */
    private $listItems = array();

    /**
     * Create new instance
     *
     * @param string $type
     * @param mixed $fontStyle
     * @param mixed $paragraphStyle
     * @return self
     */
    public function __construct($type, $fontStyle = null, $paragraphStyle = null)
    {
        $this->setType($type);
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param string $value
     * @return self
     */
    public function setType($value)
    {
        $enum = array('comboBox', 'dropDownList', 'date');
        $this->type = $this->setEnumVal($value, $enum, 'comboBox');

        return $this;
    }

    /**
     * Get value
     *
     * @return string|bool|int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set value
     *
     * @param string|bool|int $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get listItems
     *
     * @return array
     */
    public function getListItems()
    {
        return $this->listItems;
    }

    /**
     * Set listItems
     *
     * @param array $value
     * @return self
     */
    public function setListItems($value)
    {
        $this->listItems = $value;

        return $this;
    }
}
