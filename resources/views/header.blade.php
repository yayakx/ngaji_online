<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<nav class="navbar navbar-expand-lg p-0 container">
        <a class="navbar-brand" href="/"><h1>Ngaji<h1 class="text-success col-md-12">Online</h3></h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-nav ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-success" href="/">Home</a>
                </li>                                 
                <li class="nav-item">
                    @if (Session::get('login'))
                        <a class="nav-link btn btn-outline-success" href=
                        @if (Auth::user()->role == 1)
                            "admin"
                        @else
                            "member"
                        @endif
                        >{{ Auth::user()->name }}</a>                           
                    @else
                    <a class="nav-link btn btn-outline-success" href="member">Member</a>    
                    @endif                                             
                    
                </li>                               
            </ul>
        </div>
</nav>