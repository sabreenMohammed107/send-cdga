@extends('admin.adminLayout.main')
@section('title', 'Home')


@section('crumb')
    
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
      <a href="{{url('admin')}}"><i class="material-icons"></i> {{ __('Home') }} </a></li>
      <li class="breadcrumb-item active" aria-current="page"> {{ __('Edit-Available Jobs') }} </li>
    </ol>
  </nav>

@endsection

@section('content')
<div class="row">

          <div class="col-md-12">
  
  
  
            <div class="ms-panel">
              <div class="ms-panel-header d-flex justify-content-between">
                <h6>Edit Jobs</h6>
                <!-- <a href="add_cource.html" class="btn btn-dark" > add Course </a> -->
              </div>
              <div class="ms-panel-body">
                <div class="ms-auth-container row no-gutters">
                    <div class="col-12 p-3">
                    <form action="{{route('career.update',$career->id)}}" method="POST"  >
                {{ csrf_field() }}

                @method('PUT')
        
                        <div class="ms-auth-container row">
              
					<div class="col-md-6">
						<div class="col-md-12">
							<div class="form-group">
								<label class="exampleInputPassword1" for="exampleCheck1">* Name </label>
								<input type="text" id="newjob" name="job_name" value="{{$career->job_name}}" class="form-control" placeholder="Name">
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="custom-control custom-checkbox">
                            @if($career->active==1)
                                <input type="checkbox" id="career" name="career"
									   checked>
                            
                            @else
                                <input type="checkbox" id="career" name="career"
									   >
                            
                            @endif
								
								<label for="career">Is Active</label>
							</div>

						</div>
					</div>
						
						<div class="col-md-6">
							<div class="col-md-12">
								<div class="form-group">
									<label for="example">* Description</label>
									<div class="form-group">
										<textarea class="content" name="job_requirements">{{$career->job_requirements}}
										</textarea>
									</div>
								</div>
							</div>
						</div>

                </div>
                <div class="input-group d-flex justify-content-end text-center">
                  <a href="{{ route('career.index') }}" class="btn btn-dark mx-2"> Cancel</a>
                  <input type="submit" value="Add" class="btn btn-success ">
                </div>
              </form>
              </div>
            </div>
  
  
  
  
          </div>
  
        </div>
        
@endsection
@section('scripts')
@endsection