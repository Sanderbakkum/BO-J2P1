<?php $this->layout('layouts::layoutblog');?>

<body class="align">

        <center><div class="grid align__item">

            <div class="register">
                <h2 class="text">Post maken</h2>
        <form action ="<?php echo url('post.handle')?>" method="POST">
            <div class="form__field">
        <input type = "text" name = "image" placeholder = "Afbeelding link"><br><br>
            </div>

			<div class="form__field">
        <input type = "text" name = "title" placeholder = "Titel" required><br><br>
            </div>

			<div class="form__field">
        <input type = "text" name = "description" placeholder = "Beschrijving" required><br><br>
            </div>


            <div class="form__field">
        <input type = "submit" value = "Post">
            </div>
            </form>
    </div>
</div></center>
    </body>



<?php


?>