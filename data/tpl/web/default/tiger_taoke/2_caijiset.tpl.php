<?php defined('IN_IA') or exit('Access Denied');?>
		<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_head', TEMPLATE_INCLUDEPATH)) : (include template('public_head', TEMPLATE_INCLUDEPATH));?>
		<!--中间内容开始-->
		<section>
		    <section class="hbox stretch">
		    <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_left', TEMPLATE_INCLUDEPATH)) : (include template('public_left', TEMPLATE_INCLUDEPATH));?>
		    <!--右边框架-->
			  <section id="content">
			    <section class="vbox">
			        <section class="scrollable padder" style="padding-bottom:70px;">
                        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                          <li><a href="<?php  echo $this->createWebUrl('index')?>"><i class="fa fa-home"></i> 首页  </a></li>
                          <li class="active">采集API</li>
                        </ul>
			            <!--编辑内容-->
                       
                        <!--搜索开始-->
                        <div class="panel panel-info">
                            <div class="panel-heading">大淘客采集设置</div>
                            <div class="panel-body">
                                <form action="<?php  echo $this->createWebUrl('caijiset',array('op'=>'dtk'))?>" method="post" class="form-horizontal">
                                       <?php  if(is_array($fzlist)) { foreach($fzlist as $v) { ?>
                                       <input type="hidden" name="id[]" value="<?php  echo $v['id'];?>" />
                                        <div class="form-group">
                                            <label class="col-xs-12 col-sm-4 col-md-3 control-label">本站分类 （<?php  echo $v['title'];?>）-----》大淘客分类：</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <div class="input-group">
                                                <select class="form-control" name="dtkcid[]" id="dtkcid">
                                                    <option <?php  if($v['dtkcid'] == 0) { ?>selected<?php  } ?> value="0">选择大淘客分类</option>
                                                    <option <?php  if($v['dtkcid'] == 1) { ?>selected<?php  } ?> value="1">女装</option>
                                                    <option <?php  if($v['dtkcid'] == 9) { ?>selected<?php  } ?> value="9">男装</option>
                                                    <option <?php  if($v['dtkcid'] == 10) { ?>selected<?php  } ?> value="10">内衣</option>
                                                    <option <?php  if($v['dtkcid'] == 2) { ?>selected<?php  } ?> value="2">母婴</option>
                                                    <option <?php  if($v['dtkcid'] == 3) { ?>selected<?php  } ?> value="3">化妆品</option>
                                                    <option <?php  if($v['dtkcid'] == 4) { ?>selected<?php  } ?> value="4">居家</option>
                                                    <option <?php  if($v['dtkcid'] == 5) { ?>selected<?php  } ?> value="5">鞋包配饰</option>
                                                    <option <?php  if($v['dtkcid'] == 6) { ?>selected<?php  } ?> value="6">美食</option>
                                                    <option <?php  if($v['dtkcid'] == 7) { ?>selected<?php  } ?> value="7">文体车品</option>
                                                    <option <?php  if($v['dtkcid'] == 8) { ?>selected<?php  } ?> value="8">数码家电</option>                                                   
                                                </select>                
                                                </div>  
                                            </div>
                                       </div>
                                       <?php  } } ?>
                                    <div class="form-group">                                        
                                        <div class="form-group col-sm-12">
                                            <input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
                                            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                                        </div>
                                    </div>
                                </form>
                               </div>
                          </div>
                        <!--搜索结束-->


                        <!--编辑内容结束-->
			        </section>
			        <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_bottom', TEMPLATE_INCLUDEPATH)) : (include template('public_bottom', TEMPLATE_INCLUDEPATH));?>
			    </section>
			    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
			  </section>
			  <aside class="bg-light lter b-l aside-md hide" id="notes">
			       <div class="wrapper">不知道放什么</div>
			  </aside>
			<!--右边框架结束-->
			</section>
		  </section>
		<!--中间内容结束-->
	</section>


</body>
</html>