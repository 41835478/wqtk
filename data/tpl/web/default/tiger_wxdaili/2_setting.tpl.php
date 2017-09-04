<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<link href="<?php  echo $_W['siteroot'];?>/addons/tiger_yuanbao/static/css/bootstrap.file-input.css" rel="stylesheet">
<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>addons/tiger_yuanbao/static/js/bootstrap.file-input.js"></script>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
   <div class="main">
        <form action="" method="post" class="form-horizontal form" id="setting-form">
        <input type="hidden" name="id" value="<?php  echo $set['id'];?>">
            <div class="panel panel-default">
                <div class="panel-heading">参数设置</div>
                <div class="panel-body">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active" ><a href="#tab_basic">代理设置</a></li>
                    <li><a href="#tab_share">加群助手设置</a></li>
                    <li><a href="#tab_share1">代理支付设置</a></li>

                </ul>
                <div class="tab-content">
                   <!--代理设置-->
                    <div class="tab-pane  active" id="tab_basic">
                         <div class="panel-body">
                              <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label" style="color:#ff0000">云控设置</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <label class="radio-inline"><input type="radio" name="yktype" value="0" 
                                         <?php  if($settings['yktype']==0) { ?> checked="checked" <?php  } ?>>不开启</label>
                                        <label class="radio-inline"><input type="radio" name="yktype" value="1"
                                         <?php  if($settings['yktype']==1) { ?> checked="checked" <?php  } ?>>开启</label>
                                          <span class="help-block">这里选择了，需要在微信淘宝客基础设置里面把云控授权了</span>
                                    </div>
                                </div>
                                 <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">淘宝ID</label>
                                        <div class="col-sm-6 col-xs-12" style="margin-top: 6px;">
                                            <input type="text" value="<?php  echo $settings['tbuid'];?>" name="tbuid" class="form-control" />
                                            <span class="help-block" style="color:#ff0000">阿里妈妈登录的对应淘宝ID 【特别注意：淘宝ID填好了先保存，在点下面的登录】</span>
                                        </div>
                                </div>
                            <input type="hidden" name='dlmmtype' value='0'>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">管理员OPENID</label>
                                <div class="col-sm-9 col-xs-12" style="margin-top: 6px;">
                                    <input type="text" value="<?php  echo $settings['glyopenid'];?>" name="glyopenid" class="form-control" />
                                    <span class="help-block">管理员OPENID</span>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="type" class="col-sm-2 control-label" style="color:#ff0000">代理申请提醒</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                          <select class="form-control" name="dlsqtx" id="dlsqtx">
                                                <option value="0">请选择模版消息</option>
                                                <?php  if(is_array($mblist)) { foreach($mblist as $v) { ?>
                                                <option value="<?php  echo $v['id'];?>" <?php  if($settings['dlsqtx']==$v['id']) { ?>selected <?php  } ?>><?php  echo $v['title'];?></option>  
                                                <?php  } } ?>
                                            </select>    
                                           <div class="help-block">代理申请后，管理员收到消息(先到微信淘宝客后台，添加（基础设置->模版消息管理-添加))</div>
                                        </div>
                                    </div>
                               </div>
                               <div class="form-group">
                                    <label for="type" class="col-sm-2 control-label" style="color:#ff0000">代理审核通过提醒</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                          <select class="form-control" name="dlshtgtx" id="dlshtgtx">
                                                <option value="0">请选择模版消息</option>
                                                <?php  if(is_array($mblist)) { foreach($mblist as $v) { ?>
                                                <option value="<?php  echo $v['id'];?>" <?php  if($settings['dlshtgtx']==$v['id']) { ?>selected <?php  } ?>><?php  echo $v['title'];?></option>  
                                                <?php  } } ?>
                                            </select>    
                                           <div class="help-block">代理审核通过后，代理收到模版消息（基础设置->模版消息管理-添加)</div>
                                        </div>
                                    </div>
                               </div>

                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">实际佣金</label>
                                <div class="col-xs-12 col-sm-9">
                                   <label class="checkbox-inline">
                                      <input type="radio" name="yjtype" id="yjtype" value="0" <?php  if($settings['yjtype'] == 0) { ?>checked<?php  } ?>> 不显示
                                   </label>
                                   <label class="checkbox-inline">
                                      <input type="radio" name="yjtype" id="yjtype" value="1" <?php  if($settings['yjtype'] == 1) { ?>checked<?php  } ?>> 显示
                                   </label>
                                    <span class="help-block" style="color:#ff0000">如果显示，会在前端列表页显示实际佣金</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分佣模式</label>
                                <div class="col-xs-12 col-sm-9">
                                   <label class="checkbox-inline">
                                      <input type="radio" name="fytype" id="fytype" value="0" <?php  if($settings['fytype'] == 0) { ?>checked<?php  } ?>> 佣金
                                   </label>
                                   <label class="checkbox-inline">
                                      <input type="radio" name="fytype" id="fytype" value="1" <?php  if($settings['fytype'] == 1) { ?>checked<?php  } ?>> 付款金额
                                   </label>
                                    <span class="help-block" style="color:#ff0000">选择付款金额，代理的佣金比例调整好了</span>
                                </div>
                           </div>
                           <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">淘宝ID</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input type="text" name="tbid" value="<?php  echo $settings['tbid'];?>" class="form-control" placeholder="数字" >
                                    <span class="help-block">填写对应的淘宝ID，在客户领取打开淘宝口令的时候，会检测收到消息</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">搜索查询自购佣金</label>
                                <div class="col-sm-9 col-xs-12" style="margin-top: 6px;">
                                    <input type="text" value="<?php  echo $settings['zgf'];?>" name="zgf" class="form-control" />
                                    <span class="help-block">搜索页面显示的自购佣金比例</span>
                                </div>
                            </div>
                           <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">淘客APPKEY</label>
                                <div class="col-sm-9 col-xs-12" style="margin-top: 6px;">
                                    <input type="text" value="<?php  echo $settings['tkAppKey'];?>" name="tkAppKey" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">淘客secretKey</label>
                                <div class="col-sm-9 col-xs-12" style="margin-top: 6px;">
                                    <input type="text" value="<?php  echo $settings['tksecretKey'];?>" name="tksecretKey" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">普通PID</label>
                                <div class="col-sm-9 col-xs-12" style="margin-top: 6px;">
                                    <input type="text" value="<?php  echo $settings['ptpid'];?>" name="ptpid" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">鹊桥高佣PID</label>
                                <div class="col-sm-9 col-xs-12" style="margin-top: 6px;">
                                    <input type="text" value="<?php  echo $settings['qqpid'];?>" name="qqpid" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">adzoneid</label>
                                <div class="col-sm-6 col-xs-12" style="margin-top: 6px;">
                                    <input type="text" value="<?php  echo $settings['adzoneid'];?>" name="adzoneid" class="form-control" />
                                    <span class="help-block">对应数值 ：mm_memberid_siteid_adzoneid （使用导购推广位默认第一个）</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">siteid</label>
                                <div class="col-sm-6 col-xs-12" style="margin-top: 6px;">
                                    <input type="text" value="<?php  echo $settings['siteid'];?>" name="siteid" class="form-control" />
                                    <span class="help-block">对应数值 ：mm_memberid_siteid_adzoneid （使用导购推广位默认第一个）</span>
                                </div>
                            </div>
                             <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">提示信息</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <textarea style="height:150px;" name="flmsg" class="form-control" cols="60"><?php  echo $settings['flmsg'];?></textarea>                  
                                        <div class="help-block" style="line-height:30px;">
                                        <b>参数设置：</b>
                                        <!--br>链接设置例如:<code>&lt;a href="#领取积分#"&gt;点我领取积分&lt;/a&gt;</code>
                                        <br>昵称：#昵称#-->
                                        <br>商品名称：#名称#
                                        <br>商品原价：#原价#
                                        <br>券后价：#券后价#
                                        <!--<br>总优惠后价：#惠后价#-->
                                        <!--<br>总优惠金额：#总优惠#-->
                                        <br>优惠券：#优惠券# (优惠券如果没有提示，暂无优惠券)
                                        <br>代理预估佣金：#代理佣金#
                                        <!--<br>好评后优惠约：#返现金额#-->
                                        <br>淘口令：#淘口令#
                                        <br>购买地址：#短网址#

                                      </div>
                                   </div>                            
                               </div>
                         </div>
                         <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">代理申请头部图片</label>
                                <div class="col-sm-9">
                                    <?php  echo tpl_form_field_image('dlpicurl',$settings['dlpicurl'])?>
                                    <span class="help-block">如：宽650   高不限制</span>
                                </div>
                                
                        </div>
                          <div class="form-group col-sm-12">
                              <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
                            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                          </div>
                     </div>
                      <!--结束-->
                     <!--加群设置-->
                     <div class="tab-pane" id="tab_share">
                         <div class="panel-body">
                            <!--div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">加群助手</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <label class="radio-inline"><input type="radio" name="jqzs" value="0" 
                                         <?php  if($settings['jqzs']==0) { ?> checked="checked" <?php  } ?>>不开</label>
                                        <label class="radio-inline"><input type="radio" name="jqzs" value="1"
                                         <?php  if($settings['jqzs']==1) { ?> checked="checked" <?php  } ?>>开启</label>
                                          <span class="help-block">如果开启 请在自定义菜单设置关键词 <b style="color:#ff0000">加群助手</b> <a href="" style="color:blue">点击管理群二维码</a></span>
                                    </div>
                            </div-->
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">生成群提示：</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="" name="jlqmsg" value="<?php  echo $settings['jlqmsg'];?>">
                                        <div class="help-block">如：扫描二维码加入群</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">已加过群提示：</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="" name="jqmsg" value="<?php  echo $settings['jqmsg'];?>">
                                        <div class="help-block">如：您已加入，无须重复加入</div>
                                </div>
                            </div>
                         </div>
                        <div class="form-group col-sm-12">
                              <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
                            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                         </div>
                     </div>
                     <!--结束-->
                     <!--支付设置-->
                     <div class="tab-pane" id="tab_share1">
                         <div class="panel-body">
                            <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">&nbsp;</label>
                                        <div class="col-xs-12 col-sm-9" >
                                           请先在功能选项--》支付参数--》微信支付--》开启  （开启后，到这里保存一次）
                                           <p style="color:#ff0000">支付授权目录与“支付选项”中的说明不同，应在 公众平台->微信支付->公众号支付 <br>追加一条支付授权目录: <?php  echo $_W['siteroot'];?>app/</p>
                                        </div>
                           </div>
                           <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">client_ip</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input type="text" name="ip" value="<?php  echo $settings['ip'];?>" class="form-control" placeholder="请填写服务器IP" >
                                        <span class="help-block">这里填写你的服务器IP：<?php  echo $_SERVER["SERVER_ADDR"]?></span>
                                    </div>
                           </div>
                        <div class="form-group col-sm-12">
                              <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
                            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                         </div>
                     </div>
                     <!--结束-->
               </div>
           </div>
    </div>
</form>
<script>
require(['jquery', 'util'], function($, u){
$(function(){
    u.editor($('.richtext')[0]);
});
});
$(function () {
    window.optionchanged = false;
    $('#myTab a').click(function (e) {
        e.preventDefault();//阻止a链接的跳转行为
        $(this).tab('show');//显示当前选中的链接及关联的content
    })
});
</script>

<!--编辑内容结束-->
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>