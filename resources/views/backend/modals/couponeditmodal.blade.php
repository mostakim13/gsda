<div class="modal fade" id="CouponEdit{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="CouponEdit"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CouponEdit{{ $item->id }}">Create Coupon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('coupon-update') }}" method="POST">
                    @csrf
@php
    $courses = App\Models\Course::all();
@endphp
                    <input type="hidden" id="id" name="id" value={{ $item->id }}>
                    <div class="form-group">
                        <label>Select Course:</label>
                        <select class="form-control select2-show-search" style="width: 100%;"
                            data-placeholder="Select One" name="course_id">
                            <option label="Choose one"></option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}  {{ $course->id == $item->course_id? 'selected':'' }}">{{ ucwords($course->course_title) }}</option>
                            @endforeach
                        </select>
                        @error('course_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="vimeo_id">Coupon Name</label>
                        <input type="text" class="form-control" name="coupon_name" value="{{ $item->coupon_name }}" aria-describedby="coupon_name"
                            placeholder="Coupon Name">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Discount (%): <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="coupon_discount" value="{{ $item->coupon_discount }}" placeholder="Enter Discount"
                            min="1" max="99">

                    </div>
                    <div class="form-group">
                        <label for="lesson_title">Validity</label>
                        <input type="date" class="form-control" name="coupon_validity" value="{{ $item->coupon_validity }}"
                            aria-describedby="coupon_validity" placeholder="Validity">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
