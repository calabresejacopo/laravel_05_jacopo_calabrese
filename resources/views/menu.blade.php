<x-layout>
    <div class="container-fluid menu-image">
        <div class="row justify-content-center">
            @foreach($burgers as $burger)
            <div class="col-12 col-md-4">
                <x-burgercard :burger="$burger"
                />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>