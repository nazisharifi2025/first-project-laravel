<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{-- This is The Commint Of php --}}
    
    @if($name === "Cooking")
    <h1>The Serveces Name Is <span class="text-green-400">Cooking</span></h1>
    @elseif($name === "Cleaning")
    <h1>The Serveces Name Is <span class="text-green-400">Cleaning</span></h1>
    @else
    <h1>Nothing</h1>
    @endif
    @for($i= 0 ; $i< 10 ; $i++)
    <h1>{{$i}}</h1>
    @endfor
</body>
</html>