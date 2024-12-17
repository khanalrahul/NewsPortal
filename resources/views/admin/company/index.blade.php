<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Company Details</h4>
                    <a href="{{ route('company.create') }}" class="btn btn-primary">Add</a>
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
                                <tr>
                                    @if ($company)
                                        <td>
                                            1
                                        </td>
                                        <td></td>
                                        <td>Our News Portal</td>
                                        <td>980734324</td>
                                        <td>0187843</td>
                                        <td>we@ournewsportal.com</td>
                                        <td>
                                            <a href="{{ route('company.edit', $company->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                    @endif
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
