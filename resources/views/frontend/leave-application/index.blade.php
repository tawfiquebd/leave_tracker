@extends('frontend.layouts.master')

@section('main-content')

    <div class="leave-application">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center my-3">Leave Application</h2>
                        <form>
                            <div class="form-group">
                                <label for="">Leave Type</label>
                                <select class="form form-control" name="" id="">
                                    <option>---Select---</option>
                                    <option value="">Sick Leave</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Available Leaves</label>
                                <input type="text" readonly name="available_leaves" class="form form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" name="start_date" class="form form-control">
                            </div>
                            <div class="form-group">
                                <label for="">End Date</label>
                                <input type="date" name="end_date" class="form form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Total Days</label>
                                <input type="text" readonly name="number_of_days" class="form form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Reason for leave</label>
                                <textarea class="form form-control" name="leave_reason" id="" cols="30" rows="6"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection
