@extends("layouts.main")

@section('title', 'Войти')

@section('body')
    {{--    @dd(now()->format('Y-M-D'))--}}
    <x-vanya>
        <x-slot:title>
            @yield('title')
        </x-slot:title>
    <div class="bg-white rounded-4 shadow-sm p-4">
        <form action="{{route('login.login')}}" method="post">
            @csrf
            <x-form.input type="email" name="email" label="Ваш email" plaseholder="email" :error="$errors->first('email')" :value="old('email')"/>
            <x-form.input type="password" name="password" label="Пароль" placeholder="пароль" :error="$errors->first('password')" :value="old('password')"/>
            <button type="submit" class="btn btn-primary">Войти</button>
        </form>
    </div>
    </x-vanya>
@endsection
