
            				<!--Footer-->
				<footer class="footer">
					<div class="container">
						<div class="row align-items-center flex-row-reverse">
							<div class="col-md-12 col-sm-12 text-center">
								Copyright © 2022 <a href="javascript:void(0);"></a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);">  </a> All rights reserved
							</div>
						</div>
					</div>
				</footer>
				<!-- End Footer-->
        </div>
		<!-- End Page -->

        		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>

		<!-- Jquery js-->
		<script src="/assests/js/jquery.min.js"></script>
		
		
		
		
		
		
   <!--<script src="https://maps.google.com/maps/api/js?sensor=false"></script>-->



		<!-- Bootstrap5 js-->
		<script src="/assests/plugins/bootstrap/popper.min.js"></script>
		<script src="/assests/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Othercharts js-->
		<script src="/assests/plugins/othercharts/jquery.sparkline.min.js"></script>

		<!-- Jquery-rating js-->
		<script src="/assests/plugins/rating/jquery.rating-stars.js"></script>

		<!--Sidemenu js-->
		<script src="/assests/plugins/sidemenu/sidemenu.js"></script>

		<!-- P-scroll js-->
		<script src="/assests/plugins/p-scrollbar/p-scrollbar.js"></script>
		<script src="/assests/plugins/p-scrollbar/p-scroll1.js"></script>
		<script src="/assests/plugins/p-scrollbar/p-scroll.js"></script>

        <!-- Simplebar JS -->
		<script src="/assests/plugins/simplebar/js/simplebar.min.js"></script>
        
		
		<!--INTERNAL Flot Charts js-->
		<script src="/assests/plugins/flot/jquery.flot.js"></script>
		<script src="/assests/plugins/flot/jquery.flot.fillbetween.js"></script>
		<script src="/assests/plugins/flot/jquery.flot.pie.js"></script>
		<script src="/assests/js/dashboard.sampledata.js"></script>
		<script src="/assests/js/chart.flot.sampledata.js"></script>

		<!-- INTERNAL Chart js -->
		<script src="/assests/plugins/chart/chart.bundle.js"></script>
		<script src="/assests/plugins/chart/utils.js"></script>

		<!-- INTERNAL Apexchart js -->
		<script src="/assests/js/apexcharts.js"></script>

		<!--INTERNAL Moment js-->
		<script src="/assests/plugins/moment/moment.js"></script>

		<!--INTERNAL Index js-->
		<script src="/assests/js/index1.js"></script>

		<!-- INTERNAL Data tables -->
		<script src="/assests/plugins/datatables/DataTables/js/jquery.dataTables.js"></script>
		<script src="/assests/plugins/datatables/DataTables/js/dataTables.bootstrap5.js"></script>
		<script src="/assests/plugins/datatables/Responsive/js/dataTables.responsive.min.js"></script>
		<script src="/assests/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js"></script>

		<!-- INTERNAL Select2 js -->
		<script src="/assests/plugins/select2/select2.full.min.js"></script>
		<script src="/assests/js/select2.js"></script>

		<!-- Rounded bar chart js-->
		<script src="/assests/js/rounded-barchart.js"></script>

