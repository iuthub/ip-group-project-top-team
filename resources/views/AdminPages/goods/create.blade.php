@extends('layouts.admin')


@section('title')

@endsection


@section('content')

    <h2>Create Goods!</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="create" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title"
                   aria-describedby="titleHelp">
        </div>

        <div class="form-group">
            <label for="count">Count</label>
            <input type="number" class="form-control" name="count" id="count" aria-describedby="countHelp">
        </div>


        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" id="price" aria-describedby="priceHelp">
        </div>


        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" accept="image/jpeg" name="image" id="image" aria-describedby="imageHelp">
        </div>


        <div class="form-group">
            <label for="discount">Discount</label>
            <input type="number" class="form-control" name="discount" id="discount" aria-describedby="discountHelp">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" name="category" id="category">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="tags">Tags</label>
            <select class="form-control" multiple name="tags[]" id="tags">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
