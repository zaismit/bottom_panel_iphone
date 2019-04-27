<style>
.bottom_panel
{
	position:       	fixed;
	bottom:         	0;
	padding: 			0;
	margin: 			0;
	background: 		linear-gradient(40deg,
						rgb(255,110,196,0.7),
						rgb(120,115,245,0.7));
}
.five_div
{
	width:				20%;
	float:				left;
	text-align: 		center;
}
.bottom_btn
{
	display: 			inline-block;
	background: 		linear-gradient(140deg,
						rgba(255, 110, 196, 0.5),
						rgba(120,115, 245, 0.5));
	box-shadow: 		0px 0px 3px 1px
						rgba(255,255,255,0.5);
	border: 			1px solid transparent;
	border-radius: 		20px;
	font-size: 			12px;
	cursor: 			pointer;
	color: 				white;
	border-color: 		white;
	text-decoration: 	none;
	height:				50px;
	width: 				89%;
	text-align: 		center;
	padding: 			13px 1px 0px 1px;
	margin:				5px 0px ;
}
.bottom_btn:active
{
	box-shadow: 		0px 0px 3px 2px
						rgba(255,255,255,0.9);
	background: 		linear-gradient(140deg,
						rgba(120,115, 245, 0.5),
						rgba(255, 110, 196, 0.5));
	text-decoration: 	none;
	border-radius: 		20px;
	border: 			1px solid transparent;
}
</style>
<!--bottom_panel-->
<div class="bottom_panel">
	<div class="bottom-grad" style="padding-left:2px;padding-right:2px;">

<?php
#######################################################
function active($current_page)
{
	$page_url = $_SERVER['QUERY_STRING'];

	$s = explode("&",$page_url);
	//print $s[0];
	$page = $s[0];

	if(isset($page) && $page == $current_page)
	{
		echo 'active'; //this is class name in css
	}
}
#######################################################
?>

<script>
function goBack()
{
	window.history.back();
}
</script>

	<div class="five_div" >
		<a href="?page=services" onclick="goBack()">
			<div class="<?php active('services');?> bottom_btn" >
				<i class="fas fa-arrow-left fa-3x"></i>
			</div>
		</a>
	</div>

	<div class="five_div">
		<a href="?page=design">
			<div class="<?php active('services');?> bottom_btn">
				<i class="fas fa-user fa-3x"></i>
			</div>
		</a>
	</div>

	<div class="five_div">
		<a href="?page=about">
			<div class="<?php active('services');?> bottom_btn">
				<i class="fas fa-search fa-3x"></i>
			</div>
		</a>
	</div>

	<div class="five_div">
		<a href="?page=about">
			<div class="<?php active('services');?> bottom_btn">
				<i class="fas fa-home fa-3x"></i>
			</div>
		</a>
	</div>

	<div class="five_div" >
		<a href="?page=about">
			<div class="<?php active('services');?> bottom_btn">
				<i class="fas fa-align-justify fa-3x"></i>
			</div>
		</a>
	</div>
	<!--./main navigation-->
	</div>
</div>
<!--./bottom_panel-->
