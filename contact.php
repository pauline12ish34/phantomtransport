
<html>
  <head>
     <title>E-learning</title>
	 <style> 
		a {
		  color: white;
		  text-decoration: none !important;
		}
		table.menu{
		  background-color:#253B33;
		}
		table.bd{
		  margin-left: 50px;
		  margin-right: 50px;
		}
		td.cat{
		  margin-left: 20px;
		  margin-right: 20px;			
		}
		td.book{
		  margin-left: 30px;
		  margin-right: 30px;			
		}

        #submitButton{
    /* width:55em; */
    margin-top: 55em;
    border:2px solid #253B33;
    border-radius: 5px;
    align-items: center;
    width:40em;
    padding: 10px;
    color:#253B33;
    font-size: medium;
    margin-top: 2em;
    background-color:#253B33;
    color: #ffffff;
}
/* #submitButton:hover{
    background-color:#253B33;
    color: #ffffff;

} */

input{
	border:1px solid gray;
	margin:7px;
	padding:5px;
}
	 </style>
  </head>
  
  <body>
  <table  class="menu" width="100%" >
    
    <tr>
        <td><img src="./imgs/logodarkmode.png" alt="logo"  height="50px" style="margin-top: 3em; margin-left: 5em;"></td>
	   <td><a href="index.php">Home</a></td>
	   <td><a href="services.php">Services</a></td>
	   <!-- <td><a href="products.php">Products</a></td> -->
	   <td><a href="contact.php">Contact</a></td>
	   <td><a href="login.php">Login</a></td>
	</tr>
  </table>
    <table border="0" class="bd">  
	<tr>
	  <td width="60%"> 
		<p style="
			color:rgb(100,100,32); 
			text-align:justify; 
			margin-left:0px;
			margin-right:10px; 
			">  			
      <table width="100%" style="margin-left:0px;">
	     <tr>
		    <td>
		   <h2> Get in Touch</h2>
           <h4>Explore our <span><a href="services.php" style="color: blue">Services</a> </span> or contact our team</h4>
		   <hr/>
	  <form action="" method="post"> 
	     <input type="text" name="subject" placeholder="Enter your appeal" size="40"/> <br/>
	     <input type="text" name="email" placeholder="Enter your email"size="40"/> <br/> 
		 <textarea name="comment" rows="5" cols="39" style="margin-left:5px;"> </textarea>
		 <br/>
		 <input type="submit" value="Submit" id="submitButton" name="submitbutton"/> 
		 <!-- <input type="submit" value="Bikura" name="retr"/> -->
         <br/>
	  </form>
	  <?php
	    include("connection.php");
		
			  if(isset($_REQUEST['submitbutton'])){
				$subject = $_POST['subject'];
                $email = $_POST['email']; 
				$c = $_POST['comment'];   
				
				$qer = "INSERT INTO contacttb 
				(id, subject, sender, content, status)
				VALUES
				('', '$subject', '$email', '$c', 1)";
				$result = mysqli_query($conn, $qer);
				
				if(!$result){
					die("Something went wrong in the querry".mysqli_error($conn));
				}
				    echo "Message sent successfly";
			  }
			 ?>
			</td>
			<td>
			 
			</td>
		 </tr>
	  </table>
		</p>
		
		         
	   </td>
		
		<td  width="40%">
		 <table width="100%" height="100%">
		    <tr><td><b>Recent Bus trending </b></td></tr>
		 </table>
		</td>
	</tr> 
	</table>
  
  
  
  
    <table  class="menu" width="100%">
    <!-- <tr>
	   <td colspan="5"><p style="text-align:center; color:white">Copyright@allright reserved</p></td> 
	</tr> -->
  </table>
  <footer style="width: 100vw; background-color:  #253B33; color: whitesmoke; height: 6em;">
       
    <p style=" text-align: center; padding-top: 3em;">Copyright &copy; 2019 Ishimwe Marie Pauline 2023. All rights reseved.</P>
      
</footer>
  </body>
</html>  
     