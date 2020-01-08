<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        var scene_x = $('.scene').attr('pos-x');
        var scene_y = $('.scene').attr('pos-y');
        var scene_z = $('.scene').attr('pos-z');

        $.ajax({
            type: 'POST',
            url: 'core/scene_generator/index.php',
            data: 'scene_x='+scene_x+'&scene_y='+scene_y+'&scene_z='+scene_z,
            //
            success: function(data) {
                $('.scene').html(data);
            }
        });

    });

</script>
</body>

</html>
