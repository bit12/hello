<?php


namespace DesignPattern\Behavioral\Observer;


class UserObserver implements \SplObserver
{
    /**
     * 观察者要实现的唯一方法
     * 也是被 Subject 调用的方法
     *
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        print get_class($subject) . ' has been updated' . PHP_EOL;
    }
}