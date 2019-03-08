@extends('layout')

@section('content')

<h1> Blogging Details </h1>

 
      <hr style="height:1px;border:none;color:#333;background-color:#333;" />
         
        
        
              
               {{$blogs->id}}
                   
                   {{$blogs->title}}
            <br/>
                    {{$blogs->description}} 
            <br/>

 <hr style="height:1px;border:none;color:#333;background-color:#333;" />

          <form method="POST" action="/blogdetails/{{$blogs->id}}/comments" >

        
          {{ csrf_field() }}

<div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input required type="text" class="form-control"
    name="name" id="name" placeholder="Name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input required type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comments</label>
    <textarea required class="form-control" name="comments" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

   <div>
      <button type="submit" class="btn btn-primary" >Submit</button> 
    </div>

</form>      
            
<div class="box">
    @foreach($commen as $comment)
     <ul>
        <li>{{$comment['name']}}</li>
        <li>{{$comment['email']}}</li>
        <li>{{$comment['comment']}}</li>
     </ul>
      <hr style="height:1px;border:none;color:#333;background-color:#333;" />
    @endforeach
</div>

      
  
@endsection