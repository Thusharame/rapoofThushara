<html>
    <body>
        <?php
        echo "<h3> Hello World! My name is David";
        ?>
    </body>
    <!--tittle-->
    <?php
        $title = "PHP is interesting.";
        echo "<h4>$title</h4>";
        ?>

    <?php
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;
    ?>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>S.n.</th>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>1</td>
            <td>John</td>
            <td><?php echo $g1; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Alice</td>
            <td><?php echo $g2; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bob</td>
            <td><?php echo $g3; ?></td>
        </tr>
    </table>

    <div>
        <img src="img_1.JPG" width="80%">
    </div>
</body>

</html>





