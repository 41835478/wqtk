<?php defined('IN_IA') or exit('Access Denied');?>
		<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_head', TEMPLATE_INCLUDEPATH)) : (include template('public_head', TEMPLATE_INCLUDEPATH));?>
		<!--中间内容开始-->
		<section>
		    <section class="hbox stretch">
		    <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_left', TEMPLATE_INCLUDEPATH)) : (include template('public_left', TEMPLATE_INCLUDEPATH));?>
		    <!--右边框架-->
			  <section id="content">
			    <section class="vbox">
			        <header class="header bg-white b-b b-light">
			            <p><i class="fa fa-home"></i> 首页</p>
			        </header>
			        <section class="scrollable wrapper w-f">
			            <!--编辑内容-->
                        
                             <!---->
                               <section class="panel panel-default">
                                  <div class="row m-l-none m-r-none bg-light lter">
                                    <div class="col-sm-6 col-md-3 padder-v b-r b-light"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-info"></i> <i class="fa fa-male fa-stack-1x text-white"></i> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong><?php  echo $fans;?></strong></span> <small class="text-muted text-uc">粉丝数</small> </a> </div>

                                    <div class="col-sm-6 col-md-3 padder-v b-r b-light lt"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x icon-muted"></i> <i class="fa fa-clock-o fa-stack-1x text-white"></i> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong><?php  echo $qgfans;?></strong></span> <small class="text-muted text-uc">取关数量</small> </a> </div>


                                    <div class="col-sm-6 col-md-3 padder-v b-r b-light lt"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-warning"></i> <i class="fa fa-bug fa-stack-1x text-white"></i> <span class="easypiechart pos-abt easyPieChart" data-percent="100" data-line-width="4" data-track-color="#fff" data-scale-color="false" data-size="50" data-line-cap="butt" data-animate="2000" data-target="#bugs" data-update="3000" style="width: 50px; height: 50px; line-height: 50px;"><canvas width="50" height="50"></canvas></span> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong id="bugs"><?php  echo $goods;?></strong></span> <small class="text-muted text-uc">商品数</small> </a> </div>

                                    <div class="col-sm-6 col-md-3 padder-v b-r b-light"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-danger"></i> <i class="fa fa-fire-extinguisher fa-stack-1x text-white"></i> <span class="easypiechart pos-abt easyPieChart" data-percent="100" data-line-width="4" data-track-color="#f5f5f5" data-scale-color="false" data-size="50" data-line-cap="butt" data-animate="3000" data-target="#firers" data-update="5000" style="width: 50px; height: 50px; line-height: 50px;"><canvas width="50" height="50"></canvas></span> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong id="firers"><?php  echo $sdsum;?></strong></span> <small class="text-muted text-uc">晒单总数</small> </a> </div>

                                    
                                  </div>
                                </section>
                               <!---->

                        <div class="panel panel-info">
                            <div class="panel-heading">快捷工具</div>
                            <div class="panel-body">
                            <a  onclick="return confirm('确认进行此操作吗？数据量大请耐心等待！'); return false;" class="btn btn-danger" href="<?php  echo $this->createWebUrl('tbgoodsgx', array('op' => 'xjdq'))?>"/><i class="glyphicon glyphicon-remove"></i> 一键【下架】优惠券【到期】商品</a>
                            
                            <a  onclick="return confirm('确认进行此操作吗？数据量大请耐心等待！'); return false;" class="btn btn-primary" href="<?php  echo $this->createWebUrl('tbgoodsgx', array('op' => 'qkdq'))?>"/><i class="glyphicon glyphicon-remove"></i> 一键【清空】优惠券【到期】商品</a>
                            
                            <a  onclick="return confirm('确认进行此操作吗？数据量大请耐心等待！'); return false;" class="btn btn-danger" href="<?php  echo $this->createWebUrl('tbgoodsgx', array('op' => 'xjw'))?>"/><i class="glyphicon glyphicon-remove"></i> 一键【下架】【无】优惠券商品</a>
                            
                            <a  onclick="return confirm('确认进行此操作吗？数据量大请耐心等待！'); return false;" class="btn btn-primary" href="<?php  echo $this->createWebUrl('tbgoodsgx', array('op' => 'qkw'))?>"/><i class="glyphicon glyphicon-remove"></i> 一键【清空】【无】优惠券商品</a>

                            <a  onclick="return confirm('确认进行此操作吗？数据量大请耐心等待！'); return false;" class="btn btn-danger" href="<?php  echo $this->createWebUrl('tbgoodsgx', array('op' => 'qk'))?>"/><i class="glyphicon glyphicon-remove"></i> 【删除】【所有】商品</a><Br>
                            <a style="margin-top:10px;" onclick="return confirm('确认进行此操作吗？数据量大请耐心等待！'); return false;" class="btn btn-danger" href="<?php  echo $this->createWebUrl('tbgoodsgx', array('op' => 'qktkl'))?>"/><i class="glyphicon glyphicon-remove"></i> 【清除】【所有】商品【淘口令】</a>

                            <a style="margin-top:10px;" onclick="return confirm('确认进行此操作吗？数据量大请耐心等待！'); return false;" class="btn btn-primary" href="<?php  echo $this->createWebUrl('tbgoodsgx', array('op' => 'qfksp'))?>"/><i class="glyphicon glyphicon-remove"></i> 【删除】【所有】群发库商品</a>
                            </div>
                        </div>
                        


                        <div class="panel panel-info">
                            <div class="panel-heading">入口地址</div>
                            <div class="panel-body">
                               <div class="form-group" >
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">首页入口</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('index'))?>">
                                        </div>
                                </div>	
                                <div class="form-group" >
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">活动入口</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('huodong'))?>">
                                        </div>
                                </div>
                                <div class="form-group" >
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">9.9入口</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('catlist',array('tj'=>1)))?>">
                                        </div>
                                </div>	
                                <div class="form-group" >
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">19.9入口</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('catlist',array('tj'=>2)))?>">
                                        </div>
                                </div>	
                                <div class="form-group" >
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">秒杀入口</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('catlist',array('tj'=>3)))?>">
                                        </div>
                                </div>	
                                
                                <div class="form-group" >
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">晒单广场</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('sdindex'))?>">
                                        </div>
                                </div>	
                                <div class="form-group">
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">我要晒单</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('sdmy'))?>">
                                        </div>
                                </div>	
                                <div class="form-group">
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">积分商城</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('goods'))?>">
                                        </div>
                                </div>	
                                <div class="form-group">
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">兑吧商城</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('Duibagoods'))?>">
                                        </div>
                                </div>	
                                <div class="form-group">
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">积分签到</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/', wurl('mc/card/sign_display',array('i'=>$_W['uniacid'])))?>">
                                        </div>
                                </div>	
                                <div class="form-group">
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">我的积分</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/', murl('mc/bond/credits',array('credittype'=>'credit1','type'=>'record','period'=>1)))?>">
                                        </div>
                                </div>	
                                <div class="form-group">
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">我的收藏</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('shoucanglist'))?>">
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">会员中心</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('member'))?>">
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">提交订单</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('addorder'))?>">
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">帮助中心</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('newhelp'))?>">
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">专题</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" type="text" value=" <?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('zhuanti'))?>">
                                        </div>
                                </div>
                       
                            
                            </div>
                        </div>

                        <style>
                        .form-group{height:35px;}
                        .control-label{line-height:35px;}
                        </style>





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