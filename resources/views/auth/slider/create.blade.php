@extends('auth.layouts.master')

@section('title', 'Редактировать слайдер')

@section('content')


    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Добавить Слайдер
                    <a href="" class="btn btn-danger btn-sm text-white float-end">Назад</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Название</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Описание</label>
                        <textarea name="description" class="form-control" rows="3">
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Картинка</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Статус</label>
                        <input type="checkbox" name="status" style="width: 30px;height:30px;" class="form-control">Чек=hidden
                    </div>
                    <div class="mb-3">
                        <label for="">Сохранить</label>
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>

        </div>
    </div>



@endsection
