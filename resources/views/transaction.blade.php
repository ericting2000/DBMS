<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Document</title>
        <style>
            .myDiv {
                position: absolute;
                background-color: #003865;
                height: 95px;
                width: 100%;
                filter: drop-shadow(0px 4px 5px rgba(0, 0, 0, 0.25));
                top: 0px;
                left: 0px;
            }

            .sidenav {
                position: absolute;
                width: 267px;
                height: 929px;
                left: 0px;
                top: 251px;
            }

            .myDiv2 {
                position: absolute;
                width: 122px;
                height: 122px;
                left: 68px;
                top: 113px;
                background: #c4c4c4;
                border-radius: 50%;
            }

            .myDiv3 {
                position: absolute;
                width: 1096px;
                height: 510px;
                left: 301px;
                top: 270px;
                box-shadow: 5px 5px 10px 4px #c4c4c4;
            }

            .myDiv4 {
                width: 133px;
                height: 133px;
                position: relative;
                left: 57px;
                top: 35px;
                background: #c4c4c4;
                border-radius: 50%;
            }

            .sidenav a {
                padding: 14px 10px 14px 59px;
                text-decoration: none;
                font-size: 25px;
                color: black;
                display: block;
            }

            .sidenav a:hover {
                color: #ffffff;
                background-color: rgba(108, 159, 200, 0.77);
            }

            .button2 {
                border: none;
                width: 118px;
                height: 34px;
                background: #6c9fc8;
                border-radius: 8px;
                font-size: 22px;
                color: #ffffff;
                text-align: center;
                display: block;
                cursor: pointer;
            }

            .button3 {
                position: absolute;
                left: 1316px;
                top: 36px;
                border: none;
                background: #003865;
                border-radius: 8px;
                font-size: 24px;
                color: #ffffff;
                text-align: center;
                display: block;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="myDiv">
            <p
                style="
                    position: absolute;
                    margin-left: 54px;
                    margin-top: 31px;
                    margin-height: 33px;
                    font-size: 30px;
                    color: #ffffff;
                    line-height: 35px;
                    font-family: Roboto;
                "
            >
                ????????????????????????
            </p>
            <button class="button3">?????????</button>
        </div>

        <div class="myDiv2">
            <p><br /></p>
        </div>

        <div class="sidenav">
            <a href="./stock_person.html">??????????????????</a>
            <a href="./stock_data.html">??????????????????</a>
            <a href="./transaction_data.html">??????????????????</a>
            <a href="./transaction.html">??????????????????</a>
        </div>

        <div class="main">
            <p
                style="
                    position: relative;
                    left: 307px;
                    top: 150.5px;
                    font-size: 40px;
                    font-family: Roboto;
                    font-weight: 1000;
                "
            >
                ??????????????????
            </p>
            <div class="myDiv3">
                <p
                    style="
                        position: relative;
                        left: 49px;
                        top: 78px;
                        font-family: Roboto;
                        font-style: normal;
                        font-weight: normal;
                        font-size: 18px;
                        line-height: 21px;
                        color: rgba(0, 0, 0, 0.5);
                    "
                >
                    ??????ID
                </p>
                <p
                    style="
                        position: relative;
                        left: 49px;
                        top: 60px;
                        font-family: Roboto;
                        font-style: normal;
                        font-weight: normal;
                        font-size: 22px;
                        line-height: 26px;
                        color: #000000;
                    "
                >
                    XXXXXX
                </p>
                <p
                    style="
                        position: relative;
                        left: 49px;
                        top: 70px;
                        font-family: Roboto;
                        font-style: normal;
                        font-weight: normal;
                        font-size: 18px;
                        line-height: 21px;
                        color: rgba(0, 0, 0, 0.5);
                    "
                >
                    ????????????
                </p>
                <select
                    style="
                        position: relative;
                        width: 109px;
                        height: 31px;
                        left: 49px;
                        top: 60px;
                        background: #ffffff;
                        border: 1px solid #a5a5a5;
                        font-size: 22px;
                        font-weight: 700px;
                        box-sizing: border-box;
                        border-radius: 6px;
                    "
                >
                    <option value="???">???</option>
                    <option value="???">???</option>
                </select>
                <p
                    style="
                        position: relative;
                        left: 49px;
                        top: 70px;
                        font-family: Roboto;
                        font-style: normal;
                        font-weight: normal;
                        font-size: 18px;
                        line-height: 21px;
                        color: rgba(0, 0, 0, 0.5);
                    "
                >
                    ????????????(???)
                </p>
                <input
                    type="number"
                    id="lot"
                    name="lot"
                    style="
                        position: relative;
                        left: 49px;
                        top: 60px;
                        width: 127px;
                        height: 31px;
                        background: #ffffff;
                        border: 1px solid #a5a5a5;
                        box-sizing: border-box;
                        border-radius: 6px;
                        font-size: 18px;
                        line-height: 21px;
                    "
                />
                <p
                    style="
                        position: relative;
                        left: 747px;
                        top: -99px;
                        font-family: Roboto;
                        font-style: normal;
                        font-weight: normal;
                        font-size: 18px;
                        line-height: 21px;
                        color: rgba(0, 0, 0, 0.5);
                    "
                >
                    ????????????(???)
                </p>
                <input
                    type="number"
                    id="lot"
                    name="lot"
                    style="
                        position: relative;
                        left: 747px;
                        top: -108px;
                        width: 127px;
                        height: 31px;
                        background: #ffffff;
                        border: 1px solid #a5a5a5;
                        box-sizing: border-box;
                        border-radius: 6px;
                        font-size: 18px;
                        line-height: 21px;
                    "
                />
                <p
                    style="
                        position: relative;
                        left: 747px;
                        top: -99px;
                        font-family: Roboto;
                        font-style: normal;
                        font-weight: normal;
                        font-size: 18px;
                        line-height: 21px;
                        color: rgba(0, 0, 0, 0.5);
                    "
                >
                    ????????????
                </p>
                <p
                    style="
                        position: relative;
                        left: 747px;
                        top: -110px;
                        font-family: Roboto;
                        font-style: normal;
                        font-weight: normal;
                        font-size: 22px;
                        line-height: 26px;
                        color: #000000;
                    "
                >
                    XXXXXX
                </p>
                <button
                    class="button2"
                    style="position: relative; left: 747px; top: -60px"
                >
                    ??????
                </button>
            </div>
        </div>
    </body>
</html>
