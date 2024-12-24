<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Posts Details</h4>
                    <a href="{{ route('post.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        S.N.
                                    </th>
                                    <th>Post Title</th>
                                    <th>Featured Image</th>
                                    <th>Views</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $index => $post)
                                    <tr>
                                        @if ($posts)
                                            <td>
                                                {{ ++$index }}
                                            </td>
                                            <td>{{ $post->title }}</td>
                                            <td><img src="{{ asset($post->image) }}" width="120"
                                                    alt="{{ $post->title }}"></td>
                                            <td>{{ $post->views }}</td>
                                            <td>{{ $post->status }}</td>
                                            <td>
                                                <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('post.edit', $post->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
