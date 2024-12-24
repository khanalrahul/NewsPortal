<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Edit Post {{ $post->title }}</h4>
                    <a href="{{ route('post.index') }}" class="btn btn-primary">Go Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="categories">Select Categories <span class="text-danger">*</span></label>
                                <select name="categories[]" id="categories" class="form-control select2" multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $post->categories->contains($category->id) ? 'selected' : '' }}>
                                            {{ $category->eng_title }}</option>
                                    @endforeach
                                </select>
                                @error('categories')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-6">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-control">
                                    <option value="pending"
                                        {{ old('status', $post->status) === 'pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="accepted"
                                        {{ old('status', $post->status) === 'accepted' ? 'selected' : '' }}>Accepted
                                    </option>
                                    <option value="rejected"
                                        {{ old('status', $post->status) === 'rejected' ? 'selected' : '' }}>Rejected
                                    </option>
                                </select>
                                @error('status')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title"
                                    value="{{ old('title') ?? $post->title }}" class="form-control">
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea name="description" id="description" class="summernote form-control"> 
                                    {{ old('description') ?? $post->description }}
                                </textarea>
                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label for="meta_words">Meta Words</label>
                                <textarea name="meta_words" id="meta_words" class="form-control">{{ old('meta_words') ?? $post->meta_words }}</textarea>
                                @error('meta_words')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control">{{ old('meta_description') ?? $post->meta_discription }}</textarea>
                                @error('meta_description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label for="image">Image<span class="text-danger">*</span></label>
                                <input type="file" name="image" id="image" class="form-control">
                                <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" width="150px"
                                    class="img-fluid">
                                @error('image')
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
