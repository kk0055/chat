<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    .list-group{
      overflow-y:scroll;
      height:200px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row" id="app">
      <div class="offset-4 col-4">
        <li class="list-group-item active">Chat room</li>
        <ul class="list-group">
      
      <message
      v-for="value in chat.message"
      >  @{{ value }}</message>
  
          <input type="text" class="form-control" placeholder="Type your message" v-model='message'
          @keyup.enter='send'>
        </ul>
      </div>
     
    </div>
  </div>

  
  <script src="{{ asset('js/app.js')  }}"></script>
</body>
</html>