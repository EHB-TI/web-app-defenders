<h1> TEST MAIL </h1>

<?php
$userposts = DB::table('posts')->where('user_id', Auth::user()->id)->get();
$counter = 0;
?>

@forelse ($userposts as $post)

<div class="w-4/5 m-auto text-left">
    <div class="w-4/5 m-auto mt-10 pl-2 text-left">               
        </div>
        <div class="w-4/5 m-auto mt-10 pl-2 text-left">   
          <h3 class="text-4xl font-normal leading-normal mt-0 mb-2 text-gray-800 text-left"> {{$post->title}} </h3>
          <p class="text-lg text-black font-semibold"> {{$post->description}} </p>
           
         
        </div>
        <?php $name = Auth::user()->name; ?>
        <img accept=".png, .jpg, .jpeg" src={{asset('images/' . $post->image_path) }} class="rounded-full h-14 w-14 flex items-center md:float-center"/> <br>
        <p class="text-lg font-semibold"> Created at: {{$post->created_at}} </p>
        <p class="text-lg font-semibold"> Updated at: {{$post->updated_at}} </p>
        <p class="text-lg font-semibold"> User Id: {{$post->user_id}}</p>
        <p class="text-lg font-semibold"> Post Id: {{$post->id}}</p>
        <?php $counter++; 
        ?>
    </div>
</div> 



@empty
<p> No posts availible </p>
@endforelse

<p class="text-lg text-black font-semibold text-center"> Total: <strong>{{$counter}} </strong> posts </p> 
<p> Username: {{Auth::user()->name}} </p>
<p> Email: {{Auth::user()->email}} </p>
<p> Created: {{Auth::user()->created_at}} </p>