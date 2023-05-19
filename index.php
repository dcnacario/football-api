<?php 
require('fetchAPI.php');
require('fetchAPI2.php');

?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
        $league = $data['response'][0];
        $fixtures = $data['response'];
        $odds = $data2['response'];
        ?>
        <img src="<?php echo $league['league']['logo']?>"
        height="100px" style="display: block; margin-left: auto; margin-right: auto;">
        <table class="styled-table">
            <thead>
            <tr>
                <th colspan="2">Home</th>
                <th></th>
                <th colspan="2">Away</th>
                <th>Date</th>

            </tr>
            </thead>
            <?php 
                foreach($fixtures as $fixture)
                {
            ?>
            <tr>
                <td><img src="<?php echo $fixture['teams']['home']['logo']?>" height="50px"></td>
                <td><?php echo $fixture['teams']['home']['name']?></td>
                <td>vs</td>
                <td><img src="<?php echo $fixture['teams']['away']['logo']?>" height="50px"></td>
                <td><?php echo $fixture['teams']['away']['name']?></td>
                <td><?php 
                
                $date_string = $fixture['fixture']['date'];
                $date = DateTime::createFromFormat('Y-m-d\TH:i:sP', $date_string);
                $formatted_date = $date->format('Y-m-d');
                echo $formatted_date;
                ?></td>
            </tr>
            <?php 
                }
            ?>
        </table>
    </body>
</html>