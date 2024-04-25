@extends('layouts.admin')

@section('title', 'All Classes')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Capacity</th>
                            <th scope="col">Date</th>
                            <th scope="col">Type</th>
                            <th scope="col">Room</th>
                            <th scope="col">Coach</th>
                            <th scope="col">Start Time</th>
                            <th scope="col">End Time</th>
                            <th scope="col">Created At</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-light">
                        @foreach ($classes as $class)
                        <tr>
                            <td>{{ $class->id }}</td>
                            <td>{{ $class->title }}</td>
                            <td>{{ $class->description }}</td>
                            <td>{{ $class->Capacity }}</td>
                            <td>{{ $class->date }}</td>
                            <td>{{ $class->class_type->name}}</td>
                            <td>{{ $class->classroom->name}}</td>
                            <td>{{ $class->coach->name}}</td>
                            <td>{{ $class->startTime}}</td>
                            <td>{{ $class->endTime}}</td>
                            <td>{{ $class->created_at->format('M d, Y') }}</td>
                            <td class="text-center">
                                <form action="{{ route('class_destroy', $class->id) }}" method="POST">
                                    
                                @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"  title="Cancel Class"><i class="fas fa-cancel" onclick="return confirm('are u sure you want to delete this class')"></i></button>

                                </form>
                            </td>
                        </tr>
                        <!-- Delete Article Modal -->
                        {{-- <div class="modal fade" id="deleteArticleModal{{ $class->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteArticleModalLabel{{ $class->id }}" aria-hidden="true">
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
                        </div> --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
