<h2><?php echo __('Guestbooks'); ?></h2>

<meta property="fb:admins" content="manu.farfaro"/>

<!-- Begin Facebook Inclusion JSSDK -->
<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); 
	  js.id = id;
	  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<!-- End Facebook Inclusion JSSDK -->

<div id="fb-root"></div>

<div class="fb-comments" data-href="http://www.sonoricstudios.com" data-width="650" data-num-posts="10"></div>