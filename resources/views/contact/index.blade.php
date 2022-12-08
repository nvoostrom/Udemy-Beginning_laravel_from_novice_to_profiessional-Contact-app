@extends('layouts.main')


@section('content')
    <h1>All contacts</h1>
    <a href="{{ route('contacts.create') }}">create contact</a>

    @foreach ($contacts as $id => $contact)
        <div>
            <p>{{ $contact['name'] }} | {{ $contact['phone'] }} <a href="{{ route('contacts.show', $id) }}">show</a></p>
        </div>
    @endforeach
@endsection
