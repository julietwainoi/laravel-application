<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{csrf_token() }}">
    <link href='//stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css' rel='stylesheet'>
    <title>employee form</title>
</head>
<body>
<div class="container mt-4">
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif
     <div class='card'>
        <div class="card-header text-center font-weight-bold">
            employer add
        </div>
    <div class="card-body">
        <form name="employee" id="employee" method="post" action="{{url('/employee-form')}}">
        @csrf
        <div class="form-group">
        <label for="exampleaddtitle">title</label>
       <input type="text" id="titles" name="titles" class="form-control" required="">
        </div>
    <div class="form group">
    <label for="exampleaddtitle">description</label>
    <textarea id="title" name="description" class="form-control" required=""></textarea>
    </div>
<button type="submit" class="btn btn-primary">submit</button>

    </form>
    
    
    
    </div>
    
</div>


</div>


    
</body>
</html>