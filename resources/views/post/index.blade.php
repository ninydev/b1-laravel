@extends('layouts.adminus')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin panel - Работа с постами</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<h3>Работа с постами</h3>
@foreach ($posts as $post)
  {{ $post->title }}<br/>
@endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
