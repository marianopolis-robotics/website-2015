<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Marianopolis Robotics Home</title>
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
		<!--<link href="css/bootstrap.css" rel="stylesheet">-->
		
		<link rel="shortcut icon" href="../Images/robot.ico">
		
		<script type="text/javascript">
			var i = 0;
			var iMax = 9;
			
			function ImageSelection(temp){
				if(temp == 0){
					if(i == 0){
						i = iMax;
					} else {
						i = i - 1;
					}
				} else {
					if(i == iMax){
						i = 0;
					} else {
						i = i + 1;
					}
				}
				console.log(i);
				ColorChange();
			}
			function ColorChange(){
				img0.classList.remove('visible');
				img1.classList.remove('visible');
				img2.classList.remove('visible');
				img3.classList.remove('visible');
				img4.classList.remove('visible');
				img5.classList.remove('visible');
				img6.classList.remove('visible');
				img7.classList.remove('visible');
				img8.classList.remove('visible');
				img9.classList.remove('visible');
				if(i==0){
					img0.classList.add('visible');
				}if(i==1){
					img1.classList.add('visible');
				}if(i==2){
					img2.classList.add('visible');
				}if(i==3){
					img3.classList.add('visible');
				}if(i==4){
					img4.classList.add('visible');
				}if(i==5){
					img5.classList.add('visible');
				}if(i==6){
					img6.classList.add('visible');
				}if(i==7){
					img7.classList.add('visible');
				}if(i==8){
					img8.classList.add('visible');
				}if(i==9){
					img9.classList.add('visible');
				}
			}
		</script>
	</head>
	<body>
		
		
		<main class="centering">
			<? include '../Includes/header.php'; ?>	
			<div id="content">
				<h1 class="contentText">Sandy</h1>
				<h2 class="contentText">Design</h2>
				<h3 class="contentText">CHASSIS AND BODY</h3>
				<p class="contentText">Frame: 1"x1" Aluminum 80-20 extrusion and 1-1/4x1-1/4" aluminum square tubing with 1/8" wall thickness</p>
				<p class="contentText">Wheels: 4 x Grey AndyMark 6" Wheels</p>
				<h3 class="contentText">MAJOR COMPONENTS</h3>
				<p class="contentText">Motors: 2 x BaneBots motors with 20:1 ratio on a 3.5:1 chain reduction
				2 x Black window lift motors
				2 x Makita power drills</p>
				<p class="contentText">Batteries: 7.2V VEX batteries
				2 x 12V Drill batteries </p>

				<h3 class="contentText">LOGISTICS</h3>
				<p class="contentText">Main Processor: VEX Cortex Microcontroller</p>
				<p class="contentText">Program: RobotC</p>
				<p class="contentText">Controller: VEXnet Joystick</p>

			</div>
			<!--<div id="tablet">
				<div class="gallery">
					<img id="img0" class="transitions visible tabletContent" src="../Images/yellowBox.png"/>
					<img id="img1" class="transitions tabletContent" src="../Images/blueBox.png"/>
					<img id="img2" class="transitions tabletContent" src="../Images/red.png"/>
					<img id="img3" class="transitions tabletContent" src="../Images/black.png"/>
					<img id="img4" class="transitions tabletContent" src="../Images/greenBox.png"/>
					<img id="img5" class="transitions tabletContent" src="../Images/white.png"/>
					<img id="img6" class="transitions tabletContent" src="../Images/yellowBox.png"/>
					<img id="img7" class="transitions tabletContent" src="../Images/blueBox.png"/>
					<img id="img8" class="transitions tabletContent" src="../Images/red.png"/>
					<img id="img9" class="transitions tabletContent" src="../Images/black.png"/>
					<img id="buttonLeft" onclick="ImageSelection(0)" src="../Images/blackBox.png" />
					<img id="buttonRight" onclick="ImageSelection(1)" src="../Images/blackBox.png" />
				</div>
			</div>-->
			<? include '../Includes/sitemap.php';?>
		</main>
	</body>
</html>