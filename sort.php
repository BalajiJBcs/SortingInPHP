<html>
    <head>
        <meta charset="UTF-8">
        <title>Sorting values in ascending order</title>
    </head>
    <body>
         <?php
          $names = array('Balaji', 'Steve', 'Vikram', 'Bill' , );
          $names_no = count($names);
          sort($names);
          ?>
        <p>Total no of values in array is <?php echo "$names_no";?> </p>
        <?php
        for($i=0; $i <$names_no;$i++) {
            echo 'This is '.$names[$i].'';
            echo '</br>';
        }
        ?>
    </body>
</html>
