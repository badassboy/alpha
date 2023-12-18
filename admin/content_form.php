<div class="container church_group show" id="church_group">
               
    <form method="post" action="chgroups_process.php" enctype="multipart/form-data">

    <div class="row">

        <div class="col">
             <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="Title" required="required">
  </div>
        </div>

        <div class="col">
            <div class="form-group">
    <label>Category</label>
    <select class="form-control" name="category" required>
      <option>Select</option>
      <option value="headline">Headline</option>
      <option value="featured">Featured</option>
      <option value="latest">Latest</option>
    </select>
    
  </div>
        </div>


        <div class="col">
           <div class="form-group">
    <label>Picture</label>
   
      <input type="file" name="picture" class="form-control-file" >
      
  </div>
        </div>
        
    </div>

                 

    <div class="row">

      <div class="col">

        <div class="form-group">
    <label>Short Description</label>
    <textarea class="form-control" name="description" rows="3" placeholder="Description"
    ></textarea>
  </div>
      </div>

      <div class="col">
        <label>Sector</label>
    <select class="form-control" name="sector"  required>
      <option>Select</option>
      <option value="business">Business</option>
      <option value="sports">Sports</option>
      <option value="politics">Politics</option>
      <option value="education">Education</option>
      <option value="entertainment">Entertainment</option>
    </select>
        
      </div>
      
    </div>

<div class="form-group">
    <label>Full  Description</label>
    <textarea class="form-control" name="full_desc" rows="3" placeholder="Description"
    ></textarea>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit News</button>
</form> 
                 
            </div>