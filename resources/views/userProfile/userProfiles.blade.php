<h1>{{$heading}}</h1>
@foreach($userprofiles as $userprofile)
    <h2>
        <a href="/userprofiles/{{ $userprofile['id']}}">{{ $userprofile['firstname'] }} </a>
    </h2>
    <p>{{ $userprofile['birthday'] }}</p>
@endforeach