
            
           <?php



$one = $_POST['one'];
$two = $_POST['two'];



            if(isset($_POST['enter'])){
                echo " <div class='col-md-4'>";
             echo "<div class='center'>Площадь  Квадрата</div>";
               
                if(isset($_POST['box'])){
                    if(!empty($_POST['one'])){
                        $data = new Box();
                        echo $data->Squre($one) . " --- Площадь Квадрата";}
                    else{ echo "Не все значения введены";}}

             echo "<div class='center  '>Площадь  Круга</div>";

                if(isset($_POST['circle'])){
                    if(!empty($_POST['two'])){
                        $data = new Circle();
                        echo $data->Squre($one) . " --- Площадь Круга";}
                    else{ echo "Не все значения введены";}}

                echo "<div class='center'>Площадь  Триугольника</div>";

                if(isset($_POST['triangle'])){
                 
                    if(!empty($_POST['one']) AND !empty($_POST['two'])){
                        $data = new Triangle();
                        echo $data->Squre($one,$two) . " --- Площадь Триугольника";}
                    else{ echo "Не все значения введены";} }

                    echo "  </div>  ";
                }
               
    unset($_POST);


               
                ?> 
     
        


       