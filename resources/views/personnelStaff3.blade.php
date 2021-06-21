<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
    />

    <title></title>
  </head>

  <style>
    a {
      text-decoration: none;
      color: black;
    }

    a:hover {
      text-decoration: none;
    }

    header {
      height: 95px;
      background: #003865;

      filter: drop-shadow(0px 4px 5px rgba(0, 0, 0, 0.25));
    }

    html,
    body,
    box,
    content {
      height: 100%;
      width: 100%;
      overflow: hidden;
    }

    .side {
      height: auto;
      width: 230px;
      border-right: 1px solid rgba(0, 0, 0, 0.1);
    }

    .logo {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 230px;
    }

    .logo #netflix {
      margin: 0;
      padding: 25px 0;
    }

    .sidebar {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 230px;
    }

    .sidebar .menu {
      width: 100%;
      margin: 0;
      padding: 0;
    }

    .menu li {
      list-style: none;
      font-size: 18pt;
      font-weight: 400;
      padding: 10px 0px;
      text-align: center;
    }

    .menu li:hover {
      background-color: rgba(108, 159, 200, 0.77);
      color: white;
      -o-transition: color 0.2s linear;
      -webkit-transition: color 0.2s linear;
      -moz-transition: color 0.2s linear;
      transition: color 0.2s linear;
      -o-transition: background-color 0.2s linear;
      -webkit-transition: background-color 0.2s linear;
      -moz-transition: background-color 0.2s linear;
      transition: background-color 0.2s linear;
    }

    .data {
      display: flex;
      background: #ffffff;
      box-shadow: 0px 0px 11px 7px rgba(0, 0, 0, 0.04);
      padding: 50px;
      margin-left: 55px;
      width: 90%;
    }
  </style>
  <script>
    function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for(var i = 0; i <ca.length; i++) {
              var c = ca[i];
              while (c.charAt(0) == ' ') {
                c = c.substring(1);
              }
              if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
              }
            }
          return "";
        }

        async function getdata() {
            document.getElementById("nametag").innerHTML = getCookie("name");
            let username = getCookie("user");
            let password = getCookie("pswd"); 
            try {
                const response = await fetch("/api/getUserInfo", {
                  
                    method: "POST",
                    headers:{ 'Content-Type': 'application/json'
                        },
                    body:JSON.stringify({"userId":username ,
                        "userPassword": password})
                        
                });
                const data = await response.json();
                if(data)
                  console.log(data);
                document.getElementById("name").innerHTML=data.name;
                document.getElementById("ID").innerHTML=data.id;
                if(data.gender === "male"){
                  document.getElementById("gender").innerHTML="男";
                }else{
                  document.getElementById("gender").innerHTML="女";
                }
                let B = data.birth.slice(0,4) + "." + data.birth.slice(4,6) + "." + data.birth.slice(6)
                document.getElementById("birth").innerHTML=B;
                document.getElementById("title").innerHTML=data.title;
            }catch (err) {
                console.log(err);
            }

        }
        async function makeleave(){
          document.getElementById("nametag").innerHTML = getCookie("name");
          let username = getCookie("user");
          let leavedateS = document.getElementById("inputs").value.toString();
          let leavedateE = document.getElementById("inpute").value.toString();
          let leavereason = document.getElementById("reason").value.toString();
          console.log(leavedateS);
          console.log(leavedateE);
          console.log(leavereason)
          if(leavedateS === "YYYY-MM-DD" || leavedateE === "YYYY-MM-DD"){
            alert("請完整填入日期！");
            return ;
          }
          if(leavereason === ""){
            alert("請填入請假類別！");
            return ;
          }
          leavedateS = leavedateS.substr(0,4) + leavedateS.substr(5,2) + leavedateS.substr(8,2);
          leavedateE = leavedateE.substr(0,4) + leavedateE.substr(5,2) + leavedateE.substr(8,2);
          console.log(leavedateS);
          console.log(leavedateE);
          try{
            const res = await fetch("/api/makeLeave",{
              method: "POST",
              headers:{ 'Content-Type': 'application/json'
                        },
              body:JSON.stringify({"userId":username ,
                        "leaveDateStart": leavedateS,
                        "leaveDateEnd": leavedateE,
                        "leaveReason": leavereason
                      })
            });
            const data = await res.json();
            if(data)
              console.log(data); 
              alert("成功送出！")
          }catch(err){
            console.log(err)
          }
        }
  </script>

  <body onload="getdata()">
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <p class="navbar-brand" style="color: white; margin-top: 20px">
              人事資料管理系統
            </p>
          </div>
          <div class="dropdown">
            <a
              class="btn btn-secondary dropdown-toggle"
              href="#"
              role="button"
              id="nametag"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              style="background-color: #003865; color: white; border: none"
            >
              登入的人
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="./Landing">登出</a>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <box style="display: flex">
      <nav class="side">
        <div class="logo">
          <div id="netflix">
            <img src="{{ asset('Logo.png') }}" alt="" />
          </div>
        </div>
        <div class="sidebar">
          <ul class="menu">
            <a href="./Staff1"><li>個人資料總覽</li></a>
            <a href="./Staff2"><li>請假紀錄總覽</li></a>
            <a href="">
              <li
                style="
                  background-color: rgba(108, 159, 200, 0.77);
                  color: white;
                "
              >
                個人請假系統
              </li>
            </a>
          </ul>
        </div>
      </nav>

      <content>
        <p style="font-size: 36px; padding: 80px 50px 50px">個人請假系統</p>
        <div class="data" style="display: block">
          <div class="row">
            <div
              class="col-md-12"
              style="font-size: 32px; padding-bottom: 20px"
              id="name"
            >
              
            </div>
          </div>
          <div class="row">
            <div class="col-md-9" style="color: rgba(0, 0, 0, 0.5)">ID</div>
            <div class="col-md-3" style="color: rgba(0, 0, 0, 0.5)">職稱</div>
            <div class="col-md-9" style="font-size: 14pt; padding-bottom: 15px" id="ID">
              
            </div>
            <div class="col-md-3" style="font-size: 14pt; padding-bottom: 15px" id="title">
            </div>
            <div class="col-md-9" style="color: rgba(0, 0, 0, 0.5)">性別</div>
            <div class="col-md-3" style="color: rgba(0, 0, 0, 0.5)">生日</div>
            <div class="col-md-9" style="font-size: 14pt; padding-bottom: 15px" id="gender">
            </div>
            <div class="col-md-3" style="font-size: 14pt; padding-bottom: 15px" id="birth">
            </div>
            <div class="col-md-9" style="color: rgba(0, 0, 0, 0.5)">
              請假日期
            </div>
            <div class="col-md-3" style="color: rgba(0, 0, 0, 0.5)">
              請假類別
            </div>
            <div class="col-md-2" style="padding-top: 5px">
              <div class="input-group-btn" for="txtDate">
                <input
                  type="text"
                  name="date"
                  class="form-control datepicker"
                  value="YYYY-MM-DD"
                  style="text-align: center"
                  id="inputs"
                />
                <span class="glyphicon glyphicon-calendar"></span>
              </div>
            </div>
            <div col-md-1 style="padding-top: 5px">
              <p style="font-size: 18pt; font-weight: 400">~</p>
            </div>
            <div class="col-md-2" style="padding-top: 5px">
              <div class="input-group-btn" for="txtDate">
                <input
                  type="text"
                  name="date"
                  class="form-control datepicker"
                  value="YYYY-MM-DD"
                  style="text-align: center"
                  id="inpute"
                />
                <span class="glyphicon glyphicon-calendar"></span>
              </div>
            </div>
            <div
              class="col offset-5"
              style="padding-top: 5px; padding-left: 0px; margin-right: 80px"
            >
              <select class="custom-select" id="reason">
                <option selected value="">請選擇</option>
                <option value="personal">事假</option>
                <option value="sick">病假</option>
                <option value="official">公假</option>
                <option value="breavement">喪假</option>
              </select>
            </div>
            <div class="col offset-9" style="padding-top: 30px">
              <button
                type="button"
                class="btn btn-primary"
                style="
                  background-color: #6c9fc8;
                  border-style: none;
                  color: white;
                  font-size: 14pt;
                  padding-bottom: 0;
                  padding-top: 0;
                  margin-bottom: 15px;
                "
                data-toggle="modal"
                data-target="#passwordchange"
                onclick="makeleave()"
              >
                確認送出
              </button>
              <!--測試用-->
              <script>
                const alertsend = () => alert('成功送出');
              </script>
            </div>
          </div>
        </div>
      </content>
    </box>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script>
      $('.datepicker').datepicker({
        format: 'yyyy.mm.dd',
      });
    </script>
  </body>
</html>
