@extends('layouts.index')
@extends('includes.header')
@extends('includes.sidebar')
@extends('includes.footer')
@section('title','Time Table List')
@section('content')

 <div class="row">
  @include('includes.alerts')
   <div class="col-lg-12">
     <div class="panel panel-default">
       <div class="panel-heading">
                Time Table
         <a href="{{ url('/timeTables')}}" type="button" class="btn btn-primary btn-sm pull-right">Add TimeTable</a>      
       </div>
            <!-- /.panel-heading -->
         <div class="panel-body">
           <div class="table-responsive">
             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                  <tr>
                    <th>Period</th>
	                <th>Subject</th>
                  <th>Action</th>
                   </tr>
                 </thead>
                  <tbody>
	                  @foreach($timeTables as $timeTable)
						<tr>
              <td>{{$timeTable->periods->periodName}}</td>
              <td>{{$timeTable->subjects->sub_name}}</td>
							
							<td>
                <a href="{{ url('editTimeTable/'.$timeTable->id)}}">
                  <i class="fa fa-edit"></i>
                </a>
                <a href="{{ url('delTimeTable/'.$timeTable->id)}}">
                  <i class="fa fa-trash"></i>
                </a>
              </td>
						</tr>
	                  @endforeach
                    </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
               
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>


@endsection
@section('footer')
@parent
<script>
	$(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
</script>

@endsection