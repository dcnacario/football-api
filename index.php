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
        <th>Odds</th>     
        <th></th>
        <th colspan="2">Away</th>
        <th>Date</th>
        <th colspan="2">Pick a Winner</th>

    </tr>
    </thead>
    <?php 
        foreach($fixtures as $index => $data1)
        {
    ?>
    <tr>
        <td><img src="<?php echo $data1['teams']['home']['logo']?>" height="50px"></td>
        <td><?php echo $data1['teams']['home']['name']?></td>
        <td>vs</td>
        <td><img src="<?php echo $data1['teams']['away']['logo']?>" height="50px"></td>
        <td><?php echo $data1['teams']['away']['name']?></td>
        <td><?php 
            
            $date_string = $data1['fixture']['date'];
            $date = DateTime::createFromFormat('Y-m-d\TH:i:sP', $date_string);
            $formatted_date = $date->format('Y-m-d');
            echo $formatted_date;
            ?></td>
        <td>
            <table>
                <thead>
                    <tr>
                        <th>Value</th>
                        <th>Odd</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($odds[$index]['bookmakers'][0]['bets'][0]['values'] as $value) : ?>
                        <tr>
                            <td><?php echo $value['value']; ?></td>
                            <td><?php echo $value['odd']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </td>
        <td>
            <form method="POST" action="insert.php">
                <input type="hidden" name="fixture_id" value="<?php echo $data1['fixture']['id']; ?>">
                <label for="user_value">Value:</label>
                <input type="text" name="user_value" id="user_value"><br>
                <label for="user_money">Money:</label>
                <input type="text" name="user_money" id="user_money"><br>
                <input type="submit" value="Submit">
            </form>
        </td>
    </tr>
    <?php 
        }
    ?>
        </table>
    </body>
</html>