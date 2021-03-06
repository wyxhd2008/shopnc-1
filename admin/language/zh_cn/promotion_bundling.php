<?php
/*********************/
/*                   */
/*  Version : 5.1.0  */
/*  Author  : RM     */
/*  Comment : 071223 */
/*                   */
/*********************/

if ( !defined( "InShopNC" ) )
{
		exit( "Access Invalid!" );
}
$lang['promotion_unavailable'] = "商品促销功能尚未开启";
$lang['bundling_quota'] = "套餐管理";
$lang['bundling_list'] = "活动管理";
$lang['bundling_setting'] = "设置";
$lang['bundling_gold_price'] = "购买组合销售所需金币数量";
$lang['bundling_sum'] = "组合销售发布数量";
$lang['bundling_goods_sum'] = "每个组合加入商品数量";
$lang['bundling_price_prompt'] = "购买单位为月(30天)，购买后卖家可以在所购买周期内发布组合销售活动。";
$lang['bundling_sum_prompt'] = "允许店铺发布组合销售的最大数量，0为没有限制。";
$lang['bundling_goods_sum_prompt'] = "每个组合能加入商品的最大数量，不大于5的数字。";
$lang['bundling_price_error'] = "不能为空，且不小于1的整数";
$lang['bundling_sum_error'] = "不能为空，且不小于0的整数";
$lang['bundling_goods_sum_error'] = "不能为空，且为1到5之间的整数，包括1和5";
$lang['bundling_update_succ'] = "更新成功";
$lang['bundling_update_fail'] = "更新失败";
$lang['bundling_state_all'] = "全部状态";
$lang['bundling_state_1'] = "开启";
$lang['bundling_state_0'] = "关闭";
$lang['bundling_quota_list_prompts'] = "卖家购买组合销售活动的列表，并可以对结束时间、状态进行修改。注意：结束时间小于当前时间活动状态无法开启。";
$lang['bundling_quota_store_name'] = "店铺名称";
$lang['bundling_quota_endtime_required'] = "请添加结束时间";
$lang['bundling_quota_endtime_dateValidate'] = "结束时间需要大于开始时间";
$lang['bundling_quota_store_name'] = "店铺名称";
$lang['bundling_quota_quantity'] = "购买数量";
$lang['bundling_quota_starttime'] = "开始时间";
$lang['bundling_quota_endtime'] = "结束时间";
$lang['bundling_quota_endtime_tips'] = "如果状态选择开启，请设置结束时间大于当前时候，否则不能开启。";
$lang['bundling_quota_state_tips'] = "设置状态为开启时，结束时间必须大于当前时间，否则状态无法开启。";
$lang['bundling_quota_prompts'] = "查看每个店铺的组合销售活动信息，您可以取消某个活动。";
$lang['bundling_name'] = "活动名称";
$lang['bundling_price'] = "活动销售价格";
$lang['bundling_goods_count'] = "商品数量";
?>
