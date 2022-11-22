<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

/*if(!isset($user_id)){
   header('location:login.php');
}
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/aboutcamera.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet voluptatibus aut hic molestias, reiciendis natus fuga, cumque excepturi veniam ratione iure. Excepturi fugiat placeat iusto facere id officia assumenda temporibus?</p>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia corporis ratione saepe sed adipisci?</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Popular Camera</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/popular1.jpg" alt="">
         <p>EOS 80D มีช่องมองภาพอัจฉริยะครอบคลุมพื้นที่ในภาพ 100% พร้อมระบบออโต้โฟกัส 45 จุด cross-type ทั้งหมด ออโต้โฟกัสแบบ cross-type ได้ 27 จุดแม้ที่ขนาดรูรับแสง f/8 ถ่ายภาพต่อเนื่องได้สูงสุด 7 ภาพต่อวินาทีได้อย่างรวดเร็วและเงียบยิ่งขึ้น ถ่ายวิดีโอ Full HD 60p มีระบบออโต้โฟกัส Dual Pixel CMOS AF ช่วยในการเปลี่ยนระยะโฟกัสจากด้านหน้าไปยังฉากหลังของภาพได้อย่างรวดเร็วและง่ายดายแค่แตะบนหน้าจอแอลซีดี ใช้งานร่วมกับเลนส์ EF ได้หลากหลาย มี WiFi และ NFC ในตัวกล้องจึงเชื่อมต่ออุปกรณ์มือถือ สั่งการถ่ายภาพ และควบคุมการซูมจากระยะไกลได้ถึง 15 ระดับ ผ่านแอปพลิเคชั่น Canon Camera Connec</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Body canon eos 80d</h3>
      </div>

      <div class="box">
         <img src="images/popular2.jpg" alt="">
         <p>Nikon D750 BK SG มาพร้อมกับคุณสมบัติที่ทรงพลังจำนวนมากในตัวกล้องที่กะทัดรัดเหลือเชื่อ จึงเป็นเพื่อนคู่กายที่สมบูรณ์แบบสำหรับการท่องเที่ยวถ่ายภาพของคุณ ถึงจะเป็นกล้อง Nikon รูปแบบ FX ที่มีขนาดเล็กและน้ำหนักเบาที่สุด*1 แต่ก็ยังคงประสิทธิภาพการถ่ายภาพ ด้วยความละเอียด 24.3 ล้านพิกเซลที่น่าประทับใจ ระบบประมวลผลภาพ EXPEED 4 และความสามารถในการถ่ายภาพยนตร์ Full HD 1080/60p และคุณยังจะได้พบกับความสะดวกสบายที่มากยิ่งขึ้นด้วยจอภาพ LCD แบบปรับเอียงได้ รวมถึงฟังก์ชั่น Wi-Fi® ในตัวเพื่อให้คุณแชร์ได้ในทันที ด้วยคุณสมบัติต่างๆ ที่ทุกคนมองหาซึ่งรวมอยู่ในกล้องตัวเดียว Nikon D750 จึงเป็นกล้องที่คุณรอคอยอย่างแท้จริง</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Body nikon d750</h3>
      </div>

      <div class="box">
         <img src="images/popular3.jpg" alt="">
         <p>Canon EF70-200mm f/2.8L IS III USM ซึ่งเป็นรุ่นปรับปรุงจากเลนส์ซูมเทเลโฟโต้ที่มีชื่อเสียงที่สุดรุ่นหนึ่งของ Canon เลนส์รุ่นใหม่นี้มีการเคลือบแบบ ASC (Air Sphere Coating) ซึ่งลดแสงแฟลร์และแสงหลอกอย่างเห็นได้ชัด (เรื่องโดย: Makoto Suzuki (Digital Camera Watch)) ASC เพื่อลดแสงแฟลร์และแสงหลอกอย่างเห็นได้ชัด และการเคลือบฟลูออรีนเพื่อดูแลรักษาได้ง่ายขึ้น</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lens Canon EF 70-200mm f2.8L</h3>
      </div>

      <div class="box">
         <img src="images/popular4.jpg" alt="">
         <p> A7C เป็นกล้องดิจิตอลฟูลเฟรมแบบเปลี่ยนเลนส์ได้ที่มีขนาดเล็กและน้ำหนักเบาที่สุด มาพร้อมกับการป้องกันภาพสั่นไหวแบบออปติคอลในตัว ความก้าวหน้าในกลไกตัวเครื่องและการออกแบบโครงสร้างทำให้ประสิทธิภาพของกล้องฟูลเฟรมนั้นไร้ที่ติในขนาดและน้ำหนักแบบใหม่ที่สร้างมาสำหรับภาพนิ่งและการสรรค์สร้างเนื้อหาภาพยนตร์ที่ง่ายดายแต่ทรงพลัง</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sony A7C+Lens 28-60mm</h3>
      </div>

      <div class="box">
         <img src="images/popular5.jpg" alt="">
         <p>OSD M1: 2 (รุ่น F051) ขนาด 24 มม. F / 2.8 Diii ทำให้สามารถถ่ายภาพระยะใกล้ได้ด้วยเลนส์มุมกว้าง เลนส์นี้เป็นกุญแจสำคัญในจักรวาลอันน่าตื่นเต้นของการถ่ายภาพมุมกว้าง มุมมองภาพมุมกว้างที่ได้รับจากทางยาวโฟกัส 24 มม. ทำให้ทัศนียภาพที่กว้างใหญ่ทิวทัศน์และทิวทัศน์ในเมือง มันเป็นเลนส์มุมกว้างอเนกประสงค์ที่สมบูรณ์แบบ! เลนส์อเนกประสงค์นี้เหมาะกับสไตล์การถ่ายภาพที่หลากหลายรวมถึงสแนปช็อตอย่างตรงไปตรงมา เนื่องจากมีน้ำหนักเบาและกระทัดรัดพกพาสะดวก และเป็นประโยชน์อย่างมากเมื่อคุณต้องเก็บของเบา ๆ หรือสำหรับการผจญภัยการถ่ายภาพตลอดทั้งวัน</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Tamron 24mm f2.8
</h3>
      </div>

      <div class="box">
         <img src="images/popular6.jpg" alt="">
         <p>แคนนอนเปิดตัว EOS R เป็นครั้งแรกกับกล้องมิเรอร์เรสฟูลเฟรมถอดเปลี่ยนเลนส์ได้ ที่มาพร้อมช่องมองภาพอิเลกทรอนิกส์ (EVF) ในตัว ด้วยเทคโนโลยีเมาท์เลนส์ใหม่ล่าสุดที่ช่วยให้การสื่อสารระหว่างกล้องและเลนส์ทำได้อย่างรวดเร็ว และแม่นยำ ผสานการทำงานของชิปประมวลผลภาพทรงพลังรุ่นใหม่ DIGIC 8 มาพร้อมกับฟังก์ชั่น Digital Lens Optimiser ในตัวกล้อง รวมถึงระบบป้องกันภาพสั่นไหวแบบ Dual Sensing IS และ Combination IS ซึ่งช่วยชดเชยการสั่นไหวได้มากถึง 5 สต็อป สำหรับภาพนิ่งความละเอียด 30.3 ล้านพิเซล และภาพเคลื่อนไหวความละเอียด 4K UHD</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Canon EOS R+RF24-105mm f4L</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Our Teams</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>