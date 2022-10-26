<body class="app sidebar-mini">


		
	
		<!-- PAGE -->
		<div class="page">
			<div class="page-main">
			    
			    			<!--app header-->
							@include('student.includes.header')
						<!--/app header-->

                				<!--aside open-->
								@include('student.includes.sidebar')
				
				<!--aside closed-->
                			
                <!-- App-Content -->
				<div class="app-content main-content">
					<div class="side-app">

                        
				<!--Page header-->
				<div class="page-header">
					<div class="page-leftheader">
						<h4 class="page-title mb-0 text-primary">Dashboard</h4>
						<div id="newbanner"></div>
					</div>
					
												<div class="page-rightheader">
							<div class="btn-list">
												
 <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('66e32b2766f5bbb5ba22', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('banners');
    channel.bind('new-banner', function(data) {
    //alert(JSON.stringify(data));
	alert("New banner Created");
	$("#newbanner").html(data.banners.name);

    });
  </script>
	                                       
	                                       
	                                       
	                                       
						</div>
					</div>
			
				</div>
				
				
				
				<!--End Page header-->

		

		
			
                    </div>
                </div>
			    <!-- main-content closed -->
            </div>
			@include('student.includes.footer')     
			