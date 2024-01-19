<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Обновление записи') }}
        </h2>
    </x-slot>

    <form action="{{route('user-update',$data->id)}}" class="max-w-7xl mx-auto sm:px-6 lg:px-8" method="post">
    @csrf
    <div class="form-group mt-2">
        <label for="name">Введите имя</label>
        <input type="text" value="{{$data->name}}" name="name" placeholder="Введите имя" id="name" class="form-control">
    </div>

    <div class="form-group mt-2">
        <label for="email">Email</label>
        <input type="text" value="{{$data->email}}" name="email" placeholder="Введите email" id="email" class="form-control">
    </div>

    <div class="form-group mt-2">
        <label for="subject">Введите имя</label>
        <input type="text" value="{{$data->subject}}" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
    </div>

    <div class="form-group mt-2">
        <label for="message">Введите имя</label>
        <textarea  name="message" placeholder="Введите сообщение" id="message" class="form-control">{{$data->message}}</textarea>
    </div>

    <input type="submit" class="btn btn-success mt-2" value="Обновить">

    </form>
</x-app-layout>
