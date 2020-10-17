
<?php 
    include 'header.php';

?>
<?php   
    include 'nav.php'

?>

    <main class="formStyle">
        <!-- The form must have input fields for title, author, date, a textarea for content and a submit button. Use the appropriate input types for each field. -->
      <form action="submit-post.php" method="POST">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <label for="author">Author</label>
        <input type="text" name="author" id="author">
        <label for="date">Date</label>
        <input type="date" name="date" id="date">
        <label for="content">Content</label>

  
       <!-- <textarea name="" id="content" cols="30" rows="10"></textarea> -->
        <div id="editor"></div>

        <button id="submit">Submit</button>

      </form>
    </main>
    <?php
   include 'footer.php'
   ?>
</body>

<script src="script.js"></script>

</html>