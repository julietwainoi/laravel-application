
<!DOCTYPE html>
<html lang="en">
<head>
<link href='//stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css' rel='stylesheet'>
    <title> show_employee </title>
<body>
    <h1 class =" text-center ">here are the employees</h1>
    <div class="container mx-auto text-center m-5 p-2">
<div class= "row"> 
    <div class="col-md-12 mx-auto">
        <table class="table table-striped table-hover border rounded">
<thead>
    <tr>
    <th scope="col"><h3>id </h3></th>
    <th scope="col"><h3>titles</h3></th>
    <th scope="col"><h3>description </h3></th>
    <th scope="col"><h3>created_at </h3></th>
    <th scope="col"><h3>updated_at </h3></th>

    </tr>

     </thead>
            <tbody>
              @foreach($employees as $employee)  
                <tr>
                    <td>{{ $employee['id']}}</td>
                    <td>{{ $employee['titles']}}</td>
                    <td>{{ $employee['description']}}</td>
                    <td>{{ $employee['created_at'] }}</td>
                    <td>{{ $employee['updated_at'] }}</td>
                </tr>
             @endforeach
            </tbody>



        </table>

    </div> 



    </div>
</body>
</body>
</html>