<?php
namespace DesignPattern\Behavioral\Template;


class MakeH5 extends  AbstractMake
{
    public function makeHead()
    {
        print <<<HEAD
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>h5</title>
</head>
HEAD;
        print PHP_EOL;
    }

    public function makeMiddle()
    {
        print <<<DODY
<body>
    <h1> Template Method! </h1>
</body>
DODY;
        print PHP_EOL;

    }

    public function makeBottom()
    {
        print <<<HTML
</html>
HTML;
            print PHP_EOL;
    }

}