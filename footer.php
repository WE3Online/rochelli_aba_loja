
	<!-- JavaScript at the bottom for fast page loading -->
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>	
	<!-- scripts concatenated and minified via build script -->
	<script src="js/plugins.js"></script>
	<!-- end scripts -->
	<script>	
		
	  // This is a hack to fix a bug introduced by Facebook on April 6, 2011
	  // http://bugs.developers.facebook.net/show_bug.cgi?id=16484
	  function copy_properties(b, c) {
	      b = b || {};
	      c = c || {};
	      for (var a in c) b[a] = c[a];
	      if (c.hasOwnProperty && c.hasOwnProperty('toString') && (typeof c.toString != 'undefined') && (b.toString !== c.toString)) b.toString = c.toString;
	      return b;
	  }
	
	  window.fbAsyncInit = function() {  
	    FB.init({appId: <?php echo APP_ID ?>, status: true, cookie: true, xfbml: true, oauth: true, channelUrl: 'https://we3dc.websiteseguro.com/channel.html'});
	
	    // Using FB.Canvas.setAutoResize, FireFox shows scrollbars if computed height includes a fractional amount under 0.5, so this is our fix:
	    setInterval(function(){
	      if (typeof $ != 'undefined') {
	        var h = $('body').height(), d = $(document).height();
	        FB.Canvas.setSize({height: Math.max(h + 2, d)});
	      }
	    }, 500);
	
			FB.Event.subscribe('edge.create', SST.event_edge_create);
			//FB.Event.subscribe('edge.remove', SST.event_edge_remove);    
	  };
	  (function() {
	    var e = document.createElement('script'); e.async = true;
	    e.src = 'https://connect.facebook.net/pt_BR/all.js';
	    document.getElementById('fb-root').appendChild(e);
	  }());	
	</script>	
</body>
</html> 