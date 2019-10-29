@extends('layouts.app')

@section('content')
<div class="container">

    <form method="post" action="{{route('event.store')}}">
        @csrf
        <div class="form-group">
            <label for="name-event">Name Event</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="name of event">
        </div>
        <div class="form-group">
            <label for="des">Description</label>
            <input type="text" class="form-control" id="des" name="des" placeholder="Explain about your Event">
        </div>
        <div class="form-group">
            <label for="location">Description</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Enter link for your Event location">
        </div>

        <div class="form-group">
            <label >Begin voorverkoop periode</label>
            <input type="date" name="date" max="3000-12-31"
                   min="1000-01-01" class="form-control">
        </div>
        <div class="form-group">
            <label >Einde voorverkoop periode</label>
            <input type="time" name="time" min="1000-01-01"
                   max="3000-12-31" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Description</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter the price of Event">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Attach a license</label>
            <input type="file" class="form-control-file" id="image">
        </div>
        <div class="form-group">
            <label for="category">select category</label>
            <select  class="form-control" id="category">
                <option value="Family">Family</option>
                <option value="Sport">Sport</option>
                <option value="Fashion">Fashion</option>
                <option value="Food">Food</option>
                <option value="Other">Other...</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success btn-block btn-group-lg mb-5">Submit</button>
    </form>
</div>

@endsection
