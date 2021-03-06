@extends('admins/layouts/master')
@section("content")
<div class="row " >
    <div class="col-8  mt-auto">
        @if (isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- <form action="{{action("CategoryController@post_Create")}}" method="POST" class="form-horizontal">
            <input name="_token" value="<?php echo csrf_token() ?>" type="hidden" />
            <div class="form-group row">
                <label class="col-2 col-form-label">Category name</label>
                <div class="col-10">
                    <input type="text" name="name" value="{{old("name")}}" class="form-control" placeholder="category name...">
                </div>
            </div>                        
            <button type="submit" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5 pull-right">Create</button>
        </form> --}}
        {{ Form::model($cate,array('action'=>array('CategoryController@post_Create',$cate->id),'method'=>'POST')) }}
        {{Form::token()}}
        <div class="form-group row">
            {{  Form::label('name', 'Category name: ',array('class' => 'col-2 col-form-label'))  }}
            <div class="col-10">
                {{  Form::text('name','', array('class' => 'form-control','placeholder'=>'Category name ...'))  }} 
            </div>    
        </div>
        {{Form::submit('Click Me!')}}
    </div>
</div>
@endsection