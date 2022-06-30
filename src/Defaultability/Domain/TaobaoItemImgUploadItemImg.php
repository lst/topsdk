<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemImgUploadItemImg {

    /**
        商品图片的id，和商品相对应（主图id默认为0）
     **/
    private $id;

    /**
        图片链接地址
     **/
    private $url;

    /**
        图片创建时间 时间格式：yyyy-MM-dd HH:mm:ss
     **/
    private $created;


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

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }


}

