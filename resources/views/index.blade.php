<html>
<head>
<meta cherset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> My todo App</title>
<!---Bootstrap files--->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <br>
    

<div class="row">
    <div class="col-md-3 m-auto" style="margin-left: 500px;">
   <h3>  My Todo App</h3>
   <form action="/add">
       <div class="form-group">
   <input type="text"class="form-control" name="item" placeholder="Add an item">
      </div>
      <input type="submit" class="btn btn-primary" name="add value="Add item">
</form>
<hr>
</div>
</div>
<div class="row">

<div class="col-md-4 m-auto" style="margin-Left:500px;">

<table class="table">
<thead>

<tr>
<th>id</th>
<th>Todo Item</th>
<th>Action</th>
<th>Action</th>
</tr>
</thead>
{{$count = 0}}
@foreach($items as $item)
{{$count =$count + 1}}

<tr>
<td>{{$count}}</td>
<td>{{$item['item']}}</td>
<td><a href={{"/edit/".$item['id']}}>Edit</td>
<td><a href={{"/delete/".$item['id']}}>Delete</td>
</tr>

@endforeach
</table>
</div>
</div>
<hr>

<center>Created by - Ranjeet Ranjan</center>
</body>





</html>


