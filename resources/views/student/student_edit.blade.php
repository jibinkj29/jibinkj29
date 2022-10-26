

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
                        <h4 class="page-title mb-0 text-primary">Student Edit</h4>
                    </div>
                    
                    
                    
                                            <div class="page-rightheader">
            <div class="btn-list">
                
                              
                                   
            </div>
            </div>
            </div>
            


            
                
                
                
                
                
                
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Student Edit</h3>
                            </div>
                            <div class="card-body">
                                
                            @if(count($errors) > 0)
                          
                              @foreach($errors->all() as $error)
                                      {{ $error }}<br>
                              @endforeach
                          </div>
                     @endif
                      @if ($message = Session::get('error'))
                  
                    <strong>{{ $message }}</strong>
                   
                    @endif
                    @if ($message = Session::get('success'))
                  
                  <strong>{{ $message }}</strong>
                 
                  @endif
                                <form action="{{ route('student.update') }}"" method="post" enctype='multipart/form-data' >
                                @csrf
                                 <input type="hidden" name="update_id" value="{{encrypt($student->id)}}"/>
                              
                                 
                                <div class="row">
                                    
                                        
                                    
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Name <span class="text-red">*</span></label>
                                            <input type="text" name="name" value="{{$student->name}}" required class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Age <span class="text-red">*</span></label>
													<input type="number" name="age" value="{{$student->age}}" class="form-control"  placeholder="Age">
												</div>
											</div>
                                 
                                            <div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Gender <span class="text-red">*</span></label>
													<select class="form-control" name="gender"> 
													<option value="">Select</option>
													
                                                    <option value="M" @if ($student->gender == "M") selected="selected" @endif> Male </option>
                                                    <option value="F" @if ($student->gender == "F") selected="selected" @endif>Fe-Male </option>
												   </select>	
													
												</div>
											</div>	

                                            <div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Reporting Teacher <span class="text-red">*</span></label>
													<select class="form-control" name="teacher">
													<option value="">Select</option>
													<option value="Katie" @if ($student->reporting_teacher == "Katie") selected="selected" @endif>Katie</option>
													<option value="Max" @if ($student->reporting_teacher == "Max") selected="selected" @endif>Max</option>
													</select>	
												</div>
											</div>										
														
                                                                   
                                    
                                    
                                    
                                            <div class="form-footer mt-2">
                                    <input type="submit" class="btn btn-primary" value="Confirm  Details">
                                </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
            
                </div>
                
        

        
            </div>
        </div>
        <!-- main-content closed -->
    </div>

    @include('student.includes.footer')     