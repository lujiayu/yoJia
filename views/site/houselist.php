<?php

use yii\widgets\LinkPager;
?>
<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>重庆优家买房卖房无中介更划算</title>
    <link rel="shortcut icon" href="title-logo.ico">
    <link rel="stylesheet" href="/basic/web/css/build-select-page1.css">
    <link rel="stylesheet" href="/basic/web/css/common.css">
</head>
<body>

<div class="back-top">
    <a href="#menu">︽</a>
</div>
<div id="menu">
    <dl class="options">
        <dt>区域</dt>
        <?php $countyList=['全部'=>'.*','渝中'=>'渝中','南岸'=>'南岸','江北'=>'江北','沙坪坝'=>'沙坪坝',
            '渝北'=>'渝北','九龙坡'=>'九龙坡','巴南'=>'巴南','大渡口'=>'大渡口','北碚'=>'北碚'];
        
        foreach($countyList as $key=>$value){
            if($county == $value){
                echo "<dd><a href=\"/basic/web/index.php?r=site%2Fhouselist&county=$value&areas=$areas\" style=\"color: #ff9000;\">$key</a></dd>";
            }else{
                echo "<dd><a href=\"/basic/web/index.php?r=site%2Fhouselist&county=$value&areas=$areas\">$key</a></dd>";
            }
        }
        ?>
    </dl>
    
    <dl class="options">
        <dt>面积</dt>
        <?php $areaList=['全部'=>'0-1000','0-50m²'=>'0-50','50-100m²'=>'50-100',
            '100-150m²'=>'100-150','150-200m²'=>'150-200','200m²以上'=>'200-1000'];
            foreach($areaList as $key=>$value){
                if($areas == $value){
                    echo "<dd><a href=\"/basic/web/index.php?r=site%2Fhouselist&county=$county&areas=$value\" style=\"color: #ff9000;\">$key</a></dd>";
                }else{
                    echo "<dd><a href=\"/basic/web/index.php?r=site%2Fhouselist&county=$county&areas=$value\">$key</a></dd>";
                }
            }
        ?>
    </dl>

</div>
<div class="content">
    <ul class="build-list">
    
    <?php foreach($model as $key=>$value){
        echo "<li><a href=\"/basic/web/index.php?r=site/housedetail&id=$value->id\" target=\"_blank\">";
        echo   "<img src=\"/basic/web/index.php?r=site/echoimg&id=$value->id&pic=pic1\">";
       
        echo  ' <div class="build-list-info">';
        echo      " <h2>$value->title</h2>";
        echo       '<div class="build-part-info">';
        echo       "<span>面积：<i>".$value->houseArea."㎡</i></span>";
        echo       "<span>户型：<i>$value->type</i></span>";
        echo       "<span>楼层：<i>$value->floor</i></span>";
        echo       "<span>装修：<i>$value->fitment</i></span>";
        echo       "<span>小区：<i>$value->community</i></span>";
        echo       "<span>区县：<i>$value->county</i></span>";
        echo       "<span>地址：<i>$value->address</i></span></div>";
        echo        '<div class="build-list-price">';
        echo        "<i class=\"big-size-price\">".$value->price."万</i>";
        echo        '</div></div></a></li>';
    }
    ?>
    </ul>
    <?= LinkPager::widget(['pagination' => $pages]); ?>
</div>
</body>
</html>