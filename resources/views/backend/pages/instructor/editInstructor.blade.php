@extends('admin.admin_master')

@section('admin_dashboard_content')
    <div class="container-fluid">
        <div class="container border">
            <form action="{{ route('update_instructor') }}" method="POST">
                @csrf

                <div class="form-group">
                    <input type="hidden" name="id" value="{{ $instructor->id }}">
                    <label class="form-control-label">Select Category: <span class="tx-danger">*</span></label>
                    <select class="form-control select2-show-search" data-placeholder="Select one"
                    name="user_id">
                        <option label="Choose one"></option>
                        @foreach ($users as $user)

                        <option value="{{ $user->id }}" {{ $user->id == $instructor->user_id? 'selected':'' }}>{{ ucwords($user->email) }}</option>
                        @endforeach
                      </select>
                    @error('user_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update Instructor</button>
                </div>
            </form>
        </div>
    </div>
@endsection
