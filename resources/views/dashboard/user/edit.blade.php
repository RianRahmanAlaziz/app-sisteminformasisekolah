@foreach ($user as $item)
    <!-- Modal -->
    <div class="modal fade" id="edituser-{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                </div>
                <form action="/dashboard/data-user-management/{{ $item->id }}" method="POST"
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <main class="form-signin w-100 m-auto">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" id="name" required autofocus
                                    value="{{ old('name', $item->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" required autofocus
                                    value="{{ old('email', $item->email) }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="roles">Role</label>
                                <select class="form-select" name="roles">
                                    @foreach ($roles as $role)
                                        @if (old('roles', $item->getRoleNames()->first()) == $role->name)
                                            <option value="{{ $role->name }}" selected>{{ $role->name }}</option>
                                        @else
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" autofocus>
                            </div>
                        </main>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
