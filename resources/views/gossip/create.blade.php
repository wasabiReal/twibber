@extends('layouts.home')
@section('content')

    <form class="row g-3 create-gossip-form" action="{{ route('gossip.store') }}" method="post" id="gossip-form">
        @csrf
        <div class="col-md-2">
            <img src="{{ asset('images/sei_admiral.jpg') }}" alt="user" width="150px" height="150px" style="border-radius: 50px">
        </div>
        <div class="col-md-6">
            <span style="font-size: 20px;">Tell me a gossip, {user.name} &#128520;</span>
        </div>
        <div class="col-12">
            <textarea class="form-control" id="textarea-spread" cols="30" rows="5" name="content"></textarea>
        </div>
        <div class="col-12">
            <label for="tags" class="form-label">Add tags</label>
            <input placeholder="#news #crypto #nature" id="tags" name="tags" class="form-control">
            <span id="tagError" style="color: red;"></span>
        </div>
        <div class="col-12" style="text-align: center">
            <button type="submit" class="btn btn-primary col-3">Spread..</button>
        </div>
    </form>

@endsection
