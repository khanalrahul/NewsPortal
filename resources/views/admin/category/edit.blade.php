<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Edit Category {{$category->nep_name}}</h4>
                    <a href="{{ route('category.index') }}" class="btn btn-primary">Go Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="nep_title">Nepali Title <span class="text-danger">*</span></label>
                                <input type="text" name="nep_title" id="nep_title" value="{{ old('nep_title') ?? $category->nep_title }}" class="form-control">
                                @error('nep_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-6">
                                <label for="eng_title">English Title <span class="text-danger">*</span></label>
                                <input type="eng_title" name="eng_title" id="eng_title" value="{{ old('eng_title') ?? $category->eng_title }}" class="form-control">
                                @error('eng_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-6">
                                <label for="position">Position <span class="text-danger">*</span></label>
                                <input type="number" name="position" id="position" value="{{ old('position') ?? $category->position }}" class="form-control" min="1" max="{{$categoryCount}}" step="1" required>
                                @error('position')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-3 col-12">
                                <button type="submit" class="btn btn-success">Update Records</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>