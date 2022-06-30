<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemcatsAuthorizeGetBrand {

    /**
        对应属性的 pid:vid 串中的vid
     **/
    private $vid;

    /**
        vid的值
     **/
    private $name;

    /**
        品牌的属性id
     **/
    private $pid;

    /**
        品牌的属性名
     **/
    private $prop_name;


    public function getVid() : int{
        return $this->vid;
    }

    public function setVid(int $vid){
        $this->vid = $vid;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPid() : int{
        return $this->pid;
    }

    public function setPid(int $pid){
        $this->pid = $pid;
    }

    public function getPropName() : string{
        return $this->prop_name;
    }

    public function setPropName(string $propName){
        $this->prop_name = $propName;
    }


}

