<?php

require('../lib/init.php');

if(!acc()){
    $dangqianlj = $_SERVER['DOCUMENT_ROOT'] . '/';
    exit();
}

$qita = 'active';

$sql = "select * from chat_admin where id = 1";
$apijk = $mysql->getRow($sql);
$apijk = $apijk['api'];


$sql = "select sfkqipzcyc from chat_admin where id = 1";
$sfkqaihh = $mysql->getOne($sql);

if($sfkqaihh == '开启'){
    $sfkqaihhkaiqi = 'checked';
}else{
    $sfkqaihhguanbi = 'checked';
}

$sql = "select kflj from chat_admin where id = 1";
$kflj = $mysql->getOne($sql);



$sql = "select sfqqqdl from chat_admin where id = 1";
$sfqqqdl = $mysql->getOne($sql);

if($sfqqqdl == '开启'){
    $sfqqqdlkaiqi = 'checked';
}else{
    $sfqqqdlguanbi = 'checked';
}



$sql = "select sfkqkf from chat_admin where id = 1";
$sfkqkf = $mysql->getOne($sql);

if($sfkqkf == '开启'){
    $sfkqkfkaiqi = 'checked';
}else{
    $sfkqkfguanbi = 'checked';
}












require('./view/header.php');


?>


<style>
    .text-nowrap {
    white-space: unset!important;
}
</style>







 <div class="container">
     

     <div class="row row-cards row-deck">
     

        
        

          
                    
                    <div class="col-md-12">
     
                  <div class="page-header">
              <h1 class="page-title">
                更多配置(因为首页放不下了 所以放到这里)
              </h1>
            </div>
         
                <form class="card" action="" method="post" id="myForm">
                    
                    
                    
                  <div class="card-body">
                    <h3 class="card-title">网站配置信息修改</h3>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">API接口(可以设置自己的反代地址 这样国内服务器就可以用了)</label>
                          <input type="text" class="form-control apijk" name="apijk" value="<?php echo $apijk;?>">
                        </div>
                      </div>
          
          
    
          
              
                 
                                                
                 <div class="col-sm-6 col-md-6">
      <div class="form-group">
                            <div class="form-label">是否开启前台客服按钮</div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $sfkqkfkaiqi; ?> class="form-check-input" type="radio" name="sfkqkf" value="开启" >
                                <span class="form-check-label">开启</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $sfkqkfguanbi; ?> class="form-check-input" type="radio" name="sfkqkf" value="关闭">
                                <span class="form-check-label">关闭</span>
                              </label>
                             
                            </div>  </div>
                          </div>               
                          
                 
                 
                 
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">微信客服图片链接</label>
                          <input type="text" class="form-control kflj" name="kflj" value="<?php echo $kflj;?>">
                        </div>
                      </div>
                 
                 
                 
                 
    
                          
                          
 
 
 <?php
 
 
 
$sql = "select sfkqzanz from chat_admin where id = 1";
$sfkqzanz = $mysql->getOne($sql);

if($sfkqzanz == '开启'){
    $sfkqzanzkaiqi = 'checked';
}else{
    $sfkqzanzguanbi = 'checked';
}
$sql = "select zansangmalj from chat_admin where id = 1";
$zansangmalj = $mysql->getOne($sql);



 ?>
                          
                          
              
                        
                
                 
              
                               <div class="col-sm-6 col-md-6">
      <div class="form-group">
                            <div class="form-label">前台是否开启前台Ai回答后的赞助本站按钮</div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $sfkqzanzkaiqi; ?> class="form-check-input" type="radio" name="sfkqzanz" value="开启" >
                                <span class="form-check-label">开启</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $sfkqzanzguanbi; ?> class="form-check-input" type="radio" name="sfkqzanz" value="关闭">
                                <span class="form-check-label">关闭</span>
                              </label>
                             
                            </div>  </div>
                          </div>   
                          
                          
        <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">收款码图片外链</label>
                          <input type="text" class="form-control zansangmalj" name="zansangmalj" value="<?php echo $zansangmalj;?>">
                        </div>
                      </div>
                      
                      
                      
                      
                         
                          
                         <div class="col-sm-6 col-md-6">
      <div class="form-group">
                            <div class="form-label">是否开启QQ/微信跳转浏览器打开</div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $sfqqqdlkaiqi; ?> class="form-check-input" type="radio" name="sfqqqdl" value="开启" >
                                <span class="form-check-label">开启</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $sfqqqdlguanbi; ?> class="form-check-input" type="radio" name="sfqqqdl" value="关闭">
                                <span class="form-check-label">关闭</span>
                              </label>
                             
                            </div>  </div>
                          </div>
                          
                                
                 
                 
                 
     
                 
                 
                              
                 
                 
                               <div class="col-sm-6 col-md-6">
      <div class="form-group">
                            <div class="form-label">是否开启每个IP只能注册一次(默认开启)</div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $sfkqaihhkaiqi; ?> class="form-check-input" type="radio" name="sfkqipzcyc" value="开启" >
                                <span class="form-check-label">开启</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input  <?php echo $sfkqaihhguanbi; ?> class="form-check-input" type="radio" name="sfkqipzcyc" value="关闭">
                                <span class="form-check-label">关闭</span>
                              </label>
                             
                            </div>  </div>
                          </div>
                          
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                          
                          
                          
                          
                          
                          


                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary gxpz">更新配置</button>
                  </div>
                </form>
         
         
         
    
             
<script>



// 获取表单元素和提交按钮
var form = document.getElementById("myForm");
var submitBtn = form.querySelector("button[type='submit']");

// 监听表单提交事件
form.addEventListener("submit", function(event) {
    
      $('.gxpz').html('正在修改...');
    
  event.preventDefault(); // 阻止表单默认提交行为

  // 获取表单数据
  var formData = new FormData(form);

  // 发送ajax请求
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "../tool/xg.php?wzpz=1");
//   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
      
      if(xhr.responseText == 1){
          
         $('.gxpz').html('更新配置');
              
              alert('修改成功');
              
              
              location.reload();
          
   
      }else{
           alert('修改失败 请联系管理员');
      }
      
    }
  };
  xhr.send(formData,false);
});
</script>





              </div>
                    
                    
                    
                  
                        
                    

              </div>
                    
            
            
        
                      
                    </div>
          
         
     
         
</div>
                  </div>
                </div>
      





<?php
require('./footer.php');
?>