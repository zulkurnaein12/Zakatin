                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                <!-- Profile Edit Form -->
                                <form enctype="multipart/form-data" method="POST"
                                    action="{{ route('pengurus.profile.update', Auth::user()->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row mb-3">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                            Image</label>
                                        <div class="col-md-8 col-lg-9">
                                            @if (Auth::user()->avatar)
                                                <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Profile"
                                                    class="rounded-circle" width="120px" />
                                            @else
                                                <img src="{{ asset('nice') }}/assets/img/profile-img.jpg" alt="Profile"
                                                    class="rounded-circle">
                                            @endif
                                            <div class="col-md-6">
                                                <input id="avatar" type="file" class="form-control mt-3"
                                                    name="avatar">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-lg-3 col-form-label">Name</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" id="name"
                                                value="{{ old('name', $user->name) }}">
                                        </div>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="row mb-3">
                                        <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="alamat" type="text"
                                                class="form-control @error('job') is-invalid @enderror" id="alamat"
                                                value="{{ old('alamat', $user->alamat) }}">
                                        </div>
                                        @error('alamat')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="jabatan" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="jabatan" type="text"
                                                class="form-control @error('jabatan') is-invalid @enderror"
                                                id="jabatan" value="{{ old('jabatan', $user->jabatan) }}">
                                        </div>
                                        @error('jabatan')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="no_tlp" class="col-md-4 col-lg-3 col-form-label">No Telpon</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="no_tlp" type="number"
                                                class="form-control  @error('no_tlp') is-invalid @enderror"
                                                id="no_tlp" value="{{ old('no_tlp', $user->no_tlp) }}">
                                        </div>
                                        @error('no_tlp')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->

                            </div>
