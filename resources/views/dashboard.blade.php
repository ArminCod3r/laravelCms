@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    welcome {{ Auth::user()->name }}
                    <br/><br/>

                    <a href="/posts/create" class="btn btn-primary">Create Post</a>

                    <h3>Your Posts</h3>
                <hr />
                
                @if(count($posts) > 0)
                    <table class="table table-striped">
                    <tr>
                        <th> Title </th>
                       <th></th>
                        <th></th>
                    </tr>

                    @foreach($posts as $item)
                        <tr>
                            <td> <a href="posts/{{ $item->id }}">{{ $item->title }}</a> </td>
                            <td> <a href="posts/{{ $item->id }}/edit" class="btn btn-default"> Edit </a> </td>
                            <td>
                                <form action="{{route('posts.destroy', $item->id ) }}" method="POST" accept-charset="utf-8" class="pull-right">

                                    {{ csrf_field() }}      
                                    <input type="hidden" name="_method" value="DELETE"> 
                                    <input type="submit" name="submit" value="DELETE" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>       
                    @endforeach
                    </table>

                @else
                    <p>You have no post</p>

                @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
