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
                <strong><h2 class="text-green-400 text-center" style="font-size: 40px" > Pricing</h2></strong>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table table-stripped table-bordered">
                        <tr>
                            <th>plan</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Features</th>
                            <th>Action</th>
                        </tr>
                        @foreach($data as $datas)
                        <tr>
                            <td>{{$datas->package_plan}}</td>
                            <td>{{$datas->package_title}}</td>
                            <td>{{$datas->package_price}}</td>
                            <td>{{$datas->package_features}}</td>
                            <td><a href="{{route('updatePricing.edit', $datas->id)}}" class='btn btn-success'>Edit</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>