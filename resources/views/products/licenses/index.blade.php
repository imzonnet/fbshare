@extends('app')
@section('title')
{{$title}}
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <p><a class="btn btn-info btn-sm" href="{{ route('product.license.create', $pid) }}"><i class="fa fa-plus"></i> Add New</a></p>
            <div class="box">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Key</th>
                                <th>Total</th>
                                <th>Activated</th>
                                <th>Domain</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($lists as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->key}}</td>
                                <td>{{ $item->expired }}</td>
                                <td>{{ $item->total }}</td>
                                <td>{{ $item->domain }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                {!! Form::open(['route' => ['product.license.destroy', $item->product_id, $item->id], 'method' => 'delete', 'class' => 'form-delete']) !!}
                                    <div class="btn-group">
                                        <a href="{{route('product.license.edit',[$item->product_id, $item->id])}}" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
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