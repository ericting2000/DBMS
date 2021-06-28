<!DOCTYPE blade.php>
<blade.php lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Landing Page</title>
</head>

<style>

 header
 {
  left:0px;
  height: 95px;
  background: #003865;
  filter: drop-shadow(0px 4px 5px rgba(0, 0, 0, 0.25));
 }
 
 blade.php, body, box,content 
 {
  height: 100%;
    width: 100%;
    overflow: auto;
 }
 
 .mydiv2 
{
  width:122px;
  height:122px;
  left:68px;
  top:113px;
  background: #C4C4C4;
  border-radius: 50%;
}
 
 .side 
{
  width:267px;
    height: auto;
    border-right: 1px solid rgba(0, 0, 0, 0.1);
}

 
 .side_bar
 {
    width:100%;
  height: auto;
 }
 
 .side_bar a 
 {
    text-align:center;
    list-style: none;
    font-size: 24px;
    font-weight: 400;
    display:block;
    line-height: 59px;
    color:#000000;
 }
 a:hover
 {
    color:#ffffff;
    background-color: rgba(108, 159, 200, 0.77);
 }
 
 d
 {
    color:#000000;
    background-color: rgba(235, 235, 235, 0.63);
 }
 d:hover
 {
    color:#ffffff;
    background-color: #003865;
 }

 .mydiv3
 {
  position:relative;
  left:307px;
  top:-500px;
    font-family: Roboto;
  font-style: normal; 
  font-weight: 600; 
  font-size: 40px; 
  line-height: 47px;
  color: #000000;
 }
 
 .searchbox
 {
  width: 679px;
  height: 32px;
  position:relative;
  left: 38px;
  top: 28px;
  background: #FFFFFF;
  border: 1px solid #3E3A39;
  box-sizing: border-box;
  border-radius: 6px;
 }
 
 .mydiv4
 {
  position: relative;
  left: 307px;
  top: -460px;
  width: 1096px;
  height: 494px;
  background: #FFFFFF;
  box-shadow: 0px 0px 11px 7px rgba(0, 0, 0, 0.04);
 }
 
 .sbutton
 {
  position: relative;
    left: 750px;
  top: -4px;
  width: 91px;
  height: 32px;
  background: rgba(0, 56, 101, 0.86);
  border-radius: 6px;
    color:#ffffff;
    font-size:18px;
    line-height:21px;
    font-family:Roboto;
    border:none;
    cursor:pointer;
    display:block;
    text-align:center;
 }
 
 .col-md-12, #p1, #p2, #p3,#p4 
 {
      width: 25%;
      margin: 0;
 }
 
 .modal-header 
 {
  background: #003865;
  border-radius: 16px 16px 0px 0px;
    border-bottom: 0 none;
    width: 730px;
  height: 50px;
 }
 
.modal-body 
{
  position:relative;
    left:372px;
    top:250px;
  border-radius: 16px;
    width:730px;
    height:403px;
    item-align:center;
    background: #ffffff;
}

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

.dropdown 
{
  float: left;
  overflow: auto;
  position:relative;
  left:1316px;
}


.dropdown, .dropbtn 
{
  font-size: 24px;  
  border: none;
  outline: none;
  color: white;
  background-color: #003865;
  font-family: Roboto;
  margin: 0;
}

