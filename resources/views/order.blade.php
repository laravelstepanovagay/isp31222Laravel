@extends("layouts.main")

@section('title', 'Заказы')

@section('body')

    <x-vanya link="Добавить заказ" :href="route('orders.create')">
        <div class="row text-center">
            <div class="col-sm-4 col-lg-2"><strong>Изображение</strong></div>
            <div class="col-sm-8 col-lg-3"><strong>Заказ</strong></div>
            <div class="col-sm-6 col-lg-2"><strong>Статус</strong></div>
            <div class="col-sm-2 col-lg-1"><strong>Дата / Время создания</strong></div>
        </div>

@foreach($orders as $order)
            <div class="row text-align-center mt-4 row-gap-4">
                <div class="col-sm-4 col-lg-2">
                    <img src="{{}}" width="100%" alt="Заказ №{{$order->id}} от {{$order->created_at->format("d.m.Y")}}" class="rounded-4">
                </div>
                <div class="col-sm-8 col-lg-4">
                    <h4>Заказ №{{$order->id}} от {{$order->created_at->format("d.m.Y")}}</h4>
                    <span class="badge text-bg-primary">{{$order->category->title}}</span>
                </div>
                <div class="col-sm-6 col-lg-2 text-center">
                    @switch($order->status)
                        @case(\App\Enums\Order\StatusEnum::new)
                            <span class="badge text-bg-secondary">{{$order->status->value}}</span>
                        @break
                        @case(\App\Enums\Order\StatusEnum::job)
                            <span class="badge text-bg-primary">{{$order->status->value}}</span>
                        @break
                        @case(\App\Enums\Order\StatusEnum::success)
                            <span class="badge text-bg-success">{{$order->status->value}}</span>
                        @break
                        @default
                            <span class="badge text-bg-danger">{{$order->status->value}}</span>
                    @endswitch
                </div>
                <div class="col-sm-6 col-lg-2 text-center">
                    {{$order->created_at->format("d.m.Y H:i")}}
                </div>
                <div class="col-12 col-lg-2 text-center">
                    <a href="{{route("orders.show", ["order" => $order->id])}}" class="btn btn-outline-primary btn-sm">Посмотреть</a>
                    <a href="{{route("orders.destroy", ["order" => $order->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Вы уверены, что хотите?')">Удалить</a>
                </div>
            </div>
@endforeach

    </x-vanya>

@endsection
