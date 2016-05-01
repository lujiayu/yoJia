<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <?php $this->title=$house->title;?>
    <link rel="stylesheet" href="/basic/web/css/build-info.css">
    <link rel="stylesheet" href="/basic/web/css/common.css">
</head>
<body>

<div class="back-top">
    <a href="#header">︽</a>
</div>
<div class="build-show">
    <h2><?php echo $house->title?></h2>
    <div class="pic-play">
        <a class="pre" href="javascript:"><</a>
        <a class="next" href="javascript:">></a>
        <img class="picture" src="">
        <span class="pic-num"></span>
    </div>
    <div class="detail-info">
        <ul>
            <li>面<span class="distance"></span>积：<span><?php echo $house->houseArea;?>㎡</span></li>
            <li>总<span class="distance"></span>价：<span class="total-price"><?php echo $house->price?> 万</span></li>
            <li>户<span class="distance"></span>型：<span><?php echo $house->type?></span></li>
            <li>楼<span class="distance"></span>层：<span><?php echo $house->floor?></span></li>
            <li>装<span class="distance"></span>修：<span><?php echo $house->fitment?></span></li>
            <li>小<span class="distance"></span>区：<span><?php echo $house->community?></span></li>
            <li>区<span class="distance"></span>县：<span><?php echo $house->county?></span></li>
            <li>地<span class="distance"></span>址：<span><?php echo $house->address?></span></li>
            <li><span class="relation-people">联系人：</span><?php echo $house->owner?></li>
            <li class="relation-way"><span class="total-price">联系方式：</span>
                <i class="phone-num"><?php echo $house->phone?></i></li>
        </ul>
    </div>
    <div class="info-show">
        <ul class="info-show-nav">
            <li class="active"><a href="#room-info">房屋描述</a></li>
            <li><a href="#room-pic">房屋照片</a></li>
            <li><a href="#nearby-info">周边信息</a></li>
        </ul>
        <div id="room-info">
            <h3>房屋描述:</h3>
            <p>1、户型标准两房，两室两厅一卫，主卧12㎡，次卧9㎡，户型方正，采光通透，空间利用率高，大阳台，可多功能使用；
                2、精装修业主全居家装修，带风管机，toto卫浴，西门子开关，索尼电视，方太厨具，变频空调，保养新，买过来拎包入住；
                3、业主诚心出售,非诚勿扰。</p>
        </div>
        <div id="room-pic">
            <h3>房屋图片:</h3>
            <img src="/basic/web/index.php?r=site/echoimg&id=<?php echo $house->id?>&pic=pic1">
            <img src="/basic/web/index.php?r=site/echoimg&id=<?php echo $house->id?>&pic=pic2">
            <img src="/basic/web/index.php?r=site/echoimg&id=<?php echo $house->id?>&pic=pic3">
            <img src="/basic/web/index.php?r=site/echoimg&id=<?php echo $house->id?>&pic=pic4">
            <img src="/basic/web/index.php?r=site/echoimg&id=<?php echo $house->id?>&pic=pic5">
        </div>
        <div id="nearby-info">
            <h3>周边信息:</h3>
            <p>龙湖江与城，1800亩自然天城，地处重庆第三新区核心——北部新区高新园，15分钟可畅达全城
                1、交通便利，公交路线目前已有643、832、852、886等近10路公交，还有便捷的轻轨交通----6号线可直达江与城
                2、江与城是集别墅、洋房、高层为一体的大体量楼盘，建筑面积达258607㎡，绿化率高达40%，规划户数为6000户，车位1549个，人口密度小，绿化率高，环境优美，适合居家；

                3、周边配套齐全中餐厅、西餐厅、家政中心镶嵌其中，自带大型绿化带并且有嘉陵江、歌乐山、照母山、体育公园、滨江公园、湿地公园环绕周边，银行、医院、超市、学校等应有尽有，为这里的住户带来了极大的便利；

                4、这里有中国最著名的龙湖物业为您保驾护航24小时保安巡更系统、红外线智能*、楼宇对讲系统以及人车分流的设计为您的安全提供充足的保障；

                5、江与城分为八期一期纯小镇二期翡翠岭、海茨堡三期原山四期景上时光、千山万树五期煕溪地六期薇澜岸七期商业为主八期天钜
                约3万㎡浪漫商业街、约150亩带橄榄球场的体育公园、约1500㎡的艺术中心，10万方江悦汇生活商业，完美呈现9年成熟大城的生活配套，江与城必将给业主带来一种全新的生活体验</p>
        </div>
    </div>

</div>

<script>/**
 * Created by Administrator on 16-4-28.
 */
var oPre=document.getElementsByClassName('pre')[0];
var oNext=document.getElementsByClassName('next')[0];
var oPic=document.getElementsByClassName('picture')[0];
var oNum=document.getElementsByClassName('pic-num')[0];

var arrUrl=["/basic/web/index.php?r=site/echoimg&id=<?php echo $house->id?>&pic=pic1","/basic/web/index.php?r=site/echoimg&id=<?php echo $house->id?>&pic=pic2","/basic/web/index.php?r=site/echoimg&id=<?php echo $house->id?>&pic=pic3",
           "/basic/web/index.php?r=site/echoimg&id=<?php echo $house->id?>&pic=pic4","/basic/web/index.php?r=site/echoimg&id=<?php echo $house->id?>&pic=pic5"];
var num=0;
function fnPicPlay(){
    oNum.innerHTML=num+1 +'/'+ arrUrl.length;
    oPic.src=arrUrl[num];}
fnPicPlay();
oPre.onclick=function(){
    num --;
    if(num == -1){num=arrUrl.length-1;}
    fnPicPlay();
};
oNext.onclick=function(){
    num++;
    if(num==arrUrl.length){num=0;}
    fnPicPlay();
};
/*长图展示导航*/
var oRoomInfo=document.getElementById('room-info');
var oRoomPic=document.getElementById('room-pic');
var oNearbyInfo=document.getElementById('nearby-info');
var oUl=document.getElementsByClassName('info-show-nav')[0];
var aLi=oUl.getElementsByTagName('li');
var num=0;
function change(){
    for(var i=0;i<aLi.length;i++){
        aLi[i].className='';
    }
    aLi[num].className='active';

}
change();
for(var i=0;i<aLi.length;i++){
    aLi[i].index=i;
    aLi[i].onclick=function(){
        num=this.index;
        change();
    }
}</script>
</body>
</html>