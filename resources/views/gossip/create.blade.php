@extends('layouts.home')
@section('content')

    <form class="row g-3 create-gossip-form" action="{{ route('gossip.store') }}">
        @csrf
        <div class="col-md-2">
            <img src="{{ asset('images/sei_admiral.jpg') }}" alt="user" width="150px" height="150px" style="border-radius: 50px">
        </div>
        <div class="col-md-6">
            <span style="font-size: 20px;">Let's make a gossip, {user.name} &#128520;</span>
        </div>
        <div class="col-12">
            <textarea class="form-control" id="textarea-spread" cols="30" rows="5"></textarea>
            <div id="emoji"></div>
        </div>
        <div class="col-12" style="text-align: center">
            <button type="submit" class="btn btn-primary col-6">Spread..</button>
        </div>
    </form>

@endsection
