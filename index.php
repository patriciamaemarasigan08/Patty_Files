<html>
<head>
    <meta charset="UTF-8">
    <title>Task1_Patricia Mae Marasigan</title>   
    
    <style>
        body{
         background-color: #e5e1e1;
         font-family: Trebuchet MS;
             
        }
        #head1{
            background-color: black;
            border: 2px solid;
            height: 300px;
        }
        
        
        #head2{
            margin-top: 30px;
            background-color: white;
            border: 2px solid white;
            color: white;
            height: 95px;
            font-size: 63px;
            color: black;
            font-family: Palatino Linotype;
        }
        
        #head3{
            height: 45px;
            border: 2px solid white;
            font-size: 22px;
            display: block;
            
        }
        
        #content{
            background-color: black;
            height: 650px;
        }
        
        #picture{
            background-color: black;
            height: 600px;
            width: 450px;
            margin-left: 0px;
        }
        
        #btn1{
            border-radius: 2px;
            border: 3px solid white;
            padding: 7px 18px;
            font-size: 16px;
            outline-color: black;
            cursor: pointer;
            font-family: Charcoal;
        }
        
        #btn1:hover{
            background-color: black;
            outline-color: white;
            color: white;
            font-size:20px;
        }
        
        
        #content2{
        
            margin-left: 600px;
            margin-top: -600px;
            background-color: black;
            height: 600px;
            width: 600px;
            font-size: 11px;
            color: white;
            text-align: justify;
            font-family: Charcoal;
        }
               
        
    </style>
    
     <script language="javascript">
     	document.getElementById("content2").innerHTML = " ";
        function ABOUT()
        {
            var ABOUT = document.getElementById("btn1").value;
            document.getElementById("content2").innerHTML =
                "<h1> PATTY'S PROFILE <h1> <br> &nbsp; &nbsp; &nbsp; &nbsp; Patty is a self- proclaimed artist, singer and soon to be programmer. She is a Computer Science student of First Asia Institute of Technology and Humanities in Tanauan, Batangas. She has a passion to create some blogs in tumblr and shares some insights about her personal experiences.  <br> <p> &nbsp; &nbsp; &nbsp; &nbsp; Aside from being a blogger, she is a traveller, she loves to finds interesting place. Also, Patty interested to take photo even into small detailed/size. She loves selfie's and photography. <br> <p> &nbsp; &nbsp; &nbsp; &nbsp; And Patty, always think about Time cause for her Time is really important. Things should be happen according to her plans. Patty always want to have a schedule for her not to be cram. Also she like to have mini-planners, journals, sticky notes or any notebooks wherein she can writes the task that she planned.";
               
       		
       	 }
         
         
         
    </script>
</head>
<body>
    
        <div id = "head1"> 
            <div id = "head2">
              <center> P A T T Y </center> 
            </div>
            <br>
            <div id = "head3">
                <nav>
                    <center><input id = "btn1" type = "button" value = "HOME" onclick = "window.location.assign('index.php')" >|
                    <input id = "btn1" type = "button" value = "PORTFOLIO" onclick = "window.location.assign('portfolio.php')" ></center>    
                </nav>
                
            </div>
            
        <div id = "content">
            <div id = "picture">
            <figure>
                <img src ="patty.jpg" height= "600px" width = 500px>
            </figure> 
            </div>
            
            <div id = "content2">
           	<img id="myImg" src="content.png" width="500px" height="590px">
            <br>
            <a onclick = ABOUT()> <p style = "color: Pink; font-size: 18; cursor: pointer"> More about Patty.. </p></a>
        	</div>
        </div>
        </div>           
</body>
</html>