<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemPropimgDeletePropImg {

    /**
        属性图片的id，和商品相对应
     **/
    private $id;

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

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }


}

