 <div class="col-lg-7 px-0">
<div class="owl-carousel main-carousel position-relative">
    
   <!--  <div class="position-relative overflow-hidden" style="height: 500px;">

        <img class="img-fluid h-100" src="img/news-800x500-1.jpg" style="object-fit: cover;">
        <div class="overlay">
            <div class="mb-2">
                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                    href="">Business</a>
                <a class="text-white" href="">Jan 01, 2045</a>
            </div>
            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
        </div>
    </div> -->          <?php

                        $data = $info-> headingNews();
                        foreach ($data as $row) {
                            $id = $row['newsId'];
                        
                        


                        ?>

                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="admin/<?php echo $row['picture']; ?>" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Headline</a>
                                <a class="text-white" href=""><?php echo $row['news_date']; ?></a>
                            </div>
    <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="single.php?link=<?php echo  $id; ?>">
        <?php echo $row['title']; ?></a>
                        </div>
                    </div>

                <?php  } ?>

                  <!--   <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="img/news-800x500-3.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Business</a>
                                <a class="text-white" href="">Jan 01, 2045</a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
                        </div>
                    </div> -->

                </div>
            </div>