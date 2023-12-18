    <?php

    // include("../functions.php");
    // $info = new News();




    ?>

    <div class="container add_member" id="add_member">
             
              <header>All News</header>
              <table class="table">

                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Title</th>
                      <th scope="col">Sector</th>
                      <th scope="col">Category</th>
                      <th scope="col">Short Desc</th>
                      <th scope="col">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $data = $info->allNews();
                    foreach ($data as $row) {
                      $id = $row['newsId'];
                    

                    ?>
                    <tr id="delete<?php echo $row['newsId'] ?>">
                      <th scope="row"><?php echo $row['newsId']; ?></th>
                      <td><?php echo $row['title']; ?></td>
                      <td><?php echo $row['sector']; ?></td>
                      <td><?php echo $row['category']; ?></td>
                      <td><?php echo $row['short_desc']; ?></td>
                      <td>
                        <a href="delete_news.php?id=<?php echo $id;?>">
                          <button  class="btn btn-danger">delete</button></a>

                      </td>
                    </tr>

                  <?php } ?>

                   </tbody>
                </table>


              
            </div>

            <script type="text/javascript">
              // deleteNews(id){

              //   if (confirm("Are you sure")) {
              //     $.ajax({
              //       type:"post",
              //       url:"delete_news.php",
              //       data:{delete_id:id},
              //       success:function(data){
              //           $("#delete" + id).hide();
              //       }
              //     })
              //   }

              // }
            </script>