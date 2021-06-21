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

    <title></title>
  </head>

  <style>
    a {
      text-decoration: none;
      color: black;
      outline: none;
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
    #p3,
    #p4 {
      width: 25%;
      margin: 0;
    }
  </style>
  <script>
    let response = new Object;
    let data = new Object;
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
          document.getElementById("name").innerHTML=data_filter[i].name;
          document.getElementById("ID").innerHTML=data_filter[i].id;
          if(data_filter[i].gender === "male"){
            document.getElementById("gender").innerHTML="男";
          }else{
            document.getElementById("gender").innerHTML="女";
          }
          let B = data_filter[i].birth.slice(0,4) + "." + data_filter[i].birth.slice(4,6) + "." + data_filter[i].birth.slice(6)
          document.getElementById("birth").innerHTML=B;
          document.getElementById("title").innerHTML=data_filter[i].title;
          document.getElementById("onboard").innerHTML=data_filter[i].onBoardTime.replace(/-/g, ".");
          document.getElementById("address").innerHTML=data_filter[i].address;
          let L = data_filter[i].localPhone.slice(0, 2) + "-" + data_filter[i].localPhone.slice(2,6) + "-" + data_filter[i].localPhone.slice(6)
          document.getElementById("local").innerHTML=L;
          let C = data_filter[i].cellPhone.slice(0, 4) + "-" + data_filter[i].cellPhone.slice(4,7) + "-" + data_filter[i].cellPhone.slice(7)
          document.getElementById("cell").innerHTML=C;
          document.getElementById("mail").innerHTML=data_filter[i].email;
          console.log("modaldeail_activate")
        }
        
    }
    function modaldetails(i, data_filter){

      
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

      document.getElementById("name").innerHTML=data[i].name;
      document.getElementById("ID").innerHTML=data[i].id;
      if(data[i].gender === "male"){
        document.getElementById("gender").innerHTML="男";
      }else{
        document.getElementById("gender").innerHTML="女";
      }
      let B = data[i].birth.slice(0,4) + "." + data[i].birth.slice(4,6) + "." + data[i].birth.slice(6)
      document.getElementById("birth").innerHTML=B;
      document.getElementById("title").innerHTML=data[i].title;
      document.getElementById("onboard").innerHTML=data[i].onBoardTime.replace(/-/g, ".");
      document.getElementById("address").innerHTML=data[i].address;
      let L = data[i].localPhone.slice(0, 2) + "-" + data[i].localPhone.slice(2,6) + "-" + data[i].localPhone.slice(6)
      document.getElementById("local").innerHTML=L;
      let C = data[i].cellPhone.slice(0, 4) + "-" + data[i].cellPhone.slice(4,7) + "-" + data[i].cellPhone.slice(7)
      document.getElementById("cell").innerHTML=C;
      document.getElementById("mail").innerHTML=data[i].email;
      console.log("modaldeail_activate")
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
            <a href=""
              ><li
                style="
                  background-color: rgba(108, 159, 200, 0.77);
                  color: white;
                "
              >
                人事資料總覽
              </li></a
            >
            <a href="./Boss2"><li>人事資料編輯</li></a>
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
        <p style="font-size: 36px; padding: 80px 50px 50px">人事資料總覽</p>
        <div class="data" style="display: block">
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
                margin-left: 5px;
                padding: 5px 35px;
              "
              onclick="search()"
            >
              搜尋
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
              人事資料
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
                id="name"
              >
              </div>
              <div class="col-md-5" style="font-size: 14pt; padding-bottom: 15px" id="title"></div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">ID</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">生日</div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
                id="ID"
              >
                
              </div>
              <div
                class="col-md-5"
                style="font-size: 14pt; padding-bottom: 15px"
                id="birth"
              >
                
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">性別</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">
                到職日期
              </div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
                id="gender"
              >
                
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
                id="address"
              >
                
              </div>
              <div
                class="col-md-5"
                style="font-size: 14pt; padding-bottom: 15px"
                id="local"
              >
                
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">手機</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">
                電子信箱
              </div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
                id="cell"
              >
                
              </div>
              <div
                class="col-md-5"
                style="font-size: 14pt; padding-bottom: 15px"
                id="mail"
              >
                
              </div>
            </div>
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
    <!-- modal show-->
    <script>
      $('a[href$="#detail"]').on('click', function () {
        $('#detail').modal('show');
      });
    </script>
  </body>
</blade.php>
