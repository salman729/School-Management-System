@extends('layouts.index')
@extends('includes.header')
@extends('includes.sidebar')
@extends('includes.footer')s
@section('title','Edit Days')
@section('content')
<div class="panel-body">
	@include('includes.alerts')
    <div class="row">
        <div class="col-lg-12">
            <form role="form" method="POST" action="{{url('updateDays')}}">
                <div class="col-md-4">
            
                    <div class="form-group">
                        <label>Name<span style="color: red" class="required">*</span></label>
                        <input type="hidden" name="id" value="{{$day->id}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input name="day_name" class="form-control" value="{{$day->day_name}}" required="required" placeholder="Enter Name">
                        
                    </div>
                    
                    <button type="submit" class="btn btn-default">Update</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
            </form>
        </div>
     </div>
</div>
@endsection