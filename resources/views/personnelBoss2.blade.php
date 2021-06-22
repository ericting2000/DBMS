<!DOCTYPE blade.php>
<blade.php lang="en">
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

    blade.php,
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
      justify-content: center;
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
    .row .col-md-12:hover {
      background-color: #003865 !important;
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
    .row .col-md-12 #p1,
    #p2,
    #p3 {
      width: 25%;
      margin: 0;
    }
    .row .col-md-12 #p4 {
      width: 25%;
      margin: 0;
    }
  </style>
  <script>
    let response = new Object;
    let data = new Object;
    async function add(){


    }
    async function save(){
      
    }
    function wipe(){
     
    }
    function sdata(data_filter){
      for(let i = 0; i < data_filter.length; i++){
          if(i == 0)
            document.getElementById("personneldata").innerHTML ="";
          //if()
          var row = "<a href='#detail' data-toggle='modal' data-target='#detail' id=" + i + "><div class='row'>"

          row += "<div class='col-md-12' style='background-color: rgba(235, 235, 235, 0.63);text-align: center;padding: 5px 0;display: flex;' >"
          row += "<p id='p1'>"+ data_filter[i].name +"</p>"
          let gen = data_filter[i].gender;
          if(gen === "male")
            gen = "男";
          if(gen === "female")
            gen = "女";
          row +=  "<p id='p2'>" + gen + "</p>"
          let birth = data_filter[i].birth.slice(0,4) + "." + data_filter[i].birth.slice(4,6) + "." + data_filter[i].birth.slice(6);
          row += "<p id='p3'>" + birth + "</p>"
          row += "<p id='p4'>" + data_filter[i].title + "</p>"
          row += "</div></div></a>"
          console.log(row);
          document.getElementById("personneldata").innerHTML += row;
          document.getElementById("name").value=data_filter[i].name;
          document.getElementById("ID").value=data_filter[i].id;
          document.getElementById("password").value=data_filter[i].password;
          let B = data_filter[i].birth.slice(0,4) + "." + data_filter[i].birth.slice(4,6) + "." + data_filter[i].birth.slice(6)
          document.getElementById("birth").value=B;
          document.getElementById("title").value=data_filter[i].title;
          document.getElementById("onboard").innerHTML=data_filter[i].onBoardTime.replace(/-/g, ".");
          document.getElementById("address").value=data_filter[i].address;
          let L = data_filter[i].localPhone.slice(0, 2) + "-" + data_filter[i].localPhone.slice(2,6) + "-" + data_filter[i].localPhone.slice(6)
          document.getElementById("local").value=L;
          let C = data_filter[i].cellPhone.slice(0, 4) + "-" + data_filter[i].cellPhone.slice(4,7) + "-" + data_filter[i].cellPhone.slice(7)
          document.getElementById("cell").value=C;
          document.getElementById("mail").value=data_filter[i].email;
          console.log("modaldeail_activate")
        }
        
    }
    function threshold_g(data, input){
      return data.filter( data => data.gender === input);
    }
    function threshold_n(data, input){
      input = input[0].toUpperCase() + input.slice(1)
      return data.filter( data => data.name === input);
    }
    function threshold_b(data, input){
      return data.filter( data => data.birth === input);
    }
    function threshold_t(data, input){
      input = input.toUpperCase();
      return data.filter( data => data.title === input);
    }
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
      try{
        response = await fetch("/api/getEmployeeInfo",{
          method: "POST",
          headers:{ 'Content-Type': 'application/json'
                  },
          body:JSON.stringify({"userId":username ,
                        "userPassword": password})
        });
        data = await response.json();
        for(let i = 0; i < data.length; i++){
          var row = "<a href='#detail' data-toggle='modal' data-target='#detail' id=" + i + " onclick='modaldetail(" + i + ")'><div class='row'>"

          row += "<div class='col-md-12' style='background-color: rgba(235, 235, 235, 0.63);text-align: center;padding: 5px 0;display: flex;' >"
          row += "<p id='p1'>"+ data[i].name +"</p>"
          let gen = data[i].gender;
          if(gen === "male")
            gen = "男";
          if(gen === "female")
            gen = "女";
          row +=  "<p id='p2'>" + gen + "</p>"
          let birth = data[i].birth.slice(0,4) + "." + data[i].birth.slice(4,6) + "." + data[i].birth.slice(6);
          row += "<p id='p3'>" + birth + "</p>"
          row += "<p id='p4'>" + data[i].title + "</p>"
          row += "</div></div></a>"
          console.log(row);
          document.getElementById("personneldata").innerHTML += row;
        }
      }catch(err){
        console.log(err)
      }
    }

    function search(){
      let input = document.getElementById("sinput").value;
      if(input === ""){
        document.getElementById("personneldata").innerHTML ="";
        getdata();
        return;
      }
      let data_filter
      console.log(input);
      if(input === "男" || input === "女"){
        if(input === "男")
        input = "male"
        if(input === "女")
        input = "female"
        data_filter = threshold_g(data, input);
        sdata(data_filter);
      }
      else{
        data_filter = threshold_b(data, input);
        if(data_filter !== {})
          sdata(data_filter);
        data_filter = threshold_n(data, input);
        if(data_filter !== {})
          sdata(data_filter);
        data_filter = threshold_t(data, input);
        if(data_filter !== {})
          sdata(data_filter);
        
      }
      
    }
    function modaldetail(i){
      
        document.getElementById("name").value=data[i].name;
      document.getElementById("ID").value=data[i].id;
      //document.getElementById("password").value=data[i].password;
      let B = data[i].birth.slice(0,4) + "." + data[i].birth.slice(4,6) + "." + data[i].birth.slice(6)
      document.getElementById("birth").value=B;
      document.getElementById("title").value=data[i].title;
      document.getElementById("onboard").innerHTML=data[i].onBoardTime.replace(/-/g, ".");
      document.getElementById("address").value=data[i].address;
      let L = data[i].localPhone.slice(0, 2) + "-" + data[i].localPhone.slice(2,6) + "-" + data[i].localPhone.slice(6)
      document.getElementById("local").value=L;
      let C = data[i].cellPhone.slice(0, 4) + "-" + data[i].cellPhone.slice(4,7) + "-" + data[i].cellPhone.slice(7)
      document.getElementById("cell").value=C;
      document.getElementById("mail").value=data[i].email;
      console.log("modaldeail_activate")
      
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
            <a href="./Boss1"><li>人事資料總覽</li></a>
            <a href=""
              ><li
                style="
                  background-color: rgba(108, 159, 200, 0.77);
                  color: white;
                "
              >
                人事資料編輯
              </li></a
            >
            <a href="./Boss3"><li>請假紀錄總覽</li></a>
            <a href="./Boss4"><li>個人資料總覽</li></a>
            <a href="./Boss5"><li>個人請假紀錄</li></a>
            <a href="./Boss6">
              <li>個人請假系統</li>
            </a>
            <a href="./Boss7"><li>系統異常報修</li></a>
          </ul>
        </div>
      </nav>

      <content>
        <p style="font-size: 36px; padding: 80px 50px 50px">人事資料編輯</p>
        <div class="data" style="display: block;">
          <div
            class="search"
            style="display: flex; padding-bottom: 10px; margin-left: -15px"
          >
            <input
              type="text"
              class="form-control"
              placeholder="關鍵字搜尋(姓名、性別、生日八碼、職稱)"
              aria-label="newpassword"
              aria-describedby="basic-addon1"
              style="width: 80%"
              id="sinput"
            />
            <button
              type="button"
              class="btn btn-primary"
              style="
                background-color: #003865;
                border-style: none;
                color: white;
                font-size: 14pt;
                margin-left: 10px;
                padding: 5px 18px;
              "
              onclick="search()"
            >
              搜尋
            </button>
            <button
              type="button"
              class="btn btn-primary"
              style="
                background-color: #003865;
                border-style: none;
                color: white;
                font-size: 14pt;
                margin-left: 10px;
                padding: 5px 18px;
              "
              data-toggle="modal"
              data-target="#newperson"
            >
              新增
            </button>
          </div>

          <div class="row">
            <div
              class="col-md-3"
              style="
                background-color: rgba(108, 159, 200, 0.77);
                text-align: center;
                padding: 5px 0;
              "
            >
              員工姓名
            </div>
            <div
              class="col-md-3"
              style="
                background-color: rgba(108, 159, 200, 0.77);
                text-align: center;
                padding: 5px 0;
              "
            >
              性別
            </div>
            <div
              class="col-md-3"
              style="
                background-color: rgba(108, 159, 200, 0.77);
                text-align: center;
                padding: 5px 0;
              "
            >
              生日
            </div>
            <div
              class="col-md-3"
              style="
                background-color: rgba(108, 159, 200, 0.77);
                text-align: center;
                padding: 5px 0;
              "
            >
              職稱
            </div>
          </div>
          <div id="personneldata">

          </div>
        </div>
      </content>
    </box>
    <!--Modal detail-->
    <div
      class="modal fade bd-example-modal-lg"
      id="detail"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              class="modal-title"
              id="exampleModalCenterTitle"
              style="color: white; font-weight: 400"
            >
              人事資料編輯
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
            <div class="row">
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">姓名</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">職稱</div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <input
                  type="text"
                  class="form-control"
                  value=""
                  style="width: 70%"
                  id="name"
                />
              </div>
              <div class="col-md-5" >
                <select class="custom-select" value="" id="title">
                  <option value="STAFF">員工</option>
                  <option value="MANAGER">主管</option>
                  <option value="CEO">老闆</option>
                   <option value="HR">人資</option>
                </select>
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">ID</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">密碼</div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <input
                  type="text"
                  class="form-control"
                  value=""
                  style="width: 70%"
                  id="ID"
                />
              </div>
              <div
                class="col-md-5"
                style="font-size: 14pt; padding-bottom: 15px"
              >
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
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">性別</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">生日</div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <select class="custom-select" value="" style="width: 70%" id="gender">
                  <option value="male">男</option>
                  <option value="female">女</option>
                </select>
              </div>
              <div
                class="col-md-5"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <div class="input-group-btn" for="txtDate">
                  <input
                    type="text"
                    name="date"
                    class="form-control datepicker"
                    value=""
                    style="text-align: center"
                    id="birth"
                  />
                  <span class="glyphicon glyphicon-calendar"></span>
                </div>
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">
                電子信箱
              </div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">
                到職日期
              </div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <input
                  type="text"
                  class="form-control"
                  value=""
                  style="width: 70%"
                  id="mail"
                />
              </div>
              <div
                class="col-md-5"
                style="font-size: 14pt; padding-bottom: 15px"
                id="onboard"
              >
                
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">
                聯絡地址
              </div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">
                市內電話
              </div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <input
                  type="text"
                  class="form-control"
                  value=""
                  style="width: 70%"
                  id="address"
                />
              </div>
              <div
                class="col-md-5"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <input
                  type="text"
                  class="form-control"
                  value=""
                  style="width: 100%"
                  id="local"
                />
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">手機</div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <input
                  type="text"
                  class="form-control"
                  value=""
                  style="width: 70%"
                  id="cell"
                />
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-primary"
              style="
                background-color: #003865;
                border-style: none;
                padding: 6px 20px;
              "
              onclick=""
            >
              刪除
            </button>

            <button
              type="button"
              class="btn btn-primary"
              style="
                background-color: #003865;
                border-style: none;
                padding: 6px 20px;
              "
              onclick="save()"
            >
              儲存
            </button>
          </div>
        </div>
      </div>
    </div>

    <!--changepassword-->
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
    <!--Modal newperson-->
    <div
      class="modal fade bd-example-modal-lg"
      id="newperson"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              class="modal-title"
              id="exampleModalCenterTitle"
              style="color: white; font-weight: 400"
            >
              新增人事資料
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
            <div class="row">
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">姓名</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">職稱</div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <input
                  type="text"
                  class="form-control"
                  value=""
                  style="width: 70%"
                  id="namen"
                />
              </div>
              <div class="col-md-5" >
                <select class="custom-select" value="請選擇" id="titlen">
                  <option value="STAFF">員工</option>
                  <option value="MANAGER">主管</option>
                  <option value="CEO">老闆</option>
                  <option value="HR">人資</option>
                </select>
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">ID</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">密碼</div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <input
                  type="text"
                  class="form-control"
                  value=""
                  style="width: 70%"
                  id="IDn"
                />
              </div>
              <div
                class="col-md-5"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <input
                  type="text"
                  class="form-control"
                  value=""
                  style="width: 100%"
                  id="passwordn"
                />
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">性別</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">生日</div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <select class="custom-select" value="請選擇" style="width: 70%" id="gendern">
                  <option value="male">男</option>
                  <option value="female">女</option>
                </select>
              </div>
              <div
                class="col-md-5"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <div class="input-group-btn" for="txtDate" >
                  <input
                    type="text"
                    name="date"
                    class="form-control datepicker"
                    value="YYYY-MM-DD"
                    style="text-align: center"
                    id="birthn"
                  />
                  <span class="glyphicon glyphicon-calendar"></span>
                </div>
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">
                電子信箱
              </div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">
                到職日期
              </div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <input
                  type="text"
                  class="form-control"
                  value=""
                  style="width: 70%"
                  id="mailn"
                />
              </div>
              <div
                class="col-md-5"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <div class="input-group-btn" for="txtDate" >
                  <input
                    type="text"
                    name="date"
                    class="form-control datepicker"
                    value="YYYY-MM-DD"
                    style="text-align: center"
                    id="onboardn"
                  />
                  <span class="glyphicon glyphicon-calendar"></span>
                </div>
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">
                聯絡地址
              </div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">
                市內電話
              </div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <input
                  type="text"
                  class="form-control"
                  value=""
                  style="width: 70%"
                  id="addressn"
                />
              </div>
              <div
                class="col-md-5"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <input
                  type="text"
                  class="form-control"
                  value=""
                  style="width: 100%"
                  id="localn"
                />
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">手機</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">
                公司
              </div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <input
                  type="text"
                  class="form-control"
                  value=""
                  style="width: 70%"
                  id="celln"
                />
              </div>
              <div
                class="col-md-5"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <input
                  type="text"
                  class="form-control"
                  value=""
                  style="width: 100%"
                  id="company"
                />
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-primary"
              style="
                background-color: #003865;
                border-style: none;
                padding: 6px 20px;
              "
              onclick="add()"
            >
              儲存新增
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
    <!---date picker-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    
    <script>
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
      });
    </script>
    <!-- modal show-->
    <script>
      $('a[href$="#detail"]').on('click', function () {
        $('#detail').modal('show');
      });
    </script>
  </body>
</blade.php>
