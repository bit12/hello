<?php
namespace Design\Structure\Adapter;


class Adapter implements IPlayer
{

    private $_player;

    public function __construct()
    {
        $this->_player = new ChinesePlayer();
    }


    public function run()
    {
        return $this->_player->pao();
    }

    public function jump()
    {
        return $this->_player->tiao();
    }


}