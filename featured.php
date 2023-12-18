<div class="container-fluid pt-5 mb-3">
<div class="container">
    <div class="section-title">
        <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
    </div>
    <div class="owl-carousel news-carousel carousel-item-4 position-relative">

        <?php

        $data = $info->featuredNews();
        // var_dump($data);
        foreach ($data as $row) {
        $picture = $row['picture'];
        $id = $row['newsId'];
        

        ?>

        <div class="position-relative overflow-hidden" style="height: 300px;">

          
    <img class="img-fluid h-100" src="admin/<?php echo $picture; ?>" style="object-fit: cover;">
            <div class="overlay">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                        href="">Business</a>
<a class="text-white" href=""><small><?php echo $row['news_date']; ?></small></a>
                </div>
    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="single.php?link=<?php echo  $id; ?>">
        <?php echo $row['title']; ?></a>
            </div>

      

                </div>

            <?php } ?>
<div class="position-relative overflow-hidden" style="height: 300px;">
   
</div>

<div class="position-relative overflow-hidden" style="height: 300px;">
   
</div>

<div class="position-relative overflow-hidden" style="height: 300px;">
   
</div>

<div class="position-relative overflow-hidden" style="height: 300px;">
    
</div>
            </div>
        </div>
    </div>