<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body class="">
    <nav class="navbar">
        <div class="nav-branding">
            logo
        </div>
        <div class="hamburger" onclick="_hamburger()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <ul class="nav-menu">
            <li class="nav-menu-item">
                <div class="nav-item-bar">
                    <a href="#home">home</a>
                </div>
            </li>
            <li class="nav-menu-item">
                <div class="nav-item-bar">
                    <a href="#product">product</a>
                </div>
            </li>
            <li class="nav-menu-item">
                <div class="nav-item-bar">
                    <a href="#contact">contact</a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="content bg-light_blue">
        <div class="row ">
            <div class="col-10 col-lg-8 mx-auto">
                <div class="banner">
                    999
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque officia obcaecati, assumenda quam modi unde veniam dignissimos deleniti nobis mollitia cumque sequi asperiores aliquam nostrum eum? Aut ea amet dolores?
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-10 col-lg-8 mx-auto">
                <div class="row">
                    <div class="profile">
                        <h1>
                            Service Provide For My Clients.
                        </h1>
                        <p class="indent">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, expedita quam! Est numquam quam nulla. Necessitatibus perspiciatis nam inventore soluta. Debitis qui, quo rerum libero quam dolor ullam similique cupiditate.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mx-auto">
                        <div class="card text-center">
                            5
                        </div>
                    </div>
                    <div class="col-12 col-md-6  col-lg-4 mx-auto">
                        <div class="card text-center">
                            5
                        </div>
                    </div>
                    <div class="col-12 col-md-6  col-lg-4 mx-auto">
                        <div class="card text-center">
                            5
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row bg-custom-dark-blue">
            <div class="col-10 col-lg-8 mx-auto">
                <div class="row">
                    <div class="profile">
                        <h1>
                            Service Provide For My Clients.
                        </h1>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, expedita quam! Est numquam quam nulla. Necessitatibus perspiciatis nam inventore soluta. Debitis qui, quo rerum libero quam dolor ullam similique cupiditate.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <?php
                    for ($i = 0; $i < 6; ++$i) { ?>
                        <div class="col-12 col-md-6 col-lg-4 mx-auto text-dark">
                            <div class="card text-center">
                                <div class="tmp text-dark">
                                    <div class="tmp-img">
                                        <img src="https://images.unsplash.com/photo-1670535428382-e48184090c9c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="">
                                    </div>
                                    <div class="tmp-title text-dark">หัวข้อ</div>
                                    <div class="tmp-detail text-dark">รายละเอียด</div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col-12 text-center">
                        <button class=" btn btn-warning pt-3 pl-5 pr-5 pb-3 ">เพิ่มเติม</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-10 col-lg-8 mx-auto">
                <div class="row">
                    <h1 class="ml-3">
                        Contact Us
                    </h1>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-lg-5 text-center d-flex align-items-center justify-content-center">

                        <div class="">
                            <h2>Admin<strong>LTE</strong></h2>
                            <p class="">123 Testing Ave, Testtown, 9876 NA<br>
                                Phone: +1 234 56789012
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="form-group">
                            <label for="inputName">ชื่อ</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">อีเมล</label>
                            <input type="email" id="inputEmail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputSubject">ชื่อเรื่อง</label>
                            <input type="text" id="inputSubject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">ข้อความ</label>
                            <textarea id="inputMessage" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning pt-3 pl-5 pr-5 pb-3 mt-3 mb-3">ส่งข้อความ</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        footer
    </footer>
</body>

</html>