<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Создание поста')}}</title>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
            <div class="text-center pt-4 fs-1">{{ __('Создание нового поста')}}</div>
            <h2><a href="{{ route('add.post')}}" class="btn btn-success">{{ __('Редактировать') }}</a></h2>
        <hr class="mb-5">
        <div class="row py-2">
            <form action="" method="post">
            @csrf
                <div class="card-body">
                    <div class="form-group mb-3 row">
                        <label class="form-label"><b>{{ __('Название поста') }}</b></label>
                            <div class="col-lg-10 col-xl-10">
                                <input class="form-control" name="title" type="text" placeholder="{{ __('Введите название') }}">
                            </div>
                        </div>
                    </div>
                     <div class="form-group mb-3 row">
                        <label class="form-label"><b>{{ __('Название категории') }}</b></label>
                            <div class="col-lg-10 col-xl-10">
                                <select name="name" class="form-select" id="example-select">
                                    <option selected>{{ __('Выберите категорию') }}</option>
                                    @foreach($createPosts as $post)
                                        <option value="{{ $post->id }}">{{ $post->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label class="form-label"><b>{{ __('Выберите пользователя') }}</b></label>
                            <div class="col-lg-10 col-xl-10">
                                <select name="name" class="form-select" id="example-select">
                                   <option selected>{{ __('Пользователь') }}</option>
                                   @php
                                       $posts = App\Models\User::all();
                                   @endphp
                                    @foreach($posts as $post)
                                        <option value="{{ $post->id }}">{{ $post->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label class="form-label"><b>{{ __('Текст/Описание') }}</b></label>
                            <div class="col-lg-10 col-xl-10">
                                <textarea class="form-control" name="description"  placeholder="{{ __('Введите текст') }}"></textarea>
                            </div>
                         </div>

                        <button type="submit" class="btn btn-primary mt-3">{{ __('Создать пост')}}</button>
                        <a class="btn btn-success mt-3" type="submit" href="{{ route('search') }}">{{ __('Вернуться назад')}}</a>
                </div>
            </form>
            </div>
        </div>
            
    </div>
    <!-- Include Js files -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
</html>