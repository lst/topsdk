<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsCustomGetItemImg {

    /**
        商品图片的id，和商品相对应（主图id默认为0）
     **/
    private $id;

    /**
        图片链接地址
     **/
    private $url;

    /**
        图片放在第几张（多图时可设置）
     **/
    private $position;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getPosition() : int{
        return $this->position;
    }

    public function setPosition(int $position){
        $this->position = $position;
    }


}

