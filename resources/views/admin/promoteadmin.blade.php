@extends('layouts.app')

@section('content')

<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ url('/adminpage') }}" name="promoteuserform" method="POST">
    @method('PUT')
    @csrf

    <div class="container">
      <h2>Promote users: </h2>

      <div class="form-group">
        <label for="ID">ID: </label>
        <input  readonly="readonly" disabled type="numeric" class="form-control" id="id" name="id" value="{{$user->id}}">
      </div>

     
        <div class="form-group">
          <label for="UserName"> User name: </label>
          <input disabled type="text" class="form-control" id="username"  name="username" value="{{$user->name}}">
          <span style="color: red">@error('username'){{$message}}@enderror</span> <br>
        </div>
    
          <div class="form-group">
            <label for="email">E-mail: </label>
            <input disabled type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
            <span style="color: red">@error('email'){{$message}}@enderror</span> <br>
          </div>


          @if ($user->id == Auth::user()->id)
          <div class="form-group">
            <label for="isadmin"> Is admin? : </label>
            <select disabled class="form-control" name="admin" id="admin">
              <option  name="isadminyes" value="1">Yes</option>
              <option  name="isadminno" value="0">No</option>
            </select>
            

            <span style="color: red">@error('isadmin'){{$message}}@enderror</span> <br>
          </div>
          @else
          <div class="form-group">
            <label for="isadmin"> Is admin? </label> <br> <br>
           <!-- <select class="form-control" name="isadmin" min="0" max="1" name="admin" id="admin" value={{$user->isadmin ? 'Yes' : 'No'}}>
              <option name="isadmin" value="1">Yes</option>
              <option name="isadmin" value="0">No</option>
            </select> -->
            <input class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" min="0" max="1" step="1" class="form-control" id="isadmin" name="isadmin" value={{$user->isadmin ? '1' : '0'}} />
            <span style="color: red">@error('isadmin'){{$message}}@enderror</span> <br>
          </div>
          @endif
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"> 
            Save </button>
    </form> <br>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded"> 
        <a href="/adminpage"> Back </a> 
    </button>
<br>
<br>
<hr>
    <h2> Posts from the User {{$user->name}}</h2> <br>
    <p> Total Posts : {{count($user->posts)}} </p>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @foreach ($user->posts as $post)
                    <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6 gap-4 mt-8 mb-8">
                        <div class="col-span-2 sm:col-span-1 xl:col-span-1">
                           @if ($post->image_path)
                              <img src="{{asset('images/' . $post->image_path) }}" width="600" alt="post_image"/>
                            @else
                                <img src="{{asset('images/df.jpg')}}" width="600" alt="post_default_image"/>
                            @endif
                        </div>
                        
                        <div class="col-span-2 sm:col-span-4 xl:col-span-4">
                            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{$post->title}}</h2>
                            <p class="leading-relaxed">{{Helper::ellipse(strip_tags(html_entity_decode($post->content)))}}</p>
                            <span class="font-semibold title-font text-gray-700">{{$post->likes->count()}} {{Str::plural('like', $post->likes->count()) }}</span>
                            <span class="mt-1 text-gray-500 text-sm">Last Edited On {{$post->updated_at}}</span>
                            <a href="{{ URL::temporarySignedRoute('posts.show', now()->addMinutes(30), ['id' => $post->id]) }}" class="text-blue-500 inline-flex items-center mt-4">Keep Reading
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            <span>
               
            </span>
        </div>
    </div>

@endsection