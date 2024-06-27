<link rel='stylesheet'href="{{asset('css/bootstrap.css')}}">
<link rel='stylesheet'href="{{asset('css/bootstrap-icons/bootstrap-icons.css')}}">
<link rel='stylesheet'href="{{asset('css/style.css')}}">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table table-stripped table-bordered">
                        <tr>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Action</th>
                        </tr>
                        @foreach($data as $datas)
                        <tr>
                            <td>{{$datas->title}}</td>
                            <td>{{$datas->body}}</td>
                            <td><a href="{{route('updateFooter.edit', $datas->id)}}" class='btn btn-success'>Edit</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
