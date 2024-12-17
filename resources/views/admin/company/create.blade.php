<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Company Create</h4>
                    <a href="{{ route('company.index') }}" class="btn btn-primary">Go Back</a>
                </div>
                <div class="card-body">

                    <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data"></form>
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-6" >
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" for="name" name="name" id="name" class="form-control">
                            </div>
                            <div class="mb-3 col-6" >
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" for="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="mb-3 col-6" >
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="tel" for="phone" name="phone" id="phone" class="form-control">
                            </div>
                            <div class="mb-3 col-6" >
                                <label for="tel">Telephone <span class="text-danger">*</span></label>
                                <input type="tel" for="tel" name="tel" id="tel" class="form-control">
                            </div>
                            <div class="mb-3 col-6" >
                                <label for="facebook">Facebook</label>
                                <input type="text" for="facebook" name="facebook" id="facebook" class="form-control">
                            </div>
                            <div class="mb-3 col-6" >
                                <label for="instagram">Instagram</label>
                                <input type="text" for="instagram" name="instagram" id="instagram" class="form-control">
                            </div>
                            <div class="mb-3 col-6" >
                                <label for="logo">Logo <span class="text-danger">*</span></label>
                                <input type="file" for="logo" name="logo" id="logo" class="form-control">
                            </div>
                            <div class="mb-3 col-12">
                                <button type="submit" class="btn btn-success mt-4">Save Records</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
