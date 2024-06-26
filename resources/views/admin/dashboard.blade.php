<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="display-1">
                    Bentornato, amministratore {{Auth::user()->name}}
                    </h1>
                </div>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success text-center">
                {{session('message')}}
            </div>
        @endif

        <div class="container my-5">
            <div class="row justify content-center">
                <div class="col-12">
                    <h2>Richieste per ruolo di amministratore</h2>
                    <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row justify content-center">
                <div class="col-12">
                    <h2>Richieste per ruolo di revisore</h2>
                    <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row justify content-center">
                <div class="col-12">
                    <h2>Richieste per ruolo di redattore</h2>
                    <x-requests-table :roleRequests="$writerRequests" role="revisore"/>
                </div>
            </div>
        </div>
</x-layout>