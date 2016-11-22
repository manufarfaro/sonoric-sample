<h2><?php echo __('Guestbooks'); ?></h2>

<div id="fb-root"></div>
<script type="text/javascript">
	(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
			js = d.createElement(s); 
			js.id = id;
			js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk')
	);
</script>
<div class="fb-comments" data-href="http://sonoricstudios.com" data-width="630" data-num-posts="20" data-colorscheme="dark"></div>