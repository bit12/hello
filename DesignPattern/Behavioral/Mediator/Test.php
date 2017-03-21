<?php


namespace DesignPattern\Behavioral\Mediator;


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    protected $client;

    protected function setUp()
    {
        $media = new Mediator();
        $this->client = new Client($media);
        $media->setColleague(new Database($media), $this->client, new Server($media));
    }

    public function testOutputHelloWorld()
    {
        // 测试是否输出 Hello World :
        $this->expectOutputString('Hello World');
        // 正如你所看到的, Client, Server 和 Database 是完全解耦的
        $this->client->request();
    }



}