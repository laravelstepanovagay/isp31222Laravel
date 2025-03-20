@extends("layouts.main")

@section('title', "Заказ №{$order-> id} от {$order->created_at->format('d.m.Y')}")

@section('body')

    <x-vanya>
        <div class="row">
            <div class="col-2">Категория:</div>
            <div class="col-10">{{$order->category->title}}</div>
        </div>
        <div class="row">
            <div class="col-2">Пользователь:</div>
            <div class="col-10">{{$order->user->fio}}</div>
        </div>
        <div class="row">
            <div class="col-2">Дата время / создания:</div>
            <div class="col-10">{{$order->created_at->format("d.m.Y H:i")}}</div>
        </div>
        <div class="row">
            <div class="col-2">Статус:</div>
            <div class="col-10">{{$order->status}}</div>
        </div>
        <div class="row">
            <div class="col-2">Описание заказа:</div>
            <div class="col-10">{{$order->description}}</div>
        </div>
        <div class="d-flex gap-2 mt-4">
            <img src="{{\Illuminate\Support\Facades\Storage::url($order->image)}}" alt="" width="200" class="rounded-4">
        </div>
    </x-vanya>


@endsection
