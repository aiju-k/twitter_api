@extends('layout')
@section('content')
<style>
    div.card:hover {
        opacity: .8;
    }
</style>
<div class="container">
    @foreach ($result as $tweet)
    <?php print_r($tweet); ?>
    <div class="card mb-2">
        <div class="card-body">
            <div class="media">
                <img src="{{ $tweet->user->profile_image_url_https }}" class="rounded-circle mr-4">
                <div class="media-body">
                    <h5 class="d-inline mr-3"><strong>{{ $tweet->user->name }}</strong></h5>
                    <h6 class="d-inline text-secondary">{{ date('Y/m/d', strtotime($tweet->created_at)) }}</h6>
                    <p class="mt-3 mb-0">{{ $tweet->text }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer bg-white border-top-0">
            <div class="d-flex flex-row justify-content-end">
                <div class="mr-5"><i class="fas fa-retweet text-secondary">{{ $tweet->retweet_count }}</i></div>
                <div class="mr-5"><i class="far fa-heart text-secondary">{{ $tweet->favorite_count }}</i></div>
                <div class="mr-5"><i class="far fa-comment text-secondary">{{ $tweet->user->name }}</i></div>
            </div>
        </div>
        <a href="https://twitter.com/{{ $tweet->user->screen_name }}/status/{{ $tweet->id }}" target="_blank" rel="noopener noreferrer" class="stretched-link"></a>
    </div>
    @endforeach
</div>
@endsection