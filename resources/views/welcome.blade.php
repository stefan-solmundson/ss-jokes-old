@extends('layouts.app')

@section('content')
        <div class="content">
            <div class="title m-b-md">
                {{ env("APP_NAME")??"No APP_NAME specified in: .env" }}
            </div>

            <div class="links">
                <li><a class="btn btn-default" href="https://laravel.com/docs">Docs</a></li>
                <li><a class="btn btn-primary" href="https://laracasts.com">Laracasts</a></li>
                <li><a class="btn btn-secondary" href="https://laravel-news.com">News</a></li>
                <li><a class="btn btn-alert" href="https://blog.laravel.com">Blog</a></li>
                <li><a class="btn btn-success" href="https://nova.laravel.com">Nova</a></li>
                <li><a class="btn btn-danger" href="https://forge.laravel.com">Forge</a></li>
                <li><a class="btn btn-dark" href="https://vapor.laravel.com">Vapor</a></li>
                <li><a class="btn btn-warning" href="https://github.com/laravel/laravel">GitHub</a></li>
            </div>
        </div>
@endsection