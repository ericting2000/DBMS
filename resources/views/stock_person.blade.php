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
  <a href="./stock_person.html">個人資料總覽</a>
  <a href="./stock_data.html">股票資料總覽</a>
  <a href="./transaction_data.html">交易紀錄總覽</a>
  <a href="./transaction.html">股票交易系統</a>
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
    <button class="button">修改密碼</button>
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

</body>
</html>
