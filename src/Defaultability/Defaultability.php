<?php
namespace Topsdk\Topapi\Defaultability;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Defaultability\Request\TaobaoLogisticsAddressReachablebatchGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemsOnsaleGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemImgUploadRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemPropimgDeleteRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemPropimgUploadRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemSkuGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemSkusGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoShopcatsListGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercatsListGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercatsListUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemcatsGetRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoCloudprintMystdtemplatesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureCategoryGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureUploadRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoWaybillIiProductRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoWaybillIiCancelRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoKfcKeywordSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemJointImgRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemJointPropimgRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemcatsAuthorizeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemsCustomGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSkusCustomGetRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoCloudprintCustomaresGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserInfoUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TmallItemSchemaIncrementUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoAppstoreSubscribeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoWlbWaybillIGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoWlbWaybillIFullupdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoWlbWaybillIPrintRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoWlbWaybillICancelRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoWlbWaybillIProductRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasSubscribeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasOrderSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasSubscSearchRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoWaybillIiQueryByTradecodeRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoWaybillIiQueryByWaybillcodeRequest;
use Topsdk\Topapi\Defaultability\Request\TmallItemOuteridUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoWaybillIiSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterSubusersGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterUserPermissionsGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterRolesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterRoleAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoFuwuScoresGetRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaAscpLogisticsOfflineSendRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaAscpLogisticsConsignResendRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureCategoryUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureReplaceRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureUserinfoGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPictureIsreferencedGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallItemSchemaAddRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductMatchSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductSchemaMatchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterSubusersPageRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoLogisticsOrderCreateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersPageRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoCloudprintIsvResourcesGetRequest;
use Topsdk\Topapi\Defaultability\Request\CainiaoCloudprintTemplatesMigrateRequest;
use Topsdk\Topapi\Defaultability\Request\TmallItemSchemaUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersInfoQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemAnchorGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPicturePicturesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoPicturePicturesCountRequest;

