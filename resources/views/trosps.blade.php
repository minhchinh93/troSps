<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>


    </head>
    <h2>TRỎ DOMAIN</h2>

    <form action="{{ route('trosps')}}" method="POST">
        @csrf
        <label for="fname">page ShopName</label><br>
        <input type="text" id="fname" name="SHOPNAME" required><br>
        <button type="submit" >Submit</button>
      </form>

</html>
