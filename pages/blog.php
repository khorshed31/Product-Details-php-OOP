<?php include 'header.php'; ?>

<style>
    body{
        background-color: #0f6674;
    }
</style>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($blogs as $item){?>
            <div class="col-md-4 mb-4">
                <div class="card bg-info">
                    <img src="assets/img/<?php echo $item['image'];?>" alt="" class="card-img-top"/>
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $item['title'];?></h3>
                        <h4><?php echo $item['author'];?></h4>
                        <hr/>
                        <a href="" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
