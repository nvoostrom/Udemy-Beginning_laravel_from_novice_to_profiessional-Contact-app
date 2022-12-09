@extends('layouts.main')

@section('title', 'Contacts app | All contacts')


@section('content')

    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title">
                            @include('contact.components.addUser')
                        </div>
                        <div class="card-body">

                            @include('contact.components.search')

                            <table class="table table-striped table-hover">

                                @include('contact.components.contactTable')

                            </table>

                            @include('contact.components.nextPages')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
