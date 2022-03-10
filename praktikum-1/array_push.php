<!DOCTYPE html>
<html>
    <body>
        <?php
        $tims = ["erwin","heru","ali","zaki"]
        array_push($tims);
        foreach($tims as $person){
            echo $person. '<br/>';
        }
        ?>
    </body>
</html>