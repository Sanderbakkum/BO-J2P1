<?php $this->layout('layouts::layoutblog');?>
<br>
<br>
<br>
<a href="/blog/post" class="myButton">Post Maken</a>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<br>
<br>
<br>
<div class="row">
    <?php
        $connection = dbConnect();
        $sql = "SELECT * FROM `blog`";
        $statement = $connection->query( $sql );
        $query = $statement->fetchAll();
        ?>  
        <?php foreach($query as $k):?>
        <div class="card" style="width: 18rem; margin: 10px;">
        <br>
        <img class="card-img-top" src="<?php echo $k['image'];?>" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title"><?php echo $k['title'];?></h5>
        <p class="card-text"><?php echo $k['description'];?></p>
        <p class="card-text">- <?php echo	$k['creator']?></p>
        </div>
        </div>
        <?php endforeach;?>
        </div>
        <br>
<?php


?>

<style>
.myButton {
	background-color:#e6e6e6;
	border-radius:28px;
	border:1px solid #0000ff;
	display:inline-block;
	cursor:pointer;
	color:#1e00ff;
	font-family:Arial;
	font-size:17px;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #662828;
	&:hover {
	background-color:#2a4ebd;
}
 &:active {
	position:relative;
	top:1px;
}
 }

</style>