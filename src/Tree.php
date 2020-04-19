<?php
declare(strict_types = 1);

namespace Ptool;

/**
 * Class Tree
 * @package Ptool
 */
class Tree
{

    /**
     * @param array $items
     * @param string $id
     * @param string $pId
     * @param string $child
     * @return array
     */
    public static function tree (array $items, string $id = 'id', string $pId = 'pid', string $child = 'child'): array
    {
        if (empty($items)) {
            return $items;
        }
        $tree = array_combine(array_column($items, $id), array_values($items));
        foreach ($tree as $key => $item) {
            if ($item[$pId] != 0) {
                $tree[$item[$pId]][$child][$key] = &$tree[$key];
            }
        }
        return array_filter($tree, function ($val) use ($pId) { return $val[$pId] == 0; });
    }

    /**
     * @param array $items
     * @param string $id
     * @param string $pId
     * @return array
     */
    public static function falls (array $items, string $id = 'id', string $pId = 'pid'): array
    {
        if (empty($items)) {
            return $items;
        }

        $stack = new \SplStack();
        // 先将顶级栏目压入栈中
        foreach ($items as $key => $item) {
            if ($item[$pId] == 0) {
                $stack->push($item);
                unset($items[$key]);
            }
        }

        $falls = [];
        // 将栈中的元素出栈，查找其子栏目
        while (!$stack->isEmpty()) {
            $par = $stack->pop();
            foreach ($items as $k => $item) {
                if ($item[$pId] == $par[$id]) {
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






















