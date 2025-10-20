@extends('layouts.admin.app')
@section('content')
    {{-- Start Main Content --}}
        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Volt</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Tambah Pelanggan</h1>
                    <p class="mb-0">Form untuk menambahkan data pelanggan baru.</p>
                </div>
                <div>
                    <a href="pelanggan.index" class="btn-primary btn-outline-gray"><i
                            class="far fa-question-circle me-1"></i> Kembali</a>
                </div>
            </div>
        </div>

        <form action="{{ route('pelanggan.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-0 shadow components-section">
                        <div class="card-body">
                            <div class="row mb-4">

                                <!-- Kolom Kiri -->
                                <div class="col-lg-6 col-sm-12">

                                    <!-- First Name -->
                                    <div class="mb-3">
                                        <label for="first_name">First Name</label>
                                        <input type="text"
                                            class="form-control @error('first_name') is-invalid @enderror"
                                            id="first_name" name="first_name" value="{{ old('first_name') }}"
                                            placeholder="Enter first name" required>
                                        @error('first_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Last Name -->
                                    <div class="mb-3">
                                        <label for="last_name">Last Name</label>
                                        <input type="text"
                                            class="form-control @error('last_name') is-invalid @enderror"
                                            id="last_name" name="last_name" value="{{ old('last_name') }}"
                                            placeholder="Enter last name" required>
                                        @error('last_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Birthday -->
                                    <div class="mb-3">
                                        <label for="birthday">Birthday</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <input type="date"
                                                class="form-control @error('birthday') is-invalid @enderror"
                                                id="birthday" name="birthday" value="{{ old('birthday') }}">
                                            @error('birthday')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Kolom Kanan -->
                                <div class="col-lg-6 col-sm-12">

                                    <!-- Gender -->
                                    <div class="mb-3">
                                        <label for="gender">Gender</label>
                                        <select class="form-select @error('gender') is-invalid @enderror"
                                            id="gender" name="gender">
                                            <option value="">-- Select Gender --</option>
                                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>
                                                Male</option>
                                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                                Female</option>
                                            <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>
                                                Other</option>
                                        </select>
                                        @error('gender')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="email">Email address</label>
                                        <input type="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            name="email" value="{{ old('email') }}" placeholder="Enter email"
                                            required>
                                        <small class="form-text text-muted">We'll never share your email with anyone
                                            else.</small>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Phone -->
                                    <div class="mb-3">
                                        <label for="phone">Phone</label>
                                        <input type="text"
                                            class="form-control @error('phone') is-invalid @enderror" id="phone"
                                            name="phone" value="{{ old('phone') }}"
                                            placeholder="Enter phone number">
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Save Customer</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="card theme-settings bg-gray-800 theme-settings-expand" id="theme-settings-expand">
            <div class="card-body bg-gray-800 text-white rounded-top p-3 py-2">
                <span class="fw-bold d-inline-flex align-items-center h6">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Settings
                </span>
            </div>
        </div>

    {{-- End Main Content --}}
@endsection
