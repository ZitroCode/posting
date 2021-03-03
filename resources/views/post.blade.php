@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-body">
            @if ($post->image)
              <img src="{{ $post->get_image }}" class="card-img-top mb-2">
            @elseif ($post->iframe)
              <div class="emd-resposive emd-resposive-16by9 mb-2">
            {!! $post->iframe !!}
              </div>
            @endif
            <h3 class="card-title"> {{ $post->title }} </h3>
            <p class="card-text">{{ $post->body }}</p>
            <p class="text-muted mb-0">
              <em>&ndash; {{ $post->user->name }}</em>
              {{ $post->created_at->format('d M Y') }}
            </p>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
