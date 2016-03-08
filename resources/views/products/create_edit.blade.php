@extends('app')
@section('title')
{{$title}}
@endsection
@section('content')

    <div class="panel panel-default">
        <div class="panel-body">
            @if( isset($product) )
                {!! Form::open(['route' => ['product.update', $product->id], 'method' => 'PUT']) !!}
                {!! Form::hidden('id', $product->id) !!}
            @else
                {!! Form::open(['route' => 'product.store', 'method' => 'post']) !!}
            @endif

            <div class="form-group">
                <label>Name</label>
                {!!Form::text('title', isset($product) ? $product->title : old('title'), ['class' => 'form-control', 'placeholder' => '...'] ) !!}
                {!! $errors->first('title', '<span class="help-block error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label>Description</label>
                {!!Form::textarea('description', isset($product) ? $product->description : old('description'), ['class' => 'form-control', 'placeholder' => '...'] ) !!}
                {!! $errors->first('description', '<span class="help-block error">:message</span>') !!}
            </div>
            <div class="form-group">
                <a href="{{route('product.index')}}" class="btn btn-warning">Cancel</a>
                @if(isset($product))
                    {!! Form::submit('Update', ['class' => 'btn btn-success', 'name' => 'update']) !!}
                @else
                    {!! Form::submit('Create', ['class' => 'btn btn-primary', 'name' => 'create']) !!}
                @endif
            </div>
            {!! Form::close() !!}

        </div>
    </div>


@stop