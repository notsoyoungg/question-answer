<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <form method="POST" action="{{ route('content.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="question"><b>Вопрос</b></label>
                                <input type="text" class="form-control" id="question" name="question">
                            </div>
                            <div class="form-group">
                                <label for="answer"><b>Ответ</b></label>
                                <textarea class="form-control" id="answer" name="answer" rows="4" ></textarea>
                            </div>
                            <br>
                            <a href="{{ route('admin') }}" class="btn btn-secondary ml-3">Назад</a>
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
