<table border="1px">
    <?php
    $tr = 1;
    while($tr <=5){
        echo "<tr>";
        $td = 1;
        while($td <= 10){
            echo "<td>{$td}</td>";
            $td++;
        }
        echo "</tr>";
        $tr++;
    }
    ?>
</table>