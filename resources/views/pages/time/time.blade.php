@extends('layouts.index')
@extends('includes.header')
@extends('includes.sidebar')
@extends('includes.footer')
@section('title','Time')
@section('content')
<div class="panel-body">
	@include('includes.alerts')
    <div class="row">
        <div class="col-lg-12">
            <form role="form" method="post" action="{{url('addTime')}}">
             {{ csrf_field() }}

                <div class="col-md-4"> 
                    <div class="form-group">
                    <label>Name<span style="color: red" class="required">*</span></label>
                    <input name="time_name" class="form-control" required="required" placeholder="Enter Time">
                    </div>
                    <!--<div class="form-group">
                        <label id="checkbox">Status</label>
                        <div class="checkbox">
                            <input type="checkbox" name="status" id="status" checked="checked">
                        </div>
                    </div>
                    <input type="hidden" name="class_status" id="class_status" value="active"> -->
                
                    <button type="submit" class="btn btn-default">Submit Button</button>
                    <button type="reset" class="btn btn-default">Reset Button</button>
                </div>
            </form>
        </div>
     </div>
</div>
<script>
    $(document).ready(function(){
      $('#status').bootstrapToogle({
        on: 'active',
        off: 'inactive'
      });  
    });
</script>

@endsection