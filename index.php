<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    $loggedIn = false;
} else {
    $loggedIn = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        *{
            /* background-color: rgb(19, 18, 18); */
        }
        #pixel{
            
            width: 950px;
        }
       
        header{
            /* border-bottom: 7px solid black; */
            height: 80px;
            color:black;
            
        }
        p{
            position: relative;
            bottom: 20px;
            left: 3px;
        }
        #name a{
            
            display: inline-block;
            margin-left: 40px;
            text-decoration: none;
            color:black;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
            position: relative;
            left: 300px;
            bottom: 80px;
            /* border-bottom: 3px solid red; */
        }
        #name a:hover{
            border-bottom: 3px solid red;
            /* height: 40px; */


        }
        #search{
            position: relative;
            left: 1200px;
            bottom: 110px;
            color: black;
          
        }
        #search input{
            height: 30px;
            width: 600px;
            text-align: center;
            border-radius: 15px;
            border: 3px solid  black;
            font-size: 20px;
        }
        #myInput{
            color: black;
        }
       
      
       
        #brand{
            height: 700px;
            width: 2250px;
            position: relative;
            top: 10px;
            border-bottom: 3px solid ;
        }
       
      
      
      
        #login2{
            position: relative;
            left: 2000px;
            bottom: 145px;
            height: 30px;
            width: 120px;
            border: 3px solid;
            text-align: center;
            font-size: 25px;
            transition: all 0.3s ease-in-out;
            
            

        }
        #login2:hover{
            height: 35px;
            width: 150px;
            background-color: chartreuse;
        }
        #login2 a{
            text-decoration: none;
            color: black;
            text-transform: uppercase;
            
        }
        .search2{
            height: 27px;
            width: 33px;
            /* border: 3px solid black; */
            font-size: 30px;
            position: relative;
            top: 8px;
            left: 55px;
            text-align: center;
            bottom: 10px;
            color: black;
        }
        .card-container{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
          border-bottom: 4px solid black;
           width: 2250px;
        }
     
        
        .card img{
            height: 500px;
            width: 400px;
            position: relative;
            top: 50px;
          margin: 30px;
          border: 3px solid black;
          
        }
        .card h2{
            font-size: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
            margin-top: 40px;
            color: black;
        }
       .card a{
        text-decoration: none;
        color: black;
        font-size: 30px;
        margin-left: 170px;
        transition: all 0.3s ease-in-out;
        
       }
       .card a:hover{
        text-transform: uppercase;
        font-size: 30px;
        color: red;
       }
      
     #database{
        position: relative;
        right: 150px;
     }
      
      
       .heading{
        font-size: 50px;
        text-transform: uppercase;
        letter-spacing: 3px;
        /* font-style: italic; */
        font-family: serif;
        color: rgb(19, 17, 17);
       }
       
       #box{
        height:100px;
        width:200px;
        border: 3px solid black;
       }
       /* .logout{
        height:50px;
        width:100px;
        border:2px solid black;
        margin:30px;
        font-size:20px;
       } */
        #search a{
            margin:10px;
           

            
        }
        .button{
            height:30px;
            width:100px;
            font:bold;
            font-size:18px;
            border:2px solid black;
           
        }
        .box{
            margin-left:900px;
            position:relative;
            bottom:34px;
            height:30px;
            width:100px;
            font-size:18px;
            border:2px solid black;


           
        }
     
      
      
    </style>
