<<<<<<< HEAD
<?php
define('IN_BLOG', true);
define('PATH', '');
include('includes/miniblog.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>miniblog</title>
<style type="text/css">
<!--
*, html {
	margin:0;
	padding:0;
}
body {
	font-family:'Lucida Sans Unicode','Lucida Grande',verdana,sans-serif;
	font-size:0.9em;
	color:#333333;
	margin:0 auto;
	padding:0;
	background-color:#dddddd;
}
a {
	color:#006699;
}
h2 {
	font-weight:normal;
	color:#666666;
	font-size:1.4em;
}
p {
	margin-bottom:10px;
	line-height:1.6em;
}
div.wrapper {
	width:80%;
	padding:5px;
	margin:50px auto 10px auto;
}
div.post {
	background-color:#ffffff;
	border:1px solid #cccccc;
	padding:7px;
	margin:10px 0;
}
span.date {
	color:#666666;
	font-size:0.7em;
	text-transform:uppercase;
}

div.navigation p a {
	font-size:1.2em;
}
div.navigation p.previous-link {
	width:48%;
	float:left;
	text-align:left;
}
div.navigation p.next-link {
	width:48%;
	float:right;
	text-align:right;
}
div.post-content {
	padding-top:4px;
}
div.clear { 
	clear:both;
}
div.footer p {
	padding-top:10px;
	color:#999999;
	font-size:0.9em;
	text-align:center;
}
div.footer p a {
	color:#999999;
}
-->
</style>
</head>

<div class="wrapper">
	
	<h1>miniblog</h1>
	<h2>latest product updates</h2>
	
	<?=$miniblog_posts?>
	
	<div class="navigation">
		<? if(!$single) { ?>
			<? if($miniblog_previous) {	?> <p class="previous-link"><?=$miniblog_previous?></p>	<? } ?>
			<? if($miniblog_next) {	?>	<p class="next-link"><?=$miniblog_next?></p> <? } ?>
		<? } ?>
		<? if($single) { ?>
			<p class="previous-link"><a href="<?=$config['miniblog-filename']?>">&laquo; return to posts</a></p>
		<? } ?>
		<div class="clear"></div>
	</div>
	<div class="footer">
		<!-- a link back is REQUIRED under the terms of the license. To remove the link back see http://www.spyka.net/licensing -->
		<p>Powered by <a href="http://www.spyka.net/scripts/php/miniblog">miniblog</a> created by <a href="http://www.spyka.net">spyka Webmaster</a></p>
	</div>
<body>
</body>
</html>
=======
<?php
define('IN_BLOG', true);
define('PATH', '');
include('includes/miniblog.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"; itemscope itemtype="http://schema.org/"; xmlns:fb="http://ogp.me/ns/fb#">

<head>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	    
	<meta itemprop="name" content="Title of your content">
	<meta itemprop="description" content="This would be a description of the content your users are sharing">
	<meta property="fb:admins" content="100003525073637" />
	<meta property="fb:app_id" content="370013989685522"/>

	<title>pTricKg.com</title> 

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link href="../css/ptrickgstyle.css" rel="stylesheet" type="text/css" />

</head>
	
<body class="background" >
<div id="header">
<div id="head">

	<img src="../img/name_ubuntu.png" style="float: left"/>
	<nav>
    	
		<ul>
        	<li>
            	<a href="../index.html">
					<span>Home</span>
				</a>
			</li>
			<li>
				<a href="../about_me/about_me.html">
					<span>About Me</span>
				</a>
			</li>
			<li>
				<a href="../links/links.html">
					<span>Links</span>
				</a>
			</li>
			<li>
				<a href="../projects/projects.html">
					<span>Projects</span>
				</a>
			</li>
            <li>
				<a href="file:///Z|/home/ptrickg/blog">
					<span>Blog</span> 
				</a>
			</li>
			
		</ul>
        
	</nav>
   
</div>
</div>



	
				<div align="center" class="content">
	  				<p class="header">Welcome to my not-so-interesting website!! </p>
                    
                    	<div id="blog">
                        <?=$miniblog_posts?>
                        </div>
                        
                        <div class="navigation">
		<? if(!$single) { ?>
			<? if($miniblog_previous) {	?> <p class="previous-link"><?=$miniblog_previous?></p>	<? } ?>
			<? if($miniblog_next) {	?>	<p class="next-link"><?=$miniblog_next?></p> <? } ?>
		<? } ?>
		<? if($single) { ?>
			<p class="previous-link"><a href="<?=$config['../miniblog-filename']?>">&laquo; return to posts</a></p>
		<? } ?>
		<div class="clear"></div>
	</div>
    
	  				<p class="body_text">Super Mario!  Click to check it!<img src="../img/mario.png" alt="Mario!" width="800" height="441" border="0" usemap="#Map1" /> </p>
	      
                          		<p class="body_text">This is just a page of play.  Click to check it!<img src="../img/android_test_page.png" alt="android page" width="800" height="441" border="0" usemap="#Map2" /> </p>
              				<p><img src="../img/face_dots_glss.jpg" width="356" height="356" alt="dot face" /></p>
                                	<p class="footer">©2012 Patrick Gorman</p>
                        	</div><!-- #BeginLibraryItem "/Library/Footer.lbi" -->
	<script type="text/javascript">
      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>

		<link href="../css/ptrickgstyle.css" rel="stylesheet" type="text/css">


        	<div align="center" class="footer">
            	<center>
                	<a href="http://fatcow.com/green/green-certified.bml?domain=ptrickg.com" onclick="MyWindow=window.open('http://fatcow.com/green/green-certified.bml?domain=ptrickg.com','greenCertified','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=550,height=700,left=50,top=50'); return false;">
                    	<img src="http://images.fatcow.com/green/badge-1.png" border="0" />
                    </a>
                </center>
					<center>
                    	<p>Link to my Android Apps
                        </p>
                        	<a href="https://play.google.com/store/search?q=pub:pTricKg">
  								<img alt="Get it on Google Play" src="../img/en_app_rgb_wo_60.png"/>
							</a>
                    </center>

<g:plusone href="http://ptrickg.com" annotation="inline">
</g:plusone>
	<a href="https://twitter.com/pTricKg" class="twitter-follow-button" data-show-count="false">Follow @pTricKg</a>
</table></center>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
 
<table align="center">
  <tr>
    <th>
    	<div id="fb-root"><fb:like href="http://ptrickg.com" send="true" data-href="http://ptrickg.com" width="450" show_faces="true" font="tahoma"></fb:like>
        </div>
    </th>
    <th>
    	<a href="mailto:ptrickg@hotmail.com"><img src="/img/email.png" alt="Email" width="60" height="60"></a>
    </th>
  </tr>
  
</table>   

  
<center>
	<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://ptrickg.com">Tweet</a>
</center>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<p>
	<center>
    	<div class="fb-comments" data-href="http://ptrickg.com" data-num-posts="2" data-width="470"></div>
    </center>
</p>

<p align="center" class="text">
	<span class="footer">Last Revised 2015.10 by P.G.</span>
</p>
			</div>
		</th>
	</tr>
</table>
<div id="fb-root"></div>
<!-- #EndLibraryItem --><!-- #EndLibraryItem -->
<a href="http://fatcow.com/green/green-certified.bml?domain=ptrickg.com" onclick="MyWindow=window.open('http://fatcow.com/green/green-certified.bml?domain=ptrickg.com','greenCertified','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=550,height=700,left=50,top=50'); return false;"></a>

<script type="text/javascript" src="../js/rockPaperScissors.js"></script>
<script language="JavaScript1.2" type="text/javascript">

<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
} 
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_popupMsg(msg) { //v1.0
  alert(msg);
}
//-->
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38102815-1']);
  _gaq.push(['_setDomainName', 'ptrickg.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<map name="Map1" id="Map1">
  <area shape="rect" coords="1,6,798,440" href="../mario.html" alt="Super Mario!" />
   </map>
   <map name="Map2" id="Map2">
  <area shape="rect" coords="1,6,798,440" href=../projects/android.html alt="Android Page!" />
   </map>
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '370013989685522', // App ID
      channelUrl : '//www.ptrickg.com/index.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    
FB.Event.subscribe('comment.create',
    function(response) {
        alert('You liked the URL: ' + response);
    }
);// Additional initialization code here
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
    </script>
   
	</body>
</html>
>>>>>>> origin/master
