<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: lightblue;
            text-align: center;
        }
        
        .container {
            color: #fff;
        }
       
    </style>
</head>
<body>
    <h1>{{$header}}</h1>


        @foreach($articles as $value)
            <!-- HTML tag here -->
        <div class="container">
            <h1>{{ $value['title']}} </h1>
            <p>{{ $value['desc']}}</p>
        </div>
        
        @endforeach
      

        <!-- HTML tag close here  -->


</body>

</html>