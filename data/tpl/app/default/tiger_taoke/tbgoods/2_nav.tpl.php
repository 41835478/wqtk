<?php defined('IN_IA') or exit('Access Denied');?>
<!--浮动导航-->
<div class="tiger_bj" id="tiger_bj" style="display:none" onclick="colok()"></div>
<div class="tiger_nav" id="pf_seach"   <?php  if($cfg['mmtype']==1) { ?>style="display:none;height:57px;"<?php  } else { ?>style="display:none"<?php  } ?>>
   <div class="seach_nav" >
          <div class="seach_1" onclick="javascript:history.go(-1);return false;"></div>
          <div class="seach_2">
          <form id="search-form" action="<?php  echo $this->createMobileUrl('catlist')?>" method="get">
                <input type="hidden" name="i" value="<?php  echo $_W['uniacid'];?>">
                <input type="hidden" name="c" value="entry">
                <input type="hidden" name="m" value="tiger_taoke">
                <input type="hidden" name="do" value="catlist">
                <input type="hidden" name="dluid" value="<?php  echo $dluid;?>">
              <input type="text" id="key" name="key"  value="<?php  echo $key;?>" class="tige_sear" />
              <button id="tiger_search-submit" type="submit" onclick="searchan()"><img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style5/images/search.png" /></button>
          </form>
          </div>          
          <div class="seach_3" onclick="javascript:window.location.href='<?php  echo $this->createMobileUrl('index',array('dluid'=>$dluid))?>';"></div>
   </div>
   <?php  if($cfg['mmtype']<>1) { ?>
   <div class="nav_tab">
      <div class="nav_1 tcon nav_ty" onclick="tiger_nva(1)"><span id="s1">全部分类</span><i class="arrow-icon" id="a1"></i></div>
      <div class="nav_2 tcon boleft nav_ty" onclick="tiger_nva(2)"><span id="s2">商品排序</span><i class="arrow-icon" id="a2"></i></div>
      <div class="nav_3 tcon boleft nav_ty" onclick="tiger_nva(3)"><span id="s3">筛选</span><i class="arrow-icon" id="a3"></i></div>
      <div class="nav_4 tcon boleft nav_ty" onclick="gzrwm()"><img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/images/tiger_ewm.png" style="width:17px;height:17px"></div>      
   </div>  
   <?php  } ?>
</div>

<!--浮动导航结束-->
<!--TAB-->
<div class="tiger_nav_list1" id="cd1" style="display:none">
  <ul>
  <?php  if(is_array($fzlist)) { foreach($fzlist as $f) { ?>
    <li><a href="<?php  echo $this->createMobileUrl('catlist',array('typeid'=>$f['id'],'sort'=>id,'key'=>$key,'tj'=>$tj,'strprice'=>$strprice,'endprice'=>$endprice,'dluid'=>$dluid))?>"><?php  echo $f['title'];?></a></li>
  <?php  } } ?>
  </ul>
</div>
<div class="tiger_nav_list2" id="cd2" style="display:none">
  <ul>
    <li><a href="<?php  echo $this->createMobileUrl('catlist',array('sort'=>id,'typeid'=>$typeid,'key'=>$key,'tj'=>$tj,'strprice'=>$strprice,'endprice'=>$endprice,'dluid'=>$dluid))?>">默认排序</a></li>
    <li><a href="<?php  echo $this->createMobileUrl('catlist',array('sort'=>hot,'typeid'=>$typeid,'key'=>$key,'tj'=>$tj,'strprice'=>$strprice,'endprice'=>$endprice,'dluid'=>$dluid))?>">销量最高</a></li>
    <li><a href="<?php  echo $this->createMobileUrl('catlist',array('sort'=>price,'typeid'=>$typeid,'key'=>$key,'tj'=>$tj,'strprice'=>$strprice,'endprice'=>$endprice,'dluid'=>$dluid))?>">价格最低</a></li>
  </ul>
</div>
<div class="tiger_nav_list3" id="cd3" style="display:none">
      <input type="hidden" name="op" value="seach">
      <div class="jl_0">价格区间(元)</div>
      <input name="strprice" id="strprice" type="number" class="jl_1" value="" placeholder="0">
      <div class="jl_2"></div>
      <input name="endprice" id="endprice" type="number" class="jl_1" value="" placeholder="0">
      <div class="clear"></div>
      <div class="jl_3">
         <div class="jl_an" id="seachprice">确认搜索</div>
      </div>
</div>
<script>
        
        function search() {
            var key = $('#key').val();
            var strprice = $('#strprice').val();
            var endprice = $('#endprice').val();
            //if (key != '') {
                parent.location.href = "<?php  echo $this->createMobileUrl('catlist',array('dluid'=>$dluid))?>"+"&key=" + $('#key').val()+"&strprice=" + $('#strprice').val()+"&endprice="+$('#endprice').val();
            //}
//            if(strprice != '' || endprice != ''){
//               parent.location.href = "<?php  echo $this->createMobileUrl('catlist')?>"+"&op=seach&strprice=" + $('#strprice').val()+"&endprice="+$('#endprice').val()+"&key=" +key;
//            }
        }
        $(function () {
            $("#tiger_search-submit").on("click", function () {
                search();
            });
            $("#seachprice").on("click", function () {
                search();
            });
            $('#key').keydown(function (e) {
                if (e.keyCode == 13) {
                    search()
                }
            });
        });

        function searchan(){
            search();
        }

    </script>
<link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/css/nav.css" rel="stylesheet" />
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/js/nav.js"></script>
<!--TAB结束-->