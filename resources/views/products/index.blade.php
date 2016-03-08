@extends('app')
@section('title')
{{$title}}
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <p><a class="btn btn-info btn-sm" href="{{ route('product.create') }}"><i class="fa fa-plus"></i> Add New</a></p>
            <div class="box">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Desciption</th>
                                <th>More</th>
                                <th>Action</th>
                            </tr>
                            @foreach($lists as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                <div class="btn-group">
                                    <a href="{{route('product.version.index',[$item->id])}}" class="btn btn-primary btn-sm" title="Edit">Versions</a>
                                    <a href="{{route('product.license.index',[$item->id])}}" class="btn btn-success btn-sm" title="Edit">Licenses</a>
                                </div>
                                </td>
                                <td>
                                {!! Form::open(['route' => ['product.destroy', $item->id], 'method' => 'delete', 'class' => 'form-delete']) !!}
                                    <div class="btn-group">
                                        <a href="{{route('product.edit',[$item->id])}}" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </div>
                                {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

@endsection