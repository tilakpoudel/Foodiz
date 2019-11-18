@extends('layouts.app')

@section('form_heading')
Add Food Description
@endsection

@section('content')
<form class="needs-validation" novalidate action="{{route('foods.store')}}" enctype="multipart/form-data" method="POST">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Name</label>
            <input type="text" class="form-control" id="food_name" name="food_name" placeholder="Food Name" >
            <div class="valid-feedback">
                Looks good!
            </div>
            @error('food_name')
            <div class=" alert alert-danger">
                Please Enter Food Name.
            </div>
            @enderror
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Rate </label>
            <input type="number" class="form-control" id="food_rate" name="food_rate" placeholder="Rate" required
                min="1">
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback ">
                Please Enter Food Rate.
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustomUsername">Image</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="food_image" name="food_image" required>
                <label class="custom-file-label" for="customFile">Choose Image</label>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-8 mb-3">
            <div class="form-group">
                <label for="food_description">Description</label>
                <textarea class="form-control" id="food_description" name="food_description" rows="3" required placeholder="Provide some valid information"></textarea>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="food_status" name="food_status">
                    <option value="1" selected>Available</option>
                    <option value="0">UnAvailable</option>
                </select>
            </div>
        </div>

    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
               Confirm Information
            </label>
            <div class="invalid-feedback">
                You must confirm before submitting.
            </div>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Save</button>
</form>

@endsection