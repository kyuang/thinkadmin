﻿<?php require_once "../class/islogin_class.php";?>
<?php
$zhangjieid=isset($_GET['zhangjieid'])?$_GET['zhangjieid']:'';
$kechengid=isset($_GET['kechengid'])?$_GET['kechengid']:'';
$neirongid=isset($_GET['neirongid'])?$_GET['neirongid']:'';
$nian=$_GET['nian'];
$yue=$_GET['yue'];

require_once '../class/option.php';
require_once '../class/DAOMySQLi.class.php';
$dao=DAOMySQLi::getSingleton($options);
$sql="set names utf8";
$dao->query($sql);
$sql="select * from kecheng_neirong where id = " . $neirongid;
$row = $dao->fetchOne($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="./Style/skin.css" />
	<link rel="stylesheet" href="../kindeditor/themes/default/default.css" />
	<link rel="stylesheet" href="../kindeditor/plugins/code/prettify.css" />
	<script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="../kindeditor/lang/zh-CN.js"></script>
	<script charset="utf-8" src="../kindeditor/plugins/code/prettify.js"></script>
	<script>
				
		KindEditor.ready(function(K) {
				
			var editor1 = K.create('textarea[name="kecheng_neirong"]', {
				cssPath : '../kindeditor/plugins/code/prettify.css',
				uploadJson : '../kindeditor/php/upload_json.php',
				fileManagerJson : '../kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				
			});
			var editor2 = K.create('textarea[name="daan"]', {
				
			});
			
		});
	</script>
</head>
    <body>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!-- 头部开始 -->
            <tr>
                <td width="17" valign="top" background="./Images/mail_left_bg.gif">
                    <img src="./Images/left_top_right.gif" width="17" height="29" />
                </td>
                <td valign="top" background="./Images/content_bg.gif">
                    <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" background="././Images/content_bg.gif">
                        <tr><td height="31"><div class="title">添加课程</div></td></tr>
                    </table>
                </td>
                <td width="16" valign="top" background="./Images/mail_right_bg.gif"><img src="./Images/nav_right_bg.gif" width="16" height="29" /></td>
            </tr>
            <!-- 中间部分开始 -->
            <tr>
                <!--第一行左边框-->
                <td valign="middle" background="./Images/mail_left_bg.gif">&nbsp;</td>
                <!--第一行中间内容-->
                <td valign="top" bgcolor="#F7F8F9">
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <!-- 空白行-->
                        <tr><td colspan="2" valign="top">&nbsp;</td><td>&nbsp;</td><td valign="top">&nbsp;</td></tr>
                        <tr>
                            <td colspan="4">
                                <table>
                                    <tr>
                                        <td width="100" align="center"><img src="./Images/mime.gif" /></td>
                                        <td valign="bottom"><h3 style="letter-spacing:1px;">在这里，您可以根据您的需求，填写网站参数！</h3></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!-- 一条线 -->
                        <tr>
                            <td height="40" colspan="4">
                                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table>
                            </td>
                        </tr>
                        <!-- 添加课程内容开始 -->
                        <tr>
                            <td width="2%">&nbsp;</td>
                            <td width="96%">
                                <table width="100%">
                                    <tr>
                                        <td colspan="2">
                                            <form action="kecheng_manage11.php" method="post" enctype="multipart/form-data">
                                                <table width="100%" class="cont">
                                                    <tr>
                                                        <td width="2%" >&nbsp;</td>
                                                        <td width="10%" >课程内容：</td>
                                                        <td width="76%" >
                                                            <textarea class="form-control" name="kecheng_neirong" style="font-size: 25px;"><?php echo $row['neirong'];?></textarea>
                                                        </td>
                                                        <td width="10%" >设置课程内容,添加'#'号换行</td>
                                                        <td width="2%" >&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td>添加相关图片</td>
                                                        <td width="20%">
                                                            <input type="file"  name="kecheng_img" value="" />
                                                        </td>
                                                        <td>添加相关图片</td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td width="2%" >&nbsp;</td>
                                                        <td width="10%" >答案：</td>
                                                        <td width="76%" >
                                                            <textarea class="form-control" name="daan" style="font-size: 25px;"><?php echo $row['daan'];?></textarea>
                                                        </td>
                                                        <td width="10%" >设置答案,添加'#'号换行</td>
                                                        <td width="2%" >&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
				<td>&nbsp;</td>
                                                        <td colspan="1" ><input style="float: left;margin-right:5px;text-align:center; border:1px solid #7c97d7; width: 100px;height: 40px;line-height: 40px;font-size: 20px;" class="btn" type="submit" value="提交" />
<a href="kecheng_view.php?kechengid=<?php echo $kechengid; ?>&zhangjieid=<?php echo $zhangjieid; ?>&nian=<?php echo $nian; ?>&yue=<?php echo $yue; ?>"><div style="margin-right:5px;text-align:center; border:1px solid #7c97d7; width: 100px;height: 40px;line-height: 40px;display: block;float: left;font-size: 20px;">返回</div></a>
</td>
			       <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <input type="hidden" name="zhangjieid" value="<?php echo $zhangjieid;?>">
                                                        <input type="hidden" name="kechengid" value="<?php echo $kechengid;?>">
	                                        <input type="hidden" name="neirongid" value="<?php echo $neirongid;?>">
                                                        <input type="hidden" name="nian" value="<?php echo $nian;?>">
                                                        <input type="hidden" name="yue" value="<?php echo $yue;?>">
                                                    </tr>
                                                </table>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%">&nbsp;</td>
                        </tr>
                        <!-- 添加栏目结束 -->
                        <tr>
                            <td height="40" colspan="4">
                                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="2%">&nbsp;</td>
                            <td width="51%" class="left_txt">
                                <img src="./Images/icon_phone.gif" width="17" height="14"> 官方网站：<a href="http://www.shuhua.cc">http://www.shuhua.cc</a>
                            </td>
                            <td>&nbsp;</td><td>&nbsp;</td>
                        </tr>
                    </table>
                </td>
                <td background="./Images/mail_right_bg.gif">&nbsp;</td>
            </tr>
            <!-- 底部部分 -->
            <tr>
                <td valign="bottom" background="./Images/mail_left_bg.gif">
                    <img src="./Images/buttom_left.gif" width="17" height="17" />
                </td>
                <td background="./Images/buttom_bgs.gif">
                    <img src="./Images/buttom_bgs.gif" width="17" height="17">
                </td>
                <td valign="bottom" background="./Images/mail_right_bg.gif">
                    <img src="./Images/buttom_right.gif" width="16" height="17" />
                </td>           
            </tr>
        </table>
    </body>
</html>