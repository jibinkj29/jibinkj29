

    <body class="app sidebar-mini">

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">
    						<!--app header-->
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
								<h4 class="page-title mb-0 text-primary">Student Listing</h4>
							</div>
													
							<div class="page-rightheader">
								<div class="btn-list">
							
								<a class="btn btn-primary waves-effect waves-light" href="{{ route('student.add') }}"> <i class="fa fa-plus" aria-hidden="true"></i> Add Student</a>
						
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-12">

								<!--div-->
						<div class="card">
						<div class="card-header">
						<div class="card-title">
						@if ($message = Session::get('error'))
                          
						<strong>{{ $message }}</strong>
						 
						@endif

						@if ($message = Session::get('success'))
						
						<strong>{{ $message }}</strong>
					   
						@endif
								</div>
								</div>
								<div class="card-body">
										<div class="">

											<div class="table-responsive">
											    
												<table id="example" class="table table-bordered text-nowrap key-buttons">
													<thead>
													 
    <tr>
    <th>S.id</th>
    <th>Name </th> 
    <th>Age </th> 
	<th>Gender </th> 
    <th>Reporting Teacher</th> 
    <th>Edit</th>
    <th>
	Delete
     </th>
	</tr>
    </thead>
    <tbody>
                      

@foreach($allStudents as $student)


    <tr>
    <td>{{ $loop->iteration }}</td>
	<td>{{ $student->name }}</td>
	<td>{{ $student->age }}</td>
	<td>{{ $student->gender }}</td>
	<td>{{ $student->reporting_teacher }}</td>
	<td><a href="{{ route('student.edit', encrypt($student->id) ) }}"><i class="fas fa-edit">Edit</i></a></td>
	<td><a href="{{ route('student.delete', encrypt($student->id) ) }}"><i class="far fa-trash">Delete</i></a>
    </tr>

@endforeach
    </tbody>
													</thead>
													<tbody>
													
												
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->


							</div>
						</div>
						<!-- /Row -->

				
                    </div>
                </div>
			    <!-- main-content closed -->
            </div>

    	@include('student.includes.footer')     