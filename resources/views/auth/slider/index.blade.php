@extends('auth.layouts.master')

@section('title', 'Товары')

@section('content')
    <div class="col-md-12">
        <h1>Слайдеры</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Название
                    </th>
                    <th>
                        Описание
                    </th>
                    <th>
                        Картинка
                    </th>
                    <th>
                        Статус
                    </th>
                    <th>
                        Действия
                    </th>
                </tr>
                {{-- @foreach ($products as $product) --}}
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="btn-group" role="group">
                                <form action="" method="POST">
                                    <a class="btn btn-success" type="button"
                                        href="">Открыть</a>
                                    <a class="btn btn-warning" type="button"
                                        href="">Редактировать</a>
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Удалить">
                                </form>
                            </div>
                        </td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
        <a class="btn btn-success" type="button" href="{{url('sliders/create')}}">Добавить товар</a>
    </div>
@endsection
