<?php
$json = '[{
   "outputOrder": "1",
   "step": "Press the camera button to launch the camera",
   "ImageLocation": "demo\/mainPhonePictureForTutorial.jpg",
   "buttonXUpperLeft": "106",
   "buttonYUpperLeft": "235",
   "buttonXSize": "40",
   "buttonYSize": "40",
   "screenXUpperLeft": "0",
   "screenYUpperLeft": "0",
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
   "screenXUpperLeft": "8",
   "screenYUpperLeft": "37",
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
   "screenXUpperLeft": "8",
   "screenYUpperLeft": "37",
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
   "screenXUpperLeft": "0",
   "screenYUpperLeft": "0",
   "screenXSize": "0",
   "screenYSize": "0",
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
  <link href="css_dev/bootstrap.min.css" rel="stylesheet">
  <link href="css_dev/font-awesome.min.css" rel="stylesheet">
  <link href="css_dev/main.css" rel="stylesheet">
  <!-- <link href="css/responsive.css" rel="stylesheet"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
 <link rel="shortcut icon" href="favicon.ico">
</head>
<body id="deviceBits" class="tutorial-page">

  <header>
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <img src="straighttalk_logo.gif">
        </div>
        <div class="col-sm-7">
          <h1>Everything you need in a cell phone without a contract</h1>
        </div>
        <div class="col-sm-3">
          <div id="divSearch">
            <input id="txtSearch" size="20" placeholder="Search">
            <a id="linkGo" href="javascript:void(0)" onclick="">Go</a>
          </div>
        </div>
      </div>
    </div>
  </header>


  <div class="container">
    <div class="row">

      <div class="col-sm-7">
        <div id="tutorialSteps" class="tutorial-steps multi-step panel panel-default">
          <div class="panel-heading">Take a Picture Tutorial</div>
          <div class="panel-body">
            <ul class="tutorial-steps-list">
              <?php
                for($i=0;$i < count($decode) ; $i++) {
              ?>
              <li id="step_<?php echo $decode[$i]->outputOrder; ?>" class="<?php if ($i==0) { ?>active<?php } ?>">
                <a href="#screen_<?php echo $decode[$i]->outputOrder; ?>" data-toggle="tab" class="tutorial-step-item">
                  <span class="step-num"><?php echo $decode[$i]->outputOrder; ?>.</span>
                  <span class="step-inst"><?php echo $decode[$i]->step; ?></span>
                </a>
              </li>
              <?php
                }
              ?>
            </ul><!-- .tutorial-steps-list -->
          </div><!-- .panel-body -->
          <div class="panel-footer">
            <div class="text-center">
              <button id="btnFirst" class="btn btn-default" data-step="1" data-target="#screen_1" data-toggle="tab">&laquo; First</button>
              <button id="btnBack" class="btn btn-default" >&lsaquo; Back</button>
              <b id="stepPos" style="">Step 2 of 4</b>
              <button id="btnNext" class="btn btn-default" data-target="#screen_3" data-toggle="tab">Next &rsaquo;</button>
              <button id="btnLast" class="btn btn-default" data-step="<?php echo count($decode) ?>" data-target="#screen_<?php echo count($decode) ?>" data-toggle="tab">Last &raquo;</button>
            </div>
          </div><!-- .panel-footer -->
        </div><!-- #tutorialSteps .panel -->
      </div><!-- .col-sm-7 -->

      <div class="col-sm-5">
        <div class="tab-content">
        <?php
          for($i=0;$i < count($decode) ; $i++) {
        ?>
          <div id="screen_<?php echo $decode[$i]->outputOrder; ?>" class="phone phone-portrait tab-pane <?php if ($i==0) { ?>active<?php } ?>" style="background: url('http://s3.amazonaws.com/tpassets.devicebits.com/demo/mainPhonePictureForTutorial.jpg'); width: 205px; height: 401px;">
            <a href="#screen_<?php echo $decode[$i]->outputOrder+1; ?>" data-toggle="tab" data-step="<?php echo $decode[$i]->outputOrder+1; ?>" class="main-button show" style="
              left: <?php echo $decode[$i]->buttonXUpperLeft; ?>px;
              top: <?php echo $decode[$i]->buttonYUpperLeft; ?>px;
              width: <?php echo $decode[$i]->buttonXSize; ?>px;
              height: <?php echo $decode[$i]->buttonYSize; ?>px;
            "></a>
            <div class="lcd" style="
              <?php if($decode[$i]->screenXUpperLeft > 0) { ?> left: <?php echo $decode[$i]->screenXUpperLeft?>px; <?php } ?>
              <?php if($decode[$i]->screenYUpperLeft > 0) { ?> top: <?php echo $decode[$i]->screenYUpperLeft?>px; <?php } ?>
              <?php if($decode[$i]->screenXSize > 0) { ?> width: <?php echo $decode[$i]->screenXSize?>px; <?php } ?>
              <?php if($decode[$i]->screenYSize > 0) { ?> height: <?php echo $decode[$i]->screenYSize?>px; <?php } ?>
            ">
              <img class="lcd-screen" src="http://s3.amazonaws.com/tpassets.devicebits.com/<?php echo $decode[$i]->ImageLocation; ?>">
            </div>
          </div><!-- .tab-pane .phone -->
          <?php } ?>
        </div><!-- tab-content -->
      </div><!-- .col-sm-5 -->
    </div><!-- .row -->
  </div><!-- .container -->



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
  <script src="js_dev/jquery-2.1.4.min.js"></script>
  <script src="js_dev/jquery-migrate-1.2.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js_dev/bootstrap.min.js"></script>
  <script src="js_dev/scripts.js"></script>

<script>
  
  var currentStep = 1;
  var lastStep = 1;
  var totalSteps = <?php echo count($decode) ?>;
  var nextStep = 2;

</script>
</body>
</html>