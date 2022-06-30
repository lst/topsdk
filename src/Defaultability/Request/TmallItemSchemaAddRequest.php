<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TmallItemSchemaAddRequest {

    /**
        商品发布的目标类目，必须是叶子类目
     **/
    private $categoryId;

    /**
        发布商品的productId，如果tmall.product.match.schema.get获取到得字段为空，这个参数传入0，否则需要通过tmall.product.schema.match查询到得可用productId
     **/
    private $productId;

    /**
        根据tmall.item.add.schema.get生成的商品发布规则入参数据
     **/
    private $xmlData;


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
        return "tmall.item.schema.add";
    }

    public function toMap() : array{
        $requestParam = array();
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

