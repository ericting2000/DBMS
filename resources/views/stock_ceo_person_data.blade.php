<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <title>Document</title>
<style>


.myDiv 
{
  position:absolute;
  background-color:#003865;
  height:95px;
  width:100%;
  filter: drop-shadow(0px 4px 5px rgba(0, 0, 0, 0.25));
  top:0px;
  left:0px;
}

.sidenav
{
  position:absolute;
  width:267px;
  height:929px;
  left:0px;
  top:251px;
}

.myDiv2 
{
  position:absolute;
  width:122px;
  height:122px;
  left:68px;
  top:113px;
  background: #C4C4C4;
  border-radius: 50%;
}

.myDiv3
{
  position: absolute;
  width: 1096px;
  height: 656px;
  left: 301px;
  top: 270px;
    box-shadow: 5px 5px 10px 4px #c4c4c4;
}

.myDiv4 
{
  width:133px;
  height:133px;
  position:relative;
  left:57px;
  top:35px;
  background: #C4C4C4;
  border-radius: 50%;
}

.sidenav a
{
  padding: 14px 10px 14px 59px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
}


.sidenav a:hover 
{
  color: #ffffff;
  background-color:rgba(108, 159, 200, 0.77);
}

.button
{
  position:relative;
  left:757px;
  top:25px;
  border: none;
  width: 118px;
  height: 30px;
  color: #ffffff;
  border-radius: 6px;
  text-align: center;
  cursor: pointer;
  display: block;
}

.button3
{
  position: absolute;
  left: 1316px;
  top: 36px;
  border: none;
  background: #003865;
  border-radius: 8px;
  font-size:24px;
  color:#ffffff;
  text-align: center;
  display: block;
  cursor: pointer;
}

.button {background-color:rgba(108, 159, 200, 0.77);;}


.modal 
{
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background: rgba(38, 38, 38, 0.35);
  backdrop-filter: blur(17px);
}

