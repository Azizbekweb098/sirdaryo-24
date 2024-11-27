@extends('layouts.admin')


@section('content')
<div class="container" style="margin-left: 320px">
    <div class="row">
        <div class="col-8">
            <form  action="{{ route('dashboard.posts.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">title_uz</label>
                    <input type="text" name="title_uz" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">title_en</label>
                    <input type="text" name="title_en" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">image</label>
                    <input type="file"  name="image" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">body_uz</label>
                    <input type="text"  name="body_uz" class="form-control" >
                  </div>      <div class="form-group">
                    <label for="exampleInputEmail1">body_en</label>
                    <input type="text"  name="body_en" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="category">Category:</label>
                    <select id="category" name="category_id" class="form-control">
                        @foreach ($posts as $category)
                            <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                        @endforeach
                    </select>


                  </div>
                  <div class="form-group">
                    <label for="tags">Taglar:</label>
    <select name="tag_id[]" multiple>
        @foreach ($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name_uz }}</option>
        @endforeach
    </select>

                  <div class="form-group">
                    <label for="exampleInputEmail1">meta_title</label>
                    <input type="text"  name="meta_title" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">meta_description</label>
                    <input type="text"  name="meta_descritption" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">meta_keyword</label>
                    <input type="text"  name="meta_keywords" class="form-control" >
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>

@endsection
