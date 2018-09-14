<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:85:"/data/home/byu3109350001/htdocs/app/public/../application/admin/view/index/index.html";i:1536671119;s:86:"/data/home/byu3109350001/htdocs/app/public/../application/admin/view/public/_meta.html";i:1535958875;s:88:"/data/home/byu3109350001/htdocs/app/public/../application/admin/view/public/_header.html";i:1535960576;s:86:"/data/home/byu3109350001/htdocs/app/public/../application/admin/view/public/_menu.html";i:1535959688;s:88:"/data/home/byu3109350001/htdocs/app/public/../application/admin/view/public/_footer.html";i:1535954704;}*/ ?>
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
	<!--[if lt IE 9]>
	<script type="text/javascript" src="__STATIC__/hadmin/lib/html5shiv.js"></script>
	<script type="text/javascript" src="__STATIC__/hadmin/lib/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="http://byu3109350001.my3w.com/app/public/__STATIC__/hadmin/static/h-ui/css/H-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="http://byu3109350001.my3w.com/app/public/http://byu3109350001.my3w.com/app/public/http://byu3109350001.my3w.com/app/public/http://byu3109350001.my3w.com/app/public__STATIC__/hadmin/static/h-ui.admin/css/H-ui.admin.css" />
	<link rel="stylesheet" type="text/css" href="http://byu3109350001.my3w.com/app/public/http://byu3109350001.my3w.com/app/public/http://byu3109350001.my3w.com/app/public__STATIC__/hadmin/lib/Hui-iconfont/1.0.8/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="http://byu3109350001.my3w.com/app/public/http://byu3109350001.my3w.com/app/public__STATIC__/hadmin/static/h-ui.admin/skin/default/skin.css" id="skin" />
	<link rel="stylesheet" type="text/css" href="http://byu3109350001.my3w.com/app/public__STATIC__/hadmin/static/h-ui.admin/css/style.css" />
	<!--[if IE 6]>
	<script type="text/javascript" src="__STATIC__/hadmin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
	<script>DD_belatedPNG.fix('*');</script>
	<![endif]-->
	<title>eshuo</title>
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> 
			<!-- <nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="<?php echo url('index/add'); ?>" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
						</ul>
					</li>
				</ul>
			</nav> -->
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li class="dropDown dropDown_hover"> <a href="<?php echo url('index/index'); ?>" class="dropDown_A" style="color:black;">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="<?php echo url('login/logout'); ?>">退出</a></li>
						</ul>
					</li>
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger"></span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right “> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('news/add'); ?>" data-title="图片添加" href="javascript:void(0)">图片添加</a></li>
					<li><a data-href="<?php echo url('news/index'); ?>" data-title="内容管理" href="javascript:void(0)">内容管理</a></li>
				</ul>
			</dd>
		</dl>


		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('index/add'); ?>" data-title="添加会员" href="javascript:;">添加会员</a></li>
				</ul>
			</dd>
		</dl>

		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i>版本控制<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo url('version/add'); ?>" data-title="添加版本" href="javascript:;">添加版本</a></li>
					<li><a data-href="<?php echo url('version/index'); ?>" data-title="版本管理" href="javascript:;">版本管理</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
    <div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
        <div class="Hui-tabNav-wp">
            <ul id="min_title_list" class="acrossTab cl">
                <li class="active">
                    <span title="内容管理" data-href="welcome.html">内容管理</span>
                    <em></em></li>
            </ul>
        </div>
        <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
    </div>
    <div id="iframe_box" class="Hui-article">
        <div class="show_iframe">
            <div style="display:none" class="loading"></div>
            <iframe scrolling="yes" frameborder="0" src="<?php echo url('news/index'); ?>"></iframe>
        </div>
    </div>
</section>

<div class="contextMenu" id="Huiadminmenu">
    <ul>
        <li id="closethis">关闭当前 </li>
        <li id="closeall">关闭全部 </li>
    </ul>
</div>
<script type="text/javascript" src="http://byu3109350001.my3w.com/app/public/__STATIC__/hadmin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://byu3109350001.my3w.com/app/public/__STATIC__/hadmin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="http://byu3109350001.my3w.com/app/public/__STATIC__/hadmin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="http://byu3109350001.my3w.com/app/public/__STATIC__/hadmin/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="http://byu3109350001.my3w.com/app/public/__STATIC__/admin/js/common.js"></script>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="http://byu3109350001.my3w.com/app/public/__STATIC__/hadmin/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">
    $(function(){
        /*$("#min_title_list li").contextMenu('Huiadminmenu', {
            bindings: {
                'closethis': function(t) {
                    console.log(t);
                    if(t.find("i")){
                        t.find("i").trigger("click");
                    }
                },
                'closeall': function(t) {
                    alert('Trigger was '+t.id+'\nAction was Email');
                },
            }
        });*/
    });
    /*个人信息*/
    function myselfinfo(){
        layer.open({
            type: 1,
            area: ['300px','200px'],
            fix: false, //不固定
            maxmin: true,
            shade:0.4,
            title: '查看信息',
            content: '<div>管理员信息</div>'
        });
    }

    /*资讯-添加*/
    function article_add(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*图片-添加*/
    function picture_add(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*产品-添加*/
    function product_add(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*用户-添加*/
    function member_add(title,url,w,h){
        layer_show(title,url,w,h);
    }


</script>

<!--此乃百度统计代码，请自行删除-->
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<!--/此乃百度统计代码，请自行删除-->
</body>
</html>