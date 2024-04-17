@extends('layouts.admin')

@section('title', 'Update Article')

@section('content')
<div class="container-fluid">   
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header text-white" style="background-color: rgb(86, 19, 149)">Update Article</div>
                <div class="card-body">
                    <form action="{{ route('article.update' ,  $article->id) }}" method="POST" novalidate enctype="multipart/form-data">                  
                        @method('put')
                        @csrf

                        <div class="form-group">
                            <label for="image">Image:</label>
                            <div class="custom-file">
                                <input type="file" name="image" id="image" class="custom-file-input" accept="image/jpeg,image/png,image/jpg,image/gif">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $article->title }}" required maxlength="255">
                            <small class="text-muted">Maximum 255 characters</small>
                        </div>

                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea name="content" id="editor" class="form-control" rows="4" required>{{ $article->content }}</textarea>
                            <small class="text-muted">Enter article content</small>
                        </div>

                        <div class="form-group">
                            <label for="category">Category:</label>
                            <select name="category_id" id="category" class="form-control" required>
                                <option value="{{ $article->categories_id }}">{{ $article->category->name }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-success">Update Article</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection
