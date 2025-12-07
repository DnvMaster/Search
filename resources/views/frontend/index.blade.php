<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Поиск по пользователям и категориям')}}</title>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="text-center pt-4 fs-1">{{ __('Поиск по пользователям и категориям в')}} <strond class="text-danger">{{ __('Laravel 12')}}</strond></div>
        <hr>
        <div class="row py-2">
            <div class="col-md-6">
                <h2><a href="" class="btn btn-success">{{ __('Создать новый пост') }}</a></h2>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <form method="get" action="/search">
                        @csrf
                        <div class="input-group">
                            <input class="form-control" name="search" placeholder="{{ __('Найни по категории или по пользователю') }}" value="{{ isset($search) ? $search : ''}}">
                            <button type="submit" class="btn btn-primary">{{ __('Поиск') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>

        <table class="table table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">{{ __('№') }}</th>
                    <th scope="col">{{ __('Заголовок') }}</th>
                    <th scope="col">{{ __('Категория') }}</th>
                    <th scope="col">{{ __('Пользователь') }}</th>
                    <th scope="col">{{ __('Описание') }}</th>
                    <th scope="col">{{ __('Действие') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->description }}</td>
                    <td>
                        <a class="btn btn-success" href="">{{ __('Редактировать') }}</a>
                        <a class="btn btn-danger" href="">{{ __('Удалить') }}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Include Js files -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
</html>