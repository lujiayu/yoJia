<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
<?php
    $this->title='优家网';
?>
    <link rel="shortcut icon" href="/basic/web/assets/image/index/title-logo.ico">
    <link rel="stylesheet" href="/basic/web/css/index.css">
    <link rel="stylesheet" href="/basic/web/css/common.css">
</head>
<body>
<div class="back-top">
    <a href="#header">︽</a>
</div>
<div id="header">

    <div class="slogan">
        <h3>山不在高，有仙则名；水不在深，有龙则灵</h3>
        <h2>山水重庆，优然之家</h2>
    </div>
</div>
<div id="menu">
    <dl class="options">
        <dt>区域</dt>
        <?php $countyList=['全部'=>'.*','渝中'=>'渝中','南岸'=>'南岸','江北'=>'江北','沙坪坝'=>'沙坪坝',
            '渝北'=>'渝北','九龙坡'=>'九龙坡','巴南'=>'巴南','大渡口'=>'大渡口','北碚'=>'北碚'];
        
        foreach($countyList as $key=>$value){
            
            echo "<dd><a href=\"/basic/web/index.php?r=site%2Fhouselist&county=$value\">$key</a></dd>";
         
        }
        ?>
    </dl>

</div>
<div id="warp">
    <div class="hotTitle">
        <h1>热门小区推荐</h1>
        <p>高性价 高格调 超精致</p>
    </div>
    <div class="hotBuild">
        <dl>
            <dt>
                <img src="/basic/web/assets/image/index/hot1.png">
                <div class="text">
            <h1>龙湖江与城</h1>
            <h3>中国第三新区核心—北部新区高新园</h3>
            <p>1800亩中央自然天城，与使领馆、世界500强为邻,便捷交通体系，15分钟畅达全城。它坐拥一江、两山、三大主题公园，
                是重庆最大的滨江低密度居住新城。</p>
                </div>
            </dt>
            <dd>
                <a href="build-info/build-info-page1.html" target="_blank">
                    <img src="/basic/web/assets/image/index/hot1_1.png" style="width: 250px;height: 185px">
                    <ul class="hotBasicInfo-left">
                        <li><i>单价</i>9875元/㎡</li>
                        <li><i>户型</i>2室1厅1卫</li>
                        <li><i>楼层</i>5/33</li>
                    </ul>
                    <ul class="hotBasicInfo-right">
                        <li><i>售价</i>79.0万</li>
                        <li><i>面积</i> 80.00㎡</li>
                        <li><i>位置</i>渝北-大竹林</li>
                    </ul>
                </a>
            </dd>
            <dd>
                <a href="javascript:" target="_blank">
                    <img src="/basic/web/assets/image/index/hot1_1.png" style="width: 250px;height: 185px">
                    <ul class="hotBasicInfo-left">
                        <li><i>单价</i>9875元/㎡</li>
                        <li><i>户型</i>2室1厅1卫</li>
                        <li><i>楼层</i>5/33</li>
                    </ul>
                    <ul class="hotBasicInfo-right">
                        <li><i>售价</i>79.0万</li>
                        <li><i>面积</i> 80.00㎡</li>
                        <li><i>位置</i>渝北-大竹林</li>
                    </ul>
                </a>
            </dd>
            <dd>
                <a href="javascript:" target="_blank">
                    <img src="/basic/web/assets/image/index/hot1_1.png" style="width: 250px;height: 185px">
                    <ul class="hotBasicInfo-left">
                        <li><i>单价</i>9875元/㎡</li>
                        <li><i>户型</i>2室1厅1卫</li>
                        <li><i>楼层</i>5/33</li>
                    </ul>
                    <ul class="hotBasicInfo-right">
                        <li><i>售价</i>79.0万</li>
                        <li><i>面积</i> 80.00㎡</li>
                        <li><i>位置</i>渝北-大竹林</li>
                    </ul>
                </a>
            </dd>
        </dl>
        <dl>
            <dt>
                <img src="/basic/web/assets/image/index/hot1.png">
            <div class="text">
                <h1>龙湖江与城</h1>
                <h3>中国第三新区核心—北部新区高新园</h3>
                <p>1800亩中央自然天城，与使领馆、世界500强为邻,便捷交通体系，15分钟畅达全城。它坐拥一江、两山、三大主题公园，
                    是重庆最大的滨江低密度居住新城。</p>
            </div>
            </dt>
            <dd>
                <a href="javascript:" target="_blank">
                    <img src="/basic/web/assets/image/index/hot1_1.png" style="width: 250px;height: 185px">
                    <ul class="hotBasicInfo-left">
                        <li><i>单价</i>9875元/㎡</li>
                        <li><i>户型</i>2室1厅1卫</li>
                        <li><i>楼层</i>5/33</li>
                    </ul>
                    <ul class="hotBasicInfo-right">
                        <li><i>售价</i>79.0万</li>
                        <li><i>面积</i> 80.00㎡</li>
                        <li><i>位置</i>渝北-大竹林</li>
                    </ul>
                </a>
            </dd>
            <dd>
                <a href="javascript:" target="_blank">
                    <img src="/basic/web/assets/image/index/hot1_1.png" style="width: 250px;height: 185px">
                    <ul class="hotBasicInfo-left">
                        <li><i>单价</i>9875元/㎡</li>
                        <li><i>户型</i>2室1厅1卫</li>
                        <li><i>楼层</i>5/33</li>
                    </ul>
                    <ul class="hotBasicInfo-right">
                        <li><i>售价</i>79.0万</li>
                        <li><i>面积</i> 80.00㎡</li>
                        <li><i>位置</i>渝北-大竹林</li>
                    </ul>
                </a>
            </dd>
            <dd>
                <a href="javascript:" target="_blank">
                    <img src="/basic/web/assets/image/index/hot1_1.png" style="width: 250px;height: 185px">
                    <ul class="hotBasicInfo-left">
                        <li><i>单价</i>9875元/㎡</li>
                        <li><i>户型</i>2室1厅1卫</li>
                        <li><i>楼层</i>5/33</li>
                    </ul>
                    <ul class="hotBasicInfo-right">
                        <li><i>售价</i>79.0万</li>
                        <li><i>面积</i> 80.00㎡</li>
                        <li><i>位置</i>渝北-大竹林</li>
                    </ul>
                </a>
            </dd>
        </dl>
        <dl>
            <dt>
                <img src="/basic/web/assets/image/index/hot1.png">
            <div class="text">
                <h1>龙湖江与城</h1>
                <h3>中国第三新区核心—北部新区高新园</h3>
                <p>1800亩中央自然天城，与使领馆、世界500强为邻,便捷交通体系，15分钟畅达全城。它坐拥一江、两山、三大主题公园，
                    是重庆最大的滨江低密度居住新城。</p>
            </div>
            </dt>
            <dd>
                <a href="javascript:" target="_blank">
                    <img src="/basic/web/assets/image/index/hot1_1.png" style="width: 250px;height: 185px">
                    <ul class="hotBasicInfo-left">
                        <li><i>单价</i>9875元/㎡</li>
                        <li><i>户型</i>2室1厅1卫</li>
                        <li><i>楼层</i>5/33</li>
                    </ul>
                    <ul class="hotBasicInfo-right">
                        <li><i>售价</i>79.0万</li>
                        <li><i>面积</i> 80.00㎡</li>
                        <li><i>位置</i>渝北-大竹林</li>
                    </ul>
                </a>
            </dd>
            <dd>
                <a href="javascript:" target="_blank">
                    <img src="/basic/web/assets/image/index/hot1_1.png" style="width: 250px;height: 185px">
                    <ul class="hotBasicInfo-left">
                        <li><i>单价</i>9875元/㎡</li>
                        <li><i>户型</i>2室1厅1卫</li>
                        <li><i>楼层</i>5/33</li>
                    </ul>
                    <ul class="hotBasicInfo-right">
                        <li><i>售价</i>79.0万</li>
                        <li><i>面积</i> 80.00㎡</li>
                        <li><i>位置</i>渝北-大竹林</li>
                    </ul>
                </a>
            </dd>
            <dd>
                <a href="javascript:" target="_blank">
                    <img src="/basic/web/assets/image/index/hot1_1.png" style="width: 250px;height: 185px">
                    <ul class="hotBasicInfo-left">
                        <li><i>单价</i>9875元/㎡</li>
                        <li><i>户型</i>2室1厅1卫</li>
                        <li><i>楼层</i>5/33</li>
                    </ul>
                    <ul class="hotBasicInfo-right">
                        <li><i>售价</i>79.0万</li>
                        <li><i>面积</i> 80.00㎡</li>
                        <li><i>位置</i>渝北-大竹林</li>
                    </ul>
                </a>
            </dd>
        </dl>
        <a href="/basic/web/index.php?r=site%2Fhouselist" target="_blank" class="info-more">查看更多房屋信息</a>
    </div>

</div>
</body>
</html>