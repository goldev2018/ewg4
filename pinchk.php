<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<?php 
// include 'include/config.php';
$pin = $_POST['pincode'];
if ($pin!="123456") {
// echo "<script>
// 	  close();
// </script>";
?>
<div class="container">
  <!-- Trigger the modal with a button -->
 <!--  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">System</h4>
        </div>
        <div class="modal-body">
          <p>Incorrect PIN!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<script type="text/javascript">
	$(window).load(function()
{
    $('#myModal').modal('show');
});

	$('#myModal').on('hidden.bs.modal', function () {
  // window.alert('hidden event fired!');
  close();
});
</script>


<?php 
}
else{



// $sql = $db->query("SELECT * FROM counter WHERE count_id=1");
// $sql->execute();
// $row = $sql->fetch(PDO::FETCH_ASSOC);

	$file="include/count.txt";
$doc=file_get_contents($file);

$line=explode("\n",$doc);
foreach($line as $newline){
    $counts = $newline;
}



 ?>
<div class="container">
  <!-- Trigger the modal with a button -->
 <!--  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">System</h4>
        </div>
        <div class="modal-body">
          <p>Total Download: <?php echo $counts; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<script type="text/javascript">
	$(window).load(function()
{
    $('#myModal').modal('show');
});

	$('#myModal').on('hidden.bs.modal', function () {
  // window.alert('hidden event fired!');
  close();
});
</script>

<?php } ?>