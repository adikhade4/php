@extends('layout')

@section('content')

<h1> Blogging<font size="2">dot</font>com </h1>

 <form  method="POST" action="/blogs/create">

   {{ csrf_field() }}  
    <div>
      <button type="submit" class="btn btn-primary" >New</button> 
    </div>   
</form> 

<form>
        <div class="table-responsive">
        <table class="table" border="1">
        
        @foreach($blogs as $blog)
<hr style="height:1px;border:none;color:#333;background-color:#333;" />
                <tr >  
               
                   <a href="/blogs/{{$blog->id}}">
                   <b>{{$blog->title}}</b>  </a> <br/>
                    
                    {{$blog->description}} <br/> <br/>
                
                </tr>
<hr style="height:1px;border:none;color:#333;background-color:#333;" />

                @endforeach
        </table>
        </div>
</form>       

        




@endsection