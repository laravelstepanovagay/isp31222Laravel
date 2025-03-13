@extends("layouts.main")

@section('title', 'Регистрация')

@section('body')
{{--    @dd(now()->format('Y-M-D'))--}}
{{--<x-vanya>--}}
   <div class="bg-white rounded-4 shadow-sm p-4">
       <form action="{{route("register.create")}}" method="get">
            @csrf
           <x-form.input name="fio" label="Ваше ФИо" plaseholder="Фамилия Имя Отчество" :error="$errors->first('fio')" :value="old('fio')"/>
           <x-form.input type="email" name="email" label="Ваш email" plaseholder="email" :error="$errors->first('email')" :value="old('email')"/>
           <x-form.input type="date" name="birthday" label="Дата рождения" value="old('birthday') ?? now()->format('Y-m-d')" placeholder="Дата рождения" :error="$errors->first('birthday')" :value="old('fio')"/>
           <x-form.input type="password" name="password" label="Пароль" placeholder="пароль" :error="$errors->first('password')" :value="old('password')"/>
           <x-form.input type="password" name="password_confirmation" label="повторить Пароль" placeholder="повторить пароль" :error="$errors->first('password_confirmation')" :value="old('password_confirmation')"/>
           <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
       </form>
   </div>
{{--</x-vanya>--}}
@endsection
