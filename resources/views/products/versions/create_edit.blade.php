@extends('app')
@section('title')
{{$title}}
@endsection
@section('content')

    <div class="panel panel-default">
        <div class="panel-body">
            @if( isset($version) )
                {!! Form::open(['route' => ['product.version.update', $pid, $version->id], 'method' => 'PUT']) !!}
                {!! Form::hidden('id', $version->id) !!}
            @else
                {!! Form::open(['route' => ['product.version.store', $pid], 'method' => 'post']) !!}
            @endif
            {!! Form::hidden('product_id', $pid) !!}

            <div class="form-group">
                <label>Version</label>
                {!!Form::text('version', isset($version) ? $version->version : old('version'), ['class' => 'form-control', 'placeholder' => '...'] ) !!}
                {!! $errors->first('title', '<span class="help-block error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label>Link</label>
                {!!Form::text('link', isset($version) ? $version->link : old('link'), ['class' => 'form-control', 'placeholder' => '...'] ) !!}
                {!! $errors->first('title', '<span class="help-block error">:message</span>') !!}
            </div>
            <div class="form-group">
                <a href="{{route('product.version.index', $pid)}}" class="btn btn-warning">Cancel</a>
                @if(isset($version))
                    {!! Form::submit('Update', ['class' => 'btn btn-success', 'name' => 'update']) !!}
                @else
                    {!! Form::submit('Create', ['class' => 'btn btn-primary', 'name' => 'create']) !!}
                @endif
            </div>
            {!! Form::close() !!}

        </div>
    </div>


@stop