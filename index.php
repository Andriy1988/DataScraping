<?php

    require './vendor/autoload.php';

    $url = 'http://aivalabs.com/';
    $uri = '/';

    $client = new \GuzzleHttp\Client();
    $res = $client->request('GET', $url);

    $body = $res->getBody();
    $body = str_replace( "href=\"", "href=\"".$url, $body );

    echo "<div style='display:none' id='scrap_container'>";
    echo $body;
    echo "</div>";
?>
<table>
    <thead> 
        <th width="20%">Rank</th>
        <th width="60%">Value</th>
        <th width="20%">Color</th>
    </thead>
    <tbody>
<?php
        for ($i = 1; $i <= 10; $i ++)
        {
            echo "<tr><td> $i</td>";
            echo "<td id='colorText$i'></td>";
            echo "<td  id = 'topColor$i'>COLOR</td></tr>";
        }
    ?>
    </tbody>
</table>

<script type = 'text/javascript' src = 'http://code.jquery.com/jquery-3.3.1.min.js'></script>
<script src='1.js'></script>
<style>
    table{ width: 400px; margin: 100px auto;}
    .modal{ display: none !important; }
</style>