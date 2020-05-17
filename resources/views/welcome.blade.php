<title>Ngaji Online</title>
@include('css') 
<section id="hero" class="bg">    
    @include('header')
    <div class="hero-heading">
        @yield('head')      
    </div>
    <div class="row mgmt-links-wrapper col-md-12">        
        <div class="col-sm-6 col-md-6 col-lg-6">
            <a href="quran">
                <div class="link-box">
                    <i class="fa fa-sticky-note"></i>
                    <p>Baca Al-Quran</p>
               </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
             <a href="artikel">
                 <div class="link-box">
                     <i class="fa fa-eye"></i>
                     <p>Baca Artikel</p>
                 </div>
            </a>    
        </div>        
    </div>
</section>
    
          