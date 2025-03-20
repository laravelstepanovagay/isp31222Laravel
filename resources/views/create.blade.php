@extends("layouts.main")

@section('title', 'Создание заказа')

@section('body')
    {{--    @dd(now()->format('Y-M-D'))--}}
    <x-vanya>
    <div class="bg-white rounded-4 shadow-sm p-4">
        <form action="{{route("orders.store")}}" method="post" enctype="multipart/form-data">
            @csrf
            @if($categories->isNotEmpty())
                <x-form.select name="category_id" label="Категория" :error="$errors->first('category_id')">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" @selected($category_id == old("category_id"))>{{$category->title}}</option>
                    @endforeach
                </x-form.select>
            @else
                <p class="text-danger"><strong>error</strong></p>
            @endif
<x-form.textarea name="description" label="Описание заказа" placeholder="Описание" :error="$errors->first('description')" :value="old('description')"/>

            <x-form.input type="file" name="image" label="Фотография" accept="image/*" :error="$errors->first('image')" :value="old('image')"/>

{{--            <x-form.input name="fio" label="Ваше ФИо" plaseholder="Фамилия Имя Отчество" :error="$errors->first('fio')" :value="old('fio')"/>--}}
{{--            <x-form.input type="email" name="email" label="Ваш email" plaseholder="email" :error="$errors->first('email')" :value="old('email')"/>--}}
{{--            <x-form.input type="date" name="birthday" label="Дата рождения" value="old('birthday') ?? now()->format('Y-m-d')" placeholder="Дата рождения" :error="$errors->first('birthday')" :value="old('fio')"/>--}}
{{--            <x-form.input type="password" name="password" label="Пароль" placeholder="пароль" :error="$errors->first('password')" :value="old('password')"/>--}}
{{--            <x-form.input type="password" name="password_confirmation" label="повторить Пароль" placeholder="повторить пароль" :error="$errors->first('password_confirmation')" :value="old('password_confirmation')"/>--}}
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
    </x-vanya>
@endsection
