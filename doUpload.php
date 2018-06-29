<?php 

header('Content-type:text/html;charset=utf-8');

echo "<meta name='viewport' content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1'>";
if ($_FILES["file"]["error"] > 0){
  	echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }else{
    // var_dump($_FILES["file"]);
    $model = $_POST['model'];
    include 'HttpApi.php';
    $rs = json_decode($response,true);

    if ($rs['ret'] != 0) {
      echo "<h3 align='center'>在您上传的图片中没有发现面部特征！<h3><p>请上传您的正面图片！<a href='./index.php'>点击重新上传</a></p>";
    }else{

    $photo = $rs['data']['image'];
    // var_dump($response);
  
  $woManDesc = array('在古代，你秀雅绝俗，自有一股轻灵之气，肌肤娇嫩、神态悠闲、美目流盼、桃腮带笑、含辞未吐、气若幽兰，说不尽的温柔可人。', '你的肌肤胜雪，双目犹似一泓清水，顾盼之际，自有一番清雅高华的气质，让人为之所摄、自惭形秽、不敢亵渎。但那冷傲灵动中颇有勾魂摄魄之态，又让人不能不魂牵蒙绕。 ','古代的你吐语如珠，声音又是柔和又是清脆，动听之极，向你细望了几眼，见你神态天真、娇憨顽皮、双颊晕红，年纪虽幼，却又容色清丽、气度高雅，当真比画里走下来的还要好看，竟会有如此明珠美玉般俊极无俦的人品。 ','你脸朝花束、身形苗条，长发披于背心，用一根粉红色的丝带轻轻挽住，一袭白衣，鲜花一映更是粲然生光，只觉你身后似有烟霞轻拢，当真非尘世中人，待你转过身来，才见你方当韶龄，不过十八岁年纪，肌肤胜雪，娇美无匹，容色绝丽，不可逼视。','你秀美的娥眉淡淡的蹙着，在你细致的脸蛋上扫出浅浅的忧虑，让你原本美得出奇的容貌更添了一份我见犹怜的心动。 ','你大概是不小心坠落凡间的天使 眉宇之间透着的，是与凡尘女子不同的灵气你就像空中的羽毛，你很想触碰，却始终不忍心打扰你的安静 '
  );

  $manDesc = array('因为我从来没有见过比你更加优雅入画的男子。一种光亮至美的气息从你的面庞感染到了我。你没有笑， 但你的清澈的眼睛却在忠诚的微笑着。','冰冷孤傲的眼睛仿佛没有焦距，深黯的眼底充满了平静，乌黑的头发，散在耳边，耳钻发出幽蓝的光芒。俊美的不得不使人暗暗惊叹，你的身边围绕着一股冰凉的气息。','这样的外貌和神情，第一眼，就让人觉得你太锋利，有一种涉世已久的尖锐和锋芒。','那身穿水墨色衣、头戴一片毡巾的，生得风流韵致，自然是个才子。 ','你的背脊挺直，好像在这白杨树一样挺秀的身材中，蕴含着巨大坚韧的力量。 ','你的袍服雪白，一尘不染。连日光都不好意思留下斑驳的树影。'
  );



$woMan_rand_num = rand(0,count($woManDesc)-1);
$man_rand_num = rand(0,count($woManDesc)-1);
    echo "<!DOCTYPE html>
    <html>
    <head>
      <title>图片制作完成-腾讯AI人工智能带你走进古代</title>
      <style>
      *{
      margin:0;
      padding: 0;
    }
      </style>

      
    </head>
    <body>
      <img src='data:image/png;base64,$photo' style='max-width: 100%;'>
      
      <p style='padding: 10px; font-size: 1.3rem; color:#985'><strong style='color:#000'>AI分析：</strong>
      <script>
        var isWoman = localStorage.isWoman;
        if(isWoman){
          document.write('$woManDesc[$woMan_rand_num]');
        }else{
          document.write('$manDesc[$man_rand_num]');
        }
      </script>
      </p>
    </body>
    </html>
    ";
    }
  }

 ?>