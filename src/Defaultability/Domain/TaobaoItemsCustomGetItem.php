<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsCustomGetItem {

    /**
        商品iid
     **/
    private $iid;

    /**
        商品url
     **/
    private $detail_url;

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
        商品属性 格式：pid:vid;pid:vid
     **/
    private $props;

    /**
        用户自行输入的类目属性ID串。结构：&quot;pid1,pid2,pid3&quot;，如：&quot;20000&quot;（表示品牌） 注：通常一个类目下用户可输入的关键属性不超过1个。
     **/
    private $input_pids;

    /**
        用户自行输入的子属性名和属性值，结构:&quot;父属性值;一级子属性名;一级子属性值;二级子属性名;自定义输入值,....&quot;,如：&ldquo;耐克;耐克系列;科比系列;科比系列;2K5&rdquo;，input_str需要与input_pids一一对应，注：通常一个类目下用户可输入的关键属性不超过1个。所有属性别名加起来不能超过 3999字节。
     **/
    private $input_str;

    /**
        商品描述, 字数要大于5个字符，小于25000个字符
     **/
    private $desc;

    /**
        商品主图片地址
     **/
    private $pic_url;

    /**
        商品数量
     **/
    private $num;

    /**
        有效期,7或者14（默认是7天）
     **/
    private $valid_thru;

    /**
        上架时间（格式：yyyy-MM-dd HH:mm:ss）
     **/
    private $list_time;

    /**
        下架时间（格式：yyyy-MM-dd HH:mm:ss）
     **/
    private $delist_time;

    /**
        商品新旧程度(全新:new，闲置:unused，二手：second)
     **/
    private $stuff_status;

    /**
        商品所在地
     **/
    private $location;

    /**
        商品价格，格式：5.00；单位：元；精确到：分
     **/
    private $price;

    /**
        平邮费用,格式：5.00；单位：元；精确到：分
     **/
    private $post_fee;

    /**
        快递费用,格式：5.00；单位：元；精确到：分
     **/
    private $express_fee;

    /**
        ems费用,格式：5.00；单位：元；精确到：分
     **/
    private $ems_fee;

    /**
        支持会员打折,true/false
     **/
    private $has_discount;

    /**
        运费承担方式,seller（卖家承担），buyer(买家承担）
     **/
    private $freight_payer;

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
        加价幅度。如果为0，代表系统代理幅度。在竞拍中，为了超越上一个出价，会员需要在当前出价上增加金额，这个金额就是加价幅度。卖家在发布宝贝的时候可以自定义加价幅度，也可以让系统自动代理加价。系统自动代理加价的加价幅度随着当前出价金额的增加而增加，我们建议会员使用系统自动代理加价，并请买家在出价前看清楚加价幅度的具体金额。另外需要注意是，此功能只适用于拍卖的商品。以下是系统自动代理加价幅度表：当前价（加价幅度 ）1-40（ 1 ）、41-100（ 2 ）、101-200（5 ）、201-500 （10）、501-1001（15）、001-2000（25）、2001-5000（50）、5001-10000（100）10001以上         200
     **/
    private $increment;

    /**
        商品上传后的状态。onsale出售中，instock库中
     **/
    private $approve_status;

    /**
        商品是否违规，违规：true , 不违规：false
     **/
    private $violation;

    /**
        宝贝所属的运费模板ID，如果没有返回则说明没有使用运费模板
     **/
    private $postage_id;

    /**
        宝贝所属产品的id(可能为空). 该字段可以通过taobao.products.search 得到
     **/
    private $product_id;

    /**
        商品的积分返点比例。如:5,表示:返点比例0.5%
     **/
    private $auction_point;

    /**
        属性值别名,比如颜色的自定义名称
     **/
    private $property_alias;

    /**
        商品图片列表(包括主图)。fields中只设置item_img可以返回ItemImg结构体中所有字段，如果设置为item_img.id、item_img.url、item_img.position等形式就只会返回相应的字段
     **/
    private $item_imgs;

    /**
        商品属性图片列表。fields中只设置prop_img可以返回PropImg结构体中所有字段，如果设置为prop_img.id、prop_img.url、prop_img.properties、prop_img.position等形式就只会返回相应的字段
     **/
    private $prop_imgs;

    /**
        <a href="http://open.taobao.com/dev/index.php/Sku">Sku</a>列表。fields中只设置sku可以返回Sku结构体中所有字段，如果设置为sku.sku_id、sku.properties、sku.quantity等形式就只会返回相应的字段
     **/
    private $skus;

    /**
        商家外部编码(可与商家外部系统对接)。需要授权才能获取。
     **/
    private $outer_id;

    /**
        虚拟商品的状态字段
     **/
    private $is_virtual;

    /**
        是否在淘宝显示
     **/
    private $is_taobao;

    /**
        是否在外部网店显示
     **/
    private $is_ex;

    /**
        商品视频列表(目前只支持单个视频关联)。fields中只设置video可以返回Video结构体中所有字段，如果设置为video.id、video.video_id、video.url等形式就只会返回相应的字段
     **/
    private $videos;

    /**
        是否是3D淘宝的商品
     **/
    private $is_3D;

    /**
        是否淘1站商品
     **/
    private $one_station;

    /**
        秒杀商品类型。打上秒杀标记的商品，用户只能下架并不能再上架，其他任何编辑或删除操作都不能进行。如果用户想取消秒杀标记，需要联系小二进行操作。如果秒杀结束需要自由编辑请联系活动负责人（小二）去掉秒杀标记。可选类型web_only(只能通过web网络秒杀)wap_only(只能通过wap网络秒杀)web_and_wap(既能通过web秒杀也能通过wap秒杀)
     **/
    private $second_kill;

    /**
        代充商品类型。在代充商品的类目下，不传表示不标记商品类型（交易搜索中就不能通过标记搜到相关的交易了）。可选类型： no_mark(不做类型标记) time_card(点卡软件代充) fee_card(话费软件代充)
     **/
    private $auto_fill;

    /**
        宝贝特征值，只有在Top支持的特征值才能保存到宝贝上
     **/
    private $features;

    /**
        全球购商品采购地信息（库存类型），有两种库存类型：现货和代购;参数值为1时代表现货，值为2时代表代购
     **/
    private $global_stock_type;

    /**
        全球购商品采购地信息（地区/国家），代表全球购商品的产地信息。
     **/
    private $global_stock_country;

    /**
        全球购商品发货地，发货地现在有两种类型：&ldquo;国内&rdquo;和&ldquo;海外及港澳台&rdquo;，参数值为1时代表&ldquo;国内&rdquo;，值为2时代表&ldquo;海外及港澳台&rdquo;
     **/
    private $global_stock_delivery_place;

    /**
        全球购商品卖家包税承诺，当值为true时，代表卖家承诺包税。
     **/
    private $global_stock_tax_free_promise;

    /**
        本地生活电子交易凭证业务，目前此字段只涉及到的信息为有效期:如果有效期为起止日期类型，此值为2012-08-06,2012-08-16如果有效期为【购买成功日 至】类型则格式为2012-08-16如果有效期为天数类型则格式为3
     **/
    private $locality_life;

    /**
        定制工具Id
     **/
    private $custom_made_type_id;

    /**
        食品安全信息，包括：生产许可证编号、产品标准号、厂名、厂址等
     **/
    private $food_security;

    /**
        商品资质的信息，用URLEncoder做过转换，使用时，需要URLDecoder转换回来，默认字符集为：UTF-8
     **/
    private $qualification;

    /**
        预扣库存，即付款减库存的商品现在有多少处于未付款状态的订单
     **/
    private $with_hold_quantity;

    /**
        商品描述模块化，模块列表，由List转化成jsonArray存入，后端逻辑验证通过，拼装成模块内容+锚点导航后存入desc中。数据结构具体参见Item_Desc_Module
     **/
    private $desc_modules;

    /**
        商品卖点信息，天猫商家使用字段，最长150个字符。
     **/
    private $sell_point;

    /**
        发货时间信息
     **/
    private $delivery_time;

    /**
        是否为达尔文挂接成功了的商品
     **/
    private $is_cspu;

    /**
        村淘特有商品级数据结构
     **/
    private $cuntao_item_specific;


    public function getIid() : string{
        return $this->iid;
    }

    public function setIid(string $iid){
        $this->iid = $iid;
    }

    public function getDetailUrl() : string{
        return $this->detail_url;
    }

    public function setDetailUrl(string $detailUrl){
        $this->detail_url = $detailUrl;
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

    public function getProps() : string{
        return $this->props;
    }

    public function setProps(string $props){
        $this->props = $props;
    }

    public function getInputPids() : string{
        return $this->input_pids;
    }

    public function setInputPids(string $inputPids){
        $this->input_pids = $inputPids;
    }

    public function getInputStr() : string{
        return $this->input_str;
    }

    public function setInputStr(string $inputStr){
        $this->input_str = $inputStr;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
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

    public function getDelistTime() : string{
        return $this->delist_time;
    }

    public function setDelistTime(string $delistTime){
        $this->delist_time = $delistTime;
    }

    public function getStuffStatus() : string{
        return $this->stuff_status;
    }

    public function setStuffStatus(string $stuffStatus){
        $this->stuff_status = $stuffStatus;
    }

    public function getLocation() : TaobaoItemsCustomGetLocation{
        return $this->location;
    }

    public function setLocation(TaobaoItemsCustomGetLocation $location){
        $this->location = $location;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getPostFee() : string{
        return $this->post_fee;
    }

    public function setPostFee(string $postFee){
        $this->post_fee = $postFee;
    }

    public function getExpressFee() : string{
        return $this->express_fee;
    }

    public function setExpressFee(string $expressFee){
        $this->express_fee = $expressFee;
    }

    public function getEmsFee() : string{
        return $this->ems_fee;
    }

    public function setEmsFee(string $emsFee){
        $this->ems_fee = $emsFee;
    }

    public function getHasDiscount() : bool{
        return $this->has_discount;
    }

    public function setHasDiscount(bool $hasDiscount){
        $this->has_discount = $hasDiscount;
    }

    public function getFreightPayer() : string{
        return $this->freight_payer;
    }

    public function setFreightPayer(string $freightPayer){
        $this->freight_payer = $freightPayer;
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

    public function getIncrement() : string{
        return $this->increment;
    }

    public function setIncrement(string $increment){
        $this->increment = $increment;
    }

    public function getApproveStatus() : string{
        return $this->approve_status;
    }

    public function setApproveStatus(string $approveStatus){
        $this->approve_status = $approveStatus;
    }

    public function getViolation() : bool{
        return $this->violation;
    }

    public function setViolation(bool $violation){
        $this->violation = $violation;
    }

    public function getPostageId() : int{
        return $this->postage_id;
    }

    public function setPostageId(int $postageId){
        $this->postage_id = $postageId;
    }

    public function getProductId() : int{
        return $this->product_id;
    }

    public function setProductId(int $productId){
        $this->product_id = $productId;
    }

    public function getAuctionPoint() : int{
        return $this->auction_point;
    }

    public function setAuctionPoint(int $auctionPoint){
        $this->auction_point = $auctionPoint;
    }

    public function getPropertyAlias() : string{
        return $this->property_alias;
    }

    public function setPropertyAlias(string $propertyAlias){
        $this->property_alias = $propertyAlias;
    }

    public function getItemImgs() : array{
        return $this->item_imgs;
    }

    public function setItemImgs(array $itemImgs){
        $this->item_imgs = $itemImgs;
    }

    public function getPropImgs() : array{
        return $this->prop_imgs;
    }

    public function setPropImgs(array $propImgs){
        $this->prop_imgs = $propImgs;
    }

    public function getSkus() : array{
        return $this->skus;
    }

    public function setSkus(array $skus){
        $this->skus = $skus;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
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

    public function getIsEx() : bool{
        return $this->is_ex;
    }

    public function setIsEx(bool $isEx){
        $this->is_ex = $isEx;
    }

    public function getVideos() : array{
        return $this->videos;
    }

    public function setVideos(array $videos){
        $this->videos = $videos;
    }

    public function getIs3D() : bool{
        return $this->is_3D;
    }

    public function setIs3D(bool $is3D){
        $this->is_3D = $is3D;
    }

    public function getOneStation() : bool{
        return $this->one_station;
    }

    public function setOneStation(bool $oneStation){
        $this->one_station = $oneStation;
    }

    public function getSecondKill() : string{
        return $this->second_kill;
    }

    public function setSecondKill(string $secondKill){
        $this->second_kill = $secondKill;
    }

    public function getAutoFill() : string{
        return $this->auto_fill;
    }

    public function setAutoFill(string $autoFill){
        $this->auto_fill = $autoFill;
    }

    public function getFeatures() : string{
        return $this->features;
    }

    public function setFeatures(string $features){
        $this->features = $features;
    }

    public function getGlobalStockType() : string{
        return $this->global_stock_type;
    }

    public function setGlobalStockType(string $globalStockType){
        $this->global_stock_type = $globalStockType;
    }

    public function getGlobalStockCountry() : string{
        return $this->global_stock_country;
    }

    public function setGlobalStockCountry(string $globalStockCountry){
        $this->global_stock_country = $globalStockCountry;
    }

    public function getGlobalStockDeliveryPlace() : string{
        return $this->global_stock_delivery_place;
    }

    public function setGlobalStockDeliveryPlace(string $globalStockDeliveryPlace){
        $this->global_stock_delivery_place = $globalStockDeliveryPlace;
    }

    public function getGlobalStockTaxFreePromise() : bool{
        return $this->global_stock_tax_free_promise;
    }

    public function setGlobalStockTaxFreePromise(bool $globalStockTaxFreePromise){
        $this->global_stock_tax_free_promise = $globalStockTaxFreePromise;
    }

    public function getLocalityLife() : TaobaoItemsCustomGetLocalityLife{
        return $this->locality_life;
    }

    public function setLocalityLife(TaobaoItemsCustomGetLocalityLife $localityLife){
        $this->locality_life = $localityLife;
    }

    public function getCustomMadeTypeId() : string{
        return $this->custom_made_type_id;
    }

    public function setCustomMadeTypeId(string $customMadeTypeId){
        $this->custom_made_type_id = $customMadeTypeId;
    }

    public function getFoodSecurity() : TaobaoItemsCustomGetFoodSecurity{
        return $this->food_security;
    }

    public function setFoodSecurity(TaobaoItemsCustomGetFoodSecurity $foodSecurity){
        $this->food_security = $foodSecurity;
    }

    public function getQualification() : string{
        return $this->qualification;
    }

    public function setQualification(string $qualification){
        $this->qualification = $qualification;
    }

    public function getWithHoldQuantity() : int{
        return $this->with_hold_quantity;
    }

    public function setWithHoldQuantity(int $withHoldQuantity){
        $this->with_hold_quantity = $withHoldQuantity;
    }

    public function getDescModules() : string{
        return $this->desc_modules;
    }

    public function setDescModules(string $descModules){
        $this->desc_modules = $descModules;
    }

    public function getSellPoint() : string{
        return $this->sell_point;
    }

    public function setSellPoint(string $sellPoint){
        $this->sell_point = $sellPoint;
    }

    public function getDeliveryTime() : TaobaoItemsCustomGetDeliveryTime{
        return $this->delivery_time;
    }

    public function setDeliveryTime(TaobaoItemsCustomGetDeliveryTime $deliveryTime){
        $this->delivery_time = $deliveryTime;
    }

    public function getIsCspu() : bool{
        return $this->is_cspu;
    }

    public function setIsCspu(bool $isCspu){
        $this->is_cspu = $isCspu;
    }

    public function getCuntaoItemSpecific() : TaobaoItemsCustomGetCuntaoItemSpecific{
        return $this->cuntao_item_specific;
    }

    public function setCuntaoItemSpecific(TaobaoItemsCustomGetCuntaoItemSpecific $cuntaoItemSpecific){
        $this->cuntao_item_specific = $cuntaoItemSpecific;
    }


}

