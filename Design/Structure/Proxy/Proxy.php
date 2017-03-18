<?php
namespace Design\Structure\Proxy;


class Proxy implements ISubject
{

    private $subject;


    public function __construct(ISubject $subject)
    {
        $this->subject = $subject;
    }


    public function say()
    {
        $this->subject->say();
    }

    public function run()
    {
        $this->subject->run();
    }
}