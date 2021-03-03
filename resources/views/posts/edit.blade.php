@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
		<div class="card-header text-capitalize">Edit artitle
		  <a class="btn btn-danger float-right btn-sm" href="{{ route('posts.index') }}">Cancel</a>
		</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

		    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
		      <div class="form-group">
			<label for="">Title *</label>
			<input class="form-control" type="text" name="title" value="{{ old('title', $post->title) }}">
		      </div>

		      <div class="form-group">
			<label for="">Image</label>
			<input type="file" name="file">
		      </div> 
		    
		      <div class="form-group">
			<label for="">Description *</label>
			<textarea class="form-control" name="body" cols="30" rows="6">{{ old('body', $post->body) }}</textarea>
		      </div> 
		      
		      <div class="form-group">
			<label for="">IFrame</label>
			<textarea name="iframe" cols="30" rows="2" class="form-control">{{ old('iframe', $post->iframe) }}</textarea>
		      </div> 

		      <div class="form-group">
			@csrf
			@method('PUT')
			<button type="submit" class="btn btn-primary">Update Artitle</button>
		      </div> 
		    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
