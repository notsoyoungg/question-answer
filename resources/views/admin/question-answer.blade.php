@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <form method="POST" action="{{ route('content.update', ['content' => $content->id]) }}">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label for="question"><b>Вопрос</b></label>
                                <input type="text" class="form-control" id="question" name="question" value="{{ $content->question }}">
                            </div>
                            <div class="form-group">
                                <label for="answer"><b>Ответ</b></label>
                                <textarea class="form-control" id="answer" name="answer" rows="4" >{{ $content->answer }}</textarea>
                            </div>
                            <br>
                            <a href="{{ route('admin') }}" class="btn btn-secondary ml-3">Назад</a>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
