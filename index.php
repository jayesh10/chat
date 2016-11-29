<HTML>
  <HEAD>
  	<TITLE>HOME</TITLE>
  </HEAD>
<BODY>
  <?php 
    $name=$comment="";
	
        if($_SERVER[REQUEST_METHOD]=="POST")
          if(empty($_POST["name]"))
        	$namerr="Name is required!";
			else
            $name = $_POST["name"];
		if(empty())
?>
  <SECTION>
  <form >
  		Name:<INPUT type="TEXT" name="name"><br>
  		Comment:<INPUT type="TEXT" comment="comment"><br>
         <INPUT Tpye="submit"  >
   </form>
  </SECTION>
</BODY>
</HTML>
          
