@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
		<div class="card-header text-capitalize">
		  Artitles
		  <a href="{{ route('posts.create') }}" class="btn btn-primary float-right btn-sm">Create</a>
		</div>

		<div class="card-body">

		  <table class="table">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>Title</th>
		        <th colspan="2">&nbsp;</th>
		      </tr>	
		    </thead>

		    @foreach($posts as $post)
		      <tbody>
		        <tr>
		          <td>{{ $post->id }}</td>
		          <td>{{ $post->title }}</td>
			  <td>
			    <a class="btn btn-primary btn-sm" href="{{ route('posts.edit', $post) }}">Edit</a>
			  </td>
			  <td>
			    <form action="{{ route('posts.destroy', $post) }}" method="POST">
			      @csrf
			      @method('DELETE')
			      <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Do you want to delete this post?')">Delete</button>
			    </form>
			  </td>
		        </tr>
		      </tbody>		
		    @endforeach

		  </table> 		    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
