<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Website</title>
</head>
<body>
    


    <Style>
        @font-face{
            src: url('assets/fonts/Lato-Regular.ttf');
            font-family: lato;
        }

        *{
            box-sizing: border-box;
        }
        body img{
            width: 100%;
        }
        body{
            min-width: 350px;
            font-family: lato, sans-serif, tahoma;
            margin:0px;
            padding:0px;
        }

        body a{
            text-decoration: none;
        }
        header{
            display: flex;
        }

         .logo-holder{
            max-width: 100px;
            flex:1;
        }
        .header-div{
            flex:auto;
        }
       
        .main-nav{
            display: flex;
        }

        .nav-item{
            padding: 10px;
            text-align: center;
        }
        .main-title{
            padding: 10px;
        }
        header .active{
            border-bottom: solid 4px red;
        }
        .dropdown{
            position: relative;
        }
        .dropdown-list{
            position: absolute;
            border: solid thin #ccc;
            background-color: white;
            margin-top: 10px;
        }
        .hero{
            height: 500px;
            object-fit: cover;

        }
        .content{
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;

        }
        .music-card img{
            height: 200px;
            object-fit: cover;
        }
        .music-card{
            width: 200px;
            margin: 20px;
            background-color: #eee;

        }
        .card-content{
            padding:4px;
        }
        .card-title{
            font-size: 18px;
        }
        .card-subtitle{
            opacity: 0.7;
        }
    </Style>

    <Header>
        <div class="logo-holder">
            <a href=""><Img src="assets/images/logo.jpg"></Img></a>
        </div>
        <div class="header-div">
            <div class="main-title">MUSIC WEBSITE</div>
                <div class="main-nav">
                    <div class="nav-item"><a href="">Home</a></div>
                    <div class="nav-item"><a href="">Music</a></div>
                    <div class="nav-item dropdown">
                        <a href="">Category</a>
                            <div class="dropdown-list">
                                <div class="nav-item"><a href="">Country</a></div>
                                <div class="nav-item"><a href="">RnB</a></div>
                                <div class="nav-item"><a href="">Techno</a></div>
                                <div class="nav-item"><a href="">Dubstep</a></div>
                            </div>
                    </div>
                    <div class="nav-item"><a href="">Artists</a></div>
                    <div class="nav-item"><a href="">About us</a></div>
                    <div class="nav-item"><a href="">Contact us</a></div>
                    <div class="nav-item dropdown">
                        <a href="">Hi, User</a>
                        <div class="dropdown-list">
                                <div class="nav-item"><a href="">Profile</a></div>
                                <div class="nav-item"><a href="">Admin</a></div>
                                <div class="nav-item"><a href="">Log out</a></div>
                            </div>
                    </div>
                </div>
        </div>
    </Header>



    <section>
        <img class="hero" src="assets/images/hero.jpg" alt="oops">
    </section>

    <section class="content">
        <h3 class="section-title">Featured</h3>

         <!-- start music card-->
        <div class="music-card">
            <div style="overflow: hidden;">
                <img src="assets/images/01.jpg" alt="">
            </div>
            <div class="card-content">
                <div class="card-title">Song title</div>
                <div class="card-subtitle">Artist name</div>
            </div>
        </div>
        <!-- end music card-->

        <!-- start music card-->
        <div class="music-card">
            <div style="overflow: hidden;">
                <img src="assets/images/02.jpg" alt="">
            </div>
            <div class="card-content">
                <div class="card-title">Song title</div>
                <div class="card-subtitle">Artist name</div>
            </div>
        </div>
        <!-- end music card-->

        <!-- start music card-->
        <div class="music-card">
            <div style="overflow: hidden;">
                <img src="assets/images/03.jpg" alt="">
            </div>
            <div class="card-content">
                <div class="card-title">Song title</div>
                <div class="card-subtitle">Artist name</div>
            </div>
        </div>
        <!-- end music card-->

        <!-- start music card-->
        <div class="music-card">
            <div style="overflow: hidden;">
                <img src="assets/images/04.jpg" alt="">
            </div>
            <div class="card-content">
                <div class="card-title">Song title</div>
                <div class="card-subtitle">Artist name</div>
            </div>
        </div>
        <!-- end music card-->

        <!-- start music card-->
        <div class="music-card">
            <div style="overflow: hidden;">
                <img src="assets/images/05.jpg" alt="">
            </div>
            <div class="card-content">
                <div class="card-title">Song title</div>
                <div class="card-subtitle">Artist name</div>
            </div>
        </div>
        <!-- end music card-->

        <!-- start music card-->
        <div class="music-card">
            <div style="overflow: hidden;">
                <img src="assets/images/06.jpg" alt="">
            </div>
            <div class="card-content">
                <div class="card-title">Song title</div>
                <div class="card-subtitle">Artist name</div>
            </div>
        </div>
        <!-- end music card-->
    </section>
</body>
</html>