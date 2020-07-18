<?php
declare(strict_types = 1);

namespace Ptool;


class Sort
{
    /**
     * 快速排序
     *
     * @param array $array
     * @param int $sortFlag
     */
    public static function quick (array &$array, $sortFlag = SORT_ASC): void
    {
        $s = count($array);
        if ($s <= 1) {
            return;
        }
        $middle = $array[0]; //中间值
        $left   = [];
        $right  = [];
        for ($i = 1; $i < $s; $i++) {
            $sortFlag == SORT_ASC && ($middle < $array[$i] ? $right[] = $array[$i] : $left[] = $array[$i]);
            $sortFlag == SORT_DESC && ($middle < $array[$i] ? $left[] = $array[$i] : $right[] = $array[$i]);
        }
        // 递归排序划分好的2边
        self::quick($left, $sortFlag);
        self::quick($right, $sortFlag);
        // 合并排序后的数据，别忘了合并中间值
        $array = array_merge($left, [$middle], $right);
    }

    /**
     * 冒泡排序
     *
     * @param array $array
     * @param int $sortFlag
     */
    public static function bubble (array &$array, int $sortFlag = SORT_ASC): void
    {
        $s = count($array);
        if ($s <= 1) {
            return;
        }
        $k = $s - 1; //k用来记录每趟排序的最大的交换位置
        $p = 0;      //p记录最后一次交换的位置
        for ($i = 0; $i < $s - 1; $i++) {
            $f = true; //每一趟前都将f标志先置为true
            for ($j = 0; $j < $k; $j++) {
                if (($sortFlag == SORT_ASC && $array[$j] > $array[$j + 1]) || ($sortFlag == SORT_DESC && $array[$j] < $array[$j + 1])) {
                    [$array[$j], $array[$j + 1]] = [$array[$j + 1], $array[$j]];
                    $f = false;  //元素发生了交换，f置为false
                    $p = $j;     //p存放循环里最后一次交换的位置j
                }
            }
            if ($f) {
                return;
            }
            $k = $p; //下一内层循环仅循环到0到这次得到的k之间
        }
    }

    /**
     * 选择排序
     *
     * @param array $array
     * @param int $sortFlag
     */
    public static function select (array &$array, int $sortFlag = SORT_ASC): void
    {
        $s = count($array);
        if ($s <= 1) {
            return;
        }
        $m = $s / 2;
        for ($i = 0; $i < $m; $i++) {
            $maxIndex   = $s - $i - 1;
            $startIndex = $i;
            $endIndex   = $maxIndex;
            for ($j = $i + 1; $j <= $maxIndex; $j++) {
                if ($sortFlag == SORT_ASC) {
                    $array[$startIndex] > $array[$j] && $startIndex = $j;
                    $array[$endIndex] < $array[$j - 1] && $endIndex = $j - 1;
                } else {
                    $array[$startIndex] < $array[$j] && $startIndex = $j;
                    $array[$endIndex] > $array[$j - 1] && $endIndex = $j - 1;
                }
            }
            $startIndex != $i && ([$array[$startIndex], $array[$i]] = [$array[$i], $array[$startIndex]]);
            if ($endIndex != $maxIndex) {
                $startIndex != $i && $endIndex == $i && $endIndex = $startIndex; //endIndex 被替换之后重新赋值
                [$array[$endIndex], $array[$maxIndex]] = [$array[$maxIndex], $array[$endIndex]];
            }
        }
    }

    /**
     * 计数排序
     *
     * @param array $array
     * @param int $sortFlag
     */
    public static function counting (array &$array, $sortFlag = SORT_ASC)
    {
        $s = count($array);
        if ($s <= 1) return;
        // 找出待排序的数组中最大值和最小值
        $min = min($array);
        $max = max($array);
        // 计算待排序的数组中每个元素的个数
        $countArr = [];
        if ($sortFlag == SORT_ASC) for ($i = $min; $i <= $max; $i++) {
            $countArr[$i] = 0;
        }
        else for ($i = $max; $i >= $min; $i--) {
            $countArr[$i] = 0;
        }
        foreach ($array as $v) {
            $countArr[$v] += 1;
        }
        $key = 0;
        foreach ($countArr as $k => $c) {
            for ($i = 0; $i < $c; $i++) {
                $array[$key++] = $k;
            }
        }
    }
}