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
    #p2{
      width: 50%;
      margin: 0;
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
    let getdata = () => {
      document.getElementById("nametag").innerHTML = getCookie("name");
    }
  </script>

  <body onload="getdata()">
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <p class="navbar-brand" style="color: white; margin-top: 20px">
              顧客管理
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
              <a class="dropdown-item" href="./SystemLanding">登出</a>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <box style="display: flex">
      <nav class="side">
        <div class="logo">
          <div id="netflix">
            <img src="{{ asset('Logo.png') }}" alt=""/>
          </div>
        </div>
        <div class="sidebar">
          <ul class="menu">
            <a href="./System1"><li>產品使用者總覽</li></a>
            <a href=""><li  style="
                  background-color: rgba(108, 159, 200, 0.77);
                  color: white;
                ">報修資訊系統</li></a>
          </ul>
        </div>
      </nav>

      <content>
        <p style="font-size: 36px; padding: 80px 50px 50px">報修資訊系統</p>
        <div class="data" style="display: block">
          <div class="row">
            <div
              class="col-md-6"
              style="
                background-color: rgba(108, 159, 200, 0.77);
                text-align: center;
                padding: 5px 0;
              "
            >
              報修公司
            </div>
            <div
              class="col-md-6"
              style="
                background-color: rgba(108, 159, 200, 0.77);
                text-align: center;
                padding: 5px 0;
              "
            >
              問題主旨
            </div>
          </div>
          <a href="#detail"
            ><div class="row">
              <div
                class="col-md-12"
                style="
                  background-color: rgba(235, 235, 235, 0.63);
                  text-align: center;
                  padding: 5px 0;
                  display: flex;
                "
              >
                <p id="p1">CHT</p>
                <p id="p2">股東新增壞了</p>
              </div>
            </div>
          </a>
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
              資訊細項
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
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">報修公司</div>
              <div class="col-md-5" style="color: rgba(0, 0, 0, 0.5)">問題主旨</div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                CHT
              </div>
              <div class="col-md-5" style="font-size: 14pt; padding-bottom: 15px">
                股東新增壞了
              </div>
              <div class="col-md-7" style="color: rgba(0, 0, 0, 0.5)">問題描述</div>
              <div
                class="col-md-7"
                style="font-size: 14pt; padding-bottom: 15px"
              >
                股東新增壞了
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
            >
              處理完畢
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
        format: 'yyyy.mm.dd',
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
