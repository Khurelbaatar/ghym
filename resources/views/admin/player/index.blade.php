@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="jumbotron"><h3>All player</h3></div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/admin/player/create') }}" class="btn btn-success btn-sm" title="Add New Player">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Player
                        </a>


                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th><th>Full name</th><th>ID</th><th>Birth</th><th>Country</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($player as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->fname }} <b>{{ $item->lname }} </b></td><td>{{ $item->number }}</td><td>{{ $item->birth }}</td><td>{{ $item->country->name }} &nbsp;&nbsp;<img src="/images/flag/{{ $item->country->flag }}" width="17"></td>
                                        <td>
                                            <a href="{{ url('/admin/player/' . $item->id) }}" title="View Player"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/player/' . $item->id . '/edit') }}" title="Edit Player"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/player' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Player" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $player->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
