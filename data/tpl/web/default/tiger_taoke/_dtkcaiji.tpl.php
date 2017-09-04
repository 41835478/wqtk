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
                            <div class="panel-heading">大淘客分页采集</div>
                            <div class="panel-body">
                                    <div class="form-group">                                        
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <a href="<?php  echo $this->createWebUrl('dtkcaiji',array('op'=>'dtkcj','page'=>1))?>" class="btn btn-default">同步采集大淘客数据(第一页)</a>
                                            <a href="<?php  echo $this->createWebUrl('dtkcaiji',array('op'=>'dtkcj','page'=>2))?>" class="btn btn-default">同步采集大淘客数据(第二页)</a>
                                            <a href="<?php  echo $this->createWebUrl('dtkcaiji',array('op'=>'dtkcj','page'=>3))?>" class="btn btn-default">同步采集大淘客数据(第三页)</a>
                                            <a href="<?php  echo $this->createWebUrl('dtkcaiji',array('op'=>'dtkcj','page'=>4))?>" class="btn btn-default">同步采集大淘客数据(第四页)</a>
                                            <a href="<?php  echo $this->createWebUrl('dtkcaiji',array('op'=>'dtkcj','page'=>5))?>" class="btn btn-default">同步采集大淘客数据(第五页)</a>
                                            <a href="<?php  echo $this->createWebUrl('dtkcaiji',array('op'=>'dtkcj','page'=>6))?>" class="btn btn-default">同步采集大淘客数据(第六页)</a>
                                            <a href="<?php  echo $this->createWebUrl('dtkcaiji',array('op'=>'dtkcj','page'=>7))?>" class="btn btn-default">同步采集大淘客数据(第七页)</a>
                                        </div>
                                        <span class="help-block" style="color:#ff0000;line-height:30px;padding-left:15px">如果是每天更新，第一页为最新的200条数据(后面是每页200条)</span>
                                    </div>
                               </div>
                          </div>
                        <!--搜索结束-->

                        <!--搜索开始-->
                        <div class="panel panel-info">
                            <div class="panel-heading">大淘客全站商品</div>
                            <div class="panel-body">
                                    <div class="form-group">                                        
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <a href="<?php  echo $this->createWebUrl('dtkcaiji',array('op'=>'qcljcp'))?>" class="btn btn-primary">一键采集【全站领券商品】</a>
                                            <a href="<?php  echo $this->createWebUrl('dtkcaiji',array('op'=>'sspl'))?>" class="btn btn-default">一键采集【实时跑量榜】</a>
                                            <a href="<?php  echo $this->createWebUrl('dtkcaiji',array('op'=>'top100'))?>" class="btn btn-danger">一键采集【TOP100人气榜】</a>
                                        </div>
                                        <span class="help-block" style="color:#ff0000;line-height:30px;padding-left:15px"></span>
                                    </div>
                               </div>
                          </div>
                        <!--搜索结束-->


                        <!---
                        <div class="panel panel-default">
                             <table class="table">
                                  <th style="width:60px;">主图</th>
                                  <th>商品名称</th>                                  
                                  <th>券后价</th>
                                  <th>优惠券金额</th>
                                  <th>到期时间</th>
                                  <!--th  style="text-align:right;">操作</th--
                                  <?php  if($dtklist) { ?>
                                  
                                    loop $dtklist $item
                                    <tr>
                                      <td><img src="<?php  echo tomedia($item['Pic'])?>" width="50" height="" alt="" /></td>
                                      <td><?php  echo $item['D_title'];?></td>                                  
                                      <td><?php  echo $item['Price'];?>元</td>
                                      <td><?php  echo $item['Quan_condition'];?></td>
                                      <td>
                                      优惠券结束：<?php  echo $item['Quan_time'];?>
                                      </td>
                                      <!--td style="text-align:right;">
                                        <a href="<?php  echo $this->createWebUrl('tbgoods', array('id' => $item['id'], 'op' => 'post'))?>" title="编辑" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>编辑</a>
                                        <a href="<?php  echo $this->createWebUrl('tbgoods', array('id' => $item['id'], 'op' => 'delete'))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" title="删除" class="btn btn-sm btn-default"><i class="fa fa-remove"></i>删除</a>
                                      </td--
                                    </tr>                                    
                                    /loop
                                    else
                                    <tr>
                                      <td colspan='7' style="text-align:center">暂无产品</td>
                                    </tr>
                                    <?php  } ?>
                               </table>
                        </div>
                       ---->


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