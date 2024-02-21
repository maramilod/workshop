
<?php
$host = "localhost";
$user = "atwelolc_root";
$pass = "maram2003@";
$db_name = "atwelolc_workshop";
$port = "3306";


$conn = new mysqli($host, $user, $pass, $db_name, $port);

if (!$conn) {
    
    echo "connection faild!";
}

if (isset($_POST["yes"])){
    $y = $_POST["yes"];
    $sql = "INSERT INTO `yes` (`Yes`) VALUES ($y);";

mysqli_query($conn, $sql);}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

    </head> 
    <body dir="rtl">
        
<?php
    $sql = "SELECT * FROM `yes`;";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    $num = $row['ID'];
}?>

 <center>
<div class="comment" >
  
<div class="welcome">
    <h1>
      نشكر حماسك للحضور انت الشخص رقم <?php echo "$num" ?>  
    </h1></div>
    <p>في هذه الفترة الدراسية قد ينتاب الكثير منكم تساؤلات حول المجالات المختلفة ما المستقبل الوظيفي لها كيف ستكون الرحلة الدراسية وغيرها من الاسئلة المهمه التي يقف عند اجوبتها تحديد قرار مصيري نحن طلاب قسم هندسة البرمجيات بدعم من اساتذة القسم نرغب في مساعدتك لتصحيح الافكار الخاطئة والاجابة على جميع تساؤولاتك لتجد طريقك الصحيح فيما يلي بعض من الاسئلة السريعة التي قد تلفت انتباهك لجانب اخر من البرمجة لم تكن تعرفه </p>
   </div>
    <div class="quiz-app">
      <div class="quiz-info">
        <div class="category">Category: <span>هندسة البرمجيات</span></div>
        <div class="count">Questions Count: <span></span></div>
      </div>
      <div class="quiz-area"></div>
      <div class="answers-area"></div>
      <button class="submit-button">Submit Answer</button><div class="bullets">
        <div class="spans"></div><div class="countdown"></div>
      </div>
       <p>شارنا بجميع اسئلتك سيتم الاجابة عنها في ورشة العمل</p>
    <button class="btnLogin-popup" onclick="menutoggle()">شاركنا</button>
      
        
      <div class="results"></div>
    </div>



   
    </center>


   
 <!--------------- Login Wrapper --------------->
 <div class="wrapper">
      <span class="icon-close"><ion-icon name="close"></ion-icon></span>
      <div class="form-box login">
       <center> <h2> يمكنك كتابة اسئلتك وملاحظاتك هنا</h2></center>
        
        <form action="q.php" method="post">
          <div class="input-box">
          <div class="form-floating">
  <textarea class="form-control" name="comment" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2"></label>
</div>
          </div><br>
          <br>
          <div class="input-box">
          <select name="select" class="form-select" aria-label="Default select example">
  <option selected>المجال الذي ترغب به</option>
  <option value="c">هندسة البرمجيات</option>
  <option value="m">المدني</option>
  <option value="e">الاتصالات</option>
  <option value="d">المعماري</option>
  <option value="o">النفط</option>
</select>
          </div>
        
          
          <button type="sumbit" name="submit" class="btnn">مشاركة</button>
        </form>
      </div>
    </div>
  </div>
  <!-------x------- Wave Shape -------x------->
 




    <script src="main.js"></script>
  <script>
    

const wrapper = document.querySelector('.wrapper');
const iconClose = document.querySelector('.icon-close');
const btnP = document.querySelector('.btnLogin-popup');

btnP.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});
iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});

console.log(wrapper);
console.log(iconClose);
console.log(btnP);

var menulist = document.getElementById('menulist');
menulist.style.maxHeight = "0px";

function menutoggle() {
if(menulist.style.maxHeight == "0px") {
    menulist.style.maxHeight = "100vh";
}else {
    menulist.style.maxHeight = "0px";
}
}

    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body> 
</html>