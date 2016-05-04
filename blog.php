<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="Sources/blogstyle.css">
    <link rel="stylesheet" href="Sources/unsemantic-grid-responsive-tablet.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <meta name="viewport"
          content="width=device-width,
                    initial-scale=1,
                    minimum-scale=1,
                    maximum-scale=1"
        />
</head>
<body>
<!--Header starts here-->
<header>
    <h1>myBlog</h1>
    <h3>because the internet needs to know what I think</h3>
</header>
<!--Header finishes here-->

<!--Main starts here-->
<main class="grid-container">
    <nav>
        <ul>
            <li><a href="blog.html">All Blog Items</a></li>
            <li><a href="blog.html">Work Blog Items</a></li>
            <li><a href="blog.html">University Blog Items</a></li>
            <li><a href="blog.html">Family Blog Items</a></li>
            <li><a href="add.html.html">Insert Blog Items</a></li>
        </ul>
    </nav>

    <section class="grid-100">
        <?php
        include("dbconnect.php");

        $sql = "SELECT * FROM blogView";

        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $title = $row["entryTitle"];
                $summary = $row["entrySummary"];
                $category = $row["category"];
                $submitter = $row["submitter"];
                echo "<article>
                <h2>{$title} by {$submitter}</h2>
                <h3>{$category}</h3>
                <p>{$summary}</p><br>
                </article>";
            }
        }

        else{
            echo "0 results";
        }
        ?>

    </section>

</main>
<!--Main finishes here-->

<!--Footer starts here-->
<footer>
    <P>Designed by Michal Drobena, 2016</P>
</footer>
<!--Footer finishes here-->
</body>
</html>