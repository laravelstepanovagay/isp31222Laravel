@extends("layouts.main")

@section('title', 'Личный кабинет')

@section('body')

    <x-vanya>
        <div class="row">
            <div class="col-2">Имя</div>
            <div class="col-10">{{$user -> fio}}</div>
        </div>
        <div class="row">
            <div class="col-2">Почта</div>
            <div class="col-10">{{ $user -> email }}</div>
        </div>
        <div class="row">
            <div class="col-2">Дата рождения</div>
            <div class="col-10">{{$user->birthday->format('d-m-y')}} ({{round($user->birthday->diffInYears(), 0)}} {{ trans_choice("{0} лет|{1} год|[2,4] года|[5,*] лет" }})</div>
        </div>
    </x-vanya>
<br>
    <x-vanya>
    <x-slot:title>Изменить пароль</x-slot:title>
        <form action="{{route('profile.password.update')}}" method="post">
            @csrf
            <x-form.input type="password" name="password_old" label="ВВедите текущий пароль" placeholder="Текущий пароль" :error="$errors->first('password_old')"/>
            <x-form.input type="password" name="password" label="ВВедите новый пароль" placeholder="Новый пароль" :error="$errors->first('password')"/>
            <x-form.input type="password" name="password_confirmation" label="Повторите пароль" placeholder="Повторите пароль" :error="$errors->first('password_confirmation')"/>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </x-vanya>

@endsection
