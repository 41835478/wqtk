<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
	<li class="active"><a href="<?php  echo $this->createWebUrl('member');?>">会员管理</a></li>
    <li ><a href="<?php  echo $this->createWebUrl('dlmember',array('pid'=>$pid,'status'=>1))?>">代理管理</a></li>
</ul>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
   <div class="main">
        <form action="" method="post" class="form-horizontal form" id="setting-form">
        <input type="hidden" name="id" value="<?php  echo $set['id'];?>">
            <div class="panel panel-default">
                <div class="panel-heading">参数设置</div>
                <div class="panel-body">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active" ><a href="#tab_basic">代理设置</a></li>
                    <li><a href="#tab_share">代理立网站设置</a></li>
                    <li><a href="#tab_share1">代理登录设置</a></li>

                </ul>
                <div class="tab-content">
                   <!--代理设置-->
                    <div class="tab-pane  active" id="tab_basic">
                         <div class="panel-body">
                             <div class="form-group">
                                <label class="col-sm-2 control-label">粉丝</label>
                                <div class="col-sm-9 col-xs-12">
                                    <img src="<?php  echo $fans['avatar'];?>" style="width:50px;height:50px;padding:1px;border:1px solid #ccc;border-radius:50%">
                                    <?php  echo $fans['nickname'];?>    </div>
                             </div>
                             <div class="form-group">
                                <label class="col-sm-2 control-label">OPENID</label>
                                <div class="col-sm-9 col-xs-12">
                                    <div class="form-control-static"><?php  echo $fans['openid'];?></div>
                                </div>   
                            </div>
                             <div class="form-group">
                                <label class="col-sm-2 control-label">注册时间</label>
                                <div class="col-sm-9 col-xs-12">
                                    <div class="form-control-static"><?php  echo date('Y-m-d H:i:s',$fans['followtime'])?></div>
                                </div>   
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">姓名</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="tname" class="form-control valid" value="<?php  echo $share['tname'];?>" />
                                        <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">代理申请理由</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="dlmsg" class="form-control valid" value="<?php  echo $share['dlmsg'];?>" />
                                        <span class="help-block"></span>
                                </div>
                             </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">手机号</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="tel" class="form-control valid" value="<?php  echo $share['tel'];?>" />
                                        <span class="help-block"></span>
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">支付宝</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="zfbuid" class="form-control valid" value="<?php  echo $share['zfbuid'];?>" />
                                        <span class="help-block">支付宝是代理提现使用的</span>
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信号</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="weixin" class="form-control valid" value="<?php  echo $share['weixin'];?>" />
                                        <span class="help-block"></span>
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">上级代理UID</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="helpid" class="form-control valid" value="<?php  echo $share['helpid'];?>" />
                                        <span class="help-block"></span>
                                </div>
                             </div>
                            
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">代理群名称</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="qunname" class="form-control valid" value="<?php  echo $share['qunname'];?>" />
                                        <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">QQ/微信群代理</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <label class="radio-inline"><input type="radio" name="dltype" value="0" 
                                         <?php  if($share['dltype']==0) { ?> checked="checked" <?php  } ?>>否</label>
                                        <label class="radio-inline"><input type="radio" name="dltype" value="1"
                                         <?php  if($share['dltype']==1) { ?> checked="checked" <?php  } ?>>是</label>
                                         <label class="radio-inline"><input type="radio" name="dltype" value="2"
                                         <?php  if($share['dltype']==2) { ?> checked="checked" <?php  } ?>>审核中</label>
                                          <span class="help-block"></span>
                                    </div>
                            </div>
                             <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">代理佣金比例</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="dlbl" class="form-control valid" value="<?php  echo $share['dlbl'];?>" />
                                        <span class="help-block">上面填写数字，代理佣金=阿里妈妈结算佣金*代理佣金比例/100<Br><p style="color:#ff0000">(这里设置了代理独立比例，基础设置里面的一级代理佣金设置就无效)</p></span>
                                </div>
                             </div>
                             <!--div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">代理佣金比例</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="dlbl" class="form-control valid" value="<?php  echo $share['dlbl'];?>" />
                                        <span class="help-block">上面填写数字，代理佣金=阿里妈妈结算佣金*代理佣金比例/100<Br><p style="color:#ff0000">(在设置比例的时候，计算好，不要亏本了，因为还有返现佣金的，返现比例+代理佣金比例 不要超过 100)</p></span>
                                </div>
                             </div-->
                             
                             <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">代理推广位</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="tgwid" class="form-control valid" value="<?php  echo $share['tgwid'];?>" />
                                        <span class="help-block">代理微信推广位ID,mm_memberid_siteid_<span style="color:#ff0000">adzoneid</span> 对应PID里面红色这一段数字，不是代理不用填写<br>只能填写一个，请不要填写多个推广位 如：63558222</span>
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">普通PID</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="dlptpid" class="form-control valid" value="<?php  echo $share['dlptpid'];?>" />
                                        <span class="help-block">填写完整的PID,包括mm_  如：mm_63558222_68516333_68516333</span>
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">鹊桥PID</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="dlqqpid" class="form-control valid" value="<?php  echo $share['dlqqpid'];?>" />
                                        <span class="help-block">填写完整的PID,包括mm_  如：mm_63558222_68516333_68516333<span style="color:#ff0000">（规则改变：请填写上面普通的PID）</span> </span>
                                </div>
                             </div>
                         </div>
                          <div class="form-group col-sm-12">
                              <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
                            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                          </div>
                     </div>
                      <!--结束-->
                     <!--代理立网站设置-->
                     <div class="tab-pane" id="tab_share">
                         <div class="panel-body">
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                                <div class="col-sm-9 col-xs-12">
                                        PC网站对应uid：<b style="color:#ff0000"><?php  echo $share['id'];?></b> &nbsp;&nbsp;&nbsp;&nbsp; 对应weid：<b style="color:#ff0000"><?php  echo $_W['uniacid'];?></b>
                                        <span class="help-block"></span>
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">绑定域名</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="pcurl" class="form-control valid" value="<?php  echo $share['pcurl'];?>" />
                                        <span class="help-block">必须设置 如 www.aaa.com   或是  abc.aaa.com  不要加http:// 和 /斜杠</span>
                                </div>
                             </div>
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">SEO网站标题</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="pctitle" class="form-control valid" value="<?php  echo $share['pctitle'];?>" />
                                        <span class="help-block"></span>
                                </div>
                             </div>
                             <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">网站LOGO</label>
                                    <div class="col-sm-9">
                                        <?php  echo tpl_form_field_image('pclogo',tomedia($share['pclogo']))?>
                                        <span class="help-block">宽180px*高70px</span>
                                    </div>
                             </div>
                             <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">SEO网站keywords</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="pckeywords" class="form-control valid" value="<?php  echo $share['pckeywords'];?>" />
                                        <span class="help-block"></span>
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">SEO网站description</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="pcdescription" class="form-control valid" value="<?php  echo $share['pcdescription'];?>" />
                                        <span class="help-block"></span>
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">搜索框下面关键词</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="pcsearchkey" class="form-control valid" value="<?php  echo $share['pcsearchkey'];?>" />
                                        <span class="help-block">例：文具|家居服|剃须刀|童装|小白鞋|外套|四件套|女包</span>
                                </div>
                             </div>
                             <!--div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">二维码1</label>
                                    <div class="col-sm-9">
                                        <?php  echo tpl_form_field_image('pcewm1',tomedia($share['pcewm1']))?>
                                        <span class="help-block">网站头部-右边二维码</span>
                                    </div>
                             </div>
                             <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">二维码2</label>
                                    <div class="col-sm-9">
                                        <?php  echo tpl_form_field_image('pcewm2',tomedia($share['pcewm2']))?>
                                        <span class="help-block">网站头部-右边二维码</span>
                                    </div>
                             </div-->
                             <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">网站底部信息1</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <textarea style="height:150px;" name="pcbottom1" class="form-control" cols="60"><?php  echo $share['pcbottom1'];?></textarea>                  
                                        <div class="help-block"></div>
                                   </div>                            
                              </div>
                              <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">网站底部信息2</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <textarea style="height:150px;" name="pcbottom2" class="form-control" cols="60"><?php  echo $share['pcbottom2'];?></textarea>                  
                                        <div class="help-block"></div>
                                   </div>                            
                              </div>
                             

                         </div>
                        <div class="form-group col-sm-12">
                              <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
                            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                         </div>
                     </div>
                     <!--结束-->
                     <!--代理立网站设置-->
                     <div class="tab-pane" id="tab_share1">
                         <div class="panel-body">
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">登录帐号</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="pcuser" class="form-control valid" value="<?php  echo $share['pcuser'];?>" />
                                        <span class="help-block">代理登录后台帐号</span>
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">密码</label>
                                <div class="col-sm-9 col-xs-12">
                                        <input type="text" name="pcpasswords" class="form-control valid" value="<?php  echo $share['pcpasswords'];?>" />
                                        <span class="help-block">代理登录后台密码</span>
                                </div>
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

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
