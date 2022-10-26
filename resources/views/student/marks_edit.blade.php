

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
                        <h4 class="page-title mb-0 text-primary">Student Mark Edit</h4>
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
                                <h3 class="card-title">Student Mark Edit</h3>
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
                                <form action="{{ route('marks.update') }}"" method="post" enctype='multipart/form-data' >
                                @csrf
                                <input type="hidden" name="student_id2" value="{{$id}}"/>
                                <input type="hidden" name="term2" value="{{$term}}"/>
                              
                                 
                                <div class="row">
                                    
                                        
                                    
                                <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Student <span class="text-red">*</span></label>
                                            <select class="form-control" name="student_id">
                                            <option value="">Select</option>
                                            @foreach($allStudents as $key => $value)
                                            
                                            <option @if ($id == $key) selected @endif value="{{ $key }}">{{ $value}} </option>
                                            @endforeach
                                            </select>	
                                        </div>
                                    </div>		
                                

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Term <span class="text-red">*</span></label>
                                            
                                            <select class="form-control" name="term">
                                            <option value="">Select</option>
                                            <option @if ($term == "One") selected @endif  value="One">One</option>
                                            <option @if ($term == "Two") selected @endif  value="Two">Two</option>
                                                                                  
                                            </select>	
                                        </div>
                                    </div>

                                    @foreach($mark as $res)

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Subject <span class="text-red"></span></label>
                                            
                                            <select class="form-control" name="subject[]">
                                            <option value="">Select</option>
                                            <option @if ($res->subject == "Maths") selected @endif value="Maths">Maths</option>
                                            <option @if ($res->subject == "Science") selected @endif value="Science">Science</option>
                                            <option @if ($res->subject == "History") selected @endif value="History">History</option>
                                            </select>	
                                        </div>
                                    </div>
                                        
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Mark<span class="text-red"></span></label>
                                            <input type="number" name="mark[]" value="{{$res->mark}}" class="form-control"  placeholder="Mark">
                                            <input type="hidden" name="ids[]" value="{{$res->id}}">
                                        </div>
                                    </div>
                                    
                                    
                                    @endforeach				
														
                                                                   
                                    
                                    
                                    
                                            <div class="form-footer mt-2">
                                    <input type="submit" class="btn btn-primary" value="Confirm  Details">
                                </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
            
                </div>
                
        
                <td>

</td> 

        
            </div>
        </div>
        <!-- main-content closed -->
    </div>

    @include('student.includes.footer')     