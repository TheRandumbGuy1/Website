<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!--META-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0,">
		<meta name="keywords" content="robotics, FRC, FRC 1160, Titanium Robotics, Titanium FRC, Titanium 1160, Team Titanium, FRC Robotics, San Marino, San Marino High School, FRC Team 1160, Team 1160 FRC, San Marino Robotics" />

		<!--TITLE-->
		<title><?php bloginfo('name'); ?> <?php wp_title('/'); ?></title>

		<!--LINKS-->
		<link rel="alternate" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback"					href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="icon"		type="application/rss+xml"	href="<?php bloginfo('template_directory') ?>/assets/favicon.ico" />
		<link rel="stylesheet"	type="text/css"	href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="stylesheet"	type="text/css"	href="<?php bloginfo('template_directory'); ?>/Linecon-Styles.css" />
		<link rel="stylesheet"	type="text/css"	href="<?php bloginfo('template_directory'); ?>/jquery.toolbars.css" />
		<link rel="stylesheet"	type="text/css"	href="<?php bloginfo('template_directory'); ?>/bootstrap.icons.css" />
		
		<!--SCRIPTS-->
			<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' );?>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="<?php bloginfo('template_directory');?>/js/readmorejavascript.js"	type="text/javascript"></script>
			<script src="<?php bloginfo('template_directory');?>/js/retina.js"				type="text/javascript"></script>
			<script src="<?php bloginfo('template_directory');?>/js/jquery.toolbar.min.js"	type="text/javascript"></script>
			<!--[if lte IE 7]>
				<script src="<?php bloginfo('template_directory'); ?>/js/lte-ie7.js"		type="text/javascript"></script>
			<![endif]-->
			<!--[if lt IE 9]>
				<script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
			<![endif]-->

		<?php wp_head(); ?>
			<script type="text/javascript">
				$(function() {

					// Find all YouTube videos
					var $allVideos = $("iframe"),

					    // The element that is fluid width
					    $fluidEl = $(".entry");

					// Figure out and save aspect ratio for each video
					$allVideos.each(function() {

						$(this)
							.data('aspectRatio', this.height / this.width)
							
							// and remove the hard coded width/height
							.removeAttr('height')
							.removeAttr('width');

					});

					// When the window is resized
					// (You'll probably want to debounce this)
					$(window).resize(function() {

						var newWidth = $fluidEl.width();
						
						// Resize all videos according to their own aspect ratio
						$allVideos.each(function() {

							var $el = $(this);
							$el
								.width(newWidth)
								.height(newWidth * $el.data('aspectRatio'));

						});

					// Kick off one resize to fix all videos on page load
					}).resize();

				});
			</script>
		<?php if (is_search()) : ?>
			<style type="text/css" media="screen">
				    .hls {font-weight:bold;}
				  </style>
				  <script type="text/javascript">
				  jQuery.fn.extend({
				    highlight: function(search, insensitive, hls_class){
				      var regex = new RegExp("(<[^>]*>)|(\\b"+ search.replace(/([-.*+?^${}()|[\]\/\\])/g,"\\$1") +")", insensitive ? "ig" : "g");
				      return this.html(this.html().replace(regex, function(a, b, c){
				        return (a.charAt(0) == "<") ? a : "<em class=\""+ hls_class +"\">" + c + "</em>";
				      }));
				    }
				  });
				  jQuery(document).ready(function($){
				    if(typeof(hls_query) != 'undefined'){
				      $("#contents").highlight(hls_query, 1, "hls");
				    }
				  });
			</script>
		<?php endif; ?>
			<script>
				$('#vertical-toolbar').toolbar({
					content: '#user-toolbar-options', 
					position: 'left',
				});
			</script>
	</head>
