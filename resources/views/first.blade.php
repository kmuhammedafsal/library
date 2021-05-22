<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>

  header
{
background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url(https://images.unsplash.com/photo-1548048026-5a1a941d93d3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8bGlicmFyeXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80);

height:100vh;
-webkit-background-size:cover;
background-size: cover;
background-position:center center;
}
</style>
<style>
.banner-text
{
position:absolute;
top:50%;
left: 50%;
transform:translate(-50%,-50%);
text-align:center;
}

</style>
    <style>
        .banner-text p{
            font-family:poppins;
            color:#fff;
        }
        </style>
<style>
    .banner-btn a{
        border:1px solid #fff;
        border-radius:50px;
        text-transform:uppercase;
        text-decoration:none;
        padding:10px 50px;
        display: inline-block;
        
        margin-top:15px;
        color:#fff;
    }
    </style>
    <style>
        .banner-btn a.active{
            background:#fed136;
            border-color:#fed136;
            color:#000;
        }
        </style>
        <style>
            .text-area{
                font-size:70px;
                font-family:roboto;
                text-transform:uppercase;
                font-weight:bold;
            }
            </style>
            <style>
                .text-area span{
                color:#fed136;
                opacity:0;
                transform:translate(0,-100px) rotate(360deg) scale(0);
                animation:animate 5s forwards;
                
                </style>
                    <style>
                    .text-area span{

                    display:inline-block;
                    }
                    .text-area span:nth-oftype(2)
                    {
                        animation-delay:.1s;
                    }
                    .text-area span:nth-oftype(3)
                    {
                        animation-delay:.2s;
                    }
                    .text-area span:nth-oftype(4)
                    {
                        animation-delay:.3s;
                    }
                    .text-area span:nth-oftype(5)
                    {
                        animation-delay:.4s;
                    }
                    .text-area span:nth-oftype(6)
                    {
                        animation-delay:.5s;
                    }
                    .text-area span:nth-oftype(7)
                    {
                        animation-delay:.6s;
                    }
                    .text-area span:nth-oftype(8)
                    {
                        animation-delay:.7s;
                    }
                    @keyframes animate{
                        30%{
                            transform:translate(0,-50px) rotate(180deg) scale(1);
                        }
                        60%{
                            transform:translate(0,20px) rotate(0deg) scale(.8);
                        }
                        100%{
                            transform:translate(0) rotate(0deg) scale(1);
                            opacity:1;
                        }
                    }
                    </style>
                    


<header > 
<div class="container">
<div class="banner-text">
<div class="text-area">
<h4><span>B</span>
<span>O</span>
<span>O</span>
<span>K</span>
<span>-</span>
<span>W</span>
<span>O</span>
<span>R</span>
<span>L</span>
<span>D</span></h4>
</div>

<h3>Light Of Knowledge </h3>
</p>
<p class="banner-btn">

<a href="/index" class="active">USER LOGIN</a>
<a href="/adminlogin" >ADMIN LOGIN</a>
</p>
</div>

</div>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>