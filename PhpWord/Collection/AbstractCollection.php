<?php

namespace PhpOffice\PhpWord\Collection;

/**
 * Collection abstract class
 *
 * @since 0.10.0
 */
abstract class AbstractCollection
{
    /**
     * Items
     *
     * @var array
     */
    private $items = array();

    /**
     * Get items
     *
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Get item by index
     *
     * @param int $index
     * @return mixed
     */
    public function getItem($index)
    {
        if (array_key_exists($index, $this->items)) {
            return $this->items[$index];
        } else {
            return null;
        }
    }

    /**
     * Set item.
     *
     * @param int $index
     * @param mixed $item
     * @return void
     */
    public function setItem($index, $item)
    {
        if (array_key_exists($index, $this->items)) {
            $this->items[$index] = $item;
        }
    }

    /**
     * Add new item
     *
     * @param mixed $item
     * @return int
     */
    public function addItem($item)
    {
        $index = $this->countItems() + 1;
        $this->items[$index] = $item;

        return $index;
    }

    /**
     * Get item count
     *
     * @return int
     */
    public function countItems()
    {
        return count($this->items);
    }
}
