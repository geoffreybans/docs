 <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/rainbow/rainbow.min.js"></script>
    <script src="js/rainbow/language/generic.js"></script>
    <script src="js/rainbow/language/html.js"></script>
    <script src="js/rainbow/language/css.js"></script>
    <script src="js/rainbow/language/javascript.js"></script>
    <script src="js/rainbowlines/rainbow.linenumbers.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.tocify.min.js"></script>
    <script src="js/prettify.js"></script>

    <script>
        $(function() {

          $("#toc").tocify({ selectors: "h2, h3, h4", scrollTo: 60, highlightOffset: 60, extendPage: true });

          prettyPrint();

          $(".optionName").popover({ trigger: "hover", container: "body" });

          $("a[href='#']").click(function(event) {

              event.preventDefault();

          });

          Rainbow.color();
        });
    </script>
  

</div>
<!--EO gliverContainer-->


</body>
</html>