<?php
declare(strict_types = 1);

namespace Ptool;


class Sort
{
    /**
     * 快速排序
     * 时间复杂度：O(nlogn)
     * 有两个方向，左边的i下标一直往右走，当a[i] <= a[center_index]，其中center_index是中枢元素的数组下标，一般取为数组第0个元素
     * 而右边的j下标一直往左走，当a[j] > a[center_index]。如果i和j都走不动了，i <= j, 交换a[i]和a[j],重复上面的过程，直到i>j
     * 交换a[j]和a[center_index]，完成一趟快速排序
     * 在中枢元素和a[j]交换的时候，很有可能把前面的元素的稳定性打乱，比如序列为 5 3 3 4 3 8 9 10 11，
     * 现在中枢元素5和3(第5个元素，下标从1开始计)交换就会把元素3的稳定性打乱，所以快速排序是一个不稳定的排序算法，不稳定发生在中枢元素和a[j]交换的时刻
     *
     * @param array $a
     * @return array
     */
    public static function quick (array $a)
    {
        // 判断是否需要运行，因下面已拿出一个中间值，这里<=1
        if (count($a) <= 1) {
            return $a;
        }

        $middle = $a[0]; // 中间值
        $left   = [];    // 接收小于中间值
        $right  = [];    // 接收大于中间值

        for ($i = 1; $i < count($a); $i++) {
            if ($middle < $a[$i]) {// 大于中间值
                $right[] = $a[$i];
            } else {// 小于中间值
                $left[] = $a[$i];
            }
        }
        // 递归排序划分好的2边
        $left  = self::quick($left);
        $right = self::quick($right);

        // 合并排序后的数据，别忘了合并中间值
        return array_merge($left, [$middle], $right);
    }
}