@if(session()->has('message'))
    <div class="fixed top-20 left-1/2 transform-translate-x-1/2 bg-blue-800 text-white px-48 py-3">
        <p> 
            {{ session('message') }}
        </p>
    </div>
@endif