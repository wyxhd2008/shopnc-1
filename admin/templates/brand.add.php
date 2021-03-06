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
echo "\r\n<div class=\"page\">\r\n  <div class=\"fixed-bar\">\r\n    <div class=\"item-title\">\r\n      <h3>";
echo $lang['brand_index_brand'];
echo "</h3>\r\n      <ul class=\"tab-base\">\r\n        <li><a href=\"index.php?act=brand&op=brand\"><span>";
echo $lang['nc_manage'];
echo "</span></a></li>\r\n        <li><a href=\"JavaScript:void(0);\" class=\"current\"><span>";
echo $lang['nc_new'];
echo "</span></a></li>\r\n        <li><a href=\"index.php?act=brand&op=brand_apply\"><span>";
echo $lang['brand_index_to_audit'];
echo "</span></a></li>\r\n      </ul>\r\n    </div>\r\n  </div>\r\n  <div class=\"fixed-empty\"></div>\r\n  <form id=\"brand_form\" enctype=\"multipart/form-data\" method=\"post\">\r\n    <input type=\"hidden\" name=\"form_submit\" value=\"ok\" />\r\n    <table class=\"table tb-type2 nobdb\">\r\n      <tbody>\r\n        <tr class=\"noborder\">\r\n          <td colspan=\"2\" class=\"required\"><label class=\"validation\">";
echo $lang['brand_index_name'];
echo ":</label></td>\r\n        </tr>\r\n        <tr class=\"noborder\">\r\n          <td class=\"vatop rowform\"><input type=\"text\" value=\"\" name=\"brand_name\" id=\"brand_name\" class=\"txt\"></td>\r\n          <td class=\"vatop tips\"></td>\r\n        </tr>\r\n        <tr>\r\n          <td colspan=\"2\" class=\"required\">";
echo $lang['brand_index_class'];
echo ": </td>\r\n        </tr>\r\n        <tr class=\"noborder\">\r\n          <td class=\"vatop rowform\"><input type=\"text\" value=\"\" name=\"brand_class\" id=\"brand_class\" class=\"txt\"></td>\r\n          <td class=\"vatop tips\"></td>\r\n        </tr>\r\n        <tr>\r\n          <td colspan=\"2\" class=\"required\">";
echo $lang['brand_index_pic_sign'];
echo ": </td>\r\n        </tr>\r\n        <tr class=\"noborder\">\r\n          <td class=\"vatop rowform\"><span class=\"type-file-box\">\r\n            <input name=\"brand_pic\" id=\"brand_pic\" type=\"file\" class=\"type-file-file\" size=\"30\">\r\n            </span></td>\r\n          <td class=\"vatop tips\">";
echo $lang['brand_add_support_type'];
echo "gif,jpg,jpeg,png</td>\r\n        </tr>\r\n        <tr>\r\n          <td colspan=\"2\" class=\"required\">";
echo $lang['brand_add_if_recommend'];
echo ": </td>\r\n        </tr>\r\n        <tr class=\"noborder\">\r\n          <td class=\"vatop rowform onoff\">\r\n            <label for=\"brand_recommend1\" class=\"cb-enable\"><span>";
echo $lang['nc_yes'];
echo "</span></label>\r\n            <label for=\"brand_recommend0\" class=\"cb-disable selected\"><span>";
echo $lang['nc_no'];
echo "</span></label>\r\n            <input id=\"brand_recommend1\" name=\"brand_recommend\" ";
if ( $output['brand_array']['brand_recommend'] == "1" )
{
		echo "checked=\"checked\"";
}
echo "  value=\"1\" type=\"radio\">\r\n            <input id=\"brand_recommend0\" name=\"brand_recommend\" ";
if ( $output['brand_array']['brand_recommend'] == "0" )
{
		echo "checked=\"checked\"";
}
echo " value=\"0\" type=\"radio\">\r\n            \r\n            </td>\r\n          <td class=\"vatop tips\"></td>\r\n        </tr>\r\n        <tr>\r\n          <td colspan=\"2\" class=\"required\">";
echo $lang['nc_sort'];
echo ": </td>\r\n        </tr>\r\n        <tr class=\"noborder\">\r\n          <td class=\"vatop rowform\"><input type=\"text\" value=\"0\" name=\"brand_sort\" id=\"brand_sort\" class=\"txt\">\r\n            </td>\r\n          <td class=\"vatop tips\">";
echo $lang['brand_add_update_sort'];
echo "</td>\r\n        </tr>\r\n      </tbody>\r\n     <tfoot>\r\n        <tr class=\"tfoot\">\r\n          <td colspan=\"2\" ><a href=\"JavaScript:void(0);\" class=\"btn\" id=\"submitBtn\"><span>";
echo $lang['nc_submit'];
echo "</span></a></td>\r\n        </tr>\r\n      </tfoot>\r\n    </table>\r\n  </form>\r\n</div>\r\n<script>\r\n//按钮先执行验证再提交表单\r\n\$(function(){\$(\"#submitBtn\").click(function(){\r\n    if(\$(\"#brand_form\").valid()){\r\n     \$(\"#brand_form\").submit();\r\n\t}\r\n\t});\r\n});\r\n//\r\n\$(document).ready(function(){\r\n\t\$(\"#brand_form\").validate({\r\n\t\terrorPlacement: function(error, element){\r\n\t\t\terror.appendTo(element.parent().parent().prev().find('td:first'));\r\n        },\r\n        success: function(label){\r\n            label.addClass('valid');\r\n        },\r\n        onkeyup    : false,\r\n        rules : {\r\n            brand_name : {\r\n                required : true,\r\n                remote   : {\r\n               \turl :'index.php?act=brand&op=ajax&branch=check_brand_name',\r\n                type:'get',\r\n                data:{\r\n                    brand_name : function(){\r\n                        return \$('#brand_name').val();\r\n                        },\r\n                    \tid  : ''\r\n                    }\r\n                }\r\n            },\r\n            brand_sort : {\r\n                number   : true\r\n            }\r\n        },\r\n        messages : {\r\n            brand_name : {\r\n                required : '";
echo $lang['brand_add_name_null'];
echo "',\r\n                remote   : '";
echo $lang['brand_add_name_exists'];
echo "'\r\n            },\r\n            brand_sort  : {\r\n                number   : '";
echo $lang['brand_add_sort_int'];
echo "'\r\n            }\r\n        }\r\n\t});\r\n});\r\n</script>\r\n<script type=\"text/javascript\">\r\n\$(function(){\r\n    var textButton=\"<input type='text' name='textfield' id='textfield1' class='type-file-text' /><input type='button' name='button' id='button1' value='' class='type-file-button' />\"\r\n\t\t\$(textButton).insertBefore(\"#brand_pic\");\r\n\t\t\$(\"#brand_pic\").change(function(){\r\n\t\t\$(\"#textfield1\").val(\$(\"#brand_pic\").val());\r\n\t});\r\n});\r\n</script> \r\n";
?>
