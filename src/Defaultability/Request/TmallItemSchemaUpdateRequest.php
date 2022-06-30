<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TmallItemSchemaUpdateRequest {

    /**
        需要编辑的商品ID
     **/
    private $itemId;

    /**
        商品发布的目标类目，必须是叶子类目。如果没有切换类目需求不需要填写
     **/
    private $categoryId;

    /**
        商品发布的目标product_id。如果没有切换类目或者切换产品的需求，参数不用填写
     **/
    private $productId;

    /**
        根据tmall.item.update.schema.get生成的商品编辑规则入参数据
     **/
    private $xmlData;


    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getCategoryId() : int{
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId){
        $this->categoryId = $categoryId;
    }

    public function getProductId() : int{
        return $this->productId;
    }

    public function setProductId(int $productId){
        $this->productId = $productId;
    }

    public function getXmlData() : string{
        return $this->xmlData;
    }

    public function setXmlData(string $xmlData){
        $this->xmlData = $xmlData;
    }


    public function getApiName() : string {
        return "tmall.item.schema.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->categoryId)) {
            $requestParam["category_id"] = TopUtil::convertBasic($this->categoryId);
        }

        if (!TopUtil::checkEmpty($this->productId)) {
            $requestParam["product_id"] = TopUtil::convertBasic($this->productId);
        }

        if (!TopUtil::checkEmpty($this->xmlData)) {
            $requestParam["xml_data"] = TopUtil::convertBasic($this->xmlData);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

