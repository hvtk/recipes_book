@if(session()->has('message'))
    <div x-data="{show: true}"
         x-init="setTimeout(() => show = false, 3000)"
         x-show="show"
         class="offset-1 text-center text-black alert alert-info"
        >
        <p> 
            {{ session('message') }}
        </p>
    </div>
@endif