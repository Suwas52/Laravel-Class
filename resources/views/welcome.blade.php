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
            padding: 2rem;
        }

        .header {
            text-align:center;
            color: #cf2e2e;
        }
        
        .container {
            color: darkblue;
        }

        h1{
            color: blue;
        }

        a{
            text-decoration: none;
        }

        a:hover {
            color: rgb(65,88,208);
        }

        
       
    </style>
</head>
<body>
    <h1 class="header">{{$header}}</h1>


        @foreach($articles as $value)
            <!-- HTML tag here -->
        <div class="container">
            <h1>  <a href="article/{{$value['id']}}">{{ $value['title']}}</a>   </h1>
            <p>   {{ $value['desc']}}</p>
        </div>
        
        @endforeach

        
      

        <!-- HTML tag close here  -->


</body>

</html>