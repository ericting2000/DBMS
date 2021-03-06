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

        <title>Landing Page</title>
    </head>
    <script>
        async function login() {
            let username = document.getElementById("Username").value;
            let password = document.getElementById("Password").value;
            document.cookie = "user=" + username.toString();
            document.cookie = "pswd=" + password.toString();
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
                if(data.title ==="CEO" || data.title ==="MANAGER" || data.title ==="HR"){
                  window.location.href = "./Boss1";
                } 
                else{
                  window.location.href = "./Staff1";
               }
               document.cookie = "name=" + data.name;
            } catch (err) {
                console.log(err);
                alert("帳號或密碼不可為空值，請檢查是否有輸入錯誤！");
            }

        }
    </script>
    <style>
        header {
            height: 95px;
            background: #003865;

            filter: drop-shadow(0px 4px 5px rgba(0, 0, 0, 0.25));
        }

        .system {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .button {
            margin: auto;
        }
        .button .btn {
            display: block;
            padding: 100px 200px;
            margin: 30px;
            background: #407dae;
            box-shadow: 4px 4px 15px 1px rgba(0, 0, 0, 0.25);
            border-radius: 43px;
        }
        .modal-content {
            border-radius: 16px;
        }

        .modal-header {
            border-radius: 14px 14px 0 0;
            background-color: #003865;
            border-bottom: 0 none;
        }

        .modal-footer {
            border-top: 0 none;
        }
    </style>

    <body>
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"></div>
                </div>
            </nav>
        </header>

        <div class="system">
            <div class="button">
                <button
                    style="color: white"
                    type="button"
                    class="btn btn-default btn-lg"
                    id="a"
                    data-toggle="modal"
                    data-target="#stock"
                >
                    股東資料管理系統
                </button>
                <button
                    style="color: white"
                    type="button"
                    class="btn btn-default btn-lg"
                    id="b"
                    data-toggle="modal"
                    data-target="#personnel"
                >
                    人事資料管理系統
                </button>
            </div>
        </div>

        <div
            class="modal fade"
            id="personnel"
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
                            歡迎進入人事資訊系統
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
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"
                                    ><img
                                        src="{{ asset('user.svg') }}"
                                        alt=""
                                        style="width: 20px; height: 20px"
                                /></span>
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="請輸入帳號(ID)"
                                aria-label="Username"
                                aria-describedby="basic-addon1"
                                id="Username"
                            />
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"
                                    ><img
                                        src="{{ asset('password.svg') }}"
                                        alt=""
                                        style="width: 20px; height: 20px"
                                /></span>
                            </div>
                            <input
                                type="password"
                                class="form-control"
                                placeholder="請輸入密碼"
                                id="Password"
                                aria-label="Password"
                                aria-describedby="basic-addon1"
                            />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!----- 測試用記得修改------>
                        <button
                            type="button"
                            class="btn btn-primary"
                            style="
                                background-color: #003865;
                                border-style: none;
                                border-radius: 10px;
                            "
                            onclick="login()"
                        >
                            登入
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="modal fade"
            id="stock"
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
                            歡迎進入股東資訊系統
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
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"
                                    ><img
                                        src="{{ asset('user.svg') }}"
                                        alt=""
                                        style="width: 20px; height: 20px"
                                /></span>
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="請輸入帳號(ID)"
                                id="Username"
                                aria-label="Username"
                                aria-describedby="basic-addon1"
                            />
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"
                                    ><img
                                        src="{{ asset('password.svg') }}"
                                        alt=""
                                        style="width: 20px; height: 20px"
                                /></span>
                            </div>
                            <input
                                type="password"
                                class="form-control"
                                placeholder="請輸入密碼"
                                id="Password"
                                aria-label="Password"
                                aria-describedby="basic-addon1"
                            />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-primary"
                            style="
                                background-color: #003865;
                                border-style: none;
                            "
                            onclick="login()"
                        >
                            登入
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
            $("#personnel").on("hidden.bs.modal", function () {
             $(".modal-body input").val("");
            });
          });
      
         </script>
         <script>
            $(document).ready(function() {
            $("#stock").on("hidden.bs.modal", function () {
             $(".modal-body input").val("");
            });
          });
          
      
         </script>
        
        
    </body>
</html>
