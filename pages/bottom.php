
   <html>
   </div>
<script type="text/javascript">
$(document).ready(function(){
        $('.navMenu__item a').click(function(e){
            e.preventDefault();
            var urlPart = $(this).attr('href');
            $.ajax({
                type: "GET",
                url: 'index.php' + urlPart,
                cache: false,
                success: function (msg) {
                    $('#phpContent').html(msg);
                }
            })
        })
    }
)
</script>
</body></html>
