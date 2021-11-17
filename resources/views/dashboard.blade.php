<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="{{ url('/css/style.css') }}" rel="stylesheet">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <form action=""></form>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="/dashboard" method="POST">
                    @csrf
                    <div class="w-100 d-flex justify-content-center align-items-center">
                        <label for="category" class="px-3">Please select a category:</label>
                    <select id="category" name="category_id" class="mb-2">
                    @foreach ($categories as $cat)
                        <option value="{{$cat->id}}" name="category_id">{{ $cat->name }}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="w-100 d-flex justify-content-center">
                        <input type="text" name="title" class="form-control me-2 mb-2 w-75 title" placeholder="Enter Title"></input>
                    </div>
                    <div class="center">
                        <textarea style="resize: none;" class="des mr-2" name="excerpt" placeholder="enter short descs" rows="10" cols="30"></textarea>
                        <textarea style="resize: none;" class="mess" name="body" placeholder="Enter your story" rows="10" cols="30"></textarea>
                    </div>
                    <div class="w-100 d-flex justify-content-center">
                        <button style="background-color: #000;" class="btn btn-primary px-4 mt-2">send</button>
                    </div>
                    
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>