@extends ('layouts.master')

@section ('content')
    <h1>Welcome to the Color Page</h1>
   @if ($color === 'black')
    <body style="color:black;">The color is black</body>
@elseif ($color === 'white')
    <body style="color:white;">The color is white</body>
    @endif
@endsection


