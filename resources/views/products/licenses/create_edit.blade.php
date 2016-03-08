@extends('app')
@section('title')
{{$title}}
@endsection
@section('content')

    <div class="panel panel-default">
        <div class="panel-body">
            @if( isset($license) )
                {!! Form::open(['route' => ['product.license.update', $pid, $license->id], 'method' => 'PUT']) !!}
                {!! Form::hidden('id', $license->id) !!}
            @else
                {!! Form::open(['route' => ['product.license.store', $pid], 'method' => 'post']) !!}
                {!! Form::hidden('key', $key) !!}
            @endif
            {!! Form::hidden('product_id', $pid) !!}

            <div class="form-group">
                <label>Key</label>
                {!!Form::text('key', isset($license) ? $license->key : $key, ['class' => 'form-control', 'placeholder' => '...', 'disabled' => 'disabled'] ) !!}
                {!! $errors->first('key', '<span class="help-block error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label>Total Activation</label>
                {!!Form::text('expired',isset($license) ? $license->expired : 1, ['class' => 'form-control', 'placeholder' => '...'] ) !!}
                {!! $errors->first('expired', '<span class="help-block error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label>Email</label>
                {!!Form::text('email', isset($license) ? $license->email : old('email'), ['class' => 'form-control', 'placeholder' => '...'] ) !!}
                {!! $errors->first('expired', '<span class="help-block error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label>Domain</label>
                {!!Form::text('domain', isset($license) ? $license->domain : old('domain'), ['class' => 'form-control', 'disabled' => 'disabled'] ) !!}
                {!! $errors->first('domain', '<span class="help-block error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label>Status</label>
                {!!Form::text('status', isset($license) ? $license->status : 0, ['class' => 'form-control', 'placeholder' => '...'] ) !!}
                {!! $errors->first('status', '<span class="help-block error">:message</span>') !!}
            </div>
            <div class="form-group">
                <a href="{{route('product.license.index', $pid)}}" class="btn btn-warning">Cancel</a>
                @if(isset($license))
                    {!! Form::submit('Update', ['class' => 'btn btn-success', 'name' => 'update']) !!}
                @else
                    {!! Form::submit('Create', ['class' => 'btn btn-primary', 'name' => 'create']) !!}
                @endif
            </div>
            {!! Form::close() !!}

        </div>
    </div>


@stop