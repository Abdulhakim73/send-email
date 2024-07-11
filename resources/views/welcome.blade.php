<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messaging</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
        }

        #message {
            width: 100%;
            height: 100px; /* Balandlikni oshiradi */
            font-size: 16px; /* Matn hajmini oshiradi */
        }
        #subject {
            width: 50%;
            height: 50px;
        }

        .large-button {
            width: 100%; /* Kenglikni to'liq qiling */
            height: 50px; /* Balandlikni oshiradi */
            font-size: 18px; /* Matn hajmini oshiradi */
            background-color: #4CAF50; /* Tugma rangi */
            color: white; /* Matn rangi */
            border: none; /* Chegara olib tashlash */
            cursor: pointer; /* Ko'rsatgichni qo'lga aylantirish */
        }

        .large-button:hover {
            background-color: #45a049; /* Tugmani ustida o'zgartirish */
        }

        div {
            margin-top: 20px;
        }

        h1 {
            margin-left: 300px;
            margin-right: 273px;
            color: #45a049;
            background-color: black;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Sending</h1>
{{--    <form action="{{route('send.message')}}" method="post">--}}
{{--        <div>--}}
{{--            <label for="phone">PHONE:</label>--}}
{{--            <input type="text" id="phone" name="phone" required>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <label for="message">Type any message:</label>--}}
{{--            <input type="text" id="message" name="message" required>--}}
{{--        </div>--}}
{{--        <button type="submit" class="large-button">send</button>--}}
{{--    </form>--}}
{{--    <br>--}}
{{--    <br>--}}
{{--    <br>--}}
{{--    <hr>--}}
{{--    <br>--}}

    <form action="{{route("send.email")}}" method="post">
        <div>
            <label for="email">EMAIL:</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
        </div>
        <div>
            <label for="message">Type any message:</label>
            <input type="text" id="message" name="message" required>
        </div>
        <button type="submit" class="large-button">send</button>
    </form>
</div>
</body>
</html>
