<?php

include_once "./connection/cone.php";



$conne = connectiondatabase();


//$sql = "SELECT * FROM info";
//$result = $conne->query($sql);
$sort_option = "";
 if (isset($_GET['sorting'])) {
 if ($_GET['sorting'] == "ASC") {
     $sort_option = "ASC";
 } elseif ($_GET['sorting'] == "DESC") {
     $sort_option = "DESC";
 }
}

//if ($_GET['sorting']) {
   // $sort_option = $_GET['sorting'];
//}

$sql = "SELECT * FROM info order by username $sort_option";
$result = $conne->query($sql);
?>


<html>

<head>
    <title>
        data
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        select {
            margin-left: 200px;
            margin-top: 10px;
            padding-right: 10px;
            justify-content: space-between;
            display: flex;



        }

        .btn-danger {
            margin: 2px;
            transition: .07s;

        }
    </style>
</head>

<body>
    <form method="get">
        <select name="sorting" id="" onchange="this.form.submit()">
            <option value="">click</option>
            <option value="ASC" <?php if (isset($_GET['sorting']) && $_GET['sorting'] == "ASC") {
                                } ?>>A To Z</option>



            <option value="DESC" <?php if (isset($_GET['sorting']) && $_GET['sorting'] == "DESC") {
                                    } ?>>Z To A</option>
        </select>


    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <td>Username</td>
                <td>Password</td>
                <td>Email</td>
                <td>img</td>
                <td>type</td>
                <td>control</td>
            </tr>

        </thead>
        <tbody>
            <?php





            foreach ($result as $row) {

                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['img'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo '<td><button type= button class="btn btn-primary"> Edite </button>',
                '<button type= button class="btn btn-danger"> Delete </button></td>';
                echo "</tr>";
            }
            ?>

        </tbody>

    </table>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>