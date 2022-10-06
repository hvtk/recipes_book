<x-layout>

    @unless(count($profileUser) == 0)

    <x-profileUser-card :profileUser="$profileUser" />

    @else
    <p> No Profiles Found </p>

    @endunless  

</x-layout>