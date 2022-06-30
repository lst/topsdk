<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoPictureCategoryGetPictureCategory {

    /**
        图片分类ID
     **/
    private $picture_category_id;

    /**
        图片分类名
     **/
    private $picture_category_name;

    /**
        图片分类排序
     **/
    private $position;

    /**
        图片分类型别，sys-fixture代表店铺装修分类(系统分类)，sys-auction代表宝贝图片分类(系统分类)，user-define代表用户自定义分类
     **/
    private $type;

    /**
        分类下的图片数
     **/
    private $total;

    /**
        图片类目的创建时间
     **/
    private $created;

    /**
        图片分类的修改时间
     **/
    private $modified;

    /**
        一级分类的parent_id为0
二级分类的则为其父分类的picture_category_id
     **/
    private $parent_id;


    public function getPictureCategoryId() : int{
        return $this->picture_category_id;
    }

    public function setPictureCategoryId(int $pictureCategoryId){
        $this->picture_category_id = $pictureCategoryId;
    }

    public function getPictureCategoryName() : string{
        return $this->picture_category_name;
    }

    public function setPictureCategoryName(string $pictureCategoryName){
        $this->picture_category_name = $pictureCategoryName;
    }

    public function getPosition() : int{
        return $this->position;
    }

    public function setPosition(int $position){
        $this->position = $position;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getTotal() : int{
        return $this->total;
    }

    public function setTotal(int $total){
        $this->total = $total;
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

    public function getParentId() : int{
        return $this->parent_id;
    }

    public function setParentId(int $parentId){
        $this->parent_id = $parentId;
    }


}

