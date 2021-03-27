<style type="text/css">
html{
    scroll-behavior:smooth;
}
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Mulish', sans-serif;

}
.row{
    margin-left:0!important;
    margin-right:0!important;
}
.nav_style{
    background-color:#a29bfe!important;
}
.nav_style a{
    color:white;
}
/* main header */
.main_header{
    height:400px;
    width:100%;
}
.rightside h1{
    font-size: 3rem;
}
.corona_rot img{
    animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
    0% {transform:rotate(0deg);}
    100% {transform:rotate(360deg);}
}
.leftside img{
    animation: eksath 5s linear infinite;
}
@keyframes eksath{
    0%{transform : scale(.75);}
    20%{transform : scale(1);}
    40%{transform : scale(.75);}
    60%{transform : scale(1);}
    80%{transform : scale(.75);}
    100%{transform : scale(.75);}
    }

    /* corona update */
    .corona_update{
        margin:0 0 30px 0;
    }
    .corona_update h3{
        color:#ff7675;
    }
    .corona_update h1{
        font-size:2rem;
        
    }

    /* abou ..... */
    .sub_section{
        background-color: #fbfafd;
    }
    /* footer */
    .footer_style{
        background-color:#a29bfe!important;
    } 
    .footer_style p{
        margin-bottom :0!important;
    }

    #myBtn{
        display:none;
        position:fixed;
        bottom:30px;
        right:40px;
        z-index:99;
        border:none;
        outline:none;
        background-color:#00A8FF;
        color:white;
        cursor:pointer;
        padding:10px;
        border-radius:10px;
    }
    #myBtn:hover{
        background:#606060;
    }
/* responsive/... */

    @media(max-width:780px){
        .main_header{
            height:700px;
            text-align:center;
        }
        .main_header h1{
            text-align:center;
            padding:0;
            width:100%;
            font-size:30px;
        }
        .count_style{
            display:inline!important;
        }
        .count_style p{
            text-align:center;
        }
        .about_res{
            margin-left:0!important;
        }
    }
</style>