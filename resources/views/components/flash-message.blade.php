@if(session()->has('message'))
    <div x-data="{show: true}"
         x-init="setTimeout(() => show = false, 3000)"
         x-show="show"
         class="d-flex flex-column fixed-top bg-primary text-white px-48 py-3 align-items-center text-center"
        >
        <p> 
            {{ session('message') }}
        </p>
    </div>
@endif