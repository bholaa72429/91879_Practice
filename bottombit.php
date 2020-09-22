  <div class="box side">
        
        <h2>Search | <a href="showall.php">Show All</a></h2>
            
        <i>Type part of the title / author name if desired</i>
            
        <hr />
         
        <!-- Start of Title Search -->
      
        <form method="post" action="title_search.php" enctype="multipart/form-data">
        
            <input class="search" type="text" name="title" size="40" value="" required placeholder="Title..." />
            
            <input class="submit" type="submit" name="find_title" value="&#xf002;" />
            
        </form>
      
        <!-- End of Title Search -->

      
      <!-- Start of author Search -->
      
        <form method="post" action="author_search.php" enctype="multipart/form-data">
        
            <input class="search" type="text" name="author" size="40" value="" required placeholder="Author..." />
            
            <input class="submit" type="submit" name="find_author" value="&#xf002;" />
            
        </form>
      
        <!-- End of author Search -->

      <!-- Start of genre Search -->
      
        <form method="post" action="genre_search.php" enctype="multipart/form-data">
            
           <select name="genre" required>
               <option value="" disabled selected>Genre...</option>
               <?php
               // retrieve unique value in genre column
               $genre_sql="SELECT DISTINCT `Genre`
               FROM `L1_prac_books`ORDER BY Genre ASC ";
               $genre_query=mysqli_query($dbconnect,$genre_sql);
               $genre_rs=mysqli_fetch_assoc($genre_query);
               
               do {
                   
                   ?>
               
               <option value="<?php echo $genre_rs['Genre']; ?>"><?php echo $genre_rs['Genre']; ?></option>
               
               <?php
                   
                   
               } // end of genre option retrieval
               
               while ($genre_rs=mysqli_fetch_assoc($genre_query));
               
               ?>
               
              
           </select>
            
           <input class="submit" type="submit" name="find_genre" value="&#xf002;" />
            
        </form>
      
        <!-- End of genre Search -->
<hr />
 <!-- Start of ratings forms -->
<form method="post" action="rating_search.php"
enctype="multipart/form-data">
    
    <b>Ratings Search</b><br />
      
  <select class= "half_width" name="amount">
     <option value="exactly">Exactly...</option>
     <option value="more" selected>At least...</option>
     <option value="less">At more...</option>
  </select>
      
  <select class= "half_width" name="stars">
      <option value= 1>&#9733;</option>
      <option value= 2>&#9733;&#9733;</option> 
      <option value= 3 selected>&#9733;&#9733;&#9733;</option>
      <option value= 4>&#9733;&#9733;&#9733;&#9733;</option>
      <option value= 5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
      
    </select>

    <input type="submit" class="submit" name="find_rating" value="&#xf002;" />
      
   <!-- End of ratings -->   
    
      </form>
            
</div>    <!-- / side bar -->

<div class="box footer">
    CC Anshika 2020
</div>    <!-- / footer -->
    
</div>  <!-- / wrapper  -->
    
</body>        
