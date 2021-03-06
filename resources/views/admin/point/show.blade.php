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
                                            return 10 - (getArt($obj) + getExe($obj));
                                        }

                                        function getExe($obj){
                                            $execArray = array($obj->e3, $obj->e4, $obj->e5, $obj->e6);
                                            sort($execArray);
                                            return ($execArray[1] + $execArray[2])/2;
                                        }

                                        function getArt($obj){
                                            return ($obj->e1 + $obj->e2)/2;
                                        }
                                    ?>

    <div class="container">
        <div class="row">
            <p><br></p>

            <div class="col-md-12">
                <div class="card">
                    <div class="col-md-12">
                        <div class="row">
                        <div class="col-md-5">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr><th>  </th><td> <img src="/images/photos/{{ $point->player->photo }}" width="200"> </td></tr>
                                        <tr><th> Last Name </th><td> {{ $point->player->lname }} </td></tr>
                                        <tr><th> First Nname </th><td> {{ $point->player->fname }} </td></tr>
                                        <tr><th> Country </th><td>  {{ $point->player->country->name }}&nbsp;&nbsp; <img src="/images/flag/{{ $point->player->country->flag }}" width="17"></td></tr>
                                        <tr><th> ID </th><td> {{ $point->player->number }} </td></tr>
                                        <tr><th> Birth</th><td> {{ $point->player->birth}} </td></tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>


                        <div class="col-md-4" style="background-color: #d4d4d4;">
                            <h4><b>BD</b>&nbsp;&nbsp; {{ ($point->d1 + $point->d2)/2 }}</h4>
                            <h4><b>AD</b>&nbsp;&nbsp; {{ ($point->d3 + $point->d4)/2 }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Diff total</b>&nbsp;&nbsp; {{ ($point->d1 + $point->d2)/2 + ($point->d3 + $point->d4)/2 }}</h4><br>

                            <h4><b>Art</b>&nbsp;&nbsp; {{ getArt($point) }}</h4>
                            <h4><b>Exe</b>&nbsp;&nbsp; {{ getExe($point) }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Exe total</b>&nbsp;&nbsp; {{ calcExecution($point) }}</h4><br>
                            <h4><b>L1</b>&nbsp;&nbsp; {{ $point->l1 }}</h4>
                            <h4><b>L2</b>&nbsp;&nbsp; {{ $point->l2 }}</h4>
                            <h4><b>T1</b>&nbsp;&nbsp; {{ $point->t1 }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Final score </b>&nbsp;&nbsp; 
                                {{ totalScore($point)}} </h4>
                        </div>

                        
                        <div class="col-md-3 card-body">

                            <a href="{{ url('/admin/point') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                            <a href="{{ url('/admin/point/' . $point->id . '/edit') }}" title="Edit Point"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                            <br/>
                            <br/>
                        </div>
                    </div>
                    <p><br></p>
                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <th> D1 </th>
                                        <th> D2 </th>
                                        <th> D3 </th>
                                        <th> D4 </th>
                                        <th> E1 </th>
                                        <th> E2 </th>
                                        <th> E3 </th>
                                        <th> E4 </th>
                                        <th> E5 </th>
                                        <th> E6 </th>
                                        <th> L1 </th>
                                        <th> L2 </th>
                                        <th> T1 </th>
                                        <th> C </th>
                                        <th> Total </th>
                                    </tr>
                                    <tr>
                                        <td>{{ $point->d1 }}</td>
                                        <td>{{ $point->d2 }}</td>
                                        <td>{{ $point->d3 }}</td>
                                        <td>{{ $point->d4 }}</td>
                                        <td>{{ $point->e1 }}</td>
                                        <td>{{ $point->e2 }}</td>
                                        <td>{{ $point->e3 }}</td>
                                        <td>{{ $point->e4 }}</td>
                                        <td>{{ $point->e5 }}</td>
                                        <td>{{ $point->e6 }}</td>
                                        <td>{{ $point->l1 }}</td>
                                        <td>{{ $point->l2 }}</td>
                                        <td>{{ $point->t1 }}</td>
                                        <td>{{ $point->total }}</td>
                                        <td><b>{{ totalScore($point) }}</b></td>
                                         
                                    </tr>                              
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