.dropdown-content 
{
  position:relative;
  display: none;
  background-color: #ffffff;
  color:#000000;
  z-index: 1;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content op
{
  float: none;
  color: #000000;
  text-decoration: none;
  display: block;
  text-align: center;
  font-size:20px;
  line-height:36px;
}

.dropdown-content:hover
{
  background-color: #f0f0f0;
}

.dropdown:hover .dropdown-content 
{
  display: block;
}

</style>

<script>
let data = new Object;
let response = new Object;


function formData(inputData)
{
  for(let i = 0; i < inputData.length; i++)
  {
    if(i == 0)
      document.getElementById("stockAllData").innerHTML = "";

    var row = "<d href='#detail'> + <d class='row' id="mydata+i"> style='position:relative; top:23px; left:48px; width:995px;'>"
    
    row += "<div class='col-md-12' style='text-align: center; padding: 5px 0px; font-size:16px; display:flex;'>"
    
    row += "<p id='p1'>" + inputData[i].name + "</p>"

    let gen = inputData[i].gender;

    if( gen === male )
      gen = "男";
    else if( gen === female )
      gen = "女";

    row +=  "<p id='p2'>" + gen + "</p>"

    let birth = inputData[i].birth.slice( 0 , 4 ) + "." inputData[i].birth.slice( 4 , 6 ) + "." inputData[i],birth.slice( 6 );

    row += "<p id='p3'>" + birth + "</p>"
    row += "<p id='p4'>" + inputData[i].id + "</p>"
    row += "</div></d></d>"
    console.log(row);

    getElementById("stockAllData").innerHTML += row;
    getElementById("Id").innerHTML = inputData[i].id;
    getElementById("Name").innerHTML = inputData[i].name;
    getElementById("Birth").innerHTML = inputData[i].birth.slice( 0 , 4 ) + "." + inputData[i].birth.slice( 4 , 6 ) + "." + inputData[i].birth.slice( 6 );
    if( inputData[i].gender === "male" )
      getElementById("Gender").innerHTML = "男"
    else if( inputData[i].gender === "female" )
      getElementById("Gender").innerHTML = "女"

    getElementById("Title").innerHTML = inputData[i].title;
    getElementById("phoneNumber").innerHTML = inputData[i].phoneNumber;
    getElementById("Address").innerHTML = inputData[i].address;
    getElementById("Share").innerHTML = inputData[i].share;
    getElementById("Lot").innerHTML = inputData[i].lot;
    getElementById("Amount").innerHTML = inputData[i].lot + inputData[i].share * 1000;
    console.log("formed data");
  }
}

function getCookie(cname) 
{
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) 
  {
    let c = ca[i];
    while (c.charAt(0) == ' ') 
    {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) 
    {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

async function getData()
{
  document.getElementById("name2").innerHTML = getCookie("name");
  let username = getCookie("user");
  let password = getCookie("pwd");
  try
  {
    response = await fetch("/api/getStockHolderInfo" , {
      method : "POST", 
      header : 
      {
        'Content-type' : 'application/json'
      } , 
      body : JSON.stringfy("userId" : username , "userPassword" : password )
    });
    data = await response.json();
    for( let i = 0; i < data.length; i++ )
    {
      var row = "<d href='#detail'> + <d class='row' id="mydata+i" onclick='modaldetail(" + i + ")'> style='position:relative; top:23px; left:48px; width:995px;'>"
      row += "<div class='col-md-12' style='text-align: center; padding: 5px 0px; font-size:16px; display:flex;'>"
      row += "<p id='p1'>" + data[i].name + "</p>"      
      let gen = data[i].gender;
      if( gen === "male" )
        gen = "男"
      else if( gen === "female" )
        gen = "女"
      row +=  "<p id='p2'>" + gen + "</p>"

      let birth = inputData[i].birth.slice( 0 , 4 ) + "." inputData[i].birth.slice( 4 , 6 ) + "." inputData[i],birth.slice( 6 );
      row += "<p id='p3'>" + birth + "</p>"
      row += "<p id='p4'>" + data[i].id + "</p>"
      row += "</div></d></d>"
      console.log(row);
      document.getElementById("stockAllData").innerHTML += row;
    }
  }
  catch(error)
  {
    console.log(error);
  }
}

function modalDetail(i)
{
  document.getElementById("Name").innerHTML = data[i].name;
  document.getElementById("Id").innerHTML = data[i].id;
  document.getElementById("Birth").innerHTML = data[i].birth;
  document.getElementById("phoneNumber").innerHTML = data[i].phoneNumber;
  document.getElementById("Address").innerHTML = data[i].address;
  document.getElementById("Share").innerHTML = data[i].share;
  document.getElementById("lot").innerHTML = data[i].lot;
  document.getElementById("Amount").innerHTML = data[i].lot + data[i].share * 1000;
  console.log("modal_detail_get");
}

</script>

<body onload="getdata()">
<header>

<p style="position:relative;top: 31px; left:54px;font-family: Roboto; font-style: normal; font-weight: normal; font-size: 30px; line-height: 35px; color: #FFFFFF;">
股東資料管理系統</p>

<div class="dropdown">
    <button class="dropbtn">登入的人
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <op href="#" style="cursor:pointer;">登出</op>
    </div>
  </div> 

</header>


<div class="side">

<div class="mydiv2" style="position:relative; left:68px; top:18px;">
</div>
<div class="side_bar">
<a href="./stock_ceo_data.html" style="position:relative; top:31px;">股東資料總覽</a>
<a href="./stock_ceo_edit.html" style="position:relative; top:31px;">股東資料編輯</a>
<a href="./stock_ceo_transaction_data.html" style="position:relative; top:31px;">交易紀錄總覽</a>
<a href="./stock_ceo_person_data.html" style="position:relative; top:31px;">個人資料總覽</a>
<a href="#" style="position:relative; top:31px;">個人股票總覽</a>
<a href="./stock_ceo_person_transaction_data.html" style="position:relative; top:31px;">個人交易紀錄</a>
<a href="./stock_ceo_transaction.html" style="position:relative; top:31px;">股票交易系統</a>
<a href="#" style="position:relative; top:31px;">系統異常報修</a>
</div>
<div class="mydiv3">股東資料總覽</div>
</div>
<div class="mydiv4">
<input class="searchbox" placeholder="關鍵字搜尋(姓名、生日、電話.........)"
style="padding: 6px 17px 7px;">
<button class="sbutton">搜尋</button>
<div class="row" style="position:relative; top:23px; left:48px; width:995px;">
<div class="col-md-3" style=
"background-color: rgba(108, 159, 200, 0.77); text-align: center;
 padding: 5px 0px; font-weight:600;">股東姓名
</div>
            <div
              class="col-md-3" style="background-color: rgba(108, 159, 200, 0.77); 
              text-align: center; padding: 5px 0px;font-weight:600;">
              性別
            </div>
            <div
              class="col-md-3" 
              style="background-color: rgba(108, 159, 200, 0.77); 
              text-align: center; padding: 5px 0px; font-weight:600;">
              生日
            </div>
            <div
              class="col-md-3" 
              style="background-color: rgba(108, 159, 200, 0.77); 
              text-align: center; padding: 5px 0px; font-weight:600;">
              ID
            </div>
          </div>

<div id = "stockAllData">
</div>
<div class="modal" id="myModal">
  <div class="modal-body">
      <div class="modal-header" style="position:relative; top:-16px; left:-16px;">
        <h style="color:#ffffff; font-family:Roboto;
            font-size:20px;">股東資料</h>
      <button type="button" class="close" data-dismiss="modal"
    aria-label="Close" style="color: white; font-size: 30px;      position:relative; top:-5px;">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="row">
      <div class="col-md-6" style="
    font-size: 18px; line-height: 21px;
        color: rgba(0, 0, 0, 0.5);">ID
      </div>
        <div class="col-md-6" style="font-family: Roboto;
    font-size: 18px; line-height: 21px;
        color: rgba(0, 0, 0, 0.5);">生日
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6" style="
    font-size: 18px; line-height: 21px; padding-top:10px;
        color:#000000;">S0003
      </div>
        <div class="col-md-6" style="
    font-size: 18px; line-height: 21px; padding-top:10px;
        color: #000000;">1998.02.14
      </div>
     </div>
        
     <div class="row">
      <div class="col-md-6" style="font-family: Roboto;
    font-size: 18px; line-height: 21px; padding-top:24px;
        color: rgba(0, 0, 0, 0.5);">性別
      </div>
        <div class="col-md-6" style="font-family: Roboto;
    font-size: 18px; line-height: 21px; padding-top:24px;
        color: rgba(0, 0, 0, 0.5);">電話
      </div>
     </div>
     
     <div class="row">
      <div class="col-md-6" style="font-family: Roboto;
    font-size: 18px; line-height: 21px; padding-top:10px;
        color: #000000">男
      </div>
        <div class="col-md-6" style="
    font-size: 18px; line-height: 21px; padding-top:10px;
        color: #000000;">0988-XXX-XXX
      </div>
     </div>
     
     <div class="row">
      <div class="col-md-6" style="
    font-size: 18px; line-height: 21px;padding-top:24px;
        color: rgba(0, 0, 0, 0.5);">聯絡地址
      </div>
        <div class="col-md-6" style="font-family: Roboto;
    font-size: 18px; line-height: 21px;padding-top:24px;
        color: rgba(0, 0, 0, 0.5);">股票張數
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6" style="
    font-size: 18px; line-height: 21px; padding-top:10px;
        color:#000000;">XXXXXXXXXXXXXXXXXXXXXXXXXXXX
      </div>
        <div class="col-md-6" style="
    font-size: 18px; line-height: 21px; padding-top:10px;
        color: #000000;">2
      </div>
     </div>
     
     <div class="row">
      <div class="col-md-6" style="
    font-size: 18px; line-height: 21px;padding-top:24px;
        color: rgba(0, 0, 0, 0.5);">零股數量
      </div>
        <div class="col-md-6" style="font-family: Roboto;
    font-size: 18px; line-height: 21px;padding-top:24px;
        color: rgba(0, 0, 0, 0.5);">持股總數(股)
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6" style="
    font-size: 18px; line-height: 21px; padding-top:10px;
        color:#000000;">80
      </div>
        <div class="col-md-6" style="
    font-size: 18px; line-height: 21px; padding-top:10px;
        color: #000000;">2080
      </div>
     </div>

</div>
</div>

<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("mydata"); 
var btn2 = document.getElementById("mydata2"); 
var btn3 = document.getElementById("mydata3"); 
var btn4 = document.getElementById("mydata4"); 
var btn5 = document.getElementById("mydata5"); 
var btn6 = document.getElementById("mydata6"); 
var btn7 = document.getElementById("mydata7"); 
var btn8 = document.getElementById("mydata8"); 
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function()
{modal.style.display = "block";}
btn2.onclick = function()
{modal.style.display = "block";}
btn3.onclick = function()
{modal.style.display = "block";}
btn4.onclick = function()
{modal.style.display = "block";}
btn5.onclick = function()
{modal.style.display = "block";}
btn6.onclick = function()
{modal.style.display = "block";}
btn7.onclick = function()
{modal.style.display = "block";}
btn8.onclick = function()
{modal.style.display = "block";}
// When the user clicks on <span> (x), close the modal
span.onclick = function()
{
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) 
{
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>

</body>
</blade.php>