<?php
get_header();
?>

    <body class="tk-myriad-pro">
        <div id="main-page">
            
            <header>
                <button onclick="mau()">
                    <img src="svg/menu.svg" />
                </button>
                <h1>Felix's Blog</h1>
            </header>
                        
            
            <div id="content">
                <article>
                    <section class="timeline-item">
                        <h3>Titel des Posts</h3>
                        <div class="desc">
                            <img />
                            <div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p><a href="#">Weiterlesen</a></p>
                            </div>
                            
                        </div>
                    </section>
                    <section class="timeline-item">
                        <h3>Titel des Posts</h3>
                        <div class="desc">
                            <img />
                            <div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                <p><a href="#">Weiterlesen</a></p>
                            </div>
                            
                        </div>
                    </section>
                </article>
            </div>

            <div id="menu" >
                <div id="sidebar" >
                    <nav>
                        
                        <img src="imgs/me.png" alt="ich" />
                        
                        <p><b>Herzlich Willkommen auf meinem Blog!</b></p>
                        <p>Mein Name ist Felix und ich bin Hobbyprogrammierer und zeitwilliger Freizeitfitnesspromoter.</p>
                        
                        <a href="#">Link</a>
                    </nav>
                </div>
            </div>

        
        </div>

        <script>

            var menu = document.getElementById("menu");
            
            var nav = new ResponsiveElement(menu, window.matchMedia("(max-width:40em)"));;
            
            console.log(nav.isOpen());
            
            function mau() {
                nav.toggle();
            }

        </script>
        
        <script src="//use.typekit.net/phn3blz.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
    </body>
</html>