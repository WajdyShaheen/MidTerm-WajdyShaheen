@extends('layouts.header')

@section('tilte')
    My Tasks
@endsection

@section('contnet')
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($alltasks as $row)
                    <tr>
                        <td>{{ $row['category'] }}</td>
                        <td>
                            <a href="#">
                                {{ $row['title'] }}
                            </a>
                        </td>
                        <td><span class="label label-danger">Close</span></td>
                        <td>{{ $row['updated_at'] }}</td>
                    </tr>
                @endforeach


                {{--  <tr>
                    <td>Shipping</td>
                    <td>
                        <a href="#">
                            #8254 - Ticket 1
                        </a>
                    </td>
                    <td><span class="label label-success">Open</span></td>
                    <td>2021-11-19 07:54:15</td>
                </tr>
                <tr>
                    <td>Technical</td>
                    <td>
                        <a href="#">
                            #2011 - Ticket 2
                        </a>
                    </td>
                    <td><span class="label label-danger">Close</span></td>
                    <td>2021-11-20 07:55:13</td>
                </tr>
                <tr>
                    <td>Technical</td>
                    <td>
                        <a href="#">
                            #4213 - Ticket 3
                        </a>
                    </td>
                    <td><span class="label label-success">Open</span></td>
                    <td>2021-11-20 08:01:29</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>
                        <a href="#">
                            #1234 - Task 4
                        </a>
                    </td>
                    <td><span class="label label-success">Open</span></td>
                    <td>2021-11-22 08:02:21</td>
                </tr>
                <tr>
                    <td>Technical</td>
                    <td>
                        <a href="#">
                            #6334 - Ticket 5
                        </a>
                    </td>
                    <td><span class="label label-danger">Close</span></td>
                    <td>2021-11-23 09:06:18</td>
                </tr>
                <tr>
                    <td>Sales</td>
                    <td>
                        <a href="#">
                            #2123 - Ticket 6
                        </a>
                    </td>
                    <td><span class="label label-success">Open</span></td>
                    <td>2021-11-23 09:06:54</td>
                </tr>  --}}
            </tbody>
        </table>
    </div>
@endsection
