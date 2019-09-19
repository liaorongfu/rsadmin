<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:76:"C:\inetpub\wwwroot\qipai\public/../application/admin\view\user\gamersls.html";i:1559023007;s:64:"C:\inetpub\wwwroot\qipai\application\admin\view\common\meta.html";i:1552892653;s:66:"C:\inetpub\wwwroot\qipai\application\admin\view\common\header.html";i:1560386155;s:64:"C:\inetpub\wwwroot\qipai\application\admin\view\common\menu.html";i:1559023294;s:66:"C:\inetpub\wwwroot\qipai\application\admin\view\common\footer.html";i:1552892653;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="favicon.ico" >
    <link rel="Shortcut Icon" href="favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/static/admin/lib/html5.js"></script>
    <script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" href="/static/admin/static/h-ui.admin/skin/default/skin.css" type="text/css" id="skin">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <!--<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="/static/menu/menu/jquery-3.2.1.min.js"></script>
    <![endif]-->

<title>用户管理- 对局记录 - RSCMS_V2</title>
<meta name="keywords" content="">
<meta name="description" content="">
<style>
    #pname {
        position: relative;
        top: 10px;
        font-size: 14px;
    }
</style>
</head>

<body>
    <header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="<?php echo url('index/index'); ?>">RSCMS后台管理系统</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="#l">RSCMS_后台管理系统</a>
            <span class="logo navbar-slogan f-l mr-10 hidden-xs">v2.0</span>
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <nav class="nav navbar-nav">
                <ul class="cl">
                </ul>
            </nav>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo \think\Request::instance()->session('admin.username'); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a onclick="logout();">退出</a></li>
                        </ul>
                    </li>

                    <li class="dropDown dropDown_hover"> <a href="#" onclick="cleanCache();" class="dropDown_A" title="清空缓存">清空缓存<i class="badge badge-danger"></i></a> </li>


                    <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
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
<script>
    /*退出*/
    function logout() {
        $.ajax({
            url: "<?php echo url('login/logout'); ?>",
            success: function(res) {
                if (res.code === 1) {
                    //退出成功
                    layer.msg(res.msg, {
                        icon: 1
                    });
                    setTimeout(function() {
                        window.location.href = "<?php echo url('login/index'); ?>"
                    }, 2000)
                } else {
                    //退出失败
                    layer.msg(res.msg, {
                        icon: 2
                    })
                }

            }
        })
    }
    /*
    清空缓存
     */
    function cleanCache() {
        $.ajax({
            url: "<?php echo url('index/cleanCache'); ?>",
            type: 'post',
            success: function(res) {
                if (res.code === 1) {
                    layer.msg(res.msg);
                } else {
                    layer.msg(res.msg);
                }
            }
        })
    }

    function article_add(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }

    function product_add(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }

    function member_add(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }
</script> <?php
    $title = '';
    foreach ($menu_tree as $item) {
        foreach($item['nav'] as $val) {
            if ($val['url'] == '/admin.php/' . request()->pathinfo()) {
                $title = $item['title'];
            }
        }
    }
