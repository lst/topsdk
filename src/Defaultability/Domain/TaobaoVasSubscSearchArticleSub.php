<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoVasSubscSearchArticleSub {

    /**
        淘宝会员名
     **/
    private $nick;

    /**
        应用名称
     **/
    private $article_name;

    /**
        应用收费代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得该应用的收费代码
     **/
    private $article_code;

    /**
        收费项目名称
     **/
    private $item_name;

    /**
        收费项目代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得收费项目代码
     **/
    private $item_code;

    /**
        订购关系到期时间
     **/
    private $deadline;

    /**
        状态，1=有效 2=过期
     **/
    private $status;

    /**
        是否自动续费
     **/
    private $autosub;

    /**
        是否到期提醒
     **/
    private $expire_notice;


    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getArticleName() : string{
        return $this->article_name;
    }

    public function setArticleName(string $articleName){
        $this->article_name = $articleName;
    }

    public function getArticleCode() : string{
        return $this->article_code;
    }

    public function setArticleCode(string $articleCode){
        $this->article_code = $articleCode;
    }

    public function getItemName() : string{
        return $this->item_name;
    }

    public function setItemName(string $itemName){
        $this->item_name = $itemName;
    }

    public function getItemCode() : string{
        return $this->item_code;
    }

    public function setItemCode(string $itemCode){
        $this->item_code = $itemCode;
    }

    public function getDeadline() : string{
        return $this->deadline;
    }

    public function setDeadline(string $deadline){
        $this->deadline = $deadline;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getAutosub() : bool{
        return $this->autosub;
    }

    public function setAutosub(bool $autosub){
        $this->autosub = $autosub;
    }

    public function getExpireNotice() : bool{
        return $this->expire_notice;
    }

    public function setExpireNotice(bool $expireNotice){
        $this->expire_notice = $expireNotice;
    }


}

