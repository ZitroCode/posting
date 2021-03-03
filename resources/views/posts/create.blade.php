@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
		<div class="card-header text-capitalize">Create artitle
		  <a class="btn btn-danger float-right btn-sm" href="{{ route('posts.index') }}">Cancel</a>
		</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

		  <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
		    <div class="form-group">
		      <label for="">Title *</label>
		      <input class="form-control" type="text" name="title">
		    </div>

		    <div class="form-group">
		      <label for="">Image</label>
		      <input type="file" name="file">
		    </div> 
		    
		    <div class="form-group">
		      <label for="">Description *</label>
		      <textarea class="form-control" name="body" cols="30" rows="6"></textarea>
		    </div> 
		      
		    <div class="form-group">
		      <label for="">IFrame</label>
		      <textarea name="iframe" cols="30" rows="2" class="form-control"></textarea>
		    </div> 

		    <div class="form-group">
		      @csrf
		      <button type="submit" class="btn btn-primary">Save Artitle</button>
		    </div> 
		  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
