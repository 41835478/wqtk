<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
    <li class="active"><a href="<?php  echo $this->createWebUrl('order')?>">订单管理</a></li>
    <!--li ><a style="" onclick="return confirm('此操作可能耗时较久，确认吗？'); return false;" href="<?php  echo $this->createWebUrl('Downloade')?>" title="导出"><i class="fa fa-download"> 导出全部数据</i></a></li-->
</ul>
<style>
th{
	text-align: center !important;
}

td{
	text-align: center !important;
	white-space: normal !important;
	word-break: break-all !important;
}
</style>
<div class="panel panel-info">
                            <div class="panel-heading">导出</div>
                            <div class="panel-body">
                                    <div class="form-group">
                                     <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 200px;"></label>
                                       <a href="<?php  echo $this->createWebUrl('txdownloade')?>"  onclick="return confirm('确定要导出吗？止操作会把没有审核的订单，全部自动审核，导出支付宝帐号和金额'); return false;" class="btn btn-default">导出支付宝</a>
                                    </div>
                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">搜索</div>
                            <div class="panel-body">
                                <form action="<?php  echo $this->createWebUrl('dltxsh',array('op'=>'seach'))?>" method="post" class="form-horizontal">
                                    <div class="form-group">
                                       <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 200px;">昵称/openid：</label>
                                        <div class="col-sm-2 col-lg-3">
                                            <input type="text" name="key" value="<?php  echo $key;?>" class="form-control" style="display: inline-block;">
                                        </div>
                                       <button class="btn btn-default">搜索</button>
                                    </div>
                                </form>
                            </div>
                        </div>
<div class="panel panel-default">
      <table class="table">
          <th width="100">粉丝头像</th>
          <th width="350" >昵称</th>
          <th>佣金</th>
          <th>状态</th>
          <th>审核时间</th>
          <th>申请时间</th>
          <th  style="text-align:right;">操作</th>

       <?php  if(is_array($list)) { foreach($list as $item) { ?>
        <tr>
          <td><img src="<?php  echo tomedia($item['avatar'])?>" width="50" height="50" alt=""/></td>
          <td><?php  echo $item['nickname'];?><br>OPENID:<?php  echo $item['openid'];?><Br>支付宝：<span style="color:#ff0000"><?php  echo $item['zfbuid'];?></span></td>
          <td><?php  echo $item['credit2'];?>元</td>
          <td><?php  if($item['sh']==1 ) { ?><span class="label label-warning">已发放</span><?php  } else { ?><span class="label label-success full">审核中</span><?php  } ?></td>
          <td><?php  if($item['addtime']) { ?><?php  echo date('Y-m-d H:i:s',$item['addtime'])?><?php  } ?></td>
          <td><?php  echo date('Y-m-d H:i:s',$item['createtime'])?></td>
          <td style="text-align:right;">
            <?php  if($item['sh']==1 ) { ?><a href="###" title="已审核" class="btn btn-sm btn-primary">已审核</a><?php  } else { ?>
            <a href="<?php  echo $this->createWebUrl('dltxsh', array('id' => $item['id'], 'op' => 'zfbpost'))?>" title="支付宝审核" class="btn btn-sm btn-danger">支付宝审核</a><br>
            <a style="margin-top:6px;margin-bottom:6px;" href="<?php  echo $this->createWebUrl('dltxsh', array('id' => $item['id'], 'op' => 'post','txtype'=>1))?>" title="红包" class="btn btn-sm btn-danger">红包审核</a><br>
            <a href="<?php  echo $this->createWebUrl('dltxsh', array('id' => $item['id'], 'op' => 'post','txtype'=>2))?>" title="零钱" class="btn btn-sm btn-danger">企业零钱审核</a>
            <?php  } ?>
            <!--a href="<?php  echo $this->createWebUrl('txsh', array('id' => $item['id'], 'op' => 'delete'))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" title="删除" class="btn btn-sm btn-default"><i class="fa fa-remove"></i>删除</a-->
          </td>
        </tr>
        <?php  } } ?>
       </table>
 <?php  echo $pager;?>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>