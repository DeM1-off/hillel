<?php require_once __DIR__.'/core/controller.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>lessons 1 </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="/lessons_1/core/style.css">
</head>
<body>

    <div class="container">
        <div class="row">
        <?php if(isset($_POST['enter'])){ ?>
            <div class="col-md-3"><div class="center">Сортировка  фигур</div>
           
                <?php  var_dump($figures );  ?>
                <br>
             <div class="center">Сортировка  примитивов</div>
             <?php  var_dump($primitives );  ?>
            </div>
        <?php  } ?>
            <div class="col-md-4"> 
                <div class="center"> Посчитать Площадь 
               
                    </div>
                   
                    
                  
                
                <form method='post' id="form">
                <p>Квадрат нужно 1-е поля заполнить</p>
                    <input type='checkbox' name='box' value='1' tool id="box"> <label for="box">Квадрат </label><br>
                    <p>Круг нужно 2-е поле заполнить</p>
                    <input type='checkbox' name='circle' value='2' id="circle"> <label for="circle"> Круг</label><br>
                    <p>Триугольник нужно 2 поля заполнить</p>
                    <input type='checkbox' name='triangle' value='3' id="triangle">

                    <label for="triangle">Триугольник</label><br>

                    <p>
                        
                        <input type='number' placeholder="1 значения" name='one'> <label for=""> </label><br>
                        <input type='number' placeholder="2 значения" name='two'> <label for=""> </label><br>
                      
                    </p>
                    <div class="submit_center"> 
                        <input type='submit' class="btn btn-info" name='enter' value='Посчитать'></div>
                   
                </form>
            </div>
          
           
       <?php require_once  __DIR__.'/core/square_result.php';?>
     
    </div>

        </div>
    </div>



    <div>

    </div>


    <script>





    </script>
    
</body>

</html>