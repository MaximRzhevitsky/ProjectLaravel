@extends('layouts.app')

@section('title-block')
    Главная страница
@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua. Id leo in vitae turpis massa sed elementum.
        Cursus eget nunc scelerisque viverra mauris in. Tortor at auctor urna nunc id cursus.
        Habitant morbi tristique senectus et netus et. At elementum eu facilisis sed odio morbi quis.
        Maecenas ultricies mi eget mauris pharetra et ultrices neque ornare. Id nibh tortor id aliquet lectus.
        Arcu dui vivamus arcu felis bibendum ut tristique et. Massa placerat duis ultricies lacus sed turpis tincidunt.
    </p>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua. Id leo in vitae turpis massa sed elementum.
        Cursus eget nunc scelerisque viverra mauris in. Tortor at auctor urna nunc id cursus.
        Habitant morbi tristique senectus et netus et. At elementum eu facilisis sed odio morbi quis.
        Maecenas ultricies mi eget mauris pharetra et ultrices neque ornare. Id nibh tortor id aliquet lectus.
        Arcu dui vivamus arcu felis bibendum ut tristique et. Massa placerat duis ultricies lacus sed turpis tincidunt.
    </p>


@endsection

@section('aside')
    @parent
    <p>Дополнительный текст на боковой пенеле на главной</p>
@endsection