<?php flush(); ?>
	<body>
	<div class="wrapper">
	<!--START - NAVIGATION-->
	<nav id="menuwrap">
		<div class="menu">
			<div class="logo">
				<a href="/" title="Titanium Robotics, FRC Team 1160">
					<img src="/wp-content/themes/Team1160/assets/logo.png" class="logo-img retina" alt="Titanium Robotics Logo" />
				</a>
			</div>
		<div class="navigation-links">
		<ul class="left-menu">
		<!-- START - About Us-->
		  <li><span><a href="/about-us" class="menulink">The Team</a>
			<div class="arrowup"></div></span>
		    <div class="menu-container-2">
		      <div class="column-2">
			<fieldset><legend><?php  echo mf_get_menu_name('About-Tab-1'); ?></legend></fieldset>
		        <?php wp_nav_menu( array( 'theme_location' => 'About-Tab-1' ) );?>
		      </div>
		      <div class="column-2">
			<fieldset><legend><?php  echo mf_get_menu_name('About-Tab-2'); ?></legend></fieldset>
		        <?php wp_nav_menu( array( 'theme_location' => 'About-Tab-2' ) );?>
		      </div>
		      <div class="column-2">
			<fieldset><legend><?php  echo mf_get_menu_name('About-Tab-3'); ?></legend></fieldset>
		        <?php wp_nav_menu( array( 'theme_location' => 'About-Tab-3' ) );?>
		      </div>
		      <div class="column-2">
			<fieldset><legend><?php  echo mf_get_menu_name('About-Tab-4'); ?></legend></fieldset>
		        <?php wp_nav_menu( array( 'theme_location' => 'About-Tab-4' ) );?>
		      </div>
		    </div>
		  </li>
		<!-- END - About Us -->
		<!-- START - OUTREACH-->
		  <li>
		    <span><a href="/outreach" class="menulink">Outreach</a>
			<div class="arrowup"></div></span>
		    <div class="menu-container-1">
		      <div class="column-1">
		        <fieldset><legend><?php  echo mf_get_menu_name('Outreach-Tab'); ?></legend></fieldset>
		        <?php wp_nav_menu( array( 'theme_location' => 'Outreach-Tab' ) );?>
		      </div>
		    </div>
		  </li>
		<!--END - OUTREACH-->
		<!--START - JOIN-->
		  <li><span><a href="/join" class="menulink">Join</a>
		  	<div class="arrowup"></div></span>
		    <div class="menu-container-5">

		      <div class="column-5">
		        <fieldset><legend><?php  echo mf_get_menu_name('Join'); ?></legend></fieldset>
		      </div>
		      <div class="column-5">
		        <?php wp_nav_menu( array( 'theme_location' => 'Join' ) );?>
		 </div>
		    </div>
		  </li>
		<!-- END - JOIN -->
		<!--START - MEMBERS-->
		  <li><span><a href="/for-students" class="menulink">Members</a>
			<div class="arrowup"></div></span>
		    <div class="menu-container-5">

		      <div class="column-5">
		        <fieldset><legend><?php  echo mf_get_menu_name('For-Members'); ?></legend></fieldset>
		      </div>
		      <div class="column-5">
		        <?php wp_nav_menu( array( 'theme_location' => 'For-Members' ) );?>
		 </div>
		    </div>
		  </li>
		<!-- END - MEMBERS -->
		<!-- START - MEDIA -->
		  <li>
		  	<span>
		  	<a href="/media" class="menulink">Media</a>
			<div class="arrowup"></div>
			</span>
		    <div class="menu-container-5">
		      <div class="column-5">
			<fieldset><legend><?php  echo mf_get_menu_name('About-Tab-5'); ?></legend></fieldset>
		        <?php wp_nav_menu( array( 'theme_location' => 'About-Tab-5' ) );?>
		      </div>
		    </div>
		  </li>
		<!-- END - MEDIA -->
		<!-- START - RESOURCES -->
		  <li>
		  	<span>
		  	<a href="/resources" class="menulink">Resources</a>
			<div class="arrowup"></div>
			</span>
		    <div class="menu-container-5">
		      <div class="column-5">
		        <fieldset><legend><?php  echo mf_get_menu_name('For-Teams'); ?></legend></fieldset>
		      </div>
		      <div class="column-5">
		        <?php wp_nav_menu( array( 'theme_location' => 'For-Teams' ) );?>
		 </div>
		    </div>
		  </li>
		</ul>
		<!-- END - RESOURCES -->
		<ul class="menu-right">
		<!-- START - RIGHT SECTION-->
		<!-- START - ROBOTS -->
		  <li class="robots"><span><a href="/our-robots" class="menulink">Our Robots</a>
			<div class="arrowup"></div></span>
		    <div class="menu-container-4 align-right">
		      <div class="column-1">
		        <fieldset><legend>2008</legend></fieldset>
		        <ul>
		          <li><a href="/overdrive">Overdrive</a></li>
		        </ul>
		      </div>
		      <div class="column-1">
		        <fieldset><legend>2009</legend></fieldset>
		        <ul>
		          <li><a href="/lunacy">Lunacy</a></li>
		        </ul>
		      </div>
		      <div class="column-1">
		        <fieldset><legend>2010</legend></fieldset>
		        <ul>
		          <li><a href="/breakaway/">Breakaway</a></li>
		        </ul>
		      </div>
		      <div class="column-1">
		        <fieldset><legend>2011</legend></fieldset>
		        <ul>
		          <li><a href="/logomotion">Logomotion</a></li>
		        </ul>
		      </div>
		      <div class="column-1">
		        <fieldset><legend>2012</legend></fieldset>
		        <ul>
		          <li><a href="/rebound-rumble">Rebound Rumble</a></li>
		        </ul>
		      </div>
		      <div class="column-1">
		        <fieldset><legend>2013</legend></fieldset>
		        <ul>
		          <li><a href="/blog">Ultimate Ascent<sup> blog</sup></a></li>
		        </ul>
		      </div>
		      <div class="column-1">
		        <fieldset><legend>2014</legend></fieldset>
		        <ul>
		          <li></li>
		        </ul>
		      </div>
		      <div class="column-1">
		        <fieldset><legend>2015</legend></fieldset>
		        <ul>
		          <li></li>
		        </ul>
		      </div>
		      <div class="column-1">
		        <fieldset><legend><a href="/our-robots">More...</a></legend></fieldset>
		        <ul>
		          <li></li>
		        </ul>
		      </div>
		    </div>
		  </li>
		<!-- END - ROBOTS -->
		<!-- START - ACCOUNT-->
		<li class="login">
			<?php if (is_user_logged_in()) { ?>
		    <span><a href="/wp-admin" class="menulink">Account</a>
			<div class="arrowup"></div></span>
			<div class="menu-container-7 align-right">
				<div class="account">
				<div id="name">
				<?php
					global $current_user;
					get_currentuserinfo();
					echo get_avatar( $current_user->ID );
				?>
				<?php $user_info = wp_get_current_user();
					$first_name = $user_info->first_name;
					$last_name = $user_info->last_name;
					echo "$first_name $last_name"?>
				<br />
				<i style="font-size:small;">
				<?php $user_info = wp_get_current_user();
					$year = $user_info->year;
					$school = $user_info->school;
					echo "$school class of $year"?>
				</i>
				</div>
				<div id="username">
				<?php $user_info = wp_get_current_user();
					$username = $user_info->user_login;
					echo "$username";
					?>
				<br />
				<?php
					$user_roles = $current_user->roles;
					$user_role = array_shift($user_roles);
				    
					if ($user_role == 'administrator') {
					    echo 'Administrator';
					} elseif ($user_role == 'editor') {
					    echo 'Cabinet';
					} elseif ($user_role == 'author') {
					    echo 'Team Author';
					} elseif ($user_role == 'contributor') {
					    echo 'Team Member';
					} elseif ($user_role == 'subscriber') {
					    echo 'Subscriber';
					} else {
					    echo "$user_role";
					}
					?>
				</div>
				</div>
				<div class="userlinks">
				<a href="<?php bloginfo("url")?>/wp-admin"><?php _e('Your Dashboard', 'Dashboard'); ?></a>
				<a href="<?php bloginfo("url")?>/wp-admin/post-new.php">Add a Post</a>
				<a href="<?php echo get_admin_url(); ?>profile.php">Edit Profile</a>
				<?php if ( current_user_can( 'moderate_comments' ) ) { //only admins and editors can see this ?>
				<a href="<?php echo get_admin_url(); ?>">Edit Site</a>
				<a href="/wp-admin/edit-comments.php">Comments <div class="commentnotif"><?php $comments_count = wp_count_comments(); echo "$comments_count->moderated"; ?></div></a>
				<a href="<?php echo esc_url( wp_logout_url( $_SERVER['REQUEST_URI'] ) ); ?>" title="Logout">Logout</a>
					<?php } else { ?>
				<a href="<?php echo esc_url( wp_logout_url( $_SERVER['REQUEST_URI'] ) ); ?>" title="Logout">Logout</a>
					<?php } ?>
				</div>
			</div>
		<?php } else { ?>
		    <a href="<?php echo esc_url( wp_login_url( $_SERVER['REQUEST_URI'] ) ); ?>" class="menulink">Log In</a>
		<?php } ?>
		<div class="clear"></div>
		</li>
		<!-- END - ACCOUNT -->
		</ul>
		</div>
		</div>
	</nav>
	<!-- END - NAVIGATION-->
	<div class="clear"></div>
	<?php if(!is_front_page()) : ?>
			<div id="subpages"><div class="limit">
				<div class="table">
					<div class="title">
						<ul><li><h1>
							<?php
								wp_title("", true);
							?>
						</h1></li></ul>
					</div>
	<?php if(is_search()) : ?>
			<div class="links" style="width:60%">
					<?php get_search_form( $echo ); ?>
			</div>
	<?php endif; ?>
	<?php if(!is_author() && !is_search() && !is_404()) : ?>
			<?php
	  			if($post->post_parent)
	  			$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
	 			 else
	 			 $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
	  			if ($children) { 
					$parent_title = get_the_title($post->post_parent);?>
			<div class="links">
	  			<ul>
					<li<?php 
	if (is_page($post->post_parent))
	{ 
	echo " class=\"current-menu-item\"";
	}
	?>><a href="<?php echo get_permalink($post->post_parent) ?>"><?php echo $parent_title;?></a></li>
					<?php echo $children; ?>
	 			 </ul>
			</div>
	  		<?php } ?>
	<?php endif; ?>
	<?php if( is_page('forum')) :?>
			<div class="links">
			<?php if (current_user_can(edit_posts) ) { ?>
			<ul>
				<li>
				<a href="<?php bloginfo("url")?>/wp-admin/post-new.php?post_type=forum_post">Add a Post</a>
				</li>
			</ul>
			<?php } else { ?>
			<ul>
				<li>
				<a>Log in to view actions and links</a>
				</li>
			</ul>		
			<?php } ?>
			</div>
	<?php endif;
		if(is_single()) : ?>
			<div class="links">
			<ul style="width:100%;">
				<li style="width:100%; text-align:right; padding:0;">
					<?php the_breadcrumb(); ?>
				</li>
			</ul>
			</div>
	<?php endif; ?>
		</div>
	</div></div>
	<?php endif; ?>