class Defaultability {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        批量判定服务是否可达
    **/
    public function taobaoLogisticsAddressReachablebatchGet(TaobaoLogisticsAddressReachablebatchGetRequest $request) {
        return $this->client->execute("taobao.logistics.address.reachablebatch.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取当前会话用户出售中的商品列表
    **/
    public function taobaoItemsOnsaleGet(TaobaoItemsOnsaleGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.items.onsale.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        添加商品图片
    **/
    public function taobaoItemImgUpload(TaobaoItemImgUploadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.img.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        删除属性图片
    **/
    public function taobaoItemPropimgDelete(TaobaoItemPropimgDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.propimg.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取用户已开通消息
    **/
    public function taobaoTmcUserGet(TaobaoTmcUserGetRequest $request) {
        return $this->client->execute("taobao.tmc.user.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        添加或修改属性图片
    **/
    public function taobaoItemPropimgUpload(TaobaoItemPropimgUploadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.propimg.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取SKU
    **/
    public function taobaoItemSkuGet(TaobaoItemSkuGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.sku.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据商品ID列表获取SKU信息
    **/
    public function taobaoItemSkusGet(TaobaoItemSkusGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.skus.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取前台展示的店铺类目
    **/
    public function taobaoShopcatsListGet(TaobaoShopcatsListGetRequest $request) {
        return $this->client->execute("taobao.shopcats.list.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取前台展示的店铺内卖家自定义商品类目
    **/
    public function taobaoSellercatsListGet(TaobaoSellercatsListGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercats.list.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新卖家自定义类目
    **/
    public function taobaoSellercatsListUpdate(TaobaoSellercatsListUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercats.list.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取后台供卖家发布商品的标准商品类目
    **/
    public function taobaoItemcatsGet(TaobaoItemcatsGetRequest $request) {
        return $this->client->execute("taobao.itemcats.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取用户使用的菜鸟电子面单模板信息
    **/
    public function cainiaoCloudprintMystdtemplatesGet(CainiaoCloudprintMystdtemplatesGetRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.cloudprint.mystdtemplates.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取图片分类信息
    **/
    public function taobaoPictureCategoryGet(TaobaoPictureCategoryGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.category.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取图片信息
    **/
    public function taobaoPictureGet(TaobaoPictureGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        上传单张图片
    **/
    public function taobaoPictureUpload(TaobaoPictureUploadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家查询物流商产品类型接口
    **/
    public function cainiaoWaybillIiProduct(CainiaoWaybillIiProductRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.product", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家取消获取的电子面单号
    **/
    public function cainiaoWaybillIiCancel(CainiaoWaybillIiCancelRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.cancel", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        关键词过滤匹配
    **/
    public function taobaoKfcKeywordSearch(TaobaoKfcKeywordSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.kfc.keyword.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品关联子图
    **/
    public function taobaoItemJointImg(TaobaoItemJointImgRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.joint.img", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品关联属性图
    **/
    public function taobaoItemJointPropimg(TaobaoItemJointPropimgRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.joint.propimg", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询商家被授权品牌列表和类目列表
    **/
    public function taobaoItemcatsAuthorizeGet(TaobaoItemcatsAuthorizeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.itemcats.authorize.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据外部ID取商品
    **/
    public function taobaoItemsCustomGet(TaobaoItemsCustomGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.items.custom.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据外部ID取商品SKU
    **/
    public function taobaoSkusCustomGet(TaobaoSkusCustomGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.skus.custom.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取商家的自定义区模板信息
    **/
    public function cainiaoCloudprintCustomaresGet(CainiaoCloudprintCustomaresGetRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.cloudprint.customares.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户的子账号简易信息列表
    **/
    public function taobaoSubusersGet(TaobaoSubusersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改指定账户子账号的基本信息
    **/
    public function taobaoSubuserInfoUpdate(TaobaoSubuserInfoUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subuser.info.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        天猫根据规则增量更新商品
    **/
    public function tmallItemSchemaIncrementUpdate(TmallItemSchemaIncrementUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.schema.increment.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询appstore应用订购关系
    **/
    public function taobaoAppstoreSubscribeGet(TaobaoAppstoreSubscribeGetRequest $request) {
        return $this->client->execute("taobao.appstore.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取物流服务商电子面单号v1.0
    **/
    public function taobaoWlbWaybillIGet(TaobaoWlbWaybillIGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        面单信息更新接口v1.0
    **/
    public function taobaoWlbWaybillIFullupdate(TaobaoWlbWaybillIFullupdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.fullupdate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        打印确认接口v1.0
    **/
    public function taobaoWlbWaybillIPrint(TaobaoWlbWaybillIPrintRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.print", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家取消获取的电子面单号v1.0
    **/
    public function taobaoWlbWaybillICancel(TaobaoWlbWaybillICancelRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.cancel", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商家查询物流商产品类型接口
    **/
    public function taobaoWlbWaybillIProduct(TaobaoWlbWaybillIProductRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.product", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        订购关系查询
    **/
    public function taobaoVasSubscribeGet(TaobaoVasSubscribeGetRequest $request) {
        return $this->client->execute("taobao.vas.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        订单记录导出
    **/
    public function taobaoVasOrderSearch(TaobaoVasOrderSearchRequest $request) {
        return $this->client->execute("taobao.vas.order.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        订购记录导出
    **/
    public function taobaoVasSubscSearch(TaobaoVasSubscSearchRequest $request) {
        return $this->client->execute("taobao.vas.subsc.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        通过订单号查询电子面单通接口
    **/
    public function cainiaoWaybillIiQueryByTradecode(CainiaoWaybillIiQueryByTradecodeRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.query.by.tradecode", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通过面单号查询面单信息
    **/
    public function cainiaoWaybillIiQueryByWaybillcode(CainiaoWaybillIiQueryByWaybillcodeRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.query.by.waybillcode", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        天猫商品/SKU商家编码更新接口
    **/
    public function tmallItemOuteridUpdate(TmallItemOuteridUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.outerid.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询面单服务订购及面单使用情况
    **/
    public function cainiaoWaybillIiSearch(CainiaoWaybillIiSearchRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询指定账户的子账号列表
    **/
    public function taobaoSellercenterSubusersGet(TaobaoSellercenterSubusersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.subusers.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定用户的权限集合
    **/
    public function taobaoSellercenterUserPermissionsGet(TaobaoSellercenterUserPermissionsGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.user.permissions.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定卖家的角色列表
    **/
    public function taobaoSellercenterRolesGet(TaobaoSellercenterRolesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.roles.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        子账号角色的新增（指定卖家）
    **/
    public function taobaoSellercenterRoleAdd(TaobaoSellercenterRoleAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.role.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务平台评价查询接口
    **/
    public function taobaoFuwuScoresGet(TaobaoFuwuScoresGetRequest $request) {
        return $this->client->execute("taobao.fuwu.scores.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        自己联系物流发货
    **/
    public function alibabaAscpLogisticsOfflineSend(AlibabaAscpLogisticsOfflineSendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.offline.send", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改物流公司和运单号
    **/
    public function alibabaAscpLogisticsConsignResend(AlibabaAscpLogisticsConsignResendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.consign.resend", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        更新图片分类
    **/
    public function taobaoPictureCategoryUpdate(TaobaoPictureCategoryUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.category.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        替换图片
    **/
    public function taobaoPictureReplace(TaobaoPictureReplaceRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.replace", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改图片名字
    **/
    public function taobaoPictureUpdate(TaobaoPictureUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询图片空间用户的信息
    **/
    public function taobaoPictureUserinfoGet(TaobaoPictureUserinfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.userinfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        图片是否被引用
    **/
    public function taobaoPictureIsreferencedGet(TaobaoPictureIsreferencedGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.isreferenced.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        天猫根据规则发布商品
    **/
    public function tmallItemSchemaAdd(TmallItemSchemaAddRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.schema.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取匹配产品规则
    **/
    public function tmallProductMatchSchemaGet(TmallProductMatchSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.match.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        product匹配接口
    **/
    public function tmallProductSchemaMatch(TmallProductSchemaMatchRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.schema.match", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通过主账号登陆态分页查询子账号列表
    **/
    public function taobaoSellercenterSubusersPage(TaobaoSellercenterSubusersPageRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.subusers.page", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        创建物流订单
    **/
    public function taobaoLogisticsOrderCreate(TaobaoLogisticsOrderCreateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.order.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        分页获取指定账户的子账号简易信息列表（新isv建议使用taobao.sellercenter.subusers.page接口）
    **/
    public function taobaoSubusersPage(TaobaoSubusersPageRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.page", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        isv资源查询
    **/
    public function cainiaoCloudprintIsvResourcesGet(CainiaoCloudprintIsvResourcesGetRequest $request) {
        return $this->client->execute("cainiao.cloudprint.isv.resources.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        云打印模板迁移接口
    **/
    public function cainiaoCloudprintTemplatesMigrate(CainiaoCloudprintTemplatesMigrateRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.cloudprint.templates.migrate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        天猫根据规则编辑商品
    **/
    public function tmallItemSchemaUpdate(TmallItemSchemaUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.schema.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据当前子账号登陆态，获取该子账号基本信息
    **/
    public function taobaoSubusersInfoQuery(TaobaoSubusersInfoQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.info.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取可用宝贝描述规范化模块
    **/
    public function taobaoItemAnchorGet(TaobaoItemAnchorGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.anchor.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        图片获取
    **/
    public function taobaoPicturePicturesGet(TaobaoPicturePicturesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.pictures.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        图片总数查询
    **/
    public function taobaoPicturePicturesCount(TaobaoPicturePicturesCountRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.pictures.count", $request->toMap(), $request->toFileParamMap(), $session);
    }
}