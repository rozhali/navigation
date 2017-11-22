<!-- loading -->
<section class="page-loading page-loading-active">
	<div class="page-loading-icon"></div>
</section>
<!-- loading -->

<!-- javascript -->
<script src="/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="/assets/js/site.js" type="text/javascript"></script>
<!-- javascript -->

<script type="text/javascript">
		$j(document).ready(function() {
				var sections = ["#home", "#about", "#team", "#contact"];
				$j("#contact").hide();
				$j("#about").hide();
				$j("#team").hide();
				var url = window.location.href;
				// console.log(url);
				// console.log(url.indexOf('#'));
				var hash = url.substring(url.indexOf('#'));
				if(url.indexOf('#') != -1 && sections.includes(hash)){
					
					//console.log(hash);
					var activeSection = hash;
					sectionsLoop(sections, activeSection);
				}else {
					console.log(hash + "is not a valid path");
				}


				$j('a[href^="#"]').on('click', function(event) {
					var activeSection = event.currentTarget.hash;
					event.preventDefault();
		    		sectionsLoop(sections, activeSection);
		    		console.log("lenght is "+ history.length);
				});
				// window.onhashchange = function() {
 			// 		console.log("back was clicked");
				// }
				window.addEventListener("popstate", function(event) {
					console.log("this is popstate" + event.currentTarget.location.hash);
				});

		});

		function sectionsLoop(sections, activeSection) {
			//console.log(activeSection);
			sections.map(function(currentValue, index, arr){
		    	if(currentValue == activeSection){
		    		// console.log(currentValue);
		    		// $j("body").toggleClass("header-menu-active");
		    		//$j(String(currentValue)).fadeIn("slow");
		    		$j("body").removeClass("header-menu-active");
		    		$j(String(currentValue)).show();
		    		window.location.hash = currentValue;
		    	}
		    	else {
		    		//console.log("this is not active " + currentValue)
		    		$j(String(currentValue)).hide();
		    	}
		    });
		}
</script>