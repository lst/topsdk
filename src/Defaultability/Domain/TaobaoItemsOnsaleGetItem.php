<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsOnsaleGetItem {

    /**
        商品上传后的状态。onsale出售中，instock库中
     **/
    private $approve_status;

    /**
        商品iid
     **/
    private $iid;

    /**
        商品数字id
     **/
    private $num_iid;

    /**
        商品标题,不能超过60字节
     **/
    private $title;

    /**
        卖家昵称
     **/
    private $nick;

    /**
        商品类型(fixed:一口价;auction:拍卖)注：取消团购
     **/
    private $type;

    /**
        商品所属的叶子类目 id
     **/
    private $cid;

    /**
        商品所属的店铺内卖家自定义类目列表
     **/
    private $seller_cids;

    /**
        商品主图片地址
     **/
    private $pic_url;

    /**
        商品数量
     **/
    private $num;

    /**
        商品属性 格式：pid:vid;pid:vid
     **/
    private $props;

    /**
        有效期,7或者14（默认是7天）
     **/
    private $valid_thru;

    /**
        上架时间（格式：yyyy-MM-dd HH:mm:ss）
     **/
    private $list_time;

    /**
        商品价格，格式：5.00；单位：元；精确到：分
     **/
    private $price;

    /**
        支持会员打折,true/false
     **/
    private $has_discount;

    /**
        是否有发票,true/false
     **/
    private $has_invoice;

    /**
        是否有保修,true/false
     **/
    private $has_warranty;

    /**
        橱窗推荐,true/false
     **/
    private $has_showcase;

    /**
        商品修改时间（格式：yyyy-MM-dd HH:mm:ss）
     **/
    private $modified;

    /**
        下架时间（格式：yyyy-MM-dd HH:mm:ss）
     **/
    private $delist_time;

    /**
        宝贝所属的运费模板ID，如果没有返回则说明没有使用运费模板
     **/
    private $postage_id;

    /**
        商家外部编码(可与商家外部系统对接)。需要授权才能获取。
     **/
    private $outer_id;

    /**
        是否在外部网店显示
     **/
    private $is_ex;

    /**
        虚拟商品的状态字段
     **/
    private $is_virtual;

    /**
        是否在淘宝显示
     **/
    private $is_taobao;

    /**
        商品销量
     **/
    private $sold_quantity;

    /**
        是否为达尔文挂接成功了的商品
     **/
    private $is_cspu;


    public function getApproveStatus() : string{
        return $this->approve_status;
    }

    public function setApproveStatus(string $approveStatus){
        $this->approve_status = $approveStatus;
    }

    public function getIid() : string{
        return $this->iid;
    }

    public function setIid(string $iid){
        $this->iid = $iid;
    }

    public function getNumIid() : int{
        return $this->num_iid;
    }

    public function setNumIid(int $numIid){
        $this->num_iid = $numIid;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getSellerCids() : string{
        return $this->seller_cids;
    }

    public function setSellerCids(string $sellerCids){
        $this->seller_cids = $sellerCids;
    }

    public function getPicUrl() : string{
        return $this->pic_url;
    }

    public function setPicUrl(string $picUrl){
        $this->pic_url = $picUrl;
    }

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getProps() : string{
        return $this->props;
    }

    public function setProps(string $props){
        $this->props = $props;
    }

    public function getValidThru() : int{
        return $this->valid_thru;
    }

    public function setValidThru(int $validThru){
        $this->valid_thru = $validThru;
    }

    public function getListTime() : string{
        return $this->list_time;
    }

    public function setListTime(string $listTime){
        $this->list_time = $listTime;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getHasDiscount() : bool{
        return $this->has_discount;
    }

    public function setHasDiscount(bool $hasDiscount){
        $this->has_discount = $hasDiscount;
    }

    public function getHasInvoice() : bool{
        return $this->has_invoice;
    }

    public function setHasInvoice(bool $hasInvoice){
        $this->has_invoice = $hasInvoice;
    }

    public function getHasWarranty() : bool{
        return $this->has_warranty;
    }

    public function setHasWarranty(bool $hasWarranty){
        $this->has_warranty = $hasWarranty;
    }

    public function getHasShowcase() : bool{
        return $this->has_showcase;
    }

    public function setHasShowcase(bool $hasShowcase){
        $this->has_showcase = $hasShowcase;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getDelistTime() : string{
        return $this->delist_time;
    }

    public function setDelistTime(string $delistTime){
        $this->delist_time = $delistTime;
    }

    public function getPostageId() : int{
        return $this->postage_id;
    }

    public function setPostageId(int $postageId){
        $this->postage_id = $postageId;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getIsEx() : bool{
        return $this->is_ex;
    }

    public function setIsEx(bool $isEx){
        $this->is_ex = $isEx;
    }

    public function getIsVirtual() : bool{
        return $this->is_virtual;
    }

    public function setIsVirtual(bool $isVirtual){
        $this->is_virtual = $isVirtual;
    }

    public function getIsTaobao() : bool{
        return $this->is_taobao;
    }

    public function setIsTaobao(bool $isTaobao){
        $this->is_taobao = $isTaobao;
    }

    public function getSoldQuantity() : int{
        return $this->sold_quantity;
    }

    public function setSoldQuantity(int $soldQuantity){
        $this->sold_quantity = $soldQuantity;
    }

    public function getIsCspu() : bool{
        return $this->is_cspu;
    }

    public function setIsCspu(bool $isCspu){
        $this->is_cspu = $isCspu;
    }


}

