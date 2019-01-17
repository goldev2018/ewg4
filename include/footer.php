<footer id="sub-footer" class="footer-bs">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 footer-brand">
          <a href="index.php"><img src="img/logo-full.png" alt="footer logo" class="img-fluid" style="height: 30px"></a>
            <p>© Energy World Corporation 2018</p>
      </div>
      <div class="col-md-6 col-sm-6 footer-nav">
          <h4>Navigation</h4>
                <ul class="list">
                  <li><a href="newsroom.php">Newsroom</a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="investor-centre.php">Investor Centre</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <li><a href="sitemap.php">Sitemap</a></li>
                </ul>
       </div>

      <!--<div class="col-sm-6 col-md-4 footer-ns">
          <h4>Contact Us</h4>
          <address>
            <p><strong>Energy World Corporation</strong>
            <br>48th Floor, <br>Sun Hung Kai Centre 30 Harbour Road Hong Kong</p>
          </address>
          <address>
            <p><i class="glyphicon glyphicon-earphone"></i>&nbsp;+852 2528 0082</p>
            <p><i class="glyphicon glyphicon-envelope"></i>&nbsp;ewc188@netvigator.com</p>
          </address>
      </div>-->


    </div>
  </div>
</footer>




<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>




<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />

<!-- <link href="css/bootstrap.css" rel="stylesheet" /> -->
<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />

<link href="css/style.css" rel="stylesheet" />

<link id="bodybg" href="bodybg/bg-c.css" rel="stylesheet" type="text/css" />

<!-- Theme skin -->
<link id="t-colors" href="skins/yellow.css" rel="stylesheet" />


<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
<script src="plugins/flexslider/flexslider.config.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>

<script src="js/custom.js"></script>


<!-- modal for viewing the total of downloads -->
<!-- Button trigger modal -->
<!-- Modal -->
<form action="pinchk.php" method="post" target="_blank" autocomplete="off">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Pin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="password" name="pincode" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Submit">
      </div>
    </div>
  </div>
</div>
</form>


<script type="text/javascript">
  $(document).on('keydown', function ( e ) {
    // You may replace `m` with whatever key you want
    if ((e.metaKey || e.ctrlKey) && ( String.fromCharCode(e.which).toLowerCase() === 'm') ) {
    $("#exampleModal").modal('show');
    }
});
</script>

<!-- modal for viewing the total of downloads -->