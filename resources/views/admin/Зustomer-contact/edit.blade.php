@extends('admin.layouts.app')

@section('title', 'Update Customer')

@section('content')
<section class="py-5 bg-light min-vh-100">
    <div class="container">
        <div class="card shadow-lg border-0 rounded-4 mx-auto" >

            <!-- Header -->
            <div class="card-header text-white d-flex justify-content-between align-items-center bg-gradient-purple">
                <h5 class="mb-0">Update Customer</h5>

                @can('view user')
                <a href="{{ route('admin.çustomer-contact.index') }}" class="btn btn-light btn-sm">
                    <i class="fa fa-angle-left me-1"></i> Back
                </a>
                @endcan
            </div>

            <!-- Form Body -->
            <div class="card-body">
                <form method="POST" action="{{ route('admin.çustomer-contact.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row g-3">

                        <!-- FULL NAME -->
                        <div class="col-md-6">
                            <label class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" value="{{ old('name', $data->name) }}" class="form-control" required>
                        </div>

                        <!-- USERNAME -->
                        <div class="col-md-6">
                            <label class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" name="username" value="{{ old('username', $data->username) }}" class="form-control" required>
                        </div>

                        <!-- EMAIL -->
                        <div class="col-md-6">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" value="{{ old('email', $data->email) }}" class="form-control" required>
                        </div>

                        <!-- PHONE -->
                        <div class="col-md-6">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" value="{{ old('phone', $data->phone) }}" class="form-control">
                        </div>

                        <!-- ADDRESS -->
                        <div class="col-md-12">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" value="{{ old('address', $data->address) }}" class="form-control">
                        </div>

                        <!-- COUNTRY -->
                        <div class="col-md-6">
                            <label class="form-label">Country</label>
                            <input type="text" name="country" value="{{ old('country', $data->country) }}" class="form-control">
                        </div>

                        <!-- STATE -->
                        <div class="col-md-6">
                            <label class="form-label">State</label>
                            <input type="text" name="state" value="{{ old('state', $data->state) }}" class="form-control">
                        </div>

                        <!-- CITY -->
                        <div class="col-md-6">
                            <label class="form-label">City</label>
                            <input type="text" name="city" value="{{ old('city', $data->city) }}" class="form-control">
                        </div>

                        <!-- ZIP -->
                        <div class="col-md-6">
                            <label class="form-label">Zip Code</label>
                            <input type="text" name="zip_code" value="{{ old('zip_code', $data->zip_code) }}" class="form-control">
                        </div>

                        <!-- DOB -->
                        <div class="col-md-6">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" name="dob" value="{{ old('dob', $data->dob) }}" class="form-control">
                        </div>

                        <!-- GENDER -->
                        <div class="col-md-6">
                            <label class="form-label">Gender</label>
                            <select name="gender" class="form-select">
                                <option value="" {{ old('gender', $data->gender) == '' ? 'selected' : '' }}>Select</option>
                                <option value="male" {{ old('gender', $data->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender', $data->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="other" {{ old('gender', $data->gender) == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>

                        <!-- BIO -->
                        <div class="col-md-12">
                            <label class="form-label">Bio</label>
                            <textarea name="bio" class="form-control" rows="3">{{ old('bio', $data->bio) }}</textarea>
                        </div>

                        <!-- Profile Image -->
                        <div class="col-md-6">
                            <label class="form-label">Profile Image</label>
                            <input type="file" name="image" class="form-control">

                            @if($data->image)
                                <div class="mt-2">
                                    <img src="{{Storage::url($data->image) }}" width="80" class="img-thumbnail">
                                </div>
                            @endif
                        </div>

                        <!-- REFERRAL CODE -->
                        <div class="col-md-6">
                            <label class="form-label">Referral Code</label>
                            <input type="text" name="referal_code" value="{{ old('referal_code', $data->referal_code) }}" class="form-control">
                        </div>

                        <!-- STATUS -->
                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Deactive</option>
                            </select>
                        </div>

                    </div>

                    <!-- Submit Button -->
                    <div class="text-end pt-4 mt-3 border-top">
                        <button type="submit" class="btn text-white px-4 bg-gradient-purple">
                            <i class="fa fa-save me-1"></i> Update
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>
@endsection
