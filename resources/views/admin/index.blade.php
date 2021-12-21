@extends('layouts.app')


@section('content')

<h1> View of all users </h1>
    <form action="{{url('adminpage/promoteadmin')}}" method="get">
        <div class="container  flex justify-left items-left px-1 sm:px-6 lg:px-8">
            @csrf
            <input class="h-14 w-96 pr-8 pl-5 rounded z-0 focus:shadow focus:outline-none" value="{{request()->query('searchTerms')}}" name="searchTerms" type="text" class="form-control typeahead" placeholder="Search User.."/>
            <input class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit" name="search" class="btn" value="Search"/>
            <div class="absolute top-4 right-3"> <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i> </div>
        </div>
    </form> <br>

@forelse ($users as $user)
<div class="alert" style="margin-left: 100px"> <br/>
    <p> User ID: {{$user->id}} </p> 
    <p> User Name : {{$user->name}} </p>
    <p> User Email : {{$user->email}} </p>
    <p> User is admin? : {{$user->isadmin ? 'Yes' : 'No'}} </p>
    <p> Total Posts : {{count($user->posts)}} </p>
</div>
<a type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" href="{{ url('adminpage/promoteadmin', ['userid' => $user->id]) }}"> Edit Admin Rights</a>
@empty
<p> Nothing Found... </p>
@endforelse
</div>

@endsection
