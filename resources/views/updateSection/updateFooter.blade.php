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
                    
                
                    <div class="col-sm col-md col-lg">
                        <div class="row">
                            @if(session('status'))
                            <p class="px-12 py-5 bg-green-500 text-white"> 
                            {{session('status')}}
                            </p>
                            @endif
                           
                           <form class="form" method='post' action="{{route('updateFooter.store')}}">
                            @csrf
                             <div class="form-group">
                             <label for="title">
                                Title
                             </label>
                             <input type="text" class="w-full shadow appearance-none rounded py-2 px-3" value="{{$datas->title}}"  name="title">
                                @error('title')
                                   {{$message('title')}} 
                                @enderror
                                <input type="hidden" value="{{$datas->id}}" name="tableId">
                            </div>
                            <div class="form-group mt-4">
                                <label for="body">
                                   Body
                                </label>
                                <textarea class="w-full shadow appearance-none  py-2 px-3 resize-y rounded-md"   name="body">{{$datas->body}}</textarea>
                                @error('body')
                                {{$message('body')}} 
                             @enderror
                               </div>
                               <div class="form-group mt-4">
                                <p> <button class="bg-blue-500 text-white py-2 px-6 rounded">Submit </button></p>
                               </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
