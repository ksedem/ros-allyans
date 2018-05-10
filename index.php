<!DOCTYPE html>
<html lang="ru"> 
<head>

	<meta charset="utf-8">
	<meta name="title" content = "Химические реагенты для буровых растворов - Рос-Альянс">
	<meta name="description" content="Продажа химических реагентов, материалы в наличии, собственный склад.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="рос-альянс, буровой раствор, химические реагенты, органофильная глина, органоглина, органобентонит, активированная глина, глина органофильная, натр едкий, натрий едкий гранулированный, каустическая сода, каустик, едкий натрий, сода каустическая, NaOH, микрокальцит, мрамор молотый, микромрамор, молотый мрамор">
	<title>РосАльянс</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  

  <script>
	$(document).ready(function() {
		var x=999;
		$("#barit").hide();
		//$("#barit").css("z-index":"x");

		$("#barit_li").click(function(){
			x=x+10,
			$("#barit").show().css({"z-index":x});
		});
		$("#barit_m_li").click(function(){
			x=x+10,
			$("#barit").show().css({"z-index":x});
		});
		$("#microcalcit_li").click(function(){
			x=x+10,
			$("#microcalcit").show().css({"z-index":x});
		});
		$("#microcalcit_m_li").click(function(){
			x=x+10,
			$("#microcalcit").show().css({"z-index":x});
		});
		$("#kaliy_li").click(function(){
			x=x+10,
			$("#kaliy").show().css({"z-index":x});
		});
		$("#glina_li").click(function(){
			x=x+10,
			$("#glina").show().css({"z-index":x});
		});
		$("#krakhmal_li").click(function(){
			x=x+10,
			$("#krakhmal").show().css({"z-index":x});
		});
		$("#ksantan_li").click(function(){
			x=x+10,
			$("#ksantan").show().css({"z-index":x});
		});
		$("#celluloza_li").click(function(){
			x=x+10,
			$("#celluloza").show().css({"z-index":x});
		});
		$("#bik_natr_li").click(function(){
			x=x+10,
			$("#bik_natr").show().css({"z-index":x});
		});
		$("#grafit_li").click(function(){
			x=x+10,
			$("#grafit").show().css({"z-index":x});
		});
		$("#grafit_m_li").click(function(){
			x=x+10,
			$("#grafit").show().css({"z-index":x});
		});
		$("#izvest_li").click(function(){
			x=x+10,
			$("#izvest").show().css({"z-index":x});
		});
		$("#izvest2_li").click(function(){
			x=x+10,
			$("#izvest").show().css({"z-index":x});
		});
		$("#izvest_m_li").click(function(){
			x=x+10,
			$("#izvest").show().css({"z-index":x});
		});
		$("#natr_edk_li").click(function(){
			x=x+10,
			$("#natr_edk").show().css({"z-index":x});
		});
		$("#natr_edk2_li").click(function(){
			x=x+10,
			$("#natr_edk").show().css({"z-index":x});
		});
		$("#natr_edk_m_li").click(function(){
			x=x+10,
			$("#natr_edk").show().css({"z-index":x});
		});
		$("#poliakrilamid_li").click(function(){
			x=x+10,
			$("#poliakrilamid").show().css({"z-index":x});
		});
		$("#asphalt_li").click(function(){
			x=x+10,
			$("#asphalt").show().css({"z-index":x});
		});
		$("#asphalt_m_li").click(function(){
			x=x+10,
			$("#asphalt").show().css({"z-index":x});
		});
		$("#poliakrilat_li").click(function(){
			x=x+10,
			$("#poliakrilat").show().css({"z-index":x});
		});
		$("#request").click(function(){
			$("#form_request").show(),
			$("#request").hide();	
		});
		$("#request_m").click(function(){
			$("#form_request").show(),
			$("#request_m").hide();	
		});
	//$('*').not("#barit_li").click(function(){
	//	$("#barit").hide();
	//});
		$(".close_req").click(function(){
			$("#form_request").hide(),
			$("#request").show();
		});
		$(".close_req_mes").click(function(){
					$("#messegeResult").hide(),
					$("#request").show();
		});
		$(".close_req_mes2").click(function(){
			$("#messegeResult_err").hide(),
			$("#request").show();
		});
		$(".close").click(function(){
			$("#barit").hide();
			$("#microcalcit").hide();
			$("#kaliy").hide();
			$("#glina").hide();
			$("#krakhmal").hide();
			$("#ksantan").hide();
			$("#celluloza").hide();
			$("#bik_natr").hide();
			$("#grafit").hide();
			$("#izvest").hide();
			$("#natr_edk").hide();
			$("#poliakrilamid").hide();
			$("#asphalt").hide();
			$("#poliakrilat").hide();
		});
	$("#button").click(
		function(){
			FormRequest('messegeResult', 'form_request', 'request.php');
			return false;
		}
	);	
	function FormRequest (result, form, url){
		$.ajax({
			url: url,
			type: "POST",
			dataType: "html",
			data: $("#"+form).serialize(),
			success: function() {
				$("#messegeResult").show();
				$("#form_request").hide();
				$("#form_request")[0].reset();
				
			},
			error: function() {
				$("messegeResult_err").show();
			}
		});
		
		} 		
});
</script>
</head>
<body>
	<style>
		@font-face {
			font-family: "Pragmatica";
			src: url('../fonts/pragmatica.ttf');
		}
		body {
			background: url('../images/back_boch.jpeg') no-repeat;
			background-size: cover;
			height: 100%;
		}
		ul.navbar-nav {
			padding-right: 1%;
			padding-left: 2%;
			padding-top: 1%;
			float:right;
			font-size: 1.7em;
			font-family: "Serdolik", sans-serif;
			color:white;
		}

		li a {
			color:#E6E6E6;
			letter-spacing: 0.1em;
		}
		li a:hover {
		background-color:#E6E6E6;
		opacity: 0.8;
		color:#F50000;
		border-radius: 8px;
		}
		#slogan {
			font-family: "Serdolik", sans-serif;
			color:#F50000;
			text-shadow: 3px 3px #231D1D;
			font-size: 4.5em;
			font-weight: bold;
			padding-left: 9%;
			padding-top: 4%;
		}
		#text_desc {
			font-family: "Serdolik", sans-serif;
			color:#E6E6E6;
			text-shadow: 3px 3px #231D1D;
			font-size: 2.5em;
			font-weight: normal;
			padding-left: 9%;
			padding-top: 1%;
		}
		navbar-bottom {
			margin-bottom: 0px;
		}
		#foot {
			background-color: #343434;
			color:#E6E6E6;
		}
		#footer_text {
			padding-left: 7%;
			font-size: 1.2em;

		}
		#excist_head {
			font-family: "Serdolik", sans-serif;
			color:#F50000;
			text-shadow: 2px 2px #231D1D;
			font-size: 1.7em;
			font-weight: normal;
			padding-left: 20%;
			padding-top: 45%;
			letter-spacing: 1px;
		}
		#excist {
			font-family: "Serdolik", sans-serif;
			color:#E6E6E6;
			font-size: 1.4em;
			font-weight: normal;
			padding-left: 20%;
			padding-top: 3%;
			letter-spacing: 1px;
		}
		#excist_li {
			font-family: "Serdolik", sans-serif;
			color:#E6E6E6;
			font-size: 1.4em;
			font-weight: normal;
			padding-left: 35%;
			padding-top: 2%;
			list-style-type: square;
			letter-spacing: 1px;
		}
		li.excist_item {
			margin:1%;
		}
		li.excist_item:hover {
			text-decoration: none;
			padding-left: 3%;
			padding-right: 3%;
			padding-top: 1%;
			background-color:#E6E6E6;
			opacity: 0.8;
			color:#F50000;
			border-radius: 8px;
			cursor:pointer;
		}
		#hexagon {
			width:200px;
			height:120px;
			background-color: #343434;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#hexagon:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 100px solid transparent;
			border-right: 100px solid transparent;
			border-bottom: 50px solid #343434;
			top:-50px;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#hexagon:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 100px solid transparent;
			border-right: 100px solid transparent;
			border-top: 50px solid #343434;
			bottom:-50px;
			animation-name:hex1;
			animation-duration: 3s;
		}
	
		#hexagon_ins {
			top:-105px;
			left:-7px;
			margin-left: 4px;
			width:188px;
			height:110px;
			background-color: #A1A2A2;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#hexagon_ins:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 94px solid transparent;
			border-right: 94px solid transparent;
			border-bottom: 47px solid #A1A2A2;
			top:-47px;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#hexagon_ins:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 94px solid transparent;
			border-right: 94px solid transparent;
			border-top: 47px solid #A1A2A2;
			bottom:-47px;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#positions_main {
			width: 188px;
			background-color: #E6E6E6;
			position: relative;
			top:-12px;
			padding-top:40%;
			display: none;
			padding-bottom: 3%;
			padding-left: 0%;
			margin-left: 0%;
		}

		@keyframes hex1 {
			0% {visibility: hidden}
			20% {transform: scale(1,1);
				 -ms-transform: scale(1,1);
				 -webkit-transform: scale(1,1);}
			50% {transform: scale(1.5,1.5);
				 -ms-transform: scale(1.5,1.5);
				 -webkit-transform: scale(1.5,1.5);}
			100% {transform: scale(1,1);
				  -ms-transform: scale(1,1);
				 -webkit-transform: scale(1,1);}
		}
		#hexagon_ins:hover {
			top:-105px;
			left:-7px;
			margin-left: 4px;
			width:188px;
			height:110px;
			background-color: #E6E6E6;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#hexagon_ins:hover:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 94px solid transparent;
			border-right: 94px solid transparent;
			border-bottom: 47px solid #E6E6E6;
			top:-47px;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#hexagon_ins:hover:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 94px solid transparent;
			border-right: 94px solid transparent;
			border-top: 47px solid #E6E6E6;
			bottom:-47px;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#hexagon_ins:hover #positions_main{
			display: block;
		}	
		#hexagon_ins:hover:before #positions_main {
			display: block;
		}
		#hexagon_ins:hover:after #positions_main {
			display: block;
		}
		#hexagon_2 {
			width:300px;
			height:200px;
			background-color: #343434;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_2:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 150px solid transparent;
			border-right: 150px solid transparent;
			border-bottom: 75px solid #343434;
			top:-75px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_2:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 150px solid transparent;
			border-right: 150px solid transparent;
			border-top: 75px solid #343434;
			bottom:-75px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_ins_2 {
			top:-180px;
			left:-10px;
			margin-left: 4px;
			width:288px;
			height:180px;
			background-color: #A1A2A2;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_ins_2:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 144px solid transparent;
			border-right: 144px solid transparent;
			border-bottom: 72px solid #A1A2A2;
			top:-72px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_ins_2:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 144px solid transparent;
			border-right: 144px solid transparent;
			border-top: 72px solid #A1A2A2;
			bottom:-72px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_ins_2:hover {
			top:-180px;
			left:-10px;
			margin-left: 4px;
			width:288px;
			height:180px;
			background-color: #E6E6E6;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_ins_2:hover:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 144px solid transparent;
			border-right: 144px solid transparent;
			border-bottom: 72px solid #E6E6E6;
			top:-72px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_ins_2:hover:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 144px solid transparent;
			border-right: 144px solid transparent;
			border-top: 72px solid #E6E6E6;
			bottom:-72px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_3 {
			width:252px;
			height:160px;
			background-color: #343434;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_3:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 126px solid transparent;
			border-right: 126px solid transparent;
			border-bottom: 63px solid #343434;
			top:-63px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_3:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 126px solid transparent;
			border-right: 126px solid transparent;
			border-top: 63px solid #343434;
			bottom:-63px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_ins_3 {
			top:-140px;
			left:-8px;
			margin-left: 4px;
			width:240px;
			height:140px;
			background-color: #A1A2A2;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_ins_3:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 120px solid transparent;
			border-right: 120px solid transparent;
			border-bottom: 60px solid #A1A2A2;
			top:-60px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_ins_3:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 120px solid transparent;
			border-right: 120px solid transparent;
			border-top: 60px solid #A1A2A2;
			bottom:-60px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#positions_3_main {
			width: 240px;
			background-color: #E6E6E6;
			position: relative;
			top: 17px;
			padding-top:40%;
			display: none;
			padding-bottom: 3%;
			padding-left: 0%;
			margin-left: 0%;
		}
		#hexagon_ins_3:hover {
			top:-140px;
			left:-8px;
			margin-left: 4px;
			width:240px;
			height:140px;
			background-color: #E6E6E6;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_ins_3:hover:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 120px solid transparent;
			border-right: 120px solid transparent;
			border-bottom: 60px solid #E6E6E6;
			top:-60px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_ins_3:hover:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 120px solid transparent;
			border-right: 120px solid transparent;
			border-top: 60px solid #E6E6E6;
			bottom:-60px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_ins_3:hover #positions_3_main {
			display: block;
		}
		#hexagon_ins_3:hover:before #positions_3_main{
			display: block;
		}
		#hexagon_ins_3:hover:after #positions_3_main{
			display: block;
		}
		p.text_blocks {
			color: #343434;
			font-family: "Serdolik", sans-serif;
			font-size: 1.4em;
			font-weight: bold;
			text-align: center;
			padding-left:2%;
			padding-right: 2%;
			letter-spacing: 0.05em;
		}
		#page_about {
			border: 5px solid #E6E6E6; 
			margin:3%;
		}
		#header {
			color:#F50000;
			font-family: "Serdolik", sans-serif;
			font-size: 2em;
			font-weight: bold;
			text-shadow: 3px 3px #231D1D;
			padding-left:3%;
			padding-top: 3%;
		}
		#text_about {
			color:#E6E6E6;
			font-family: "Serdolik", sans-serif;
			font-size: 1.4em;
			text-align: left;
			padding-left:3%;
			padding-right: 3%;
			padding-top: 2%;
			letter-spacing: 0.05em;
			text-align: justify;
			list-style-type: square;
		}
		#myCarousel {
			padding-top: 2%;
			padding-bottom: 2%;
		}
		#positions {
			width: 188px;
			background-color: #E6E6E6;
			position: relative;
			top:-12px;
			padding-top:40%;
			display: none;
			padding-bottom: 3%;
		}
		#positions_2 {
			width: 288px;
			background-color: #E6E6E6;
			position: relative;
			margin-top: 19%;
			top:-2px;
			padding-top:35%;
			display: none;
			padding-bottom: 3%;
		}
		#positions_3 {
			width: 240px;
			background-color: #E6E6E6;
			position: relative;
			margin-top: 13%;
			top:-4px;
			padding-top:25%;
			display: none;
			padding-bottom: 3%;
		}
		#list_products {
			color: #343434;
			list-style-type: square;
			font-family: "Serdolik", sans-serif;
			font-size: 1.2em;
			padding-right: 3%;
			padding-top: 2%;
			padding-bottom: 3%;
			text-align: left;
		}
		li.item {
			margin:5%;
			cursor: pointer;
		}
		li.item:hover {
			text-decoration: none;
			padding-left: 2%;
			padding-right: 2%;
			padding-top: 1%;
			background-color:#343434;
			opacity: 0.7;
			color:#E6E6E6;
			border-radius: 8px;
		}
		#hexagon_pr {
			width:200px;
			height:120px;
			background-color: #343434;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#hexagon_pr:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 100px solid transparent;
			border-right: 100px solid transparent;
			border-bottom: 50px solid #343434;
			top:-50px;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#hexagon_pr:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 100px solid transparent;
			border-right: 100px solid transparent;
			border-top: 50px solid #343434;
			bottom:-50px;
			animation-name:hex1;
			animation-duration: 3s;
		}
	
		#hexagon_ins_pr {
			top:-105px;
			left:-7px;
			margin-left: 4px;
			width:188px;
			height:110px;
			background-color: #A1A2A2;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#hexagon_ins_pr:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 94px solid transparent;
			border-right: 94px solid transparent;
			border-bottom: 47px solid #A1A2A2;
			top:-47px;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#hexagon_ins_pr:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 94px solid transparent;
			border-right: 94px solid transparent;
			border-top: 47px solid #A1A2A2;
			bottom:-47px;
			animation-name:hex1;
			animation-duration: 3s;
		}
		@keyframes hex1 {
			0% {visibility: hidden}
			20% {transform: scale(1,1);
				 -ms-transform: scale(1,1);
				 -webkit-transform: scale(1,1);}
			50% {transform: scale(1.5,1.5);
				 -ms-transform: scale(1.5,1.5);
				 -webkit-transform: scale(1.5,1.5);}
			100% {transform: scale(1,1);
				  -ms-transform: scale(1,1);
				 -webkit-transform: scale(1,1);}
		}
		#hexagon_ins_pr:hover {
			top:-105px;
			left:-7px;
			margin-left: 4px;
			width:188px;
			height:110px;
			background-color: #E6E6E6;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#hexagon_ins_pr:hover:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 94px solid transparent;
			border-right: 94px solid transparent;
			border-bottom: 47px solid #E6E6E6;
			top:-47px;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#hexagon_ins_pr:hover:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 94px solid transparent;
			border-right: 94px solid transparent;
			border-top: 47px solid #E6E6E6;
			bottom:-47px;
			animation-name:hex1;
			animation-duration: 3s;
		}
		#hexagon_ins_pr:hover #positions {
			display: block;
		}
		#hexagon_ins_pr:hover:before #positions {
			display: block;
		}
		#hexagon_ins_pr:hover:after #positions {
			display: block;
		}
		#hexagon_2_pr {
			width:300px;
			height:200px;
			background-color: #343434;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_2_pr:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 150px solid transparent;
			border-right: 150px solid transparent;
			border-bottom: 75px solid #343434;
			top:-75px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_2_pr:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 150px solid transparent;
			border-right: 150px solid transparent;
			border-top: 75px solid #343434;
			bottom:-75px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_ins_2_pr {
			top:-180px;
			left:-10px;
			margin-left: 4px;
			width:288px;
			height:180px;
			background-color: #A1A2A2;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_ins_2_pr:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 144px solid transparent;
			border-right: 144px solid transparent;
			border-bottom: 72px solid #A1A2A2;
			top:-72px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_ins_2_pr:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 144px solid transparent;
			border-right: 144px solid transparent;
			border-top: 72px solid #A1A2A2;
			bottom:-72px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_ins_2_pr:hover {
			top:-180px;
			left:-10px;
			margin-left: 4px;
			width:288px;
			height:180px;
			background-color: #E6E6E6;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_ins_2_pr:hover:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 144px solid transparent;
			border-right: 144px solid transparent;
			border-bottom: 72px solid #E6E6E6;
			top:-72px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_ins_2_pr:hover:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 144px solid transparent;
			border-right: 144px solid transparent;
			border-top: 72px solid #E6E6E6;
			bottom:-72px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 2s;
		}
		#hexagon_ins_2_pr:hover #positions_2 {
			display: block;
		}
		#hexagon_ins_2_pr:hover:before #positions_2 {
			display: block;
		}
		#hexagon_ins_2_pr:hover:after #positions_2 {
			display: block;
		}
		#hexagon_3_pr {
			width:252px;
			height:160px;
			background-color: #343434;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_3_pr:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 126px solid transparent;
			border-right: 126px solid transparent;
			border-bottom: 63px solid #343434;
			top:-63px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_3_pr:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 126px solid transparent;
			border-right: 126px solid transparent;
			border-top: 63px solid #343434;
			bottom:-63px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_ins_3_pr {
			top:-140px;
			left:-8px;
			margin-left: 4px;
			width:240px;
			height:140px;
			background-color: #A1A2A2;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_ins_3_pr:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 120px solid transparent;
			border-right: 120px solid transparent;
			border-bottom: 60px solid #A1A2A2;
			top:-60px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_ins_3_pr:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 120px solid transparent;
			border-right: 120px solid transparent;
			border-top: 60px solid #A1A2A2;
			bottom:-60px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_ins_3_pr:hover {
			top:-140px;
			left:-8px;
			margin-left: 4px;
			width:240px;
			height:140px;
			background-color: #E6E6E6;
			position: relative;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_ins_3_pr:hover:before {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 120px solid transparent;
			border-right: 120px solid transparent;
			border-bottom: 60px solid #E6E6E6;
			top:-60px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_ins_3_pr:hover:after {
			content:"";
			width: 0;
			height: 0;
			position: absolute;
			border-left: 120px solid transparent;
			border-right: 120px solid transparent;
			border-top: 60px solid #E6E6E6;
			bottom:-60px;
			animation-name:hex1;
			animation-duration: 3s;
			animation-delay: 4s;
		}
		#hexagon_ins_3_pr:hover #positions_3 {
			display: block;
		}
		#hexagon_ins_3_pr:hover:before #positions_3 {
			display: block;
		}
		#hexagon_ins_3_pr:hover:after #positions_3 {
			display: block;
		}
		#hexagon_ins_3_main:hover #positions {
			display: block;
		}
		#hexagon_ins_3_main:hover:before #positions {
			display: block;
		}
		#hexagon_ins_3_main:hover:after #positions {
			display: block;
		}
		#choice {
			margin-left: 83%;
			margin-right: 5%;
			background-color: #E6E6E6;
			opacity: 0.9;
			border-radius: 5px;
			padding: 0.7%;
			/*padding-right: 0.5%;
			padding-top: 0.5%;
			padding-bottom: 2%;
			padding-left: 1%;*/
			-o-box-sizing: content-box;
			-webkit-box-sizing: content-box;
			box-sizing: content-box;
			position: relative;
			
		}
		.var_choice {
			margin: 1%;
			padding: 2%;
			position: relative;
			display: inline-block;
			vertical-align: center;
		}
		.var_choice:first-child {
			border-right: 2px solid #343434;
			float: left;
		}
		
		#var_choice_a {
			color: #343434;
			font-family: "Serdolik", sans-serif;
			font-size: 1.2em;
			font-weight: bold;
			text-align: center;	
		}
		.var_choice:hover {
			background-color: #343434;
			color:#E6E6E6;
			text-decoration: none;
			border:none;
		}
		#var_choice_a:hover {
			color:#E6E6E6;
			text-decoration: none;
		}
		
		#prod_list_ul {
			color: #E6E6E6;
			font-family: "Serdolik", sans-serif;
			font-size: 1.6em;
			margin-right: 10%;
			padding-top: 2%;
			padding-bottom: 3%;
			margin-left: 20%;
			letter-spacing: 0.1em;
			list-style-type: none;
		}
		li.prod_list_item {
			margin: 3%;
			padding-left: 3%;
			padding-right: 3%;
			padding-top: 1%;
		}
		li.prod_list_item:hover {
			text-decoration: none;
			padding-left: 3%;
			padding-right: 3%;
			padding-top: 1%;
			background-color:#E6E6E6;
			opacity: 0.8;
			color:#F50000;
			border-radius: 8px;
			cursor:pointer;
		}
		div.pr_details {
			width: 50%;
			margin-left: 25%;
			margin-right: 25%;
			margin-bottom: 2%;
			background-color: #E6E6E6;
			border-radius: 15px;
			border: 5px solid #343434;
			color: #343434;
			position: fixed;
			z-index: 999;
			display: none;
		}
		div.pr_details_m {
			width: 80%;
			margin-left: 10%;
			margin-right: 10%;
			margin-bottom: 2%;
			background-color: #E6E6E6;
			border-radius: 15px;
			border: 5px solid #343434;
			color: #343434;
			position: absolute;
			z-index: 999;
			display: none;
		}
		p.pr_details_text {
			margin-left: 3%;
			margin-right: 3%;
			margin-top: 3%;
			color: #343434;
			font-family: "Serdolik", sans-serif;
			font-size: 1.2em;
			text-align: left;
			padding-top: 1.5%;
			padding-bottom: 1.5%;
			letter-spacing: 0.05em;
			text-align: justify;
		}
		div.close {
			position: absolute;
			right: 1%;
			top:1%;
			opacity: 0.6;
			font-size: 1.5em;
		}
		div.close:hover {
			opacity: 1;
			color:#F50000;
			cursor: pointer;
		}
		div.close_req {
			position: absolute;
			right: 1%;
			top:1%;
			opacity: 0.6;
			font-size: 1.5em;
		}
		div.close_req:hover {
			opacity: 1;
			color:#F50000;
			cursor: pointer;
		}
		div.close_req_mes {
			position: absolute;
			right: 1%;
			top:1%;
			opacity: 0.6;
			font-size: 1.5em;
		}
		div.close_req_mes:hover {
			opacity: 1;
			color:#F50000;
			cursor: pointer;
		}
		div.close_req_mes2 {
			position: absolute;
			right: 1%;
			top:1%;
			opacity: 0.6;
			font-size: 1.5em;
		}
		div.close_req_mes2:hover {
			opacity: 1;
			color:#F50000;
			cursor: pointer;
		}
		#news {
			margin:4%;
			border:5px solid #E6E6E6; 
		}
		#point_news {
			margin-left: 6%;
			margin-right: 6%;
			color:#E6E6E6;
			font-family: "Serdolik", sans-serif;
			font-size: 1.4em;
			text-align: left;
			padding-top: 1.5%;
			padding-bottom: 1.5%;
			letter-spacing: 0.05em;
			text-align: justify;
			border-bottom: 1px solid #E6E6E6;
		}
		#point_news:last-child {
			border:none;
		}
		#point_news_a {
			color:#E6E6E6;
			font-family: "Serdolik", sans-serif;
			text-align: left;
			letter-spacing: 0.05em;
			text-align: justify;
			text-decoration: underline;
		}
		#point_news_a:hover {
			cursor: pointer;
			color:#F50000;
		}
		#map {
			margin-left: 7%;
			margin-top:4%;
			margin-bottom: 4%;
			border:2px solid #343434;
			padding: 0%;
			width:547px;
			height: 386px;
		}
		#location_text {
			margin-top: 10%;
			padding-top: 4%;
			color:#E6E6E6;
			font-family: "Serdolik", sans-serif;
			font-size: 1.4em;
			
			letter-spacing: 0.05em;
		}
		#block_loc {
			margin-left: 8%;
			margin-top: 4%;
		}
		#request {
			position: fixed;
			margin-left: 80%;
			margin-right: 5%;
			margin-top: 3%;
			z-index: 9999999;
			background-color: #E6E6E6; 
			opacity: 0.9;
			padding-right: 1%;
			padding-left: 1%;
			padding-top: 1%;
			float:right;
			font-size: 1.5em;
			font-weight: bold;
			font-family: "Serdolik", sans-serif;
			color:#F50000;
			border-radius: 10px;
			box-shadow: 3px 3px #231D1D;

		}
		#request_m {
			position: absolute;
			margin-left: 80%;
			margin-right: 5%;
			margin-top: 3%;
			z-index: 9999999;
			background-color: #E6E6E6; 
			opacity: 0.9;
			padding-right: 1%;
			padding-left: 1%;
			padding-top: 1%;
			float:right;
			font-size: 1.5em;
			font-weight: bold;
			font-family: "Serdolik", sans-serif;
			color:#F50000;
			border-radius: 10px;
			box-shadow: 3px 3px #231D1D;
		}
		#request:hover {
			background-color: #343434;
			color: white; 
			cursor: pointer;
		}
		#request_m:hover {
			background-color: #343434;
			color: white; 
			cursor: pointer;
		}
		#form_request {
			z-index: 99999999;
			position: fixed;
			margin-right: 20%;
			margin-left: 20%;
			width: 60%;
			padding: 3%;
			background-color: #E6E6E6; 
			border-radius: 7px;
			border: 1px solid #343434;
			display: none;
		}
		#form_request_m {
			z-index: 99999999;
			position: absolute;
			margin-right: 20%;
			margin-left: 20%;
			width: 60%;
			padding: 3%;
			background-color: #E6E6E6; 
			border-radius: 7px;
			border: 1px solid #343434;
			display: none;
		}
		#inp_textbox {
			margin-bottom: 3%;
		}
		#inp_textbox:focus {
			border: 1px solid #F50000;
		}
		#button {
			float: right;
			font-family: "Serdolik", sans-serif;
			color:#F50000;
			font-size: 1.1em;
			font-weight: bold;
		}
		#messegeResult {
			z-index: 9999999999;
			position: fixed;
			margin-right: 35%;
			margin-left: 35%;
			width: 30%;
			padding: 3%;
			background-color: #E6E6E6; 
			border-radius: 7px;
			border: 1px solid #343434;
			display: none;
			font-size: 1.1em;
		}
		#messegeResult_err {
			z-index: 9999999999;
			position: fixed;
			margin-right: 35%;
			margin-left: 35%;
			width: 30%;
			padding: 3%;
			background-color: #E6E6E6; 
			border-radius: 7px;
			border: 1px solid #343434;
			display: none;
			font-size: 1.1em;
		}
		p.messegeText {
			font-size: 1.1em;
			text-align: center;
		}
	</style>
	<div class="navbar navbar-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<img src="images/logo.png" alt="logo" style="width:100%; height:100%; margin-left:5%; margin-right: 5%; float:left; ">
				</div>	
				<ul class="nav navbar-nav">
					<li class="navig"><a href="index.php">Главная</a></li>
					<li class="navig"><a href="index.php?page=aboutComp">О компании</a></li>
					<li class="navig"><a href="index.php?page=product">Продукция</a></li>
					<li class="navig"><a href="index.php?page=news">Новости</a></li>
					<li class="navig"><a href="index.php?page=contacts">Контакты</a></li>
				</ul>
			</div>
		</div>	
		
	<?php	
		ini_set('display_errors', 'Off');
		$uagent=$_SERVER['HTTP_USER_AGENT'];
		$page=$_GET['page'];
		if(!isset($page)) {
			$check_mob=preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$uagent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($uagent,0,4));
			if ($check_mob==1) {
				require('templates/m_main.php');
			} else {
				  require('templates/main.php');
			};
		} elseif ($page =='aboutComp') {
			require('templates/aboutComp.php');
		} elseif ($page == 'product') {
			$check_mob=preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$uagent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($uagent,0,4));
			if ($check_mob==1) {
				require('templates/m_product_list.php');
			} else {
				  require('templates/product.php');
			}
		} elseif ($page == 'product_list') {
			require('templates/product_list.php');
		} elseif ($page == 'news') {
			require('templates/news.php');
		} elseif ($page == 'contacts') {
			$check_mob=preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$uagent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($uagent,0,4));
			if ($check_mob==1) {
				require('templates/m_contacts.php');
			} else {
				  require('templates/contacts.php');
			}	
		}
	?>
		
	<div class="navbar navbar-bottom">
		<img src="images/footer.png" alt="footer img" style="width:33%; height:100px;" >
		<img src="images/footer.png" alt="footer img" style="width:33%; height:100px;" >
		<img src="images/footer.png" alt="footer img" style="width:33%; height:100px;" >
	
		<div id="foot" class="container-fluid">
			<div class="row">
				<div class="col-sm-4">
					<div id="footer_text">
						<div class="number">+7 (499) 755-65-57</div>
					</div>
					<div id="footer_text">
						<div class="number">+7 (383) 279-24-30 (бухгалтерия)</div>
						
					</div>
				</div>
				<div id="footer_text" class="col-sm-4">e-mail: info@ros-allyans.ru</div>
				<div class="col-sm-4">
					<p id="footer_text">Юридический/почтовый адрес:</p>
					<p id="footer_text">630015, г. Новосибирск, ул. Королёва, 29,оф.702</p>
				</div>
			</div>	
		</div>
		</div>

</body>
</html>