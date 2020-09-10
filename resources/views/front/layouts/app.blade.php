<!DOCTYPE html>
<html lang="en">
@include("front.includes.head")
<body>

<div id="wrapper">
    @include("front.includes.header")
    @yield("content")
    @include("front.includes.footer")

    <div class="dmtop">Scroll to Top</div>
</div><!-- end wrapper -->

@include("front.includes.scripts")
</body>
</html>