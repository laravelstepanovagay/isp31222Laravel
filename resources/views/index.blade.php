@extends("layouts.main")

@section('title', 'Регистрация')

@section('body')
{{--    @dd(now()->format('Y-M-D'))--}}

<x-vanya>
   <x-slot:title>
       @yield('title')
   </x-slot:title>
    <h1 class="mb-4 fs-2">
        @yield('title')
    </h1>
   <div class="bg-white rounded-4 shadow-sm p-4">
       <form action="" method="get">
           <div class="mb-4">
               <label for="fio" class="form-label">Ваше ФИО</label>
               <input type="text" name="fio" placeholder="Фамилия Имя Отчество" class="form-control is-invalid">
               <div class="invalid-feedback">
                   Please provide a valid zip.
               </div>
           </div>
           <div class="mb-4">
               <label for="email" class="form-label">Ваш mail</label>
               <input type="email" name="mail" placeholder="example@mail.ru" class="form-control is-invalid">
           </div>
           <div class="invalid-feedback">
               Please provide a valid zip.
           </div>
           <div class="mb-4">
               <label for="birthday" class="form-label">birthday</label>
               <input type="date" name="birthday" placeholder="" value="{{now()->format('Y-m-d')}}" class="form-control is-invalid">
           </div>
           <div class="invalid-feedback">
               Please provide a valid zip.
           </div>
           <div class="mb-4">
               <label for="password" class="form-label">Ваш parol</label>
               <input type="password" name="pass" placeholder="пароль" class="form-control">
           </div>
           <div class="invalid-feedback">
               Please provide a valid zip.
           </div>
           <div class="mb-4">
               <label for="password_confirm" class="form-label">podtverdite pass</label>
               <input type="password" name="pass_confirm" placeholder="повторить пароль" class="form-control">
           </div>
           <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
       </form>
   </div>

@endsection
