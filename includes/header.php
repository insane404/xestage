<!-- jQuery handles to place the header background images -->
  <div id="headerimgs">
    <div id="headerimg1" class="headerimg"></div>
    <div id="headerimg2" class="headerimg"></div>
  </div>
  <!-- Top navigation on top of the images -->
  <!--<div class="pentagon"></div>-->
    <?php include($ABSOLUTE_URL.'/includes/top_menu.php'); ?>
  <!-- Slideshow controls -->
  <div id="headernav-outer">
    <div id="headernav">
      <div id="back" class="btn"></div>
      <div id="control" class="btn"></div>
      <div id="next" class="btn"></div>
    </div>
  </div>
  <!-- jQuery handles for the text displayed on top of the images -->
  <div id="headertxt">
    <p class="caption"> <span id="firstline"></span> <a href="#" id="secondline"></a> </p>
    <p class="pictured"> Pictured: <a href="#" id="pictureduri"></a> </p>
  </div>