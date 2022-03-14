@extends('admin.admin_master')

@section('admin_dashboard_content')
    <div class="container-fluid">
        <div class="container border">
            <form action="{{ route('store_instructor') }}" method="POST">
                @csrf
                @php
                    $users = App\Models\User::all();
                @endphp

                <div class="form-group">
                    <label>Select Instructor Email:</label>
                    <select class="form-control select2-show-search" style="width: 100%;" data-placeholder="Select user email"
                        name="user_id">
                        <option label="Choose one"></option>
                        @foreach ($users as $item)
                            <option value="{{ $item->id }}">{{ ucwords($item->email) }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Instructor</button>
                </div>
            </form>
        </div>
    </div>

@endsection
