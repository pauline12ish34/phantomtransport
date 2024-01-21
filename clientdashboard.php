
<html>
  <head>
     <title>E-learning</title>
	 <style> 
		a {
		  color: white;
		  text-decoration: none !important;
		}

        #hside{
width: 50%;
padding: 5em;
}
#statistics{
    display: flex;
  
    margin-left:5em;
   
}
#statistics div{
    border-right: 2px solid gray;
    margin-left: 3em;
    padding: 1em;
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

.search-box input{
  outline: none;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  font-size: 16px;
  padding: 7px;
  /* margin-top:; */
}
.search-box button{
  background-color:#253B33;
  padding: 7px;
border: 1px solid #253B33;
border-radius:7px;
margin-top:5em;
color: #FFFFFFFF;
}
.search-box{
  margin-left: 1em;
}



ul {
    list-style-type: none;
    display: flex;
    list-style: none;
    margin-left: 45em;
    
    padding: 0.6em 0 0 0;
   
  } 
li{
float: left;
margin-top: 2em;

  }
  a{
    text-decoration: none; 
  }
  li a{
    padding: 1em;
    color: black;
    margin-top: 2em;
  
  }
  li a:hover{
    color: black;
    background-color: #edf0ed;
  } 
  #freeButton{
    border:1px solid rgb(255, 255, 255);
    border-radius: 5px;
    align-items: center;
    width:150px;
    padding: 10px;
    color:black;
    background-color: #edf0ed;
    /* margin-left: 8em; */
    
   
}

nav{
    display: flex;
    background-color:rgb(255,255,255);
    height: 5em;
    margin-right: 10em;
   
}

/* pagination styling */


 
.pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:15px;   
        color: black;   
        float: left;   
        padding: 4px 8px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    } 
    /* google map */
    .google-map {
      margin-top:1em;
     padding-bottom: 50%;
     position: relative;
}

.google-map iframe {
     height: 100%;
     width: 80%;
     left: 0;
     top: 0;
     position: absolute;
}

/* popup */
.open-button {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;

}

/* The popup form - hidden by default */
.buses-popup {
  display: none;
  /* position: fixed; */
 
  /* border: 3px solid #f1f1f1; */
}
table{
  collapse:collapse;
}
	 </style>

   <script>
function openForm() {
  document.getElementById("busesforms").style.display = "block";
  document.getElementById("map").style.display = "none";
}

function closeForm() {
  document.getElementById("busesforms").style.display = "none";
  document.getElementById("map").style.display = "block";
}
</script>
  </head>
  
  <body>

  <nav>
    <img src="./imgs/logo.png" alt="logo"  height="50px" style="margin-top: 3em; margin-left: 5em;">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="sevices.php">Services</a> </li>
        
        <li><a href="contact.php">Contact</a></li>
       
       <li><a href="logout.php" > Logout</a></li> 
    </ul>
   </nav>
 

  <div id="main">
   <div id="hside">
  Welcome To best Transport Website
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
    <!-- <img src="./imgs/inside1.jpg" alt="bus inside" id="businside1"  width="600px"> -->
    
    <div class="search-box">
        <input type="text" placeholder="Search...">
        <button type="button" onclick="openForm()"> Buses availabity </button>
      </div>
     <div class="google-map" id="map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.487195755842!2d30.061640873505333!3d-1.9586866367276208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca5d5b9897711%3A0x34e7b1e5cded7867!2sUR%20College%20of%20Science%20and%20Technology!5e0!3m2!1sen!2srw!4v1705780535899!5m2!1sen!2srw"
       width="300" height="240" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
     </div>

      <div class="buses-popup" id="busesforms"> 

      <table border=0 height="80%" width="100%">
	 <div style="display: flex; margin-top:1em;" > <h2> Available Buses </h2> 
  <div onclick="closeForm()"> <img src="./imgs/cancel.png" alt="cancel" width="34px" height="30px" id="cancel" style=" margin-top:2em; margin-left: 10em;"></div>
</div>
   
   <hr/>
    
   <?php  
      
        require_once "connection.php";   
    
        $per_page_record = 3;        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
    
        $start_from = ($page-1) * $per_page_record;     
    
        $query = "SELECT * FROM buses LIMIT $start_from, $per_page_record";     
        $rs_result = mysqli_query ($conn, $query);    
    ?>    
  
    <div class="container">   
      <br>   
      <div>   
        
        <table >   
          <thead>   
            <tr>   
              <th width="10%">ID</th>   
              <th>platenumber</th>   
              <th>busType</th>
              <th>seats</th>   
            
              
            </tr>   
          </thead>   
          <tbody>   
    <?php     
            while ($row = mysqli_fetch_array($rs_result)) {    
                  // Display each field of the records.    
            ?>     
            <tr height="30px">     
             <td><?php echo $row["id"]; ?></td>     
            <td><?php echo $row["platenumber"]; ?></td>   
            <td><?php echo $row["bus type"]; ?></td> 
            <td><?php echo $row["seats"]; ?></td> 
            <td> <a class="btn btn-info"style=" background-color:#253B33;
  padding: 5px 5px;
border: 1px solid #253B33;
border-radius:10px;
 color:white; " href="book.php?id=<?php echo $row['id']; ?>">Book Now</a> </button></td>                                            
            </tr>     
            <?php     
                };    
            ?>     
          </tbody>   
        </table>   

  
     <div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM buses";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a  href='clientdashboard.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='clientdashboard.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='clientdashboard.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='clientdashboard.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  
  
  
    
    </div>   
  </div>  
 
  <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'test.php?page='+page;   
    }   
  </script>  
   
   
    </div>
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