</head>
<body>
<div id="pixel">
        <header>
            <h1>Book Lover</h1>
            <p>World of book</p>
            <div id="name">
                <a href="#">Home</a>
                <a href="about_us.html">About us</a>
                <a href="contact.html">Contact</a>
                <a href="#">service</a>
                <?php if ($loggedIn): ?>
                    <a href="logout.php"  ></a>
                <?php endif; ?>
            </div>
            <div id="search">
                <span class="material-symbols-outlined search2">
                    search
                </span>
                <input type="text" placeholder="search for books..." id="search-item" onkeyup="search()"> 
                               
                <?php if (!$loggedIn): ?>
                    <a href="login.php" ><button class="button">Login</button></a>
                <?php endif; ?> 

                <a href="addbook.php"> <button class="button">Add Book</button></a>
                <a href="logout.php" ><button class="box">Logout</button></a>
            </div>
        </header>
    <main>
        
        <img id="brand" src="image3.jpg" alt="">
        <div class="card-container" id="card-container">
            <div class="card">
                
                <img src="java book.webp" alt=" java book">
               
                <h2>Java</h2>
                <a href="https://www.cs.cmu.edu/afs/cs.cmu.edu/user/gchen/www/download/java/LearnJava.pdf"
               > Click here</a>
                
            </div>
    
            <div class="card">
                <img src="c programming book.jpg" alt="C programming" >
                <h2>C Programming</h2>
              
                <a href="https://vardhaman.org/wp-content/uploads/2021/03/CP.pdf"> Click here</a>
            </div>
    
            <div class="card">
                <img src="python book.jpg" alt="python book">
                <h2>Python</h2>
               
                <a href="https://cfm.ehu.es/ricardo/docs/python/Learning_Python.pdf">click here</a>
            </div>
    
            <div class="card">
                <img src="dbms book.webp" alt="dbms book ">
                <h2 id="database">Database management system(DBMS)</h2>
              
                <a href="https://mrcet.com/downloads/digital_notes/ECE/III%20Year/DATABASE%20MANAGEMENT%20SYSTEMS.pdf">Click here</a>
            </div>
    
    
       
        </div>
      
    
        <h1 class="heading">CBSC Class 10 Books</h1>
        <div class="card-container" id="card-container" >
        <div class="card">
            <img src="class 10 maths.jpg" alt="">
            <h2 id="boy">Mathematics</h2>
            <a href="https://cdn.shopify.com/s/files/1/0572/7299/1924/files/Oswaal_CBSE_Class_10_Mathematics_Standard_Revision_Notes_For_2023_Exam.pdf?v=1663661387">click here</a>
        </div>
        <div class="card">
            <img src="class 10 science.jpg" alt="">
            <h2>Science</h2>
            <a href="https://cdn.shopify.com/s/files/1/0572/7299/1924/files/Oswaal_CBSE_Class_10_Science_Revision_Notes_For_2023_Exam.pdf?v=1663592959">Click here</a>

        </div>
        <div class="card">
            <img src="class 10 english.jpg" alt="">
            <h2>English</h2>
            <a href="https://cdn.shopify.com/s/files/1/0572/7299/1924/files/Oswaal_CBSE_Class_10_English_Language_Literature_Revision_Notes_For_2023_Exam.pdf?v=1663652785">click here</a>

        </div> <div class="card">
            <img src="class 10 social science.jpg" alt="">
            <h2>Social Science</h2>
            <a href="https://cdn.shopify.com/s/files/1/0572/7299/1924/files/Oswaal_CBSE_Class_10_Social_Science_Revision_Notes_For_2023_Exam.pdf?v=1663939179">click here</a>

        </div> <div class="card">
            <img src="class 10 hindi.jpg" alt="">
            <h2>Hindi</h2>
            <a href="https://cdn.shopify.com/s/files/1/0572/7299/1924/files/._._._-10_For_2023_Exam.pdf?v=1663913979">click here</a>

        </div>

     </div>
     <h1 class="heading">Up-board class 10 books</h1>
     <div  class="card-container" id="card-container">
        <div class="card">
        <img src="class 10 english.jpg" alt="">
        <h2>English</h2>
        <a href="https://drive.google.com/uc?id=1NE8gM99ydMKZm-W1eyoXhi41IZwDdgTk">click here</a>

        </div>
        <div class="card">
            <img src="up board hindi.jpeg" alt="">
            <h2>Hindi</h2>
            <a href="">click here</a>
    
            </div>
            <div class="card">
                <img src="up board maths.jpg" alt="">
                <h2>Maths</h2>
        
                <a href="https://drive.google.com/uc?id=1q_eQRNtimek5uAQqR6p-yzp6Hds6zUiK">click here</a>
               
                </div>
                <div class="card">
                    <img src="up board science.jpeg" alt="">
                    <h2>Science</h2>
            
                    <a href="https://drive.google.com/uc?id=18LDhpF3WCXYRfEFPp0v2sslB809QTQSJ">click here</a>
                   
                    </div>
                    <div class="card">
                        <img src="up board social science.webp" alt="">
                        <h2>social science</h2>
                
                        <a href="https://drive.google.com/uc?id=12xisgKTq5T-BrKKXtY-7iZTPYkVLc6Wb">click here</a>
                       
                        </div>
                                        

     </div>
    </main>
    </div>
    <!-- <footer>
        <div id="footer1">
            <div id="name1">
            <h1 style="position: relative;left: 750px; top: 50px;">Qucik Links</h1>
            <h3 class="offer">Home</h3>
            <h3 class="offer">Books</h3>
            <h3 class="offer">About </h3>
            <h3 class="offer">contact</h3>
            <h3 class="offer">servics</h3>
            <h3 class="offer">authors</h3>
            <h3 class="offer">Resources</h3>


            </div>

        </div>
        <div id="footer2">
            <div id="name2">
                <h1 style="position: relative;left: 980px;bottom: 255px;">Support</h1>
                <h3 class="offer2">Order track</h3>
                <h3 class="offer2">Contact us</h3>
                <h3 class="offer2">Find my product</h3>
                <h3 class="offer2">Guide</h3>
                <h3 class="offer2">FAQ</h3>
                <h3 class="offer2">FAQ- Happy Return</h3>
                <h3  class="offer2">Help desk</h3>
                <h3 class="offer2">Writer/Publish Request</h3>
                

            </div>

        </div>
        <div id="footer3">
            <div>
                <h1 style="position: relative;left: 1200px;bottom: 590px;">Policies</h1>
                <h3 class="offer3">Terms of use</h3>
                <h3 class="offer3">Privacy Policy</h3>
                <h3 class="offer3">Happy Return</h3>
                <h3 class="offer3">Return Policy</h3>
            </div>

        </div>
        <div id="footer4">
            <div>
                <h1 style="position: relative;left: 1400px;bottom: 795px;">User Area</h1>
                <h3 class="offer4">About us</h3>
                <h3 class="offer4">Customer service</h3>
                <h3 class="offer4">Customer Link</h3>
                <h3 class="offer4">Privacy Policy</h3>
            </div>

        </div>
    </footer> -->
  
   

    <script>
        const search=()=>{
            const filter=document.getElementById("search-item").value.toUpperCase();
            const storeBooks=document.getElementById("card-container");
            const book=document.querySelectorAll(".card");
            const bookName=document.getElementsByTagName("h2");

            for(var i=0;i<bookName.length; i++){
                let match=book[i].getElementsByTagName("h2")[0];

                if(match){
                    let textvalue= match.textContent || match.innerHTML

                    if(textvalue.toUpperCase().indexOf(filter) > -1){
                        book[i].style.display="";
                    }else{
                        book[i].style.display="none";

                        
                    }
                }
            }
          
            }

           
        
    </script>
</body>
</html>