<html>
    <head>
        <title>Ngaji Online</title>
        @include('css')               
        <section id="hero" class="bg-dark">    
            @include('header')
        </section>  
    </head>
    
    <body class="bg-dark">  
        <hr class="container bg-light">         
        @if (!Request::is('quran/*'))
        <div class="container row mx-auto">
            <div class="input-group mb-3">
                <input type="text" id="searcher" class="form-control" placeholder="Cari Sesuatu...">
                <div class="input-group-append">
                  <button id="cari" class="btn btn-success" onclick='findString()' type="submit">Cari</button>
                </div>
            </div>
            <ul class="nav-item dropdown container col-md-6">
                <a class="nav-link btn bg-success dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Urutkan Berdasarkan :
                </a>
                <div class="dropdown-menu col-md-12 text-center bg-dark" aria-labelledby="navbarDropdown">
                    <li class="nav-item">
                        <a class="nav-item btn btn-outline-success col-md" href="/quran">Seluruh Alquran</a>
                    </li>                                 
                    <li class="nav-item">                                                                                                  
                        <a class="nav-item btn btn-outline-success col-md" href="/ayat">Jumlah Ayat</a>                                                                                                 
                    </li> 
                    <li class="nav-item">                                                                                                  
                        <a class="nav-item btn btn-outline-success col-md"  href="/wahyu">Urutan Pewahyuan</a>                                                                                                 
                    </li>     
                </div>
            </ul>

            <ul class="nav-item dropdown container col-md-6">
                <a class="nav-link btn bg-success dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tampilkan Berdasarkan :
                </a>
                <div class="dropdown-menu col-md-12 text-center bg-dark" aria-labelledby="navbarDropdown">
                    <li class="nav-item">
                        <a class="nav-item btn btn-outline-success col-md" href="/makkiyah">Surat Makkiyah (Surat Yang Turun Di Makkah)</a>
                    </li>                                 
                    <li class="nav-item">                                                                                                  
                        <a class="nav-item btn btn-outline-success col-md" href="/madaniyah">Surat Madaniyah (Surat Yang Turun Di Madinah)</a>                                                                                                 
                    </li> 
                    <li class="nav-item">                                                                                                  
                        <a class="nav-item btn btn-outline-success col-md"  href="/thiwal">Surat At-Thiwal (Surat Yang Ayatnya Panjang)</a>                                                                                                 
                    </li>     
                </div>
            </ul>
        </div>
        <hr class="container bg-light">
        @endif
        

        <div class="container bg-dark pt-5">
            <section class="container-fluid bg-dark">
                <div class="container bg-dark">                                                         
                        @yield('list')                                   
                </div>
            </section>            
        </div>
        <button onclick="topFunction()" id="ToUp" title="Go to top"><i class="fa fa-arrow-circle-up"></i> ke Atas</button>
    </body>
    <script>                   
        //Function Search     
        function findString() {
        var x = document.getElementById("searcher").value;             
        window.find(x);         
        }

        //Function Enter Search
        var input = document.getElementById("searcher");        
        input.addEventListener("keyup", function(event) {        
        if (event.keyCode === 13) {            
            event.preventDefault();            
            document.getElementById("cari").click();
        }    
        })
        
        //Function Kembai ke Atas
        mybutton = document.getElementById("ToUp");        
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }
    
        function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        };
    </script>    
    <footer>       
    </footer>    
</html>