@extends('layouts.adminus')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin panel - Главная</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Вы вошли в админку нашу, на главную страницу
                    Работаем с базой
                    <p>{{ $Title }}</p>

@foreach ($users as $user)
  {{ $user->name }}
@endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
