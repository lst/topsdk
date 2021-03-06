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
        ??????????????????????????????
    **/
    public function taobaoLogisticsAddressReachablebatchGet(TaobaoLogisticsAddressReachablebatchGetRequest $request) {
        return $this->client->execute("taobao.logistics.address.reachablebatch.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ????????????????????????????????????????????????
    **/
    public function taobaoItemsOnsaleGet(TaobaoItemsOnsaleGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.items.onsale.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????
    **/
    public function taobaoItemImgUpload(TaobaoItemImgUploadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.img.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????
    **/
    public function taobaoItemPropimgDelete(TaobaoItemPropimgDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.propimg.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ???????????????????????????
    **/
    public function taobaoTmcUserGet(TaobaoTmcUserGetRequest $request) {
        return $this->client->execute("taobao.tmc.user.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ???????????????????????????
    **/
    public function taobaoItemPropimgUpload(TaobaoItemPropimgUploadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.propimg.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????SKU
    **/
    public function taobaoItemSkuGet(TaobaoItemSkuGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.sku.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????ID????????????SKU??????
    **/
    public function taobaoItemSkusGet(TaobaoItemSkusGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.skus.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ?????????????????????????????????
    **/
    public function taobaoShopcatsListGet(TaobaoShopcatsListGetRequest $request) {
        return $this->client->execute("taobao.shopcats.list.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ?????????????????????????????????????????????????????????
    **/
    public function taobaoSellercatsListGet(TaobaoSellercatsListGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercats.list.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ???????????????????????????
    **/
    public function taobaoSellercatsListUpdate(TaobaoSellercatsListUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercats.list.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????????????????????????????????????????
    **/
    public function taobaoItemcatsGet(TaobaoItemcatsGetRequest $request) {
        return $this->client->execute("taobao.itemcats.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ???????????????????????????????????????????????????
    **/
    public function cainiaoCloudprintMystdtemplatesGet(CainiaoCloudprintMystdtemplatesGetRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.cloudprint.mystdtemplates.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????
    **/
    public function taobaoPictureCategoryGet(TaobaoPictureCategoryGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.category.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????
    **/
    public function taobaoPictureGet(TaobaoPictureGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????
    **/
    public function taobaoPictureUpload(TaobaoPictureUploadRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.upload", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ???????????????????????????????????????
    **/
    public function cainiaoWaybillIiProduct(CainiaoWaybillIiProductRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.product", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????????????????
    **/
    public function cainiaoWaybillIiCancel(CainiaoWaybillIiCancelRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.cancel", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ?????????????????????
    **/
    public function taobaoKfcKeywordSearch(TaobaoKfcKeywordSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.kfc.keyword.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????
    **/
    public function taobaoItemJointImg(TaobaoItemJointImgRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.joint.img", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ?????????????????????
    **/
    public function taobaoItemJointPropimg(TaobaoItemJointPropimgRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.joint.propimg", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????????????????????????????
    **/
    public function taobaoItemcatsAuthorizeGet(TaobaoItemcatsAuthorizeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.itemcats.authorize.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????ID?????????
    **/
    public function taobaoItemsCustomGet(TaobaoItemsCustomGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.items.custom.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????ID?????????SKU
    **/
    public function taobaoSkusCustomGet(TaobaoSkusCustomGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.skus.custom.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ???????????????????????????????????????
    **/
    public function cainiaoCloudprintCustomaresGet(CainiaoCloudprintCustomaresGetRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.cloudprint.customares.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????????????????????????????
    **/
    public function taobaoSubusersGet(TaobaoSubusersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????????????????????????????
    **/
    public function taobaoSubuserInfoUpdate(TaobaoSubuserInfoUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subuser.info.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????????????????
    **/
    public function tmallItemSchemaIncrementUpdate(TmallItemSchemaIncrementUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.schema.increment.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????appstore??????????????????
    **/
    public function taobaoAppstoreSubscribeGet(TaobaoAppstoreSubscribeGetRequest $request) {
        return $this->client->execute("taobao.appstore.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ????????????????????????????????????v1.0
    **/
    public function taobaoWlbWaybillIGet(TaobaoWlbWaybillIGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????v1.0
    **/
    public function taobaoWlbWaybillIFullupdate(TaobaoWlbWaybillIFullupdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.fullupdate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????v1.0
    **/
    public function taobaoWlbWaybillIPrint(TaobaoWlbWaybillIPrintRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.print", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????????????????v1.0
    **/
    public function taobaoWlbWaybillICancel(TaobaoWlbWaybillICancelRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.cancel", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ???????????????????????????????????????
    **/
    public function taobaoWlbWaybillIProduct(TaobaoWlbWaybillIProductRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.waybill.i.product", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????
    **/
    public function taobaoVasSubscribeGet(TaobaoVasSubscribeGetRequest $request) {
        return $this->client->execute("taobao.vas.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ??????????????????
    **/
    public function taobaoVasOrderSearch(TaobaoVasOrderSearchRequest $request) {
        return $this->client->execute("taobao.vas.order.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ??????????????????
    **/
    public function taobaoVasSubscSearch(TaobaoVasSubscSearchRequest $request) {
        return $this->client->execute("taobao.vas.subsc.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ??????????????????????????????????????????
    **/
    public function cainiaoWaybillIiQueryByTradecode(CainiaoWaybillIiQueryByTradecodeRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.query.by.tradecode", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ?????????????????????????????????
    **/
    public function cainiaoWaybillIiQueryByWaybillcode(CainiaoWaybillIiQueryByWaybillcodeRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.query.by.waybillcode", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????/SKU????????????????????????
    **/
    public function tmallItemOuteridUpdate(TmallItemOuteridUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.outerid.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ?????????????????????????????????????????????
    **/
    public function cainiaoWaybillIiSearch(CainiaoWaybillIiSearchRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.waybill.ii.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????????????????
    **/
    public function taobaoSellercenterSubusersGet(TaobaoSellercenterSubusersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.subusers.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ?????????????????????????????????
    **/
    public function taobaoSellercenterUserPermissionsGet(TaobaoSellercenterUserPermissionsGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.user.permissions.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ?????????????????????????????????
    **/
    public function taobaoSellercenterRolesGet(TaobaoSellercenterRolesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.roles.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????????????????????????????
    **/
    public function taobaoSellercenterRoleAdd(TaobaoSellercenterRoleAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.role.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????????????????
    **/
    public function taobaoFuwuScoresGet(TaobaoFuwuScoresGetRequest $request) {
        return $this->client->execute("taobao.fuwu.scores.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ????????????????????????
    **/
    public function alibabaAscpLogisticsOfflineSend(AlibabaAscpLogisticsOfflineSendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.offline.send", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????????????????
    **/
    public function alibabaAscpLogisticsConsignResend(AlibabaAscpLogisticsConsignResendRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.ascp.logistics.consign.resend", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????
    **/
    public function taobaoPictureCategoryUpdate(TaobaoPictureCategoryUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.category.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????
    **/
    public function taobaoPictureReplace(TaobaoPictureReplaceRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.replace", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????
    **/
    public function taobaoPictureUpdate(TaobaoPictureUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ?????????????????????????????????
    **/
    public function taobaoPictureUserinfoGet(TaobaoPictureUserinfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.userinfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ?????????????????????
    **/
    public function taobaoPictureIsreferencedGet(TaobaoPictureIsreferencedGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.isreferenced.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????????????????
    **/
    public function tmallItemSchemaAdd(TmallItemSchemaAddRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.schema.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????
    **/
    public function tmallProductMatchSchemaGet(TmallProductMatchSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.match.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        product????????????
    **/
    public function tmallProductSchemaMatch(TmallProductSchemaMatchRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.schema.match", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ???????????????????????????????????????????????????
    **/
    public function taobaoSellercenterSubusersPage(TaobaoSellercenterSubusersPageRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.subusers.page", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????
    **/
    public function taobaoLogisticsOrderCreate(TaobaoLogisticsOrderCreateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.order.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????????????????????????????????????????isv????????????taobao.sellercenter.subusers.page?????????
    **/
    public function taobaoSubusersPage(TaobaoSubusersPageRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.page", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        isv????????????
    **/
    public function cainiaoCloudprintIsvResourcesGet(CainiaoCloudprintIsvResourcesGetRequest $request) {
        return $this->client->execute("cainiao.cloudprint.isv.resources.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ???????????????????????????
    **/
    public function cainiaoCloudprintTemplatesMigrate(CainiaoCloudprintTemplatesMigrateRequest $request,string $session) {
        return $this->client->executeWithSession("cainiao.cloudprint.templates.migrate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????????????????
    **/
    public function tmallItemSchemaUpdate(TmallItemSchemaUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.item.schema.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ???????????????????????????????????????????????????????????????
    **/
    public function taobaoSubusersInfoQuery(TaobaoSubusersInfoQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.info.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ???????????????????????????????????????
    **/
    public function taobaoItemAnchorGet(TaobaoItemAnchorGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.anchor.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????
    **/
    public function taobaoPicturePicturesGet(TaobaoPicturePicturesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.pictures.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????
    **/
    public function taobaoPicturePicturesCount(TaobaoPicturePicturesCountRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.picture.pictures.count", $request->toMap(), $request->toFileParamMap(), $session);
    }
}