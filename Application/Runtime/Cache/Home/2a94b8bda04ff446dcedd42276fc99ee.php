<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dashboard - Bootstrap Admin</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />

	  <!--框架开始的css文件-->
<link href="/tp/Public/css/bootstrap.min.css" rel="stylesheet" />
<link href="/tp/Public/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="/tp/Public/css/font-awesome.css" rel="stylesheet" />
<link href="/tp/Public/css/adminia.css" rel="stylesheet" />
<link href="/tp/Public/css/adminia-responsive.css" rel="stylesheet" />
<link href="/tp/Public/css/pages/dashboard.css" rel="stylesheet" />
<!---->
<?php if(CONTROLLER_NAME == 'Items'): ?><link href="/tp/Public/css/pages/plans.css" rel="stylesheet" /><?php endif; ?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="./">Adminia Admin</a>
            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <li>
                        <a href="#"><span class="badge badge-warning">7</span></a>
                    </li>

                    <li class="divider-vertical"></li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle " href="#">
                           <?php echo $_SESSION['userinfo']['user_name'] ?>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="icon-user"></i> 个人设置  </a>
                            </li>

                            <li>
                                <a href="#"><i class="icon-lock"></i> 修改密码</a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="<?php echo U('Home/Comm/login');?>"><i class="icon-off"></i> 注销</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div> <!-- /nav-collapse -->
        </div> <!-- /container -->
    </div> <!-- /navbar-inner -->
</div> <!-- /navbar -->

<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>

<div id="content">
	
	<div class="container">
		
		<div class="row">
		<div class="span3">

    <div class="account-container">

        <div class="account-avatar">
            <img src="/tp/Public/img/headshot.png" alt="" class="thumbnail" />
        </div> <!-- /account-avatar -->

        <div class="account-details">

            <span class="account-name"><?php echo $_SESSION['userinfo']['user_name'] ?></span>

            <span class="account-role">用户等级</span>

						<span class="account-actions">
							<a href="javascript:;">简况</a> |

							<a href="javascript:;">编辑设置</a>
						</span>

        </div> <!-- /account-details -->

    </div> <!-- /account-container -->

    <hr />

    <ul id="main-nav" class="nav nav-tabs nav-stacked">

        <li class="active">
            <a href="./">
                <i class="icon-home"></i>
               系统导航
            </a>
        </li>

        <li>
            <a href="<?php echo U('Home/Items/index');?>">
                <i class="icon-th-list"></i>
                项目管理
            </a>
        </li>

        <li>
            <a href="<?php echo U('Home/Link/index');?>">
                <i class="icon-pushpin"></i>
               域名管理
            </a>
        </li>

        <li>
            <a href="<?php echo U('Home/Discuss/index');?>">
                <i class="icon-th-list"></i>
                评论管理
            </a>
        </li>

        <li>
            <a href="<?php echo U('Home/User/Index');?>">
                <i class="icon-th-large"></i>
               用户管理
                <span class="label label-warning pull-right">5</span>
            </a>
        </li>
    </ul>

</div> <!-- /span3 -->


			<!DOCTYPE html>
<div class="span9">
	
	<h1 class="page-title">
		<i class="icon-home"></i>
		Dashboard					
	</h1>
	
	<div class="widget">
							
		<div class="widget-header">
			<i class="icon-signal"></i>
			<h3>项目名称</h3>
		</div> <!-- /widget-header -->
											
		<div class="widget-content">
		我嘞个去 
		</div> <!-- /widget-content -->
	</div>
</div> <!-- /span9 -->
			
			
		</div> <!-- /row -->
		
	</div> <!-- /container -->
	
</div> <!-- /content -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--框架开始时的js文件-->
<script src="/tp/Public/js/jquery-1.7.2.min.js"></script>
<script src="/tp/Public/js/excanvas.min.js"></script>
<script src="/tp/Public/js/jquery.flot.js"></script>
<script src="/tp/Public/js/jquery.flot.pie.js"></script>
<script src="/tp/Public/js/jquery.flot.orderBars.js"></script>
<script src="/tp/Public/js/jquery.flot.resize.js"></script>
<script src="/tp/Public/js/bootstrap.js"></script>
<script src="/tp/Public/js/charts/bar.js"></script>

  </body>
</html>