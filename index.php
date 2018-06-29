<?php 
header("Content-type: text/html; charset=utf-8");

echo "
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <title>看看你在古代长什么样？-AI人工智能带你走进古代</title>
  <meta name='viewport' content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1'>

  <link rel='stylesheet' href='https://cdn.bootcss.com/Swiper/4.3.0/css/swiper.min.css'>

  <style>
  *{
  margin: 0;
  padding: 0;
}
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide{
      background-color: red;
      text-align: center;
      font-size: 18px;
      background:url('./upload/bg.jpg') no-repeat;
      background-position: center;
      background-size: cover;
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    .input,.input_bg{
        position: absolute;
        bottom: 0;
        left: 0;
    }
    .input_bg{
        width: 100%;
        height: 200px;
        background:url('./upload/Upload.png') no-repeat center;
        background-color: white;
    }
    .submit{
      display: none;
        border: unset;
        position: absolute;
        bottom: 80px;
        left: 40%;
        height: 64px;
        width: 64px;
        background:url('./upload/submit.png') no-repeat center;
    }
  </style>
</head>
<body>
  <!-- Swiper -->
  <div class='swiper-container'>
    <div class='swiper-wrapper'>

    <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/10.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div> 
        <input type='hidden' name='model' value='10'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>

      
    <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/3.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div>
        <input type='hidden' name='model' value='3'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>

      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/4.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div>
        <input type='hidden' name='model' value='4'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>

      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/5.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div>
        <input type='hidden' name='model' value='5'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>
      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/6.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div>
        <input type='hidden' name='model' value='6'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>
      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/7.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/>
        <div class='input_bg'></div> 
        <input type='hidden' name='model' value='7'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>
      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/8.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div> 
        <input type='hidden' name='model' value='8'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>
      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/9.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div> 
        <input type='hidden' name='model' value='9'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>
      
      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/11.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/>
        <div class='input_bg'></div>  
        <input type='hidden' name='model' value='11'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>

      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/27.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div>
        <input type='hidden' name='model' value='27'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>


      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/28.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div>
        <input type='hidden' name='model' value='28'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>

      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/32.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div>
        <input type='hidden' name='model' value='32'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>

      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/34.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div>
        <input type='hidden' name='model' value='34'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>


      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/41.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div>
        <input type='hidden' name='model' value='42'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>


      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/47.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div>
        <input type='hidden' name='model' value='47'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>

      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/48.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div>
        <input type='hidden' name='model' value='48'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>


      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/49.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div>
        <input type='hidden' name='model' value='49'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>

      <div class='swiper-slide'>
        <img src='https://yyb.gtimg.com/aiplat/ai/upload/doc/facemerge/50.png'>
        <form action='doUpload.php' method='post'
        enctype='multipart/form-data'>
        <input type='file' name='file' id='file' class='input' accept='image/jpeg,image/jpg,image/png' onchange='Javascript:validate_img(this);'/> 
        <div class='input_bg'></div>
        <input type='hidden' name='model' value='50'>
        <br />
        <input type='submit' name='submit' value='' class='submit'/>
        </form>
      </div>


        
    </div>
    <!-- Add Arrows -->
    <div class='swiper-button-next'></div>
    <div class='swiper-button-prev'></div>

    <h3 style='position:absolute; top: 5px; z-index: 999; width: 100%; text-align: center; top: 10%;'>选择你喜欢的类型</h3>
  </div>

  <script src='https://cdn.bootcss.com/Swiper/4.3.0/js/swiper.min.js'></script>
<script src='https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js'></script>

  <script>

  $('.submit,.input').hide();
  $('.input_bg').click(function(){
    $('.swiper-slide-active .input').click();
    });
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

//限制上传文件的类型和大小
function validate_img(ele){
    // 返回 KB，保留小数点后两位
    //alert((ele.files[0].size/(1024*1024)).toFixed(2));
    var file = ele.value;
          
    if(!/.(jpg|jpeg|png|JPG)$/.test(file)){
              
      alert('图片类型必须是jpeg,jpg,png中的一种');
           return false;
           
     }else{
              
         //返回Byte(B),保留小数点后两位
        if(((ele.files[0].size).toFixed(2))>=(0.5*1024*1024)){
                 
          alert('请上传小于500KB的图片');
                 return false;
         }
     }
          // alert('图片通过');
      $('.input,.input_bg').hide();
      $('.submit').show();
      $('.submit').click(function(){
        $('.submit').hide();
        });
}
// var isWoman = confirm('你是小姐姐吗？');
// if (isWoman){
//     localStorage.isWoman='true';

//   }else{
//     localStorage.isWoman='false';
//   }
//   console.log(localStorage.isWoman)
</script>
  
</body>
</html>
";




 ?>