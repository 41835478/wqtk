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
                          <li class="active">晒单管理</li>
                        </ul>


<div class="panel panel-default">

	<div class="panel-body">

        <table class="table table-hover">

            <thead class="navbar-inner">

                <tr>

                    <th>昵称</th>		
                    <th >订单号</th>
                    <th>图片</th>
                    <th>价格</th>
                    <th>晒单时间</th>
                    <th>晒单奖励</th>
                    <th>上级奖励</th>
                    <th>操作</th>

                </tr>

            </thead>

            <tbody id="table_content">

                <?php  if(is_array($list)) { foreach($list as $l) { ?>

                <tr>

                    <td><?php  echo $l['nickname'];?></td>
                    <td style="overflow:visible;"><?php  echo $l['order'];?></td>
                    <td>
                    <?php  $img=unserialize($l['image'])?>
                    <?php  if(is_array($img)) { foreach($img as $v) { ?>
                        <img src="<?php  echo tomedia($v)?>" style="width:50px;height:50px;" />
                    <?php  } } ?>
                    </td>
                    <td><?php  echo $l['price'];?></td>
                    <td><?php  echo date('Y-m-d H:i:s',$l['createtime'])?></td>
                    <td><input type="text" name="jljf" id="jljf<?php  echo $l['id'];?>" value="<?php  echo $l['jljf'];?>" style="width:50px;" <?php  if($l['jljf']>0) { ?>disabled<?php  } ?>>积分</td>
                    <td><input type="text" name="sjjl" id="sjjl<?php  echo $l['id'];?>" value="<?php  echo $l['sjjl'];?>" style="width:50px;" <?php  if($l['sjjl']>0) { ?>disabled<?php  } ?>>积分</td>
                    <td>
                      <?php  if($l['jljf']>0) { ?>
                    	<a href="javascrip:" class="btn btn-default btn-sm">已审核</a>
                      <?php  } else { ?>
                        <a href="javascrip:" onclick="sh(<?php  echo $l['id'];?>)" class="btn btn-primary btn-sm">审核</a>
                      <?php  } ?>
                      <a href="<?php  echo $this->createWebUrl('sdgl', array('id' => $l['id'], 'op' => 'delete'))?>" onclick="return confirm('确定要删除订单！');return false;" title="确定要删除订单！" class="btn btn-sm btn-danger">删除</a>
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