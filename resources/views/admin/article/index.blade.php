@extends('layouts.admin')

@section('title', 'Manage Articles')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-lg-3">
            <a href="{{ route('article.create') }}">
                <button class="btn btn-success btn-lg btn-block">Create Article</button>
            </a>      
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->author->name }}</td>
                            <td>{{ $article->category->name }}</td>
                            <td>{{ $article->created_at->format('M d, Y') }}</td>
                            <td class="text-center">
                                <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary btn-sm" title="Edit Article"><i class="fas fa-edit"></i></a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteArticleModal{{ $article->id }}" title="Delete Article"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Delete Article Modal -->
                        <div class="modal fade" id="deleteArticleModal{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteArticleModalLabel{{ $article->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title" id="deleteArticleModalLabel{{ $article->id }}">Delete Article</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this article?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <form action="{{ route('article.destroy', $article->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
