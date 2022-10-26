

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
                        <h4 class="page-title mb-0 text-primary">Student Marks Listing</h4>
                    </div>
                                            
                    <div class="page-rightheader">
                        <div class="btn-list">
                    
                        <a class="btn btn-primary waves-effect waves-light" href="{{ route('marks.add') }}"> <i class="fa fa-plus" aria-hidden="true"></i> Add Marks</a>
                
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
<th>Maths</th> 
<th>Science </th> 
<th>History </th> 
<th>Term </th> 
<th>Total Marks </th> 
<th>Created On</th> 
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
    
@foreach($Result as $res)


<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $res->student->name }}</td>
<td>
@foreach($allStudents as $student)
@foreach($student->marks as $mark)
@if ($mark->subject == "Maths" && $res->student_id == $student->id && $mark->term == $res->term)
{{ $mark->mark }}
@endif
@endforeach
@endforeach
</td>
<td>
@foreach($allStudents as $student)
@foreach($student->marks as $mark)
@if ($mark->subject == "Science" && $res->student_id == $student->id && $mark->term == $res->term)
{{ $mark->mark }}
@endif
@endforeach
@endforeach
</td>
<td>
@foreach($allStudents as $student)
@foreach($student->marks as $mark)
@if ($mark->subject == "History" && $res->student_id == $student->id && $mark->term == $res->term)
{{ $mark->mark }}
@endif
@endforeach
@endforeach
</td>
<td>{{ $res->term }}</td>
<td>
@php($total = 0)  
@foreach($allStudents as $student)
@foreach($student->marks as $mark)
@if ($res->student_id == $student->id && $mark->term == $res->term)
@php($total += $mark->mark)
@endif
@endforeach
@endforeach
{{ $total }}
</td>
<td>{{ $res->Createddate }}</td>
<td><a href="{{ route('marks.edit', ['id' => encrypt($res->student_id), 'term' => $res->term ]) }}"><i class="fas fa-edit">Edit</i></a></td>
<td><a href="{{ route('marks.delete', ['id' => encrypt($res->student_id), 'term' => $res->term ]) }}"><i class="far fa-trash">Delete</i></a>

</td>
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