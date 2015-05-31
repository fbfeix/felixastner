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