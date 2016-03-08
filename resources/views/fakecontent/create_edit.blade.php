@extends('app')
@section('title')
{{$title}}
@endsection
@section('content')

    <div class="panel panel-default">
        <div class="panel-body">
            @if( !empty($content) )
                {!! Form::model($content,['route' => ['fake-content.update', $content->id], 'method' => 'PUT']) !!}
                {!! Form::hidden('id', $content->id) !!}
            @else
                {!! Form::open(['route' => 'fake-content.store', 'method' => 'post']) !!}
            @endif
            <div class="form-group">
                <label>Title</label>
                {!!Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Title'] ) !!}
                {!! $errors->first('name', '<span class="help-block error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label>Description</label>
                {!!Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => '...'] ) !!}
                {!! $errors->first('description', '<span class="help-block error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label>Image</label>
                {!!Form::text('image', old('image'), ['class' => 'form-control', 'placeholder' => 'http://....jpg'] ) !!}
                {!! $errors->first('image', '<span class="help-block error">:message</span>') !!}
            </div>
            <div class="form-group">
                <label>URL Redirect</label>
                {!!Form::text('url', old('url'), ['class' => 'form-control', 'placeholder' => 'http://...'] ) !!}
                {!! $errors->first('url', '<span class="help-block error">:message</span>') !!}
            </div>
            <div class="form-group">
                @if(! empty($content))
                    {!! Form::submit('Update', ['class' => 'btn btn-success', 'name' => 'update']) !!}
                @else
                    {!! Form::submit('Create', ['class' => 'btn btn-primary', 'name' => 'create']) !!}
                @endif
            </div>
            {!! Form::close() !!}

        </div>
    </div>


    @if( !empty($content) )

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="form-group">
                <label>Link Share:</label>
                {!!Form::text('url', route('fake-content.link', [str_random(32), $content->code]), ['class' => 'form-control', 'placeholder' => 'Title'] ) !!}
            </div>
        </div>
    </div>

    @endif

@stop