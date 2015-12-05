<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Marianopolis Robotics Home</title>
		<link rel="stylesheet" type="text/css" href="../css/mainStyles.css">
		<!--<link href="css/bootstrap.css" rel="stylesheet">-->
		
		<link rel="shortcut icon" href="../Images/robot.ico">
		<style>
			#whiteBack{
				position:fixed;
				margin:0px;
				top:0px;
				left:0px;
				width:100%;
				z-index:1;
				height:100%;
				opacity:0;
				background-image:url(../Images/white.png);
				background-size:100% 100%;
			}
			.teamLarge{
				opacity:0;
				position:fixed;
				top:50%;
				left:50%;
				margin-top:-150px;
				margin-left:-250px;
				width:500px;
				height:300px;
				background-image:url(../Images/red.png);
				background-size:100% 100%;
			}
			.idPhotos{
				margin:25px;
				width:250px;
				height:166px;
				background-image:url(../Images/greenBox.png);
				background-size:100% 100%;
			}
			.idPhotos:hover{
				width:300px;
				height:200px;
				margin:0px;
			}
		</style>
		<script type="text/javascript">
			function Zoom(ID){
				switch(ID){
					case 0:
						imgLarge0.classList.add('clickAble');
						break;
					case 1:
						imgLarge1.classList.add('clickAble');
						break;
					case 2:
						imgLarge2.classList.add('clickAble');
						break;
					case 3:
						imgLarge3.classList.add('clickAble');
						break;
					case 4:
						imgLarge4.classList.add('clickAble');
						break;
					case 5:
						imgLarge5.classList.add('clickAble');
						break;
					case 6:
						imgLarge6.classList.add('clickAble');
						break;
					case 7:
						imgLarge7.classList.add('clickAble');
						break;
					case 8:
						imgLarge8.classList.add('clickAble');
						break;
					case 9:
						imgLarge9.classList.add('clickAble');
						break;
					case 10:
						imgLarge10.classList.add('clickAble');
						break;
					case 11:
						imgLarge11.classList.add('clickAble');
						break;
					case 12:
						imgLarge12.classList.add('clickAble');
						break;
					case 13:
						imgLarge13.classList.add('clickAble');
						break;
					case 14:
						imgLarge14.classList.add('clickAble');
						break;
					case 15:
						imgLarge15.classList.add('clickAble');
						break;
					case 16:
						imgLarge16.classList.add('clickAble');
						break;
					case 17:
						imgLarge17.classList.add('clickAble');
						break;
					case 18:
						imgLarge18.classList.add('clickAble');
						break;
					case 19:
						imgLarge19.classList.add('clickAble');
						break;
					case 20:
						imgLarge20.classList.add('clickAble');
						break;
				}
/*				if(ID==0){
					imgLarge0.classList.add('clickAble');
				}
				if(ID==1){
					imgLarge1.classList.add('clickAble');
				}
				if(ID==2){
					imgLarge2.classList.add('clickAble');
				}
				if(ID==3){
					imgLarge3.classList.add('clickAble');
				}
				if(ID==4){
					imgLarge4.classList.add('clickAble');
				}
				if(ID==5){
					imgLarge5.classList.add('clickAble');
				}
				if(ID==6){
					imgLarge6.classList.add('clickAble');
				}
				if(ID==7){
					imgLarge7.classList.add('clickAble');
				}
				if(ID==8){
					imgLarge8.classList.add('clickAble');
				}
				if(ID==9){
					imgLarge9.classList.add('clickAble');
				}
				if(ID==10){
					imgLarge10.classList.add('clickAble');
				}
				if(ID==11){
					imgLarge11.classList.add('clickAble');
				}
				if(ID==12){
					imgLarge12.classList.add('clickAble');
				}
				if(ID==13){
					imgLarge13.classList.add('clickAble');
				}
				if(ID==14){
					imgLarge14.classList.add('clickAble');
				}
				if(ID==15){
					imgLarge15.classList.add('clickAble');
				}
				if(ID==16){
					imgLarge16.classList.add('clickAble');
				}
				if(ID==17){
					imgLarge17.classList.add('clickAble');
				}
				if(ID==18){
					imgLarge18.classList.add('clickAble');
				}
				if(ID==19){
					imgLarge19.classList.add('clickAble');
				}
				if(ID==20){
					imgLarge20.classList.add('clickAble');
				}*/

				
				whiteBack.classList.add('whiteBackVisible')
			}
			function NormalBack(){
				whiteBack.classList.remove('whiteBackVisible')
				imgLarge0.classList.remove('clickAble');
				imgLarge1.classList.remove('clickAble');
				imgLarge2.classList.remove('clickAble');
				imgLarge3.classList.remove('clickAble');
				imgLarge4.classList.remove('clickAble');
				imgLarge5.classList.remove('clickAble');
				imgLarge6.classList.remove('clickAble');
				imgLarge7.classList.remove('clickAble');
				imgLarge8.classList.remove('clickAble');
				imgLarge9.classList.remove('clickAble');
				imgLarge10.classList.remove('clickAble');
				imgLarge11.classList.remove('clickAble');
				imgLarge12.classList.remove('clickAble');
				imgLarge13.classList.remove('clickAble');
				imgLarge14.classList.remove('clickAble');
				imgLarge15.classList.remove('clickAble');
				imgLarge16.classList.remove('clickAble');
				imgLarge17.classList.remove('clickAble');
				imgLarge18.classList.remove('clickAble');
				imgLarge19.classList.remove('clickAble');
				imgLarge20.classList.remove('clickAble');
			}
		</script>
	</head>
	<body>
		<div id="whiteBack" onclick="NormalBack()" src="../Images/white.png"/></div>
		<div id="imgLarge0" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge1" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge2" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge3" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge4" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge5" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge6" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge7" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge8" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge9" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge10" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge11" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge12" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge13" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge14" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge15" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge16" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge17" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge18" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge19" class="teamLarge" src="../Images/red.png"/></div>
		<div id="imgLarge20" class="teamLarge" src="../Images/red.png"/></div>
		<?
			include '../Includes/header.php';
		?>
		<main class="centering" id="mainBody">
			<div id="relative" >
				<? include '../Includes/sitemap.php';?>
			</div>
			
			
			<div id="contentHolder" id="teamContent">
				<ul id="teamHolder">
					<li><img onclick="Zoom(0)" id="teamID0" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(1)" id="teamID1" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(2)" id="teamID2" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(3)" id="teamID3" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(4)" id="teamID4" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(5)" id="teamID5" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(6)" id="teamID6" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(7)" id="teamID7" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(8)" id="teamID8" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(9)" id="teamID9" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(10)" id="teamID10" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(11)" id="teamID11" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(12)" id="teamID12" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(13)" id="teamID13" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(14)" id="teamID14" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(15)" id="teamID15" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(16)" id="teamID16" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(17)" id="teamID17" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(18)" id="teamID18" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(19)" id="teamID19" src="../Images/greenBox.png" class="idPhotos"/></li>
					<li><img onclick="Zoom(20)" id="teamID20" src="../Images/greenBox.png" class="idPhotos"/></li>
				</ul>
			</div>
		</main>
	</body>
</html>