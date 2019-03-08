<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html>
<head>
 
<title> </title>
</head>
   
 
	
    <body>
  
      <h1> Create New Blog </h1>
      
    <div class="container">
    
      
        <form method="POST" action="/" >

        
          {{ csrf_field() }}

        <div class="form-group">
      
              <label>Title</label><br/>
              <input required type="text"  name="title" placeholder="Blog title" >

        </div>

        <div class="form-group">

              <label>Description</label><br/>
              <textarea required name="description"  placeholder="Blog description"></textarea>

        </div>

        <div>
        
          <button class="btn btn-primary" type="submit">Create blog </button>

        </div>

      </form>

    </div>
  </body>
</html>