?>
<aside class="Hui-aside">
    <div class="menu_dropdown bk_2">
        <?php if(is_array($menu_tree) || $menu_tree instanceof \think\Collection || $menu_tree instanceof \think\Paginator): $i = 0; $__LIST__ = $menu_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <dl>
            <dt class="<?php if($vo['title']==$title): ?>selected<?php endif; ?>"><i class="Hui-iconfont">&#xe63c;</i> <?php echo $vo['title']; ?><i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd style="<?php if($vo['title']==$title): ?>display: block<?php endif; ?>">
                <ul>
                    <?php if(is_array($vo['nav']) || $vo['nav'] instanceof \think\Collection || $vo['nav'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['nav'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo $nav['url']; ?>" title="<?php echo $nav['title']; ?>"><?php echo $nav['title']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </dd>
        </dl>
        <?php endforeach; endif; else: echo "" ;endif; ?>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<script>
</script>
    <section class="Hui-article-box">
        <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> <a href="<?php echo url('index/index'); ?>">首页</a> <span class="c-gray en">&gt;</span> 用户管理 <span class="c-gray en">&gt;</span> 对局记录<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);"
                title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a></nav>
        <div class="Hui-article">
            <article class="cl pd-20">
                <form class="form-inline" role="form" method="get" action="<?php echo url('user/search_gamersls'); ?>">
                    <div class="form-group">
                        <span style="color: red;">查询</span> 房间Id:
                        <input style="width: 120px;" type="text" class="input-text" name="roomId" placeholder="请输入房间的Id" value="<?php echo !empty($roomId)?$roomId : '';; ?>">&nbsp;俱乐部Id:
                        <input style="width: 120px;" type="text" class="input-text" name="clubId" placeholder="请俱乐部的Id" value="<?php echo !empty($clubId)?$clubId : '';; ?>">
                    </div>
                    <button type="submit" class="btn btn-default">查询</button>
                </form>
                <div id="pname"><?php echo isset($pname)?$pname: ''; ?></div>
                <div class="mt-20">
                    <div class="table-responsive">
                        <table style="white-space: nowrap;word-break:keep-all;" class="table table-border table-bordered table-hover table-bg table-sort" id="table">
                            <tr class="text-c">
                                <th width="50">房间ID</th>
                                <th width="70">价格</th>
                                <th>收费模式</th>
                                <th>底分</th>
                                <th>游戏</th>
                                <th width="50">房主ID</th>
                                <th>分类</th>
                                <th>容量</th>
                                <th>局数</th>
                                <th>最小带入</th>
                                <th>最大带入</th>
                                <th>玩家数</th>
                                <th width="">创建时间</th>
                                <th>操作</th>
                            </tr>
                            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <tr class="text-c">
                                <td id="id1"><?php echo $vo['id']; ?></td>
                                <td><?php echo $vo['price']; ?></td>
                                <td><?php if($vo['chargingMode'] == 'OWNER'): ?>房主<?php elseif($vo['chargingMode'] == 'AA'): ?>AA<?php else: ?>未知<?php endif; ?></td>
                                <td><?php echo $vo['bottomScore']; ?></td>
                                <td><?php echo $vo['type']; ?></td>
                                <td><?php echo $vo['owner']; ?></td>
                                <td><?php echo $vo['category']; ?></td>
                                <td><?php echo $vo['capacity']; ?></td>
                                <td><?php echo $vo['rounds']; ?></td>
                                <td><?php echo $vo['minChips']; ?></td>
                                <td><?php echo $vo['maxChips']; ?></td>
                                <td><?php echo $vo['users']; ?></td>
                                <td><?php echo $vo['createDate']; ?></td>
                                <td class="td-manage">
                                    <a href="javascript:;" onClick="room_details('对局详情','/admin.php/admin/user/gamersl?id=<?php echo $vo['id']; ?>','4','','400')" class="btn btn-primary-outline radius size-MINI" style="text-decoration:none">对局详情</a>
                                    <a href="javascript:;" onclick="room_del(<?php echo $vo['id']; ?>)" class="btn btn-danger-outline radius size-MINI" style="text-decoration:none">删除</a></td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </div>
                    <?php echo isset($quick)?$quick: ''; ?>
                </div>
                <div style="float: right;"><?php echo $page; ?></div>
            </article>
        </div>
    </section>

    <!--<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>-->
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<link rel="stylesheet" type="text/css" href="/static/admin/css/jquery-ui.css" />
<script type="text/javascript" src="/static/admin/static/laydate/laydate.js"></script>



    <script type="text/javascript">
        /*用户-编辑*/
        function room_details(title, url, id, w, h) {
            layer_show(title, url, w, h);
        }

        /*用户-删除*/
        function room_del(id) {
            layer.confirm('确定要删除吗？', {
                btn: ['确定', '再想想'] //按钮
            }, function() {
                $.ajax({
                    url: "<?php echo url('user/del_gamersl'); ?>",
                    type: 'post',
                    data: {
                        'id': id,
                    },
                    success: function(res) {
                        if (res.code === 0) {
                            layer.msg(res.msg);
                        } else {
                            layer.msg(res.msg);
                            setTimeout(function() {
                                parent.location.reload();
                            }, 1000);
                        }
                    }
                });
            })
        }

        laydate.render({
            elem: '#test3' //指定元素
                ,
            calendar: true,
            theme: '#333',
            showBottom: true //false隐藏控件底部按钮
        });
        laydate.render({
            elem: '#test4' //指定元素
                ,
            calendar: true,
            theme: '#333',
            showBottom: true //false隐藏控件底部按钮
        });
    </script>
    <!--/请在上方写此页面业务相关的脚本-->
</body>

</html>