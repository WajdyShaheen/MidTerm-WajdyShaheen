@extends('layouts.header')

@section('tilte')
    Open new Task
@endsection


@section('contnet')
    <div class="panel-body">

        <form class="form-horizontal" role="form" method="POST" action="{{ route('storeTask') }}">
            @csrf
            <div class="form-group">
                <label for="title" class="col-md-4 control-label">Title</label>

                <div class="col-md-6">
                    <input id="title" type="text" class="form-control" name="title" value="">

                </div>
            </div>

            <div class="form-group">
                <label for="category" class="col-md-4 control-label">Category</label>

                <div class="col-md-6">
                    <select id="category" type="category" class="form-control" name="category">
                        <option value="">Select Category</option>
                        <option value="Technical">Technical</option>
                        <option value="Sales">Sales</option>
                        <option value="Shipping">Shipping</option>
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label for="priority" class="col-md-4 control-label">Priority</label>

                <div class="col-md-6">
                    <select id="priority" type="" class="form-control" name="priority">
                        <option value="">Select Priority</option>
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label for="message" class="col-md-4 control-label">Message</label>

                <div class="col-md-6">
                    <textarea rows="10" id="message" class="form-control" name="message"></textarea>

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-ticket"></i> Open Ticket
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
