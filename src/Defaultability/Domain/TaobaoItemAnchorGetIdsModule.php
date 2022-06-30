<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemAnchorGetIdsModule {

    /**
        宝贝描述规范化模块名
     **/
    private $name;

    /**
        宝贝描述规范化模块id
     **/
    private $id;

    /**
        0为自动打标；
1为人工打标；
     **/
    private $type;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


}

