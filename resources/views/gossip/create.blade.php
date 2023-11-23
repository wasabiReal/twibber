@extends('layouts.home')
@section('content')

    <form class="row g-3">
        <div class="col-md-1">
            <img src="{{ asset('images/sei_admiral.jpg') }}" alt="user" width="64px" height="64px">
        </div>
        <div class="col-md-6">
            <span>What's happend, dear {user.name}?</span>
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
