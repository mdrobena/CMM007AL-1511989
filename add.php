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
        if($_SERVER['REQUEST_METHOD'] === 'GET') {
            ?>

            <form action = "<? echo $_SERVER['PHP_SELF']?>" method = "POST">
                <table>

                    <tr>
                        <td><label>Entry Title:</label></td>
                        <td><input type="text" name="title" value="" size="30" required></td>
                    </tr>

                    <tr>
                        <td><label>Entry Summary:</label></td>
                        <td><textarea name="summary" cols="30" rows="5" required></textarea></td>
                    </tr>

                    <tr>
                        <td><label>Category:</label></td>
                        <td><select name="category" required>
                                <option value="work">Work</option>
                                <option value="university">University</option>
                                <option value="family">Family</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Submitted By:</label></td>
                        <td><input type="text" name="submitted"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit"></td>
                    </tr>

                </table>
            </form>

            <?
        }
        elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
            include ("dbconnect.php");

            $title = $_POST["title"];
            $summary = $_POST["summary"];
            $category = $_POST["category"];
            $submitter = $_POST["submitted"];

            $sql_query = "INSERT INTO blogView (entryTitle, entrySummary, category, submitter) VALUES ('$title', '$summary', '$category', '$submitter')";

            if(mysqli_query($db, $sql_query)){

            }

            else{
                echo "Error ".$sql_query."<br>".mysqli_error($db);
            }

            header("location:blog.php");

        }

        else{
            header("location:index.php");
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