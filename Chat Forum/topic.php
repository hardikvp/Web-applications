<?php

include'connect.php';
include 'header.php';

$sql= "SELECT
    	   topic_id,
    	   topic_subject
       FROM
           topics
       WHERE
           topics.topic_id = " . mysqli_real_escape_string($con, $_GET['id']); 

$result = mysqli_query($con,$sql);

if(!$result)
{
    echo 'The topic could not be displayed, please try again later.' . mysqli_error($con);
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'This topic does not exist.';
    }
    else
    {
	while($row = mysqli_fetch_assoc($result))
        {
            echo '<div id = "head">
	     	' . $row['topic_subject'] . '
	        </div>';		
        }
	$sql = "SELECT
    		   posts.post_topic,
    	   	   posts.post_content,
    		   posts.post_date,
    		   posts.post_by,
    		   users.user_id,
    		   users.user_name
		FROM
    		   posts
		LEFT JOIN
    	           users
		ON
    		   posts.post_by = users.user_id
		WHERE
    		   posts.post_topic = " . mysqli_real_escape_string($con,$_GET['id']);
	
	 
        $result = mysqli_query($con,$sql);
         
        if(!$result)
        {
            echo 'The posts could not be displayed, please try again later.';
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                echo 'There are no posts in this topic yet.';
            }
            else
            {
		//prepare the table
                echo '<table border="1">
                      <tr>
                      </tr>'; 
		while($row = mysqli_fetch_assoc($result))
                {		      
			echo '<tr>';
                        echo '<td class="rightpart">';
			    echo $row['user_name'];
			    echo '<br>';
			    echo date('d-m-Y @ h:m', strtotime($row['post_date']));
			echo'</td>';
			echo'<td class="leftpart">';
			echo $row['post_content'];    
			echo'</td>';
		    echo '</tr>';
		    echo'</table><br>';
		}
		
	    
	    }
	}
    }
}
echo '<form method="post" action="reply.php?id=5">
    Reply : <br><br><textarea name="reply-content"></textarea><br><br>
    <input type="submit" value="Submit reply" />
	     </form> ' ;	


include 'footer.php';
?>


