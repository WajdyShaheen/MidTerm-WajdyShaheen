@extends('layouts.header')

@section('tilte')
    title
@endsection

@section('contnet')
    <div class="panel-body">

        <div class="ticket-info">
            <p>Ticket no. 1</p>
            <p>Categry: Technical</p>
            <p>
                Status: <span class="label label-success">Open</span>
            </p>
            <p>Created on: 2 weeks ago</p>
        </div>

        <hr>

        <div class="comments">
        </div>

        <div class="comment-form">
            <form action="http://localhost:8000/comment" method="POST" class="form">
                <input type="hidden" name="_token" value="zOBdREu0F12XsUrYS9S3vHrlAamHCBGoZV1Zf9C9">

                <input type="hidden" name="ticket_id" value="1">

                <div class="form-group">
                    <textarea rows="10" id="comment" class="form-control" name="comment"></textarea>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
