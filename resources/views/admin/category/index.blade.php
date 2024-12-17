<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Category Details</h4>
                    @if (!$category)
                        <a href="{{ route('category.create') }}" class="btn btn-primary">Add Categories</a>
                    @endif

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        S.N.
                                    </th>
                                    <th>Logo</th>
                                    <th>Company Name</th>
                                    <th>Phone</th>
                                    <th>Tel</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($category)
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <img src="{{ asset($category->logo) }}" alt="{{ $category->name }}" width="30">
                                        </td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->phone }}</td>
                                        <td>{{ $category->tel }}</td>
                                        <td>{{ $category->email }}</td>
                                        <td>
                                            <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('category.edit', $category->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
