<?php if (!defined('THINK_PATH')) exit(); $config = D('Basic')->select(); $navs = D('Menu')->getBarMenus(); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo ($config['title']); ?></title>
    <!--fonts-->
        <link href='/Public/css/font.css' rel='stylesheet' type='text/css'>    
    <!--//fonts-->      
        <link href="/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="<?php echo ($config['keywords']); ?>" />
        <meta name="description" content="<?php echo ($config['description']); ?>" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <!-- js -->
        <script src="/Public/js/jquery.js"></script>
    <!-- js -->
</head>
<body>
<!-- header -->
<div class="header">
     <div class="container">
         <div class="logo">
               <h1><a href="<?php echo U('index');?>">MAT CMS</a></h1>
         </div> 
         <div class="top-menu">
             <span class="menu"></span>
              <ul>
                <li class="<?php if($result['catId'] == 0): ?>active<?php endif; ?>"><a href="/">首页</a></li>
                <?php if(is_array($navs)): $i = 0; $__LIST__ = $navs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><li class="<?php if($nav['menu_id'] == $result['catid']): ?>active<?php endif; ?>"><a href="/index.php?c=cat&id=<?php echo ($nav['menu_id']); ?>"><?php echo ($nav['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
             </ul>           
         </div>         
         <!-- script-for-menu -->
         <script>
                $("span.menu").click(function(){
                    $(".top-menu ul").slideToggle("slow" , function(){
                    });
                });
         </script>
         <!-- script-for-menu -->       

         <div class="clearfix"></div>
     </div>
</div>
<!-- //header -->
<!-- banner -->
<div class="strip">
     <div class="container">
     <div class="search">
            <form>
                <input type="text" value="" placeholder="Search...">
                <input type="submit" value="">
            </form>
     </div>     
     <div class="social">            
             <a href="#"><i class="facebook"></i></a>
             <a href="#"><i class="twitter"></i></a>
             <a href="#"><i class="dribble"></i></a>    
             <a href="#"><i class="google"></i></a> 
             <a href="#"><i class="youtube"></i></a>    
     </div>
        <div class="clearfix"></div>
        </div>
</div>	
<!-- banner -->
<div class="banner">
		<script src="/Public/js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 300,
        manualControls: '#slider3-pager',
      });
    });
  </script>

 <div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	     <?php if(is_array($result['topPicNews'])): $i = 0; $__LIST__ = $result['topPicNews'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
	         <a target="_blank" href="/index.php?c=detail&id=<?php echo ($vo['news_id']); ?>">
				<img src="<?php echo ($vo['thumb']); ?>" style="width: 100%;">
				<div class="banner-info" style="top: 60%;">
					<h3><?php echo ($vo['title']); ?></h3>
				</div>
			 </a>
	         </li><?php endforeach; endif; else: echo "" ;endif; ?>
	     </ul>
	  </div>
  </div>
<!---->
	 <div class="banner-bottom-grids">
		 <div class="container">
			 <div class="col-md-6 banner-text-info clr1">
				 <i class="icon2"></i>
				 <div class="bnr-text">				 
					 <h3>NEWS</h3>
					 <p>Vestibulum malesuada nisi sit amet justo ullamcorper, non convallis justo consequat Integer et urna bibendum elit accumsan interdum.</p>
				 </div>
			 </div>
			 <div class="col-md-6 banner-text-info clr2">	
				 <i class="icon1"></i>
				 <div class="bnr-text">
					 <h3>SCIENCE & TECHNOLOGY</h3>
					 <p>Vestibulum malesuada nisi sit amet justo ullamcorper, non convallis justo consequat Integer et urna bibendum elit accumsan interdum.</p>
				 </div>
			 </div>
			 <div class="clearfix"></div>
			 
			 <div class="col-md-6 banner-text-info clr3 btm">	
				 <i class="icon3"></i>
				 <div class="bnr-text">
					 <h3>ENTERTAINMENT</h3>
					 <p>Vestibulum malesuada nisi sit amet justo ullamcorper, non convallis justo consequat Integer et urna bibendum elit accumsan interdum.</p>
				 </div>
			 </div>
			 <div class="col-md-6 banner-text-info clr4 btm">	
				 <i class="icon4"></i>
				 <div class="bnr-text">
					 <h3>COURSE</h3>
					 <p>Vestibulum malesuada nisi sit amet justo ullamcorper, non convallis justo consequat Integer et urna bibendum elit accumsan interdum.</p>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!-- //banner -->

<!-- content -->
<div class="content">
	 <div class="container">
		 <div class="content-grids">
		 	<?php if(is_array($result['topSmallNews1'])): $i = 0; $__LIST__ = $result['topSmallNews1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-4 content-grid1">
				 <img src="<?php echo ($vo['thumb']); ?>"/>
				 <h3><?php echo ($vo['title']); ?></h3>
				 <p>这里是内容<br/>这里是内容<br/></p>
				 <a target="_blank" href="/index.php?c=detail&id=<?php echo ($vo['news_id']); ?>">Read More..</a>
			 </div><?php endforeach; endif; else: echo "" ;endif; ?>
		 </div>
	 </div>
</div>
<!--- //content--->
<!-- content-bottom -->
<div class="content-info">
	 <div class="container">
		 <div class="content-bottom-grids">
			 <div class="col-md-4 popular">	
				 <h3>NEWEST</h3>
				 <ul>
				 	<?php if(is_array($result['rankNews'])): $i = 0; $__LIST__ = $result['rankNews'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/index.php?c=detail&id=<?php echo ($vo['news_id']); ?>"><?php echo ($vo['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				 </ul>
			 </div>
			 <div class="col-md-4 welcome-pic">
				 <h3>ABOUT</h3>
				 <h4>Morbi sed arcu mollis, elementum erat venenatis, tincidunt tellus.</h4>
				 <img src="/Public/images/cnt.ab.jpg" alt=""/>
				 <p>Aenean ut condimentum magna, mattis pretium massa. Sed sollicitudin ullamcorper auctor. Duis vestibulum velit id augue pulvinar egestas. 
				 Morbi sed orci auctor, feugiat felis at, fermentum magna. In ac egestas lectus.</p>
			</div>
			<div class="col-md-4 coach">
				 <h3>OUR COACHES</h3>
				 <div class="coch-grid chr">
					 <div class="coach-pic">
						 <img src="/Public/images/ch1.jpg" alt=""/>
					 </div>
					 <div class="coach-pic-info">
						 <h4><a href="#">Phasellus at Tellus</a></h4>
						 <h5>Aenean vestibulum </h5>
						 <p>Donec ornare massa at velit fringilla, condimentum magna ornare tincidunt nulla dignissim.</p>
					 </div>
					 <div class="clearfix"></div>
				 </div>
				 <div class="coch-grid">
					 <div class="coach-pic">
						 <img src="/Public/images/ch2.jpg" alt=""/>
					 </div>
					 <div class="coach-pic-info">
						 <h4><a href="#">Phasellus at Tellus</a></h4>
						 <h5>Aenean vestibulum </h5>
						 <p>Donec ornare massa at velit fringilla, condimentum magna ornare tincidunt nulla dignissim.</p>
					 </div>
					 <div class="clearfix"></div>
				 </div>
			</div>
			<div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!-- //content-bottom -->
<!--footer-->
<div class="footer">
     <div class="container">
         <div class="copywrite">
             <p>Copyright &copy; 2015.Company name All rights reserved.</p>
         </div>
         <div class="footer-menu">
             <ul>
                 <li class="active"><a href="<?php echo U('index');?>">首页</a></li>
                 <li><a href="<?php echo U('keji');?>">科技</a></li>
                 <li><a href="<?php echo U('xinwen');?>">新闻</a></li>
                 <li><a href="<?php echo U('tiyu');?>">体育</a></li>
                 <li><a href="<?php echo U('yole');?>">娱乐</a></li>
                 <li><a href="<?php echo U('join');?>">加入我们</a></li>
             </ul>
         </div>
         <div class="clearfix"></div>
     </div>
</div>
<!-- //footer -->
</body>
</html>