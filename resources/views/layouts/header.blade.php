<header class="header-container">
    <div class="container">
        <div class="top-row">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div id="logo">
                        <!--<a href="index"><img src="images/logo.png" alt="logo"></a>-->
                        <a href="/"><span>vacay</span>home</a>
                    </div>
                </div>
                <div class="col-sm-6 visible-sm">
                    <div class="text-right"><button type="button" class="book-now-btn">Book Now</button></div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header page-scroll">
                            <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                        <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                            <ul class="list-unstyled nav1 cl-effect-10">
                                <li><a data-hover="Home" href="/" class="{{ ($title  === "Home")? 'active' : '' }}"><span>Home</span></a></li>
                                <li><a data-hover="About"  href="about" class="{{ ($title  === "About")? 'active' : '' }}" ><span>About</span></a></li>
                                <li><a data-hover="Rooms"  href="rooms" class="{{ ($title  === "Rooms")? 'active' : '' }}"><span>Rooms</span></a></li>
                                <!-- <li><a data-hover="Gallery" href="gallery" class="{{ ($title  === "Gallery")? 'active' : '' }}"><span>Gallery</span></a></li>-->
                                <li><a data-hover="Dinning" href="dinning" class="{{ ($title  === "Dinning")? 'active' : '' }}"><span>Dinning</span></a></li>
                                <li><a data-hover="News" href="news" class="{{ ($title  === "News")? 'active' : '' }}"><span>News</span></a></li>
                                <li><a data-hover="Contact Us" href="contact" class="{{ ($title  === "Contact")? 'active' : '' }}"><span>Contact Us</span></a></li>
                            </ul>

                        </div>
                    </nav>
                </div>
                <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                    <div class="text-right"><button type="button" class="book-now-btn">Book Now</button></div>
                </div>
            </div>
        </div>
    </div>
</header>