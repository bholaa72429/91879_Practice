<?php
    include "topbit.php";
$showall_spl="SELECT *
FROM `L1_prac_books`
ORDER BY `L1_prac_books`.`Title` ASC";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);\
    
?>

<div class="box main">
    
    <h2>All Items</h2>
    
    <?php 
    
    // check if there are any results
    
    if ($count<1)
    
    {
        
    ?>
    
    <div class="error">
        Sorry! There are no results that match your search. Please use the search box in the sidebar to try again.
    </div>
    
     <?php
        
    } // end count 'if'

    // if there are not results, output an error
    else  {
        
        do {
        
        ?>
    
        <!-- Results go here -->
        <div class="results">
    
        <p>Title: <span class="sub_heading"><?php echo $showall_rs['Title']; ?></span></p>
        
        <p>Author: <span class="sub_heading">author holder</span></p>
    
        <p>Genre: <span class="sub_heading">genre holder</span></p>
        
        <p>Rating: <span class="sub_heading">rating holder</span></p>
        
        <p> <span class="sub_heading">Review / Response</span></p>
        
        <p> 
            Review Placeholder
        </p>
        
    </div><!-- / end result -->
    
    <?php 
            
        } // end of 'do'
        
        while($showall_rs=mysqli_fetch_assoc($showall_query));
        
    } // end else
     
    // if there are results, display them
    
    ?>    
      
      <!-- / main --> 
<?php
    include "bottombit.php";
?>