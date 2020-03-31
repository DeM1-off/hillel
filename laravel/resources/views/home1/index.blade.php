<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пуе</title>
    <style>
        progress {
          width: 5%;
        }
      </style>
</head>
<body>
    
<nav>
    <h1>Page Get</h1>
    
    <a href="{{ route('home1.index')}}">index</a>
    <a href="{{ route('home1.get')}}">get</a>
    <a href="{{ route('home1.comment')}}">comment</a>
    </nav>
    
    
    <div class="content">
    
    <h2>Simple text </h2>
    
    </div>
    
    <progress id="elem"></progress>
    
      <script>
        elem.onclick = function() {
          animate({
            duration: 1000,
            timing: function(timeFraction) {
              return timeFraction;
            },
            draw: function(progress) {
              elem.style.width = progress * 100 + '%';
            }
          });
        };
      </script>
</body>
</html>

