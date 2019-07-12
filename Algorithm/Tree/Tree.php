<?php
namespace Tree;

/**
 * Composite tool
 *
 *
 * Class Composite
 * @package Composite
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
     * 生成树
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

    /**
     * 生成线型结构(一维数组)
     * 使用栈先进后出的特性实现，以减少程序资源消耗
     *
     * @return array
     */
     function buildFalls() {
         if (empty($this->items)) {
             return $this->items;
         }
         $items = $this->items;
         $stack = new \SplStack();

         // 先将顶级栏目压入栈中
         foreach($items as $key => $item){
             if($item[$this->pId] == 0) {
                 $stack->push($item);
                 unset($items[$key]);
             }
         }

         $falls = [];
         // 将栈中的元素出栈，查找其子栏目
         while(! $stack->isEmpty()) {
             $par = $stack->pop();
             foreach ($items as $k => $item) {
                 if ($item[$this->pId] == $par[$this->id]) {
                     //将下级栏目入栈
                     $stack->push($item);
                     unset($items[$k]);
                 }
             }
             $falls[] = $par;
         }

         return $falls;
     }
}






















