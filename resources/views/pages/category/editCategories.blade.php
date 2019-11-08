@extends('layouts.index')
@extends('includes.header')
@extends('includes.sidebar')
@extends('includes.footer')s
@section('title','Edit Category')
@section('content')
<div class="panel-body">
	@include('includes.alerts')
    <div class="row">
        <div class="col-lg-12">
            <form role="form" method="POST" action="{{url('updateCategories')}}">
            
                <div class="form-group">
                    <label>Name<span style="color: red" class="required">*</span></label>
                    <input type="hidden" name="id" value="{{$category->id}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input name="cat_name" class="form-control" value="{{$category->cat_name}}" required="required" placeholder="Enter Name">
                    
                </div>
                
                <button type="submit" class="btn btn-default">Update</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
        </div>
     </div>
</div>
@endsection