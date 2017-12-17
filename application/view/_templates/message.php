<?php if(isset($alert)): ?>
    <div class="alert slideDown <?php echo $alert[0]; ?>">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong><?php echo $alert[1]; ?> </strong> <?php echo $alert[2]; ?>
    </div>

<?php else: ?>
    <div class="alert slideDown warning">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Warning! </strong> Unhandled Exception happened, contact system administrator.
    </div>

<?php endif; ?>
<script>
    var close = document.getElementsByClassName("closebtn");
    close[0].onclick = function() {
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function () {
            div.style.display = "none";
        }, 600);
    }
</script>
