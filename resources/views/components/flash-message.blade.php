@if(session()->has('message'))
    <div x-data="{show: true}"
         x-init="setTimeout(() => show = false, 3000)"
         x-show="show"
         class="text-center text-black alert alert-info ms-250"
        >
        <p> 
            {{ session('message') }}
        </p>
    </div>
@endif