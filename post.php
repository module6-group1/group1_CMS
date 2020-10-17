
<?php 
    include 'header.php';
?>
<?php   
    include 'nav.php'

?>
    <main class="post-one-main">
        <?php
        
            // function getPostDetailsFromDatabase(){
            //     $postDetails = array('title' => 'Blog post 1',
            //                         'content' =>  'My first blog post',
            //                         'date' => '09/26/2020',
            //                         'author' => 'Samyu Miller');

            //      return $postDetails;
            // }

            function getPostDetailsFromDatabase() {
                // Get the post title
                $postTitle = rawurldecode($_GET["title"]); //this gets the end of the url and converts it to a string
            
                // Get the post that matches the postTitle
                include_once 'db_connect.php';
                $sql = "SELECT * FROM posts WHERE title = '$postTitle'"; //and this puts the end of the url into this SQL command which gets the titles and details
                $result = mysqli_query($conn, $sql);
            
                // Get the first row from the result as an associative array
                $postDetails = mysqli_fetch_assoc($result);
                return $postDetails;

                echo "<script>console.log('Debug Objects:". $postTitle . "' );</script>";
                
                
            }

            $postDetails = getPostDetailsFromDatabase();
            

            // function getPostTitlesFromDatabase() {
            //     // Get all the post titles from the posts table
            //     include_once 'db_connect.php';
            //     $sql = "SELECT Title FROM posts";
            //     $result = mysqli_query($conn, $sql);
                
            //     // Get each result row as an assoc array, then add title to $postTitles
            //     $postTitles = array();
            //     while($row = mysqli_fetch_assoc($result)){
            //         array_push($postTitles, $row['Title']);
            //     }
            //     return $postTitles;
            // }
            
            // $postTitles = getPostTitlesFromDatabase()
        
        ?>


 
<?php $postTitle = rawurldecode($_GET["title"]); echo "<script>console.log('Debug Objects:". $postTitle . "' );</script>";?>
        <h1><?php echo $postDetails["Title"]?></h1>
        <div>
            <h3>Author:</h3>
            <p><?php echo $postDetails['Author']?></p>
        </div>
        <div>
            <h3>Date Published:</h3>
            <p><?php echo $postDetails['Date Created']?></p>
        </div>
        <div>
            <h3>Content</h3>
            <p><?php echo $postDetails['Content']?></p>
        </div>
    </main>
    <?php
   include 'footer.php'
   ?>


</body>
</html>

