@extends('shablon')

@section('title')
Отзывы
@endsection

@section('main_content')
<form action="/review/check" method="post">
    @csrf
    <input class="form-control" type="email" name="email" id="email" placeholder="Введите емейл"><br>
    <input class="form-control" type="text" name="title" id="title" placeholder="Введите отзыв"><br>
    <textarea class="form-control" name="text" id="text" cols="30" rows="10" placeholder="Напишите свой отзыв"></textarea><br>
    <input class="btn btn-success" type="submit" value="Отправить">
</form>
@endsection