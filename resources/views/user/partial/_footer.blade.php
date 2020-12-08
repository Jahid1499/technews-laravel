<script src="{{asset('assets/user')}}/js/jquery_ajax.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
<script src="{{asset('assets/user')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/user')}}/js/jquery.simpleTicker.js"></script>
<script src="{{asset('assets/user')}}/js/lightbox.js"></script>
<script src="{{asset('assets/user')}}/js/videopopup.js"></script>
<script>
    $(function(){
        $.simpleTicker($("#ticker-slide"),{'effectType':'slide'});
    });
    $('#myTab li:first-child a').tab('show')
</script>
<script type="text/javascript">
    /*function myfunc(id){
        let myid = id;

        $("#one").VideoPopUp({
            backgroundColor: "#17212a",
            opener: "video"+myid,
            idvideo: "v1"+myid,
            pausevideo: false
        });
    }*/
    $(function() {
        $('#vidBox').VideoPopUp({
            backgroundColor: "#17212a",
            opener: "video1",
            idvideo: "v1",
            pausevideo: false
        });
    });
</script>
<script src="{{asset('assets/user')}}/js/main.js"></script>

</html>
