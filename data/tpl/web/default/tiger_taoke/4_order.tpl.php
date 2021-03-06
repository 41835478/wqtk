<?php defined('IN_IA') or exit('Access Denied');?>
		<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_head', TEMPLATE_INCLUDEPATH)) : (include template('public_head', TEMPLATE_INCLUDEPATH));?>
		<!--中间内容开始-->
		<section>
		    <section class="hbox stretch">
		    <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_left', TEMPLATE_INCLUDEPATH)) : (include template('public_left', TEMPLATE_INCLUDEPATH));?>
		    <!--右边框架-->
			  <section id="content">
			    <section class="vbox">
			       <section class="scrollable padder" style="padding-bottom:50px;">
                        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                          <li><a href="<?php  echo $this->createWebUrl('index')?>"><i class="fa fa-home"></i> 首页  </a></li>
                          <li class="active">淘客订单审核管理</li>
                        </ul>


                        <div class="panel panel-info">
                        <div class="panel-heading">搜索</div>
                        <div class="panel-body">
                            <form action="<?php  echo $this->createWebUrl('order',array('op'=>'seach'))?>" method="get" class="form-horizontal">
                                <input type="hidden" name="i" value="<?php  echo $_W['uniacid'];?>">
                                <input type="hidden" name="c" value="site">
                                <input type="hidden" name="a" value="entry">
                                <input type="hidden" name="m" value="tiger_taoke">
                                <input type="hidden" name="do" value="order">
                                <div class="form-group">
                                   <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 200px;">昵称：</label>
                                    <div class="col-sm-2 col-lg-3">
                                        <input type="text" name="name" value="<?php  echo $name;?>" class="form-control" style="display: inline-block;">
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 200px;">等级：</label>
                                    <div class="col-sm-2 col-lg-3">
                                        <select class="form-control" name="dj" id=
                                        "type">
                                            <option <?php  if($dj == 0) { ?>selected<?php  } ?> value="0">全部</option>
                                            <option <?php  if($dj == 1) { ?>selected<?php  } ?> value="1">自购</option>
                                            <option <?php  if($dj == 2) { ?>selected<?php  } ?> value="2">一级</option>
                                            <option <?php  if($dj == 3) { ?>selected<?php  } ?> value="3">二级</option>
                                        </select>  
                                    </div>
                                </div>
                    
                                <div class="form-group">
                                   <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 200px;">订单号：</label>
                                    <div class="col-sm-2 col-lg-3">
                                        <input type="text" name="order" value="<?php  echo $order;?>" class="form-control" style="display: inline-block;">
                                    </div>
                                   <button class="btn btn-default">搜索</button>
                                </div>
                            </form>
                            <div class="form-group" style="color:#ff0000">佣金计算：效果预估佣金*奖励比例/100 （注：订单退款，订单未付款，佣金是不计算的会显示0）<br>更新订单：根据同步订单，重新计算订单佣金</div>
      
                        </div>


<div class="panel panel-default">

	<div class="panel-body">

        <table class="table table-hover">

            <thead class="navbar-inner">

                <tr>
                    <th width="320">订单号</th>
                    <th>昵称</th>                    
                    <th >头像</th>	
                    <th>金额</th>
                    <th>状态</th>
                    <th>提交时间</th>
                    <th>操作</th>
                </tr>

            </thead>

            <tbody id="table_content" >

                <?php  if(is_array($list)) { foreach($list as $l) { ?>
                <tr  >
                    <td style="line-height:25px;"><?php  echo $l['orderid'];?><br>openid：<?php  echo $l['openid'];?></td>
                    <td><?php  echo $l['nickname'];?></td>
                    <td><img src="<?php  echo $l['avatar'];?>" width="50" height="50" alt="" /></td>
                    <td>
                    佣金：<?php  echo $l['yongjin'];?><br>
                    <?php  if($l['type']==1) { ?>
                        一级奖励<br><?php  echo number_format($l['yongjin']*$cfg['yjf']/100, 2, '.', '')?>
                    <?php  } else if($l['type']==2) { ?>
                        二级奖励<br><?php  echo number_format($l['yongjin']*$cfg['ejf']/100, 2, '.', '')?>
                    <?php  } else { ?>
                        自购奖励<br><?php  echo number_format($l['yongjin']*$cfg['zgf']/100, 2, '.', '')?>
                    <?php  } ?>

                    </td>
                    <td>
                     <?php  if($l['sh']==0) { ?>
                     <button type="button" class="btn btn-xs btn-info">未审核</button>
                     <?php  } else if($l['sh']==1) { ?>
                     <button type="button" class="btn btn-xs btn-info">待返</button>
                     <?php  } else if($l['sh']==2) { ?>
                     <button type="button" class="btn btn-xs btn-success">已返</button>  
                     <?php  } else if($l['sh']==3) { ?>
                     <button type="button" class="btn btn-xs btn-success">已审核</button> 
                    <?php  } else if($l['sh']==4) { ?>
                    <button type="button" class="btn btn-xs btn-danger">订单失效</button>
                    <?php  } ?></td>
                    <td><?php  echo date('Y-m-d',$l['createtime'])?><Br><?php  echo date('H:i:s',$l['createtime'])?></td>
                    <td>
                    <!--a href="<?php  echo $this->createWebUrl('shorder', array('id' => $l['id'], 'op' => 'df'))?>" onclick="return confirm('审核标记为待返状态！');return false;" title="审核【设置为待返】" class="btn btn-sm btn-info">审核【设置为待返】</a--> 
                    
                    <Br><a style="margin-top:4px;margin-bottom:4px;" href="<?php  echo $this->createWebUrl('shorder', array('id' => $l['id'], 'op' => 'yf','type'=>$l['type']))?>" onclick="return confirm('订单确认，奖励发到粉丝余额！');return false;" title="奖励发到粉丝余额" class="btn btn-sm btn-primary">审核【奖励余额】</a>
                   
                    <Br><a style="margin-top:4px;margin-bottom:4px;" href="<?php  echo $this->createWebUrl('shorder', array('id' => $l['id'], 'op' => 'delete'))?>" onclick="return confirm('确定要删除订单！');return false;" title="确定要删除订单！" class="btn btn-sm btn-danger">删除订单</a>

                     <Br><a href="<?php  echo $this->createWebUrl('shorder', array('id' => $l['id'], 'op' => 'up','type'=>$l['type']))?>" title="更新订单" class="btn btn-sm btn-warning">更新订单</a>
                    
                    </td>
                </tr>
                <?php  } } ?>

            </tbody>

        </table>

        <?php  echo $pager;?>

    </div>

</div>

                        <!---->
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
<script type="text/javascript">
	function sh(id){

		var jljf1="#jljf"+id;
		var jljf=$(jljf1).val();
        var sjjl1="#sjjl"+id;
		var sjjl=$(sjjl1).val();
		if(jljf==''){
			 alert('请填写奖励积分');
			 return false;
		}

        $.ajax({
             type: "GET",
             url: "<?php  echo $this->createWebUrl('shsd')?>",
             data: {id:id, jljf:jljf,sjjl:sjjl},
             dataType: "json",
             success: function(res){
                    if(res.status==1){
                        //window.location.reload();//刷新当前页面.
                        alert('审核奖励成功');       
                        window.location.reload();//刷新当前页面.
                    }else{
                       alert('审核奖励失败');
                    }
             }
         });
		
 
	}
</script>
</body>
</html>