<link href="/public/css/m.css" rel="stylesheet" media="screen">
<link href="/public/css/topic.css" rel="stylesheet" media="screen">
<link href="/public/css/activity.css" rel="stylesheet" media="screen">
<link href="/public/css/vip.css" rel="stylesheet" media="screen">
<?php $url = ($poster_link['which'] === '1') ? $poster_link['weixin'] : $poster_link['link']; ?>
<a href="<?php echo $url; ?>" target="_blank">
<!--    <div style="width:100%;height:120px;background-image:url();background-repeat:no-repeat;background-size: auto">-->
<!--    </div>-->
    <img src="<?php echo $poster['img'];?>" style="display: block;width: 100%;height: 120px">
</a>