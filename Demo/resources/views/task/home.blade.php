<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

      <form action="{{url('post/store')}}" method="POST">
          <h1></h1>
          @csrf
          Title: <br>
           <input type="text" name="title"> <br>
           Desc: <br>
           <textarea name="desc" id="" cols="30" rows="10"></textarea><br><br>
           <input type="submit" value="submit">
        </form>
</body>
</html>