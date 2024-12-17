<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Edit Company</h4>
                    <a href="{{ route('company.index') }}" class="btn btn-primary">Go Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" value="{{ old('name') ?? $company->name }}" class="form-control">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-6">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" value="{{ old('email') ?? $company->email }}" class="form-control">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-6">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" id="phone" value="{{ old('phone') ?? $company->phone }}" class="form-control">
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-6">
                                <label for="tel">Telephone <span class="text-danger">*</span></label>
                                <input type="tel" name="tel" id="tel" value="{{ old('tel') ?? $company->tel }}" class="form-control">
                                @error('tel')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-6">
                                <label for="facebook">Facebook</label>
                                <input type="text" name="facebook" id="facebook" value="{{ old('facebook') ?? $company->facebook }}" class="form-control">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="instagram">Instagram</label>
                                <input type="text" name="instagram" id="instagram" value="{{ old('instagram') ?? $company->instagram }}" class="form-control">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="logo">Logo <span class="text-danger">*</span></label>
                                <input type="file" name="logo" id="logo" class="form-control">
                                <img src="{{asset($company->logo)}}" alt="{{$company->name}}">
                                @error('logo')
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