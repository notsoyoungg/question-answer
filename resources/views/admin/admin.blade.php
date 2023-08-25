@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="container mt-5">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Контент</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Дизайн</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <table class="table table-stripped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Вопрос</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($content as $questionAnswer)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $questionAnswer->question }}</td>
                                        <td>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $questionAnswer->id }}" data-id="{{ $questionAnswer->id }}">
                                                Удалить
                                            </button>
                                            <br>
                                            <a href="{{ route('content.show', ['content' => $questionAnswer->id]) }}" class="btn btn-primary">Изменить</a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="staticBackdrop-{{ $questionAnswer->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Удалить</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Вы действительно хотите удалить этот элемент ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                                    <form id="deleteForm" method="POST" action="{{ route('content.destroy', ['content' => $questionAnswer->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Удалить</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="pagination">
                                    {{ $content->links('pagination::bootstrap-4') }}
                                </div>
                                <a href="{{ route('content.create') }}" class="btn btn-success">Добавить "вопрос-ответ"</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <form class="mt-3" action="{{ route('settings-update') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="padding-top" class="form-label">Отступ сверху</label>
                                    <select class="form-select" name="paddingTop" id="padding-top" aria-label="Default select example">
                                        <option value="0px" selected>0px</option>
                                        <option value="5px">5px</option>
                                        <option value="10px">10px</option>
                                        <option value="15px">15px</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="padding-bottom" class="form-label">Отступ снизу</label>
                                    <select class="form-select" name="paddingBottom" id="padding-bottom" aria-label="Default select example">
                                        <option  value="0px" selected>0px</option>
                                        <option value="5px">5px</option>
                                        <option value="10px">10px</option>
                                        <option value="15px">15px</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
