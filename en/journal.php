<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Marianopolis Robotics Home</title>
		<link rel="stylesheet" type="text/css" href="../css/mainStyles.css">
		<!--<link href="css/bootstrap.css" rel="stylesheet">-->
		
		<link rel="shortcut icon" href="Images/robot.ico">
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
				img0.classList.remove('pageTurn');
				img1.classList.remove('pageTurn');
				img2.classList.remove('pageTurn');
				img3.classList.remove('pageTurn');
				img4.classList.remove('pageTurn');
				img5.classList.remove('pageTurn');
				img6.classList.remove('pageTurn');
				img7.classList.remove('pageTurn');
				img8.classList.remove('pageTurn');
				img9.classList.remove('pageTurn');
				if(i==0){
					img0.classList.add('pageTurn');
				}if(i==1){
					img1.classList.add('pageTurn');
				}if(i==2){
					img2.classList.add('pageTurn');
				}if(i==3){
					img3.classList.add('pageTurn');
				}if(i==4){
					img4.classList.add('pageTurn');
				}if(i==5){
					img5.classList.add('pageTurn');
				}if(i==6){
					img6.classList.add('pageTurn');
				}if(i==7){
					img7.classList.add('pageTurn');
				}if(i==8){
					img8.classList.add('pageTurn');
				}if(i==9){
					img9.classList.add('pageTurn');
				}
			}
		</script>
	</head>
	<body>
		<?
			include '../Includes/header.php';
		?>
		
		<main class="centering" id="mainBody">
			<div id="relative" >
				<? include '../Includes/sitemap.php';?>
			</div>
			
			<div id="tablet">
				<span class="gallery">
					<img id="img0" class="transitions pageTurn journalContent" src="../Images/yellowBox.png"/>
					<img id="img1" class="transitions journalContent" src="../Images/blueBox.png"/>
					<img id="img2" class="transitions journalContent" src="../Images/red.png"/>
					<img id="img3" class="transitions journalContent" src="../Images/black.png"/>
					<img id="img4" class="transitions journalContent" src="../Images/greenBox.png"/>
					<img id="img5" class="transitions journalContent" src="../Images/white.png"/>
					<img id="img6" class="transitions journalContent" src="../Images/yellowBox.png"/>
					<img id="img7" class="transitions journalContent" src="../Images/blueBox.png"/>
					<img id="img8" class="transitions journalContent" src="../Images/red.png"/>
					<img id="img9" class="transitions journalContent" src="../Images/black.png"/>
					<img id="buttonLeft" onclick="ImageSelection(0)" src="../Images/blackBox.png" />
					<img id="buttonRight" onclick="ImageSelection(1)" src="../Images/blackBox.png" />
				</span>
			</div>
		</main>
	</body>
</html>