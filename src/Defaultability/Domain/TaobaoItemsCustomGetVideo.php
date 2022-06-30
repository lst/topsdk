<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsCustomGetVideo {

    /**
        视频关联记录的id，和商品相对应
     **/
    private $id;

    /**
        video的id，对应于视频在淘秀的存储记录
     **/
    private $video_id;

    /**
        video的url连接地址。淘秀里视频记录里面存储的url地址
     **/
    private $url;

    /**
        视频关联记录创建时间（格式：yyyy-MM-dd HH:mm:ss）
     **/
    private $created;

    /**
        视频关联记录修改时间（格式：yyyy-MM-dd HH:mm:ss）
     **/
    private $modified;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getVideoId() : int{
        return $this->video_id;
    }

    public function setVideoId(int $videoId){
        $this->video_id = $videoId;
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

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }


}

