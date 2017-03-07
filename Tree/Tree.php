<?php

/**
 * Tree tool
 *
 *
 * Class Tree
 * @package Tree
 */
class Tree
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $pId;

    /**
     * @var string
     */
    private $child;

    /**
     * @var array
     */
    private $items;

    /**
     * Tree constructor.
     *
     * @param array $items
     * @param string $id
     * @param string $pId
     * @param string $child
     */
    public function __construct(array $items, $id = 'id', $pId = 'pid', $child = 'child')
    {
        $this->items = $items;
        $this->id = $id;
        $this->pId = $pId;
        $this->child = $child;
    }

    /**
     *
     *
     * @return array
     */
    public function  buildTree()
    {
        if (empty($this->items)) {
            return $this->items;
        }

        $tree = array_combine(array_column($this->items, $this->id), array_values($this->items));

        array_walk($tree, function($val, $key) use (&$tree) {

            if ($val[$this->pId] != 0) {
                $tree[$val[$this->pId]][$this->child][$key] = &$tree[$key];
            }

        });

        return  array_filter($tree, function($val){ return $val[$this->pId] == 0; });
    }
}