/* Modal Content */
.modal-content 
{
  position: relative;
  top:100px;
  left:100px;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  height:279px;
  width: 597px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s;
  border-radius:16px;
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close 
{
  position:relative;
  left:-20px;
  top:5px;
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus 
{
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header 
{
  position:relative;
  left:0px;
  top:-20px;
  width:597px;
  height:50px;
  background-color: #003865;
  border-radius: 16px 16px 0px 0px;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer 
{
  background-color: #ffffff;
  border-radius: 0px 0px 16px 16px;
  color: white;
}


</style>
</head>
<body>

<div class="myDiv">
  <p style="position:absolute; margin-left:54px; margin-top:31px; 
  margin-height:33px; 
  font-size:30px; color:#ffffff; line-height:35px; 
  font-family:Roboto">股東資料管理系統</p>
  <button class="button3">王小明</button>
</div>

<div class="myDiv2">
  <p><br></p>
  </div>

<div class="sidenav">
  <a href="./stock_ceo_data.html">股東資料總覽</a>
  <a href="./stock_ceo_edit.html">股東資料編輯</a>
  <a href="./stock_ceo_transaction_data.html">交易紀錄總覽</a>
  <a href="./stock_ceo_person_data.html">個人資料總覽</a>
  <a href="./stock_ceo_person_stock_data.html">個人股票總覽</a>
  <a href="./stock_ceo_person_transaction_data.html">個人交易紀錄</a>
  <a href="./stock_ceo_transaction.html">股票交易系統</a>
  <a href="#">系統異常報修</a>
</div>

<div class="main">
  <p style="position: relative; left: 307px;
  top: 150.5px; font-size:40px; font-family:Roboto; font-weight:1000;">個人資料總覽</p>
    <div class="myDiv3">
    <div class="myDiv4">
    <p style="position: relative; left: 169px; top: 48px; font-family: Roboto;
  font-style: normal; font-weight: normal; font-size: 38px; font-weight:700;
    line-height: 45px; color: #000000;">張迪西</p>
    <p style="position: relative; left: 293px; top: -15px; font-family: Roboto;
  font-size: 18px; line-height: 21px;
  color: rgba(0, 0, 0, 0.5);">股東</p>
    <p style="position: relative; left: 12px; top: 28px; font-family: Roboto;
  font-size: 18px; line-height: 21px; 
  color: rgba(0, 0, 0, 0.5);">股東ID</p>
    <p style="position: relative; left: 12px; top: 10px; font-family: Roboto;
  font-size: 22px; line-height: 21px; 
  color: #000000;">xxxxx</p>
    <p style="position: relative; left: 12px; top: 24px; font-family: Roboto;
  font-size: 18px; line-height: 21px; color: rgba(0, 0, 0, 0.5);">性別</p>
    <p style="position: relative; left: 12px; top: 10px; font-family: Roboto;
  font-size: 22px; line-height: 26px; 
  color: #000000;">男</p>
    <p style="position: relative; left: 12px; top: 25px; font-family: Roboto;
  font-size: 18px; line-height: 21px; color: rgba(0, 0, 0, 0.5);">聯絡地址</p>
    <p style="position: relative; left: 12px; top: 10px; font-family: Roboto;
  font-size: 22px; line-height: 21px; 
  color: #000000;">xxxxx</p>
    <p style="position: relative; left: 12px; top:29px; font-family: Roboto;
  font-size: 18px; line-height: 21px; color: rgba(0, 0, 0, 0.5);">股票張數</p>
    <p style="position: relative; left: 12px; top: 10px; font-family: Roboto;
  font-size: 22px; line-height: 21px; 
  color: #000000;">2</p>
    <p style="position: relative; left: 12px; top:24px; font-family: Roboto;
  font-size: 18px; line-height: 21px; color: rgba(0, 0, 0, 0.5);">持股總數</p>
    <p style="position: relative; left: 12px; top: 10px; font-family: Roboto;
  font-size: 22px; line-height: 21px; 
  color: #000000;">24</p>
  </div>
    <p style="position: relative; left:757px; top:35px; font-family: Roboto;
  font-size: 18px; line-height: 21px; color: rgba(0, 0, 0, 0.5);">密碼</p>
    <button class="button" id="modify">修改密碼</button>
    <p style="position: relative; left:757px; top:23px; font-family: Roboto;
  font-size: 18px; line-height: 21px; color: rgba(0, 0, 0, 0.5);">生日</p>
    <p style="position: relative; left:757px; top: 8px; font-family: Roboto;
  font-size: 22px; line-height: 21px; 
  color: #000000;">xxxxxxxx</p>
    <p style="position: relative; left:757px; top:22px; font-family: Roboto;
  font-size: 18px; line-height: 21px; color: rgba(0, 0, 0, 0.5);">電話</p>
    <p style="position: relative; left:757px; top: 10px; font-family: Roboto;
  font-size: 22px; line-height: 21px; 
  color: #000000;">09xxxxxxxx</p>
    <p style="position: relative; left:757px; top:20px; font-family: Roboto;
  font-size: 18px; line-height: 21px; color: rgba(0, 0, 0, 0.5);">零股數量</p>
     <p style="position: relative; left:757px; top: 10px; font-family: Roboto;
  font-size: 22px; line-height: 21px; 
  color: #000000;">80</p>
  </div>
</div>


  
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <p style="position:relative; top:12px;left:24px; font-size:20px;     font-family:Roboto;">修改個人密碼</p>
    </div>
    <div class="modal-body">
       <input type="text" id="fname" style="position:relative;         left:55px; top:45px;border: 1px solid #C4C4C4;
      box-sizing: border-box;border-radius: 5px;
            width:479px;" placeholder="請輸入舊密碼">
       <input type="text" id="fname" style="position:relative;         left:55px; top:60px;border: 1px solid #C4C4C4;
      box-sizing: border-box;border-radius: 5px;
            width:479px;" placeholder="請輸入新密碼">
        <input type="text" id="fname" style="position:relative;          left:55px; top:75px;border: 1px solid #C4C4C4;
      box-sizing: border-box;border-radius: 5px;
            width:479px;" placeholder="請再次輸入新密碼">
        <button style="position: relative; left: -28px;
    top: 125px;width: 79px;height: 27px;color:#ffffff;
    background: #003865; border-radius: 5px;" id="confirm">
        確認修改</button>
     </div>
    <div class="modal-footer">
    </div>
</div></div>
 


<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("modify"); 

var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementById("confirm");
btn.onclick = function() 
{
  modal.style.display = "block";
}

span.onclick = function() 
{
  modal.style.display = "none";
}

span2.onclick = function() 
{
  modal.style.display = "none";
}

window.onclick = function(event) 
{
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
</html>
