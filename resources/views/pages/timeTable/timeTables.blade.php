@extends('layouts.index')
@extends('includes.header')
@extends('includes.sidebar')
@extends('includes.footer')
@section('title','Time Table')
@section('content')
<div class="panel-body">
	@include('includes.alerts')
    <div class="row">
        <div class="col-lg-12">
            <form role="form" method="post" action="{{url('addTimeTable')}}">
             {{ csrf_field() }}

                <div class="col-md-4"> 
                    
                    <div class="form-group">
                    <label>Period<span style="color: red" class="required">*</span></label>
                    <select custom class="form-control" name="period_id" required="required">
                        <option value="">Select One</option>
                        @foreach($periods as $period)
                        <option value="{{$period->id}}">{{$period->periodName}}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                    <label>Subject<span style="color: red" class="required">*</span></label>
                    <select custom class="form-control" name="subject_id" required="required">
                        <option value="">Select One</option>
                        @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->sub_name}}</option>
                        @endforeach
                    </select>
                    </div>

                    
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