<!-- INTERNAL Data tables -->
			<script src="/assests/plugins/datatables/DataTables/js/jquery.dataTables.js"></script>
			<script src="/assests/plugins/datatables/DataTables/js/dataTables.bootstrap5.js"></script>
			<script src="/assests/plugins/datatables/Buttons/js/dataTables.buttons.min.js"></script>
			<script src="/assests/plugins/datatables/Buttons/js/buttons.bootstrap4.min.js"></script>
			<script src="/assests/plugins/datatables/JSZip/jszip.min.js"></script>
			<script src="/assests/plugins/datatables/pdfmake/pdfmake.min.js"></script>
			<script src="/assests/plugins/datatables/pdfmake/vfs_fonts.js"></script>
			<script src="/assests/plugins/datatables/Buttons/js/buttons.html5.min.js"></script>
			<script src="/assests/plugins/datatables/Buttons/js/buttons.print.min.js"></script>
			<script src="/assests/plugins/datatables/Buttons/js/buttons.colVis.min.js"></script>
			<script src="/assests/plugins/datatables/Responsive/js/dataTables.responsive.min.js"></script>
			<script src="/assests/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js"></script>
			<script src="/assests/js/datatables.js"></script>

			<!-- INTERNAL Select2 js -->
			<script src="/assests/plugins/select2/select2.full.min.js"></script>
			<script src="/assests/js/select2.js"></script>

	
		<!-- Custom js-->
		<script src="/assests/js/custom.js"></script>

		<!-- Switcher js -->
		<script src="/assests/switcher/js/switcher.js"></script>
		
		
		
		
		<script src="/assests/plugins/tabs/jquery.multipurpose_tabcontent.js"></script>
		
		
		<script src="/assests/js/tabs.js"></script>
		
		

		
				
		
				<script src="/assests/plugins/wysiwyag/jquery.richtext.js"></script>
				<script src="/assests/js/form-editor.js"></script>
				
				
						<!-- INTERNAL File-Uploads Js-->
		<script src="/assests/plugins/fancyuploder/jquery.ui.widget.js"></script>
		<script src="/assests/plugins/fancyuploder/jquery.fileupload.js"></script>
		<script src="/assests/plugins/fancyuploder/jquery.iframe-transport.js"></script>
		<script src="/assests/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
		<script src="/assests/plugins/fancyuploder/fancy-uploader.js"></script>
		
	
	
    <script>
	 var i=1;
   $("#btn2").click(function() {
   i++;
    
   $('<div class="jkj mrg-5 input-group sa'+i+'"><div class="sa-ds"><div class="row"><div class="col-sm-4 col-md-4"><input type="text" name="file[]" required class="form-control" placeholder="Addons Item"  /> </div> <div class="col-sm-4 col-md-4"> <input type="text" required name="file2[]"  class="form-control" placeholder="Addons Item Price"  /></div> <div class="col-sm-4 col-md-4"><span class="input-group-btn sk-dasw"><button type="button" name="remove" id="'+i+'" class="btn_remove btn btn-default">Remove</button></span></div></div></div></div>').insertBefore(this);
   });
   
$(document).on('click','.btn_remove',function(){
var button_id=$(this).attr("id");
// alert(button_id);
$('.sa'+button_id+'').remove();
});
	</script>
	
	 <script>
	 
var i=1;
	 
$("#btn22").click(function() {
   i++;
    
   $('<div class="mrg-5 input-group sa'+i+'"><div class="sa-ds"><div class="row"><div class="col-sm-4 col-md-4"><input type="text" name="name2[]" required class="form-control" placeholder="Name"/> </div> <div class="col-sm-4 col-md-4"> <select name="selection[]"  class="form-control custom-select select2" ><option>Select Status</option>   <option value="1">Yes</option>   <option value="2">No</option> </select></div> <div class="col-sm-4 col-md-4"><span class="input-group-btn sk-dasw"><button type="button" name="remove" id="'+i+'" class="btn_remove btn btn-default">Remove</button></span></div></div></div></div>').insertBefore(this);
   });
   
$(document).on('click','.btn_remove',function(){
var button_id=$(this).attr("id");
// alert(button_id);
$('.sa'+button_id+'').remove();
});


	 

	</script>
	
	 <script>
	 var i=1;
   $("#btn3").click(function() {
   i++;
    
   $('<div class="mrg-5 input-group sa'+i+'"><div class="sa-ds"><div class="row"><div class="col-sm-4 col-md-4"><input type="text" name="file1[]" required class="form-control" placeholder="Name"  /> </div> <div class="col-sm-4 col-md-4"> <input type="text" required name="file2[]"  class="form-control" placeholder="Price"  /></div> <div class="col-sm-4 col-md-4"><span class="input-group-btn sk-dasw"><button type="button" name="remove" id="'+i+'" class="btn_remove btn btn-default">Remove</button></span></div></div></div></div>').insertBefore(this);
   });
   
$(document).on('click','.btn_remove',function(){
var button_id=$(this).attr("id");
// alert(button_id);
$('.sa'+button_id+'').remove();
});
	</script>	
	
	
	
	














<script>
  
  function language() {
         
  
 
    var csrfToken = $( "input[name*='csrf_test_name']" ).val();
    var lang = $("#lang").val();
    
    // alert(lang); 
    
    
 $.ajax({
 url: "",
 type:"GET",
 data: {
                    lang:lang,
                    
 },

 headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
 },

 success: function(data){

// alert(data);
// $("s").html(data);
}
 });
  

  
      }
  </script>
  
  
  
  <style>
      .sk-modal{
          max-width: 700px;
   
      }
  </style>


    </body>


</html>



