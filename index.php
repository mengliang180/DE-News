<?php
include('admin/action/action.php');
include('_config_php.php');
$db=new Action();
$con="status=1&&location=1";
if(isset($_GET['menu_id'])){
  $menu_id=$_GET['menu_id'];
  $con="status=1&&location=1&&menu_id=".$menu_id."";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>


 <title> DE NEWS</title>
 <link rel="icon" href="admin/image/logo.png">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="home/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <title>Document</title>
</head>

<body>
  
<style>
.scroll-left {
 height: 50px;	
 overflow: hidden;
 position: relative;
 background:#87cefa;
 color: blue;
 border: 1px solid blue;
}
.scroll-left h3 {
 position: absolute;
 width: 100;
 height: 100;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 transform:translateX(100%);
 /* Apply animation to this element */
 animation: scroll-left 30s linear infinite;
}
/* Move it (define the animation) */
@keyframes scroll-left {
 0%   {
 transform: translateX(100%); 		
 }
 100% {
 transform: translateX(-100%); 
 }
}
</style>

<div class="scroll-left">
<h3>ព័ត៌មាន​ឌីជីថល និង ​កម្សាន្ត​ឈាន​មុខ​គេ​នៅប្រទេស​កម្ពុជា</h3>
</div>



  <nav class=" container-fluid navbar navbar-expand-lg  p-0  align-items-center sticky-top" style="background-color: #1E90ff;">
    <div class="container justify-content-start align-content-center align-items-center ">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse align-items-center align-items-center" id="navbarTogglerDemo01">


    <img src="admin/image/logo.png" style="height:6rem; width:6rem; border-radius:50%">


    <a class="navbar-brand" style="color:#ffffff;" href="<?php echo BASE_URL;?>"><i class="fa-solid fa-house"></i></a>
    
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php
        $post_data=$db->get_data("name,id","tbl_menu","status=1","od DESC","0,5");
        if($post_data!=0){
          foreach($post_data as $row){
            ?>
            <li class="nav-item p-2">
            <a class="nav-link" style="color:#ffffff" href="<?php echo BASE_URL;?>?<?php echo "menu_id=".$row[1]?>"><?php echo $row['0'] ?></a>
            </li>
            <?php
          }
        }
        ?> 
      </ul>  
      <a class="navbar-brand" style="color:#ffffff;" href="<?php echo BASE_URL;?>"><i class="fa-solid fa-search" id="search-icon"></i></a>
      <a class="navbar-brand" style="color:#ffffff;" href="login.php"><i class="fa-solid fa-user"></i></a>
    </div>
    </div>
  
  </nav>

  <div class="container mt-3">
        <div class="row">
          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 shadow bg-body-tertiary rounded">
           <?php
           if(isset($_GET['News_id'])){
            $news_id=$_GET['News_id'];
            $row=$db->get_one_record("*","tbl_news","id=".$news_id."");
              ?>
             <div class="row">
               <div class="col-xl-12 col-lg-12">
                 <p><?php echo $row[2]?></p>
                 <div class="view d-flex justify-content-between">
                  <div class="date-post"><?php echo $row[1]?></div>
                  <div class="viewed"><?php echo $row[10]?></div>
                 </div>
                 <div><?php echo $row[3]?></div>
               </div>
             </div>
             <?php
           }else
           {
            include('admin/action/title.php');
           }
           ?>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
          <div class="row mb-1">
          <span style="padding: 0px;margin-left:2%">ព័ត៌មានថ្មីៗ</span>
          </div>
          <?php
            $post_data=$db->get_data("*","tbl_news","status=1&&location=2","id DESC","0,100");
            if($post_data!=0){
              foreach($post_data as $row){
                ?>
              <div class="row mb-1">
              <div class="sub-img-box">
              <img src="admin\<?php echo $row[4]?>" alt="">
              </div>
              <div class="sub-des">
              <a href="#"><?php echo $row[2]?></a>
              <p><?php echo mb_substr(strip_tags($row[3]),0,30,"utf-8")?></p>
            </div>
            </div>
                <?php
              }
            }
            ?> 
            
          </div>
      </div>
  </div>
</div>










<style>
.footer .box-container{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(1rem, 1fr));
  gap: 1rem;
  margin-top:5rem;
  margin-left:10rem;
}
.footer .box-container .box h3{
  padding: 1rem 0;
  font-size: 1.5rem;
  color:blue;
}
.footer .box-container .box a{
  display:block;
  padding: 0rem 0;
  font-size: 1.2rem;
  color:grey;
}
.footer .box-container .box a:hover{
  color:#87cefa;
  text-decoration: underline;
}
.footer .creater{
  text-align:center;
  border-top:.1rem solid rgba(0,0,0,.1);
  font-size: 1rem;
  color:black;
  padding:.5rem;
  padding-top:1rem;
  margin-top:1rem;
}
.footer .creater span{
  color: blue;

}
</style>


    <!--footer section starts-->
    <section class="footer" id="footer">
            <div class="box-container">
                
                <div class="box">
                    <h3>ទីតាំង</h3>
                    <a href="#">ប្រទេសកម្ពុជា</a>
                    <a href="#">ប្រទេសថៃ</a>
                    <a href="#">ប្រទេសជប៉ុន</a>
                    <a href="#">សហរដ្ឋអាមេរិក</a>
                </div>

                <div class="box">
                    <h3>មាតិកា</h3>
                    <a href="#home">ទំព័រដើម</a>
                    <a href="#news">ព័ត៍មាន</a>
                    <a href="#">បច្ចេកវិទ្យា</a>
                    <a href="#">កីទ្បា</a>
                    <a href="#">កម្សាន្ដ</a>
                    
                </div>

                <div class="box">
                    <h3>ទំនាក់ទំនង</h3>
                    <a href="">+855 999 999</a>
                    <a href="#">+855 888 888</a> 
                </div>

                <div class="box">
                    <h3>បណ្ដាញសង្គម</h3>
                    <a href="#">facebook</a>
                    <a href="#">Instagram</a>
                    <a href="#">Telegram</a>
                    <a href="#">Gmail</a>
                </div>
            </div>

            <div class="creater">@Create By <span>Class E9 Students Study With Teacher Chim Bunthoeum At University Of Phnom Penh.</span></div>
        
        </section>

    <!--footer section starts-->


  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>