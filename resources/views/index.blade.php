<!doctype html>
<html lang="en">
    <head>
        <title>Вопрос-ответ</title>
        <style>
            .accordion-header {
                padding-top: {{ $padding->padding_top }};
                padding-bottom: {{ $padding->padding_bottom }};
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <h1>Ответы на вопросы</h1>
            <div class="accordion" id="accordionExample">
                @foreach($content as $questionAnswer)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-{{ $loop->iteration }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-{{ $loop->iteration }}" aria-expanded="false"
                                    aria-controls="collapse-{{ $loop->iteration }}">
                                <h5>{{ $questionAnswer->question }}</h5>
                            </button>
                        </h2>
                        <div id="collapse-{{ $loop->iteration }}" class="accordion-collapse collapse"
                             aria-labelledby="heading-{{ $loop->iteration }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $questionAnswer->answer }}
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pagination">
                    {{ $content->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</html>
