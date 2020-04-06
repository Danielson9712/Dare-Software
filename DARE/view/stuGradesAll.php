<!DOCTYPE html>
<html>


    <head>
        <div class="homeBack">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="style.css">

</head>

    <?php include 'stuNav.php' ?>

<body>
  <?php
    session_start();
    require '../includes/db.php';
    include("../includes/functions.php");

    $id = $_SESSION['sid'];
    //Get courses
    $sql = "SELECT course_name, course_id FROM course_students WHERE student_id=$id";
            $results = mysqli_query($conn, $sql);
            $rows = $results -> fetch_all();


    $courses = [];
    $length = count($rows);
    for($i = 0; $i < $length; $i++)
    {
      array_push($courses, $rows[$i][0]);
    }

    echo $courses[0];
    echo $courses[1];

  ?>
    <table id="class">

        <tr>
            <th> Class </th>
            <th> Percentage </th>
            <th> Final Grade </th>
        </tr>
        <tr>
            <td> Software Engineering and Practice </td>
            <td> 95% </td>
            <td> A </td>

        </tr>

        <tr>
            <td> Design and Analysis of Algorithms </td>
            <td> 67% </td>
            <td> D+ </td>

        </tr>

        <tr>
            <td> Intro to Electrical and Computer Engineering </td>
            <td> 78% </td>
            <td> C </td>

        </tr>

        <tr>
            <td> Database Design and Implementation  </td>
            <td> 83% </td>
            <td> B </td>

        </tr>


    </table>
<?php include 'footer.php' ?>


</body>


</div>

</html>
