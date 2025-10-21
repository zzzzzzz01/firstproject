@extends('admin.dashboard')

@section('content')

<div class="row">
                    <div class="col-md-12">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Element Examples
                                <a href="{{ route('watches.page') }}" class="btn btn-dark">O'rqaga</a>
                            </div>
                            <div class="panel-body">
                                <div class="row">


                                    <div class="col-md-6">
                                       
                                        <h3>Add watches</h3>
                                        <form role="form" action="{{ route('watch.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group ">
                                                <label class="control-label" for="inputSuccess">Soat nomi</label>
                                                <input type="text" name="watchName" class="form-control" id="inputSuccess">
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="inputWarning">Soat narxi</label>
                                                <input type="text" name="price" class="form-control" id="inputWarning">
                                            </div>
                                            <div class="form-group r">
                                                <label class="control-label" for="inputError">Soat rasmi</label>
                                                <input type="file" name="image" class="form-control" id="inputError">
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Q'oshish</button>
                                            </div>

                                        </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Form Elements -->
                    </div>
                </div>

@endsection