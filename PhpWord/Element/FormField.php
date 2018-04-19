<?php


namespace PhpOffice\PhpWord\Element;

/**
 * Form field element
 *
 * @since 0.12.0
 * @link http://www.datypic.com/sc/ooxml/t-w_CT_FFData.html
 */
class FormField extends Text
{
    /**
     * Form field type: textinput|checkbox|dropdown
     *
     * @var string
     */
    private $type = 'textinput';

    /**
     * Form field name
     *
     * @var string
     */
    private $name;

    /**
     * Default value
     *
     * - TextInput: string
     * - CheckBox: bool
     * - DropDown: int Index of entries (zero based)
     *
     * @var string|bool|int
     */
    private $default;

    /**
     * Value
     *
     * @var string|bool|int
     */
    private $value;

    /**
     * Dropdown entries
     *
     * @var array
     */
    private $entries = array();

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
        $enum = array('textinput', 'checkbox', 'dropdown');
        $this->type = $this->setEnumVal($value, $enum, $this->type);

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string|bool|int $value
     * @return self
     */
    public function setName($value)
    {
        $this->name = $value;

        return $this;
    }

    /**
     * Get default
     *
     * @return string|bool|int
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Set default
     *
     * @param string|bool|int $value
     * @return self
     */
    public function setDefault($value)
    {
        $this->default = $value;

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
     * Get entries
     *
     * @return array
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * Set entries
     *
     * @param array $value
     * @return self
     */
    public function setEntries($value)
    {
        $this->entries = $value;

        return $this;
    }
}