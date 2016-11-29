<HTML>
  <HEAD>
  	<TITLE>HOME</TITLE>
  </HEAD>
<BODY>
  <SECTION>
  <form  action="index.php" method="post">
  		Name:&nbsp&nbsp&nbsp&nbsp<INPUT type="TEXT" name="name"><br>
  		Comment:&nbsp<INPUT type="TEXT" comment="comment"><br>
         <INPUT Tpye="submit"  value ="Add the comment">
   </form>
  </SECTION>
</BODY>
</HTML>
          <?php 
    $name=$comment="";      
          		if(isset[$_POST['add']])
        {
          $name =$_POST["name"];
		  $comment=$_POST["comment"];
        }
	
      echo	"<br>'".$name."'<br>'".$comment."'";
	 

?>