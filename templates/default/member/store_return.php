<?php defined('InShopNC') or exit('Access Invalid!');?>
<link rel="stylesheet" type="text/css" href="<?php echo RESOURCE_PATH;?>/js/jquery-ui/themes/ui-lightness/jquery.ui.css"  />

<div class="wrap">
  <div class="tabmenu">
    <?php include template('member/member_submenu');?>
  </div>
  <?php if (is_array($output['return_list']) && !empty($output['return_list'])) { ?>
  <form method="get" action="index.php">
    <table class="search-form">
      <input type="hidden" name="act" value="return" />
      <tr>
        <td>&nbsp;</td>
        <th style="width:115px"><select name="type">
            <option value="order_sn" <?php if($_GET['type'] == 'order_sn'){?>selected<?php }?>><?php echo $lang['return_order_ordersn']; ?></option>
            <option value="return_sn" <?php if($_GET['type'] == 'return_sn'){?>selected<?php }?>><?php echo $lang['return_order_returnsn']; ?></option>
            <option value="buyer_name" <?php if($_GET['type'] == 'buyer_name'){?>selected<?php }?>><?php echo $lang['return_order_buyer']; ?></option>
          </select>
          <?php echo $lang['nc_colon'];?></th>
        <td class="w160"><input type="text" class="text" name="keyword" value="<?php echo trim($_GET['keyword']); ?>" /></td>
        <th><?php echo $lang['return_order_add_time'].$lang['nc_colon'];?></th>
        <td class="w180"><input type="text" class="text" name="add_time_from" id="add_time_from" value="<?php echo $_GET['add_time_from']; ?>" />
          &#8211;
          <input id="add_time_to" type="text" class="text"  name="add_time_to" value="<?php echo $_GET['add_time_to']; ?>" /></td>
        <td class="w90 tc"><input type="submit" class="submit" value="<?php echo $lang['nc_search'];?>" /></td>
      </tr>
    </table>
  </form>
  <?php } ?>
  <table class="ncu-table-style">
    <thead>
      <tr>
        <th class="w180"><?php echo $lang['return_order_ordersn'];?></th>
        <th class="w180"><?php echo $lang['return_order_returnsn'];?></th>
        <th><?php echo $lang['return_order_buyer'];?></th>
        <th class="w80"><?php echo $lang['return_order_return'];?></th>
        <th class="w150"><p class="goods-time"><?php echo $lang['return_order_add_time'];?></p></th>
        <th class="w90"><?php echo $lang['nc_handle'];?></th>
      </tr>
    </thead>
    <?php if (is_array($output['return_list']) && !empty($output['return_list'])) { ?>
    <tbody>
      <?php foreach ($output['return_list'] as $key => $val) { ?>
      <tr class="bd-line" >
        <td><a href="index.php?act=store&op=show_order&order_id=<?php echo $val['order_id']; ?>" target="_blank"><?php echo $val['order_sn'];?></a></td>
        <td class="goods-num"><?php echo $val['return_sn']; ?></td>
        <td><?php echo $val['buyer_name']; ?></td>
        <td><strong><?php echo $val['return_goodsnum'];?></strong></td>
        <td class="goods-time"><?php echo date("Y-m-d H:i:s",$val['add_time']);?></td>
        <td><a href="javascript:void(0)" nc_type="dialog" dialog_title="<?php echo $lang['nc_view'];?>" dialog_id="return_order" dialog_width="480" uri="index.php?act=return&op=view&return_id=<?php echo $val['return_id']; ?>"> <?php echo $lang['nc_view'];?> </a></td>
      </tr>
      <?php } ?>
      <?php } else { ?>
      <tr>
        <td colspan="20" class="norecord"><i>&nbsp;</i><span><?php echo $lang['no_record'];?></span></td>
      </tr>
      <?php } ?>
    </tbody>
    <tfoot>
      <?php if (is_array($output['return_list']) && !empty($output['return_list'])) { ?>
      <tr>
        <td colspan="20"><div class="pagination"><?php echo $output['show_page']; ?></div></td>
      </tr>
      <?php } ?>
    </tfoot>
  </table>
</div>
<script type="text/javascript" src="<?php echo RESOURCE_PATH;?>/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script> 
<script type="text/javascript" src="<?php echo RESOURCE_PATH;?>/js/jquery-ui/i18n/zh-CN.js" charset="utf-8"></script> 
<script type="text/javascript">
	$(function(){
	    $('#add_time_from').datepicker({dateFormat: 'yy-mm-dd'});
	    $('#add_time_to').datepicker({dateFormat: 'yy-mm-dd'});
	});
</script> 
