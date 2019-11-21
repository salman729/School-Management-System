@extends('layouts.app2')
@extends('includes.header2')
@extends('includes.sidebar2')
@extends('includes.footer2')
@section('title','Class Rooms List')
@section('content')

 <div class="row">
  @include('includes.alerts')
   <div class="col-lg-8">
     <div class="panel panel-default">
       <div class="panel-heading">
                Class Rooms
         <a href="{{ url('/classRooms')}}" type="button" class="btn btn-primary btn-sm pull-right">Add ClassRoom</a>      
       </div>
            <!-- /.panel-heading -->
         <div class="panel-body">
           <div class="table-responsive">
             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                  <tr>
                    <th>Name</th>
	                <th>Action</th>
                   </tr>
                 </thead>
                  <tbody>
	                  @foreach($classRooms as $classRoom)
						<tr>
							<td>{{$classRoom->cRoom_name}}</td>

              <td><a href="{{ url('editClassRooms/'.$classRoom->id)}}"><i class="fa fa-edit"></i></a> <a href="{{ url('delClassRoom/'.$classRoom->id)}}"><i class="fa fa-trash"></i></a>
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