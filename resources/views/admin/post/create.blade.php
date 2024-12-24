<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Post Create</h4>
                    <a href="{{ route('post.index') }}" class="btn btn-primary">Go Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label for="categories">Select Categories <span class="text-danger">*</span></label>
                                <select name="categories[]" id="categories" class="form-control select2" multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->eng_title}}</option>
                                    @endforeach
                                </select>
                                @error('categories')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" id="title" value="{{ old('title')}}" class="form-control">
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            <div class="mb-3 col-12">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea name="description" id="description" class="summernote form-control"> 
                                    {{ old('description')}}
                                </textarea>
                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label for="meta_words">Meta Words</label>
                                <textarea name="meta_words" id="meta_words" class="form-control" >{{ old('meta_words')}}</textarea>
                                @error('meta_words')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control" >{{ old('meta_description')}}</textarea>
                                @error('meta_description')
                                    <p class="text-danger">{{ $message }}</p>   
                                @enderror
                            </div>
                            <div class="mb-3 col-12">
                                <label for="image">Image<span class="text-danger">*</span></label>
                                <input type="file" name="image" id="image" class="form-control">

                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-3 col-12">
                                <button type="submit" class="btn btn-success">Save Records</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>