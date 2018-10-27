@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('admin.sidebar')
            </div>

            <div class="col-md-6">
                <div class="card">
                    <p><br></p><p><br></p><p><br></p><p><br></p>
                    <div class="card-body">

                        <a href="{{ url('/admin/player') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/player/' . $player->id . '/edit') }}" title="Edit Player"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/player' . '/' . $player->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Player" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>  </th><td> <img src="/images/photos/{{ $player->photo }}" width="200"> </td></tr>
                                    <tr><th> Last Name </th><td> {{ $player->lname }} </td></tr>
                                    <tr><th> First Nname </th><td> {{ $player->fname }} </td></tr>
                                    <tr><th> Country </th><td>  {{ $player->country->name }}&nbsp;&nbsp; <img src="/images/flag/{{ $player->country->flag }}" width="17"></td></tr>
                                    <tr><th> ID </th><td> {{ $player->number }} </td></tr>
                                    <tr><th> Birth</th><td> {{ $player->birth}} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
