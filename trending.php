<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">Trending News</h4>
    </div>

    <div class="bg-white border border-top-0 p-3">

        <?php
        $id = "";
        $data = $info->trendingNews();
        foreach ($data as $row) {
            $id = $row['newsId'];

        
        ?>

<div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">

    <img class="img-fluid" src="admin/<?php echo $row['picture']; ?>" style="object-fit: cover; height: 100%; width: 100%;">

    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
        <div class="mb-2">
            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Trending</a>
    <a class="text-body" href=""><small></small><?php echo $row['news_date']; ?></a>
        </div>
<a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="single.php?link=<?php echo $id; ?>"><?php echo $row['title']; ?></a>
    </div>
</div>
<?php } ?>
        

       
       
        


    </div>
</div>