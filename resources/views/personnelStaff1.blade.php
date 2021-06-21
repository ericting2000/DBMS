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
    box {
      height: 100%;
      width: 100%;
      overflow: auto;
    }

    .side {
      height: auto;
      width: 230px;
      border-right: 1px solid rgba(0, 0, 0, 0.1);
    }

    .modal-header {
      border-radius: 14px 14px 0 0;
      background-color: #003865;
      border-bottom: 0 none;
    }

    .modal-content {
      border-radius: 16px;
    }

    .modal-footer {
      border-top: 0 none;
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
      background: #ffffff;
      box-shadow: 0px 0px 11px 7px rgba(0, 0, 0, 0.04);
      padding: 40px;
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
            let password = getCookie("pswd") 
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
                document.getElementById("onboard").innerHTML=data.onBoardTime.replace(/-/g, ".");
                document.getElementById("address").innerHTML=data.address;
                let L = data.localPhone.slice(0, 2) + "-" + data.localPhone.slice(2,6) + "-" + data.localPhone.slice(6)
                document.getElementById("local").innerHTML=L;
                let C = data.cellPhone.slice(0, 4) + "-" + data.cellPhone.slice(4,7) + "-" + data.cellPhone.slice(7)
                document.getElementById("cell").innerHTML=C;
                document.getElementById("mail").innerHTML=data.email;
            }catch (err) {
                console.log(err);
            }

        }
    async function Modpassword() {
            let username = getCookie("user");
            let oldpassword = document.getElementById("oldpassword").value;
            let newpassword = document.getElementById("newpassword").value;
            let confirmnewpassword = document.getElementById("confirmnewpassword").value;
            console.log("舊密碼：" + oldpassword,typeof(oldpassword));
            console.log("新密碼：" + newpassword,typeof(newpassword));
            console.log("確認新密碼：" + confirmnewpassword,typeof(confirmnewpassword));

            if(newpassword.toString() !== confirmnewpassword.toString()){
              alert("新密碼與確認密碼不符，請重新輸入！")
              return;
            }
            try {
                const response = await fetch("/api/modifyPassword", {
                  
                    method: "POST",
                      headers:{ 'Content-Type': 'application/json'
                        },
                    body:JSON.stringify({"userId":username ,
                        "userPassword": oldpassword,
                      "newPassword": newpassword})
                        
                });
                const data = await response.json();
                console.log(data);
                alert("修改成功！");
                $('#passwordchange').modal('hide');
            } catch (err) {
                console.log(err);
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
          <div class="dropdown" >
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
            <img src="{{ asset('Logo.png') }}" alt="netflix" />
          </div>
        </div>
        <div class="sidebar">
          <ul class="menu">
            <a href=""
              ><li
                style="
                  background-color: rgba(108, 159, 200, 0.77);
                  color: white;
                "
              >
                個人資料總覽
              </li></a
            >
            <a href="./Staff2"><li>請假紀錄總覽</li></a>
            <a href="./Staff3">
              <li>個人請假系統</li>
            </a>
          </ul>
        </div>
      </nav>

      <content>
        <p style="font-size: 36px; padding: 80px 50px 50px">個人資料總覽</p>
        <div class="data">
          <div class="row">
            <div class="col-md-2">
              <img src="{{ asset('profile.png') }}" alt="" />
            </div>
            <div
              class="col-md-10:"
              style="font-size: 28px; padding: 45px 50px 90px"
              id="name"
            >
            </div>
          </div>

          <div class="row">
            <div class="col-md-9" style="color: rgba(0, 0, 0, 0.5)">ID</div>
            <div class="col-md-3" style="color: rgba(0, 0, 0, 0.5)">密碼</div>
            <div class="col-md-9" style="font-size: 14pt; padding-bottom: 15px" id="ID">            
            </div>
            <div class="col-md-3">
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
              >
                修改密碼
              </button>
            </div>
            <div class="col-md-9" style="color: rgba(0, 0, 0, 0.5)">性別</div>
            <div class="col-md-3" style="color: rgba(0, 0, 0, 0.5)">生日</div>
            <div class="col-md-9" style="font-size: 14pt; padding-bottom: 15px" id="gender">
            </div>
            <div class="col-md-3" style="font-size: 14pt; padding-bottom: 15px" id="birth">
            </div>
            <div class="col-md-9" style="color: rgba(0, 0, 0, 0.5)">職稱</div>
            <div class="col-md-3" style="color: rgba(0, 0, 0, 0.5)">
              到職日期
            </div>
            <div class="col-md-9" style="font-size: 14pt; padding-bottom: 15px" id="title">
            </div>
            <div class="col-md-3" style="font-size: 14pt; padding-bottom: 15px" id="onboard">
            </div>
            <div class="col-md-9" style="color: rgba(0, 0, 0, 0.5)">
              聯絡地址
            </div>
            <div class="col-md-3" style="color: rgba(0, 0, 0, 0.5)">
              市內電話
            </div>
            <div class="col-md-9" style="font-size: 14pt; padding-bottom: 15px" id="address">
            </div>
            <div class="col-md-3" style="font-size: 14pt; padding-bottom: 15px" id="local">
            </div>
            <div class="col-md-9" style="color: rgba(0, 0, 0, 0.5)">手機</div>
            <div class="col-md-3" style="color: rgba(0, 0, 0, 0.5)">
              電子信箱
            </div>
            <div class="col-md-9" style="font-size: 14pt; padding-bottom: 15px" id="cell">
            </div>
            <div class="col-md-3" style="font-size: 14pt; padding-bottom: 15px" id="mail">
            </div>
          </div>
        </div>
      </content>
    </box>

    <div
      class="modal fade"
      id="passwordchange"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              class="modal-title"
              id="exampleModalCenterTitle"
              style="color: white; font-weight: 400"
            >
              修改個人密碼
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
              style="color: white; font-size: 30px"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="input-group mb-3">
              <input
                type="password"
                class="form-control"
                placeholder="請輸入舊密碼"
                aria-label="oldpassword"
                aria-describedby="basic-addon1"
                id="oldpassword"
              />
            </div>

            <div class="input-group mb-3">
              <input
                type="password"
                class="form-control"
                placeholder="請輸入新密碼"
                aria-label="newpassword"
                aria-describedby="basic-addon1"
                id="newpassword"
              />
            </div>

            <div class="input-group mb-3">
              <input
                type="password"
                class="form-control"
                placeholder="請再次輸入新密碼"
                aria-label="newpassword"
                aria-describedby="basic-addon1"
                id="confirmnewpassword"
              />
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-primary"
              data-dismiss="modal"
              style="
                background-color: #003865;
                border-style: none;
                border-radius: 10px;
              "
              onclick="Modpassword()"
            >
              確認修改
            </button>
          </div>
        </div>
      </div>
    </div>
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
    <script>
          $(document).ready(function() {
            $("#passwordchange").on("hidden.bs.modal", function () {
             $(".modal-body input").val("");
            });
          });
      
         </script>
  </body>
</html>
