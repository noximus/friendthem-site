<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- Prevent IE conditional load blocking -->
<!--[if IE]><![endif]-->

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
Remove this if you use the .htaccess -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="description" content="Friendthem helps you send Facebook friend requests to the people you meet in the real world. Use it to find your next best friend, big job or hot date.">
<meta name="keywords" content="iPhone app, facebook, friend request, friending, location-based, gps, social, networking, android, friends, people, free app, social media, connections">
<meta property="og:site_name" content="">
<meta property="og:title" content="">

<meta charset="UTF-8">
<meta name="robots" content="all">
<meta name="copyright" content="">
<meta name="resource-type" content="document">
<link rel="shortcut icon" href="favicon.png">
<link rel="stylesheet" href="res/css/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="res/js/jquery-min.js"%3E%3C/script%3E'))</script>
<script src="res/js/jquery.infieldlabel.min.js"></script>
<script src="res/js/twitter.js"></script>
<script src="res/js/jquery.timeago.js"></script>

<script>
$(document).ready(function(){
	$("label").inFieldLabels();

	var today = new Date();
//	var start_value = Math.floor((today.getTime()/1000 - 1308156080)/60*130);
	
	var start_value = Math.floor((today.getTime() - 1308164814386)/1000*(1/7))+500-1705000;

	console.log(today.getTime());
	
	function addCommas(nStr)
	{
		nStr += '';
		x = nStr.split('.');
		x1 = x[0];
		x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ',' + '$2');
		}
		return x1 + x2;
	}

	function counter_tick()
	{
		var time_delays = [3000, 7000, 11000];
		var inc_values = [1, 2, 3];

		var time_delay = time_delays[Math.floor(Math.random()*time_delays.length)];
		var inc_value = 1;//inc_values[Math.floor(Math.random()*inc_values.length)]

		var value = addCommas(start_value);

		$("#counter").html(value);

		start_value += inc_value;
		setTimeout(counter_tick, time_delay);
	}

	if ( $("#counter").length > 0 )
	{
		counter_tick();
//		setTimeout(counter_tick, 1000);
	}
});
</script>

<!--[if IE]>
	<script>
	(function() {
		var html5elmeents = "article|section|audio|dialog|footer|header|menu|nav|video".split('|');
		for (var i = 0; i < html5elmeents.length; i++) {
			document.createElement(html5elmeents[i]);
		}
	}
	)();
	</script>
<![endif]-->

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-23860924-1']);
_gaq.push(['_trackPageview']);

(function() {
	var ga = document.createElement('script'); ga.type =
	'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' :
	'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(ga, s);
})();
</script>