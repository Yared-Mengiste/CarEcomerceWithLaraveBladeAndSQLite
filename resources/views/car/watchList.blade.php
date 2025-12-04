<x-app-layout>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <main>
        <!-- New Cars -->
        <section>
            <div class="container">
                <h2>My Favourite Cars</h2>
                <div class="car-items-listing">
                    @foreach($cars as $car)
                        <x-carItem :$car :favourite="true"/>
                    @endforeach
                </div>
                {{$cars->onEachSide(1)->links()}}
            </div>
        </section>
        <!--/ New Cars -->
    </main>
</x-app-layout>
