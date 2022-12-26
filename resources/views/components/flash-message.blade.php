<!-- Custom styles for this template -->
<link href="{{ url('/css/flashMessage.css') }}" rel="stylesheet"/>

@if(session()->has('message'))
    <div x-data="{show: true}"
         x-init="setTimeout(() => show = false, 3000)"
         x-show="show"
         class="body text-center text-black alert alert-info"
        >
        <p> 
            {{ session('message') }}
        </p>
    </div>
@endif