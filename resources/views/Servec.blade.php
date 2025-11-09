@extends("layout.app")
    @section("styles")
    <style>
        Nav{
            height: 54px;
            width: 100%;
            background-color: gray;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size : 27px;
            gap: 15px;
            color:white
        }
        Nav>li{
            list-style: none;
        }
        section.mine{
            width: 95%;
            margin-left: 32 ;
            height: 70vh;
            border:2px solid black;
            padding: 12px;
            margin:12px 5px 12px 18px;
            display: flex;
            justify-content: center;
            flex-direction: row;
            align-items: center

        }
        section>div.SmaillDiv{
            padding:12px;
            width: 60%;
        }
        section>div.SmaillDiv>h1{
            font-size:45px;
        }
        section>img.images{
            height: 80%;
            width: 350px;
        }
        footer{
            height: 65px; 
            width: 100%;
            background-color: gray;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size:32px;
            color:white
        }
    </style>
    @endsection
    @section("mainsection")
    <div class="SmaillDiv">
     <h1>Services Page</h1>
     <p>Lorem ipsum dolor Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, accusamus rem laudantium voluptates maxime, ea quia voluptas, dolor voluptate nesciunt nam saepe provident laboriosam reiciendis. Aut ullam nulla neque sit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur molestiae cupiditate expedita neque fugiat excepturi odio ducimus enim in! Aliquam at a in, provident deserunt quos nisi minima id ex? sit amet consectetur adipisicing elit. Esse corrupti voluptas eaque voluptate, voluptates iure dicta qui doloribus illum earum deleniti ipsum laboriosam odit. Sed veritatis quae tempore ipsum aut?</p>
    </div>
     <img src="/image/download (3).jpg" class="images" alt="">
    @endsection
