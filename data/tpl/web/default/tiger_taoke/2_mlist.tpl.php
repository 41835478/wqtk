<?php defined('IN_IA') or exit('Access Denied');?>
		<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_head', TEMPLATE_INCLUDEPATH)) : (include template('public_head', TEMPLATE_INCLUDEPATH));?>
		<!--中间内容开始-->
		<section>
		    <section class="hbox stretch">
		    <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_left', TEMPLATE_INCLUDEPATH)) : (include template('public_left', TEMPLATE_INCLUDEPATH));?>
		    <!--右边框架-->
			  <section id="content">
			    <section class="vbox">
			       <section class="scrollable padder">
                        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                          <li><a href="<?php  echo $this->createWebUrl('index')?>"><i class="fa fa-home"></i> 首页  </a></li>
                          <li class="active">海报管理</li>
                        </ul>
			            <!---->
                        <?php  if($list['0']['id']=='') { ?>
<a href="<?php  echo $this->createWebUrl('mcreate')?>" class="btn btn-success  active" role="button" style="margin-bottom:6px;">制作关注海报</a>
<?php  } ?>

<div class="panel panel-default">

	<div class="panel-body" style="text-align: center;">

        <table class="table table-hover">

            <thead class="navbar-inner">

                <tr>

                    <th>海报名称</th>		
                    <th>关键字</th>
                    <th>关注积分</th>
                    <th>推广积分</th>
                    <th>上级积分</th>
                    <!--th>推广人数</th-->	
                    <th>创建时间</th>
                    <th>操作</th>

                </tr>

            </thead>

            <tbody id="table_content">

                <?php  if(is_array($list)) { foreach($list as $l) { ?>

                <tr>

                    <td><?php  echo $l['title'];?></td>
                    <td><?php  echo $l['kword'];?></td>
                    <td><?php  echo $l['score'];?></td>
                    <td><?php  echo $l['cscore'];?></td>
                    <td><?php  echo $l['pscore'];?></td>
                    <!--td><a class="btn btn-success" target="_blank" href="<?php  echo $this->createWebUrl('share',array('pid'=>$l['id']))?>">推广人数：<?php  echo $l['tigerscan'];?>人</a></td-->
                    <td><?php  echo date('Y-m-d H:i:s',$l['createtime'])?></td>
                    <td>
                    	<a href='<?php  if($l['type']) { ?><?php  echo $this->createWebUrl("mcreate",array("id"=>$l["id"]))?><?php  } else { ?><?php  echo $this->createWebUrl("create",array("id"=>$l["id"]))?><?php  } ?>' class="btn btn-default btn-sm">编辑</a>
						
                    	<a href='<?php  echo $this->createWebUrl("mposter",array("op"=>"delete","id"=>$l["id"]))?>' onclick="return confirm('删除后将不可恢复，确定删除吗？')" class="btn btn-danger btn-sm">删除</a>
                        
						
                    </td>

                </tr>

                <?php  } } ?>

            </tbody>

        </table>

        <?php  echo $pager;?>

    </div>

</div>
<a href='<?php  echo $this->createWebUrl("qingkong")?>' onclick="return confirm('清空后,已经生成的海报将会失效，需要重新生成,会员上下级关系不变')" class="btn btn-danger btn-sm">清空海报缓存</a>
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

</body>
</html>