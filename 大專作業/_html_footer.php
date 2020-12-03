

<style>
    .footerTitle{
        color: #000;
        font-size: 32px;
        font-family: 'Lusitana', serif;
        font-style: italic;
    }
    .footerLine{
        border-bottom: 1px #000 solid;

        margin-bottom: 25px;
    }
    .footerIcon{
        font-size: 24px;
        list-style: none;
    }
    footer{
        margin: 0 130px;
        width: 85vw;
    }
    .footerPin a{
        color:#000;
    }

    .footerPin a:hover{
        color:#f2b46d;
    }


    @media screen and (max-width:968px){
        .footerTitle , .footerLine{
            display: none;
        }
        footer{
            margin: 0 auto;
            width: 100vw;
        }
        .footerIcon{
            padding: 0;
            justify-content: center !important;
        }
        .footerIcon li a{
            color: #000000;
        }

    }
</style>


<footer class="d-flex justify-content-between">

        <div class="footerTitle col-lg-2">
            <span>[ban`Lan]</span>
        </div>
        <div class="footerLine col-lg-7"></div>
        <div class="col-lg-3 col-md-12">
            <ul class=" footerIcon d-flex justify-content-end">
                <li class="footerPin">
                    <a class="nav-link " href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
    
                <li class="footerPin">
                    <a class="nav-link" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="footerPin">
                    <a class="nav-link" href="#">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                </li>
                <li class="footerPin">
                    <a class="nav-link" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="footerPin">
                    <a class="nav-link" href="#">
                        <i class="fab fa-behance"></i>
                    </a>
                </li>
            </ul>

        </div>

    </footer>

</body>
</html>