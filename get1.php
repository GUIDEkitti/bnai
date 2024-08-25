<div class="d-flex justify-content-center ">
    <?php

    $apiUrl = "http://4646.site/comp1.php";

    $data = json_decode($apiUrl, true);

    if (!empty($data) && is_array($data)) {
        echo "<table border='1'>";
        echo "<tr><th>ProName</th><th>ProDes</th><th>ProLink</th></tr>";

        foreach ($data as $item) {
            $proName = htmlspecialchars($item['ProName']);
            $proDes = htmlspecialchars($item['ProDes']);
            $proLink = htmlspecialchars($item['ProLink']);

            echo "<tr>";
            echo "<td>$proName</td>";
            echo "<td>$proDes</td>";
            echo "<td><img src='$proLink' alt='Image' style='width:100px; height:auto;'></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No data available.";
    }
    ?>
</div>