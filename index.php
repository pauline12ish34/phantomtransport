
<html>
  <head>
     <title>E-learning</title>
	 <style> 
		a {
		  color: white;
		  text-decoration: none !important;
		}
		table.menu{
            background-color:  #253B33; color: whitesmoke;
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
        #hside{
width: 50%;
/* margin-left: 5em; */
/* text-align: center; */
padding: 5em;
}
#statistics{
    display: flex;
  
    margin-left:5em;
}
#statistics div{
    border-right: 2px solid gray;
    margin-left: 3em;
    padding: 3em;
    text-align: center;
}

#freeButton{
    border:1px solid rgb(255, 255, 255);
    border-radius: 5px;
    align-items: center;
    width:150px;
    padding: 10px;
    color:black;
    background-color: #edf0ed;
    margin-left: 8em;
    
   
}
#freeButton:hover{
    background-color:#253B33;
    color: #ffffff;

}
#businside1{
    width: 70%;
    height: 23em;
    margin-left: 5em;

}
#main{
    width: 100%;
    display:flex;
}
#getStartedButton{
    /* width:55em; */
    margin-top: 55em;
    border:2px solid #253B33;
    border-radius: 5px;
    align-items: center;
    /* width:50em; */
    padding: 10px;
    padding-left:6em;
    padding-right:6em;
    color:#253B33;
    font-size: medium;
    margin-top: 2em;
    background-color: #ffffff;
}
#getStartedButton:hover{
    background-color:#253B33;
    color: #ffffff;

}

	 </style>
  </head>
  
  <body>
  <table  class="menu" width="100%" >
    
    <tr>
        <td><img src="./imgs/logodarkmode.png" alt="logo"  height="50px" style="margin-top: 2em; margin-bottom: 2em; margin-left: 5em;"></td>
	   <td><a href="index.php">Home</a></td>
	   <td><a href="sevices.php">Services</a></td>
	   <!-- <td><a href="products.php">Products</a></td> -->
	   <td><a href="contact.php">Contact</a></td>
	   <td><a href="login.php">Login</a></td>
	</tr>
  </table>
  <div id="main">
   <div id="hside">
  Welcome To  Rwanda
  <h2>
    Book Your Seat
  </h2>
  <div style="size: 1vw;">
    Your bus ,your Seat <br>
    <img src="./imgs/underline.png" style="margin-bottom: 1em; line-height: 10em;"> <br>
    No more long hours standing at the bus stop waiting for a bus. <br>
    As easy as it is, just choose the route to your location,<br>
    we will show you available buses coming your way at <br>
    a very proximated time. <br>

   <div style="margin-bottom: 2em;">Your time is valuable </div> 
   <!-- <button id ="getStartedButton" > Get started</button> -->
   <a href="./SignUp.php" id ="getStartedButton"  >Get started</a>
  </div>

  

   </div>
   
   <div id="businside1">
    <img src="./imgs/inside1.jpg" alt="bus inside" id="businside1"  width="600px">

   </div>
</div>
<div>
    <div id="statistics">
<div>
    <h2>24/7</h2>
    Hours  per week
</div>
<div>
    <h2>60 + </h2>
    Buses using our system
</div>
<div>
    <h2>183 +</h2>
    Active users
</div>
<div style="border: none;">
    <h2>3  + </h2>
    Years of System Usage
</div>
    </div>
   
</div>

<footer style="width: 100vw; background-color:  #253B33; color: whitesmoke; height: 6em;">
       
    <p style=" text-align: center; padding-top: 3em;">Copyright &copy; 2019 Ishimwe Marie Pauline 2023. All rights reseved.</P>
      
</footer>
  
  </body>
</html> 