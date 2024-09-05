<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head> 
<style>
    
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root{
    --yellow:#FFCE00;
    --BLACK:#000;
    --white:#ffffff;
}


h3{
    margin-top: 0;
    margin-bottom: 0.5;
    line-height: 1.2;
}

.container{
   margin: 0 auto;
   
}


nav{
    background-color: rgb(227, 33, 72);
    color: rgb(237, 240, 51);
    height: 80px;
    align-items: center;
}


.nav-con{
    display: flex;
    justify-content: space-between;
    height: 80px;
    align-items: center;
}

ul.menu{
    display: flex;
    list-style: none;
}
 

ul.menu li{
    margin: 0 1rem;
}

ul.menu li a{
    color: gold;
    text-decoration: none;
}
h2{
    text-align: center;
    color: var(--white);
}
.blog{
    background:rgba(0, 0, 0, 0.849);
    height: auto;
    padding: 2rem 0;
}

.blog-title{
    text-align: center;
}

.blog-title h3{
    color: var(--white);
    font-size: 2rem;
}

.blog-title p{
    color: var(--yellow);
    font-size: 1.5rem;
}

.blog-posts{
    margin: 2rem 0;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 2rem;
}
.blog-posts img{
    width: 350px;
    border-bottom: 10px solid var(--yellow);
}

.blog-posts h3{
    color: var(--white);
    margin: .5rem 0;
    
}


.blog-posts p{
    color: var(--white);
    line-height: 20px;
}
.k9{
    margin: 2rem 0;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 2rem;
}
ul.k9{
    display: flex;
    list-style: none;
}
ul.k9 a{
    color: #FFCE00;
    text-decoration: none;
}
.ter{
    background-color: (227, 33, 72);
}
.blox{
    background:rgba(227, 33, 72);
    height: auto;
    padding: 2rem 0;
}
.xd {
    max-width: 400px;
    margin-top: 30px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.411);
    border-radius: 8px;
}
</style>
<body>
    <nav>
        <div class="container">
            <div class="nav-con">
               <ul class="k9">
                 <li><a href="page1.php"><h3>INFORMATION TECHNOLOGY</h3></a></li>
               </ul>
             <ul class="menu">
                <li><a href="about.php">แนะนำแผนกวิชา</a></li>
                <li><a href="port.php">ผลงานแผนกวิชา</a></li>
                <li><a href="https://www.facebook.com/ITSBTC">ติดต่อ</a></li>
             </ul>
          </div>
       </div>
    </nav>
    
    <header class="masthead bg-primary text-white text-center">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
             <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/รูป 2.jpg" class="d-block w-100" alt="..." >
                </div>
                <div class="carousel-item">
                    <img src="./img/รูป 1.jpg" class="d-block w-100" alt="..." >
                </div>
                <div class="carousel-item">
                    <img src="./img/รูป 3.jpg" class="d-block w-100" alt="..." >
                </div>
            </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
     <section class="blog" id="blogs">
        <br>
        <div class="container">
            <div class="blog-con">
                <div class="blog-title">
                    <div class="blog-title">
                        <h3>เเนะนำแผนกวิชาเทคโนโลยีสารสนเทศ</h3><br>
                        <div >
                             <hr width="100%" size="8" color="white" align="center">
                        </div>
                       
                   </div>
                </div>
                   <div class="blog-posts">
                       <div class="blog-post">

                        <h3>แผนกวิชาเทคโนโลยีสารสนเทศ</h3>
                         <p>&nbsp;&nbsp;&nbsp;แผนกวิชาเทคโนโลยีสารสนเทศ (Information Technology หรือ IT) เป็นแผนกที่เน้นการศึกษาและการประยุกต์ใช้เทคโนโลยีสารสนเทศในหลายๆ ด้าน<br><br> รวมถึงการออกแบบ พัฒนา และบริหารจัดการระบบสารสนเทศ แผนกนี้มีวัตถุประสงค์เพื่อเตรียม&nbsp;&nbsp;&nbsp;ความพร้อมให้กับนักศึกษาในการทำงานในสายงานที่เกี่ยวข้องกับเทคโนโลยีและข้อมูลสารสนเทศ<br> <br>โดยเน้นทักษะการคิดวิเคราะห์ การแก้ปัญหา และการประยุกต์ใช้เทคโนโลยีใหม่ๆการศึกษาทางด้านเทคโนโลยีสารสนเทศจะช่วยให้นักศึกษามีทักษะที่จำเป็นในการทำงานในองค์กรต่างๆ เช่น บริษัทเทคโนโลยี ธนาคาร โรงพยาบาล และภาครัฐ รวมถึงโอกาสในการประกอบอาชีพอิสระหรือตั้งบริษัทเองในอนาคต</p>
                   </div>
             
                       <div class="blog-post">
                    <img src="./5.jpg">
                        
                   </div>
                       <div class="blog-post">
                    <img src="./6.jpg">
                   </div>
              </div>
        </div><br><br>
    </section>
    <footer class="blox" id="blogs">
        <div class="container">
            <div class="blog-con">
                   <div class="blog-posts">
                       <div class="blog-post">
                        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOCATION</h3><br>
                  
                         <p >LOCATION Building 1 Bang Phutsa, Mueang <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sing Buri District, Sing Buri 16000</p>
                    </div>
             
                       <div class="blog-post">
                        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONTRACT</h3>
                        <div class="xd">
                         <img src="./img/Screenshot__263_-removebg-preview.png">
                        </div>
                   </div>
             
                  
                       <div class="blog-post">
                        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AGENCY</h3>
                         <p><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;www.sbct.ac.th</p>
                   </div>
              </div>
        </div><br>
    </footer>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script&gt;
        <script src="js/js.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script&gt;
    </script>
</body>
</html>