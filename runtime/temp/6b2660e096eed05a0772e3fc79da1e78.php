<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"/data/home/byu3109350001/htdocs/app/public/../application/admin/view/version/index.html";i:1535964922;s:86:"/data/home/byu3109350001/htdocs/app/public/../application/admin/view/public/_meta.html";i:1535958875;s:88:"/data/home/byu3109350001/htdocs/app/public/../application/admin/view/public/_footer.html";i:1535954704;}*/ ?>
<!--header-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="http://byu3109350001.my3w.com/app/public/favicon.ico" >
<link rel="Shortcut Icon" href="http://byu3109350001.my3w.com/app/public/favicon.ico" />
<!--[if lt IE 9]
<script type="text/javascript" src="__STATIC__/hadmin/lib/html5shiv.js"></script>
<script type="text/javascript" src="__STATIC__/hadmin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="http://byu3109350001.my3w.com/app/public__STATIC__/hadmin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="http://byu3109350001.my3w.com/app/public__STATIC__/hadmin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="http://byu3109350001.my3w.com/app/public__STATIC__/hadmin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="http://byu3109350001.my3w.com/app/public__STATIC__/hadmin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="http://byu3109350001.my3w.com/app/public__STATIC__/hadmin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="__STATIC__/hadmin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
    <script >
        swf = 'http://byu3109350001.my3w.com/app/public__STATIC__/admin/uploadify/uploadify.swf';
        image_upload_url = "<?php echo url('image/upload'); ?>";
    </script>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 版本控制 <span class="c-gray en">&gt;</span> 版本管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <div class="text-c">
        <form action="<?php echo url('version/index'); ?>" method="get">

    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-hover table-sort table-responsive" >
            <thead>
            <tr class="text-c">
                <th>ID</th>
                <th>手机类型</th>
                <th>版本</th>
                <th>下载地址</th>
                <th>升级提示</th>
                <th>是否更新</th>
                <th>发布状态</th>
                <th>更新时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <?php if(is_array($version) || $version instanceof \think\Collection || $version instanceof \think\Paginator): $i = 0; $__LIST__ = $version;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ver): $mod = ($i % 2 );++$i;?>
            <tr class="text-c">
                <td><?php echo $ver['id']; ?></td>
                <td><?php echo $ver['app_type']; ?></td>
                <td><?php echo $ver['version']; ?></td>
                <td><?php echo $ver['apk_url']; ?></td>
                <td><?php echo $ver['upgrade_point']; ?></td>
                <td><?php echo isForce($ver['is_force']); ?></td>
                <td><?php echo status($ver['id'],$ver['status']); ?></td>
                <td><?php echo $ver['update_time']; ?></td>
                <td class="f-14 td-manage"> <a style="text-decoration:none" class="ml-5"  href="" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="app_del(this)" href="javascript:;" title="删除" del_url="<?php echo url('version/delete',['id' => $ver['id']]); ?>"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </table>
        <div id="laypage"></div>
    </div>
</div>
<!--header-->
<script type="text/javascript" src="http://byu3109350001.my3w.com/app/public/__STATIC__/hadmin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://byu3109350001.my3w.com/app/public/__STATIC__/hadmin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="http://byu3109350001.my3w.com/app/public/__STATIC__/hadmin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="http://byu3109350001.my3w.com/app/public/__STATIC__/hadmin/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="http://byu3109350001.my3w.com/app/public/__STATIC__/admin/js/common.js"></script>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/hadmin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/hadmin/lib/laypage/1.2/laypage.js"></script>

<style>
    .imooc-app .pagination li{display:inline; padding-left:10px;}
    .pagination .active{color:red}
    .pagination .disabled{color:#888888}
</style>
</body>
</html>