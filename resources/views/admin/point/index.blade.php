@extends('layouts.app')

@section('content')

                                    <?php
                                        function totalScore($obj){
                                            $difficulty = ($obj->d1 + $obj->d2)/2 + ($obj->d3 + $obj->d4)/2;
                                            $execution = calcExecution($obj);
                                            $penalties = $obj->l1 + $obj->l2 + $obj->t1 + $obj->total;
                                            return $difficulty + $execution - $penalties;
                                        }

                                        function calcExecution($obj){
                                            $val1 = ($obj->e1 + $obj->e2)/2;
                                            $execArray = array($obj->e3, $obj->e4, $obj->e5, $obj->e6);
                                            sort($execArray);
                                            $val2 = ($execArray[1] + $execArray[2])/2;
                                            return 10 - ($val1 + $val2);
                                        }
                                    ?>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                
            <p><br></p>
                <div class="card">
                    <a href="/admin/point/create" class="btn btn-primary">new</a>
                    <div class="card-body">
                     
                        

                        <div class="col-md-1">
                            <p><br></p>
                        </div>
                        <div class="col-md-6">

        
                            <!--
                            <form method="GET" action="{{ url('/admin/point') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                    <span class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form> -->
                        </div>

                        <div class="col-md-2">
                            <select class="form-control">
                                <option id="1">Senior individual</option>
                                <option id="2">Junior individual</option>
                                <option id="3">Senior group</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control">
                                <option id="1">Hoop</option>
                                <option id="2">Ball</option>
                                <option id="3">Clubs</option>
                                <option id="4">Ribbon</option>
                            </select>
                        </div>
                        <div class="col-md-1"><button class="btn button">ok</button></div>
              <p><br/></p><p><br/></p>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">

                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Item</th>
                                        <th>D1</th>
                                        <th>D2</th>
                                        <th>D3</th>
                                        <th>D4</th>
                                        <th>E1</th>
                                        <th>E2</th>
                                        <th>E3</th>
                                        <th>E4</th>
                                        <th>E5</th>
                                        <th>E6</th>
                                        <th>L1</th>
                                        <th>L2</th>
                                        <th>T1</th>
                                        <th>C</th>
                                        <th>Total</th>
                                        <th>Rank</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($point as $item)
                                    <tr id="score_table">
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->player->lname }} <b>{{ $item->player->fname }}</b></td>
                                        <td><img src="/images/items1/{{ $item->item->photo }}" width="20"></td>
                                        <td style="background-color: #b3fbff">{{ $item->d1 }}</td>
                                        <td style="background-color: #b3fbff">{{ $item->d2 }}</td>
                                        <td style="background-color: #b3fbff">{{ $item->d3 }}</td>
                                        <td style="background-color: #b3fbff">{{ $item->d4 }}</td>
                                        <td style="background-color: #ffdab3">{{ $item->e1 }}</td>
                                        <td style="background-color: #ffdab3">{{ $item->e2 }}</td>
                                        <td style="background-color: #ffdab3">{{ $item->e3 }}</td>
                                        <td style="background-color: #ffdab3">{{ $item->e4 }}</td>
                                        <td style="background-color: #ffdab3">{{ $item->e5 }}</td>
                                        <td style="background-color: #ffdab3">{{ $item->e6 }}</td>
                                        <td style="background-color: #fff478">-{{ $item->l1 }}</td>
                                        <td style="background-color: #fff478">-{{ $item->l2 }}</td>
                                        <td style="background-color: #fff478">-{{ $item->t1 }}</td>
                                        <td style="background-color: #fff478">-{{ $item->total }}</td>
                                        <td style="background-color: #ff6f60"><b>{{ totalScore($item) }} 
                                        </b></td>
                                        <td> {{ $item->rank }}</td>
                                        
                                        <td>
                                            <a href="{{ url('/admin/point/' . $item->id) }}" title="View Point"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/point/' . $item->id . '/edit') }}" title="Edit Point"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        </td>
                                    </tr>


                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $point->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
