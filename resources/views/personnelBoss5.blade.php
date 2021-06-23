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
    let response = new Object;
    let data = new Object;
    function threshold(data, input){
      return data.filter( data => data.leaveReason === input);
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
      try{
        response = await fetch("/api/getLeaveRecord?userId="+username);
        data = await response.json();
        for(let i = 0; i < data.length; i++){
          var row = "<div class='row'>"

          if(data[i].dateStart === data[i].dateEnd)
              row += "<div class='col-md-7' style='background-color: rgba(235, 235, 235, 0.63);text-align: center;padding: 5px 0;' >" + data[i].dateStart.replace(/-/g,".") + "</div>";
          else
              row += "<div class='col-md-7' style='background-color: rgba(235, 235, 235, 0.63);text-align: center;padding: 5px 0;' >" + data[i].dateStart.replace(/-/g,".") + "~" +  data[i].dateEnd.replace(/-/g,".") +"</div>";
          let reason = data[i].leaveReason;
          if(reason === "sick")
            reason = "病假";
          if(reason === "personal")
            reason = "事假";
          if(reason === "official")
            reason = "公假";
          //記得檢查修改
          if(reason === "breavement")
            reason = "喪假";
          row += "<div class='col-md-5' style='background-color: rgba(235, 235, 235, 0.63);text-align: center;padding: 5px 0;'>" + reason + "</div>"
          row += "</div>"
          console.log(row);
          document.getElementById("leaverecord").innerHTML += row;
        }
      }catch(err){
        console.log(err)
      }
    }

    function search(){
      let input = document.getElementById("sinput").value;
      if(input === ""){
        document.getElementById("leaverecord").innerHTML ="";
        getdata();
        return;
      }
      let data_filter
      console.log(input);
      if(input === "事假" || input === "病假" || input === "公假" || input === "喪假"){
        if(input === "事假")
        input = "personal"
        if(input === "病假")
        input = "sick"
        if(input === "公假")
        input = "official"
        if(input === "喪假")
        input = "breavement"
        data_filter = threshold(data, input);
      }
      
      for(let i = 0; i < data_filter.length; i++){
          if(i == 0)
            document.getElementById("leaverecord").innerHTML ="";
          //if()
            var row = "<div class='row'>"
            if(data_filter[i].dateStart === data_filter[i].dateEnd)
              row += "<div class='col-md-7' style='background-color: rgba(235, 235, 235, 0.63);text-align: center;padding: 5px 0;' >" + data_filter[i].dateStart.replace(/-/g,".") + "</div>";
            else
              row += "<div class='col-md-7' style='background-color: rgba(235, 235, 235, 0.63);text-align: center;padding: 5px 0;' >" + data_filter[i].dateStart.replace(/-/g,".") + "~" + data_filter[i].dateEnd.replace(/-/g,".") +"</div>";
            let reason = data_filter[i].leaveReason;
            if(reason === "sick")
              reason = "病假";
            if(reason === "personal")
              reason = "事假";
            if(reason === "official")
              reason = "公假";
            //記得檢查修改
            if(reason === "breavement")
              eason = "喪假";
            row += "<div class='col-md-5' style='background-color: rgba(235, 235, 235, 0.63);text-align: center;padding: 5px 0;'>" + reason + "</div>"
            row += "</div>"
            document.getElementById("leaverecord").innerHTML += row;
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
            <a href="./Boss1"
              ><li
                
              >
                人事資料總覽
              </li></a
            >
            <a href="./Boss2"><li>人事資料編輯</li></a>
            <a href="./Boss3"><li>請假紀錄總覽</li></a>
            <a href="./Boss4"><li 
                >個人資料總覽</li></a>
            <a href=""><li style="
                  background-color: rgba(108, 159, 200, 0.77);
                  color: white;"">個人請假紀錄</li></a>
            <a href="./Boss6">
              <li>個人請假系統</li>
            </a>
            <a href="./Boss7"><li>系統異常報修</li></a>
          </ul>
        </div>
      </nav>

      <content>
        <p style="font-size: 36px; padding: 80px 50px 50px">個人請假紀錄</p>
        <div class="data" style="display: block">
          <div
            class="search"
            style="display: flex; padding-bottom: 10px; margin-left: -15px"
          >
            <input
              type="text"
              class="form-control"
              placeholder="請假類別搜尋(事假、病假、、公假、喪假)"
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
              class="col-md-7"
              style="
                background-color: rgba(108, 159, 200, 0.77);
                text-align: center;
                padding: 5px 0;
              "
            >
              請假日期
            </div>
            <div
              class="col-md-5"
              style="
                background-color: rgba(108, 159, 200, 0.77);
                text-align: center;
                padding: 5px 0;
              "
            >
              請假類別
            </div>
          </div>
          <div id="leaverecord"></div>
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
  </body>
</blade.php>
