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
    async function wipe(){
     let deleteid = document.getElementById("deleteid").value;
     let bosspassword = document.getElementById("bosspassword").value;
     if(bosspassword !== getCookie("pswd")){
        alert("?????????????????????????????????");
        return;
     }
      try{
        response = await fetch("/api/deleteEmployee",{
          method: "POST",
          headers:{ 'Content-Type': 'application/json'
                  },
          body:JSON.stringify({"userId":deleteid ,})
        })
        data = await response.json();
        if(data)
          console.log(data);
      }catch(err){
          console.log(err);
      }
      window.location.reload();
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
            gen = "???";
          if(gen === "female")
            gen = "???";
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
    function threshold_d(data, input){
      return data.filter( data => data.id !== input);
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
        data = threshold_d(data, username);
        for(let i = 0; i < data.length; i++){
          var row = "<a href='#detail' data-toggle='modal' data-target='#detail' id=" + i + " onclick='modaldetail(" + i + ")'><div class='row'>"

          row += "<div class='col-md-12' style='background-color: rgba(235, 235, 235, 0.63);text-align: center;padding: 5px 0;display: flex;' >"
          row += "<p id='p1'>"+ data[i].name +"</p>"
          let gen = data[i].gender;
          if(gen === "male")
            gen = "???";
          if(gen === "female")
            gen = "???";
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
      if(input === "???" || input === "???"){
        if(input === "???")
        input = "male"
        if(input === "???")
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
            let username = document.getElementById("user").value;
            let oldpassword = document.getElementById("oldpassword").value;
            let newpassword = document.getElementById("newpassword").value;
            let confirmnewpassword = document.getElementById("confirmnewpassword").value;
            console.log("????????????" + oldpassword,typeof(oldpassword));
            console.log("????????????" + newpassword,typeof(newpassword));
            console.log("??????????????????" + confirmnewpassword,typeof(confirmnewpassword));

            if(newpassword.toString() !== confirmnewpassword.toString()){
              alert("???????????????????????????????????????????????????")
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
                alert("???????????????");
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
              ????????????????????????
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
              ????????????
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="./Landing">??????</a>
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
            <a href="./Boss1"><li>??????????????????</li></a>
            <a href=""
              ><li
                style="
                  background-color: rgba(108, 159, 200, 0.77);
                  color: white;
                "
              >
                ??????????????????
              </li></a
            >
            <a href="./Boss3"><li>??????????????????</li></a>
            <a href="./Boss4"><li>??????????????????</li></a>
            <a href="./Boss5"><li>??????????????????</li></a>
            <a href="./Boss6">
              <li>??????????????????</li>
            </a>
            <a href="./Boss7"><li>??????????????????</li></a>
          </ul>
        </div>
      </nav>

      <content>
        <p style="font-size: 36px; padding: 80px 50px 50px">??????????????????</p>
        <div class="data" style="display: block;">
          <div
            class="search"
            style="display: flex; padding-bottom: 10px; margin-left: -15px"
          >
            <input
              type="text"
              class="form-control"
              placeholder="???????????????(???????????????????????????????????????)"
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
              ??????
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
              ??????
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
              ????????????
            </div>
            <div
              class="col-md-3"
              style="
                background-color: rgba(108, 159, 200, 0.77);
                text-align: center;
                padding: 5px 0;
              "
            >
              ??????
            </div>
            <div
              class="col-md-3"
              style="
                background-color: rgba(108, 159, 200, 0.77);
                text-align: center;
                padding: 5px 0;
              "
            >
              ??????
            </div>
            <div
              class="col-md-3"
              style="
                background-color: rgba(108, 159, 200, 0.77);
                text-align: center;
                padding: 5px 0;
              "
            >
              ??????
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
              ??????????????????
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
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">??????</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">??????</div>
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
                  <option value="STAFF">??????</option>
                  <option value="MANAGER">??????</option>
                  <option value="CEO">??????</option>
                   <option value="HR">??????</option>
                </select>
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">ID</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">??????</div>
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
                ????????????
              </button>
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">??????</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">??????</div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <select class="custom-select" value="" style="width: 70%" id="gender">
                  <option value="male">???</option>
                  <option value="female">???</option>
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
                ????????????
              </div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">
                ????????????
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
                ????????????
              </div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">
                ????????????
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
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">??????</div>
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
              data-toggle="modal"
              data-target="#delete"
              
            >
              ??????
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
              ??????
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--delete-->
    <div
      class="modal fade"
      id="delete"
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
              ????????????????????????
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
                type="text"
                class="form-control"
                placeholder="???????????????????????????ID"
                aria-label="deleteid"
                aria-describedby="basic-addon1"
                id="deleteid"
              />
            </div>

            <div class="input-group mb-3">
              <input
                type="password"
                class="form-control"
                placeholder="?????????????????????"
                aria-label="bosspassword"
                aria-describedby="basic-addon1"
                id="bosspassword"
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
              onclick="wipe()"
            >
              ????????????
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
              ??????????????????
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
                type="text"
                class="form-control"
                placeholder="?????????ID"
                aria-label="newpassword"
                aria-describedby="basic-addon1"
                id="user"
              />
            </div>

            <div class="input-group mb-3">
              <input
                type="password"
                class="form-control"
                placeholder="??????????????????"
                aria-label="oldpassword"
                aria-describedby="basic-addon1"
                id="oldpassword"
              />
            </div>

            <div class="input-group mb-3">
              <input
                type="password"
                class="form-control"
                placeholder="??????????????????"
                aria-label="newpassword"
                aria-describedby="basic-addon1"
                id="newpassword"
              />
            </div>

            <div class="input-group mb-3">
              <input
                type="password"
                class="form-control"
                placeholder="????????????????????????"
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
              ????????????
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
              ??????????????????
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
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">??????</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">??????</div>
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
                <select class="custom-select" value="?????????" id="titlen">
                  <option value="STAFF">??????</option>
                  <option value="MANAGER">??????</option>
                  <option value="CEO">??????</option>
                  <option value="HR">??????</option>
                </select>
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">ID</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">??????</div>
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
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">??????</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">??????</div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                <select class="custom-select" value="?????????" style="width: 70%" id="gendern">
                  <option value="male">???</option>
                  <option value="female">???</option>
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
                ????????????
              </div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">
                ????????????
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
                ????????????
              </div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">
                ????????????
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
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">??????</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">
                ??????
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
              ????????????
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
