
<html>
	<head>
		<title>Redness Tech</title>
		<link rel="stylesheet" type="text/css" href="rednesstech.css" />
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-15660185-3']);
		  _gaq.push(['_setDomainName', 'none']);
		  _gaq.push(['_setAllowLinker', true]);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
		<script src="jquery.js" />
		<script type="text/javascript">
		
		</script>
	</head>
	<body>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#link_home").hover(
				function( )
				{
					$("#link_home").addClass( "link_hover" );
				},
				function()
				{
					$("#link_home").removeClass( "link_hover" );
				});
				
				$("#link_home").click( function( event )
				{
					window.location.href = "/";
				});
			});
		</script>
		<div id="main" >
			<div id="header">
				<img src="rednesstechlogo.jpg" width="300px" />
				<h3>IT & Network Services</h3>
			</div>
			<div id="links">
				<table style="width:100%">
					<tr>
						<td id="link_home" class="nav_cell">
							Back Home
						</td>
					</tr>
				</table>
			</div>
			<div id="content">
				<h3>Redness Tech Roster Management System (RTRMS)</h3>
				<p>A lightweight, web-based system for small business owners to manage staff availability and rosters. Perfect for hospitality services such as pizza stores!</p>
				<b>Features</b>:
				<ul>
					<li>Staff Permission Levels</li>
					<li>iCal Format Exports for Staff and Stores Available</li>
					<li>Availability Templates (Permanent Availabilities) for Staff</li>
					<li>Customisable to your business requirements</li>
					<li>Support for Multiple Stores</li>
				</ul>
				<p><a href="redbook_pricing.pdf">Pricing Info</a></p>
				<p>Please <a href="mailto:sales@rednesstech.com">Contact Us</a> if you want any further information on this product.</p>
			</div>
		</div>
	</body>
</html>
