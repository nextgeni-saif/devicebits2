<?php
$json = '[{
   "outputOrder": "1",
   "step": "Press the camera button to launch the camera",
   "ImageLocation": "demo\/mainPhonePictureForTutorial.jpg",
   "buttonXUpperLeft": "106",
   "buttonYUpperLeft": "235",
   "buttonXSize": "40",
   "buttonYSize": "40",
   "screenXUpperLeft": "8",
   "screenYUpperLeft": "37",
   "screenXSize": "0",
   "screenYSize": "0",
   "buttonTypeFK": "10002"
}, {
   "outputOrder": "2",
   "step": "Press the capture button",
   "ImageLocation": "demo\/CameraScreen.jpg",
   "buttonXUpperLeft": "68",
   "buttonYUpperLeft": "292",
   "buttonXSize": "60",
   "buttonYSize": "40",
   "screenXUpperLeft": "0",
   "screenYUpperLeft": "0",
   "screenXSize": "190",
   "screenYSize": "340",
   "buttonTypeFK": "2"
}, {
   "outputOrder": "3",
   "step": "Press the home button",
   "ImageLocation": "demo\/CameraScreen.jpg",
   "buttonXUpperLeft": "77",
   "buttonYUpperLeft": "380",
   "buttonXSize": "50",
   "buttonYSize": "20",
   "screenXUpperLeft": "0",
   "screenYUpperLeft": "0",
   "screenXSize": "190",
   "screenYSize": "340",
   "buttonTypeFK": "1"
}, {
   "outputOrder": "4",
   "step": "Congratulations you have completed the tutorial",
   "ImageLocation": "demo\/mainPhonePictureForTutorial.jpg",
   "buttonXUpperLeft": "0",
   "buttonYUpperLeft": "0",
   "buttonXSize": "0",
   "buttonYSize": "0",
   "screenXUpperLeft": "8",
   "screenYUpperLeft": "37",
   "screenXSize": "190",
   "screenYSize": "340",
   "buttonTypeFK": "0"
}]';

$decode = json_decode($json);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
 <link rel="shortcut icon" href="favicon.ico">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div id="tutorialSteps" class="tutorialSteps multiStep">
<?php
	for($i=0;$i < count($decode) ; $i++) {
?>
            <a id="step_<?php echo $i; ?>" class="tutorialStep" onclick="mcTutorialPlayer.playStep (this)">
              <span class="stepNum"><?php echo $decode[$i]->outputOrder; ?>.</span>
              <span class="stepInst"><?php echo $decode[$i]->step; ?></span>
            </a>
			<br>
<?php
}
?>
          <div id="divButtonsStep" class="clearfix" align="center">
            <div id="divButtonsPrev" class="clearfix ">
              <a href="javascript:void(0)" class="imageLink" id="btnTutorialPrev" onclick="mcTutorialPlayer.playPrevStep()"><span>&lt;Prev</span></a><a href="javascript:void(0)" class="imageLink" id="btnTutorialFirst" onclick="mcTutorialPlayer.playFirstStep()"><span>&lt;&lt;First</span></a>
            </div>
            <div id="divButtonsNext" class="clearfix disable">
              <a href="javascript:void(0)" class="imageLink" id="btnTutorialNext" onclick="mcTutorialPlayer.playNextStep()"><span>Next&gt;</span></a><a href="javascript:void(0)" class="imageLink" id="btnTutorialLast" onclick="mcTutorialPlayer.playLastStep()"><span>Last&gt;&gt;</span></a>
            </div>
            <span id="stepsCounter">Step <strong id="lblCurrentStep">4</strong> of <strong>4</strong></span>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
<?php
	for($i=0;$i < count($decode) ; $i++) {
?>
		<div class="phone">
          <a href="#" class="main-button show" style="
          left: <?php echo $decode[$i]->buttonXUpperLeft; ?>px;
          top: <?php echo $decode[$i]->buttonYUpperLeft; ?>px;
          width: <?php echo $decode[$i]->buttonXSize; ?>px;
          height: <?php echo $decode[$i]->buttonYSize; ?>px;
          "></a>
          <img src="http://s3.amazonaws.com/tpassets.devicebits.com/<?php echo $decode[$i]->ImageLocation; ?>" <?php if($decode[$i]->screenXSize > 0) { ?> width="<?php echo $decode[$i]->screenXSize?>" <?php } ?> <?php if($decode[$i]->screenYSize > 0) { ?> height="<?php echo $decode[$i]->screenYSize?>" <?php } ?>>
        </div>ssssseeeee<!-- .phone -->
<?php
}
?>
      </div>
    </div>
  </div>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/jquery-migrate-1.2.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
