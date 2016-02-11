    <script>
    
    
    
    $(document).ready(function() {
        
        
        Dropzone.autoDiscover = false;
        
        var myDropzone = new Dropzone("#productimg-dropzone");
        
        myDropzone.on("sucess", function(file){
            
            $("#productimg").load("ajax/products.php?id<?php echo $opened['id']; ?>");
            
            
        })
        
        
    });
    
    
    
</script>  
    
    <h1>Products</h1>

        <div class = "col-md-9">
        
        <?php if(isset($message)){echo $message;}?>
            
        
        
        <form action = "index.php?page=products&id=<?php echo $opened['id'];?>" method = "post" role = "form">
            <!--form to create pages for site -->
            
            <div class = "form-group">
                <label for="ProductName">Product Name: </label>
                <input class = "form-control" type = "text" name = "ProductName" id = "ProductName" value = "<?php echo $opened['ProductName'];?>" placeholder = "Product Name" autocomplete = "off"></input>
              </div>
            
            
                        <div class = "form-group">
                <label for="ProductDescription">Product Description: </label>
                <input class = "form-control" type = "text" name = "ProductDescription" id = "ProductDescription" value = "<?php echo $opened['ProductDescription'];?>" placeholder = "Product Description" autocomplete = "off"></input>
              </div>
        
        
                <div class = "form-group">
                <label for="CategoryID">Category ID: </label>
                <input class = "form-control" type = "text" name = "CategoryID" id = "CategoryID" value = "<?php echo $opened['CategoryID'];?>" placeholder = "Category ID" autocomplete = "off"></input>
              </div>
        
                <div class = "form-group">
                <label for="SupplierID">Vendor ID: </label>
                <input class = "form-control" type = "text" name = "SupplierID" id = "SupplierID" value = "<?php echo $opened['SupplierID'];?>" placeholder = "Vendor ID" autocomplete = "off"></input>
              </div>
            
            
            <div class = "form-group">
                <label for="InitialCost">Wholesale Cost: </label>
                <input class = "form-control" type = "text" name = "InitialCost" id = "InitialCost" value = "<?php echo $opened['InitialCost'];?>" placeholder = "Wholesale Cost" autocomplete = "off"></input>
              </div>
              
              <div class = "form-group">
                <label for="DateArrived">Arrival Date:</label>
                <input class = "form-control" type = "text" name = "DateArrived" id = "DateArrived" value = "<?php echo $opened['DateArrived'];?>" placeholder = "Arrival Date" autocomplete = "off"></input>
              </div>
                           
             
            
            <button type = "submit" class = "btn btn-default">Save</button>
            <input type = "hidden" name = "submitted" value = "1">
            
            <?php if(isset($opened['id'])){  ?>
            
              <input type = "hidden" name = "id" value"<?php echo $opened['id'];?>">
              
           <?php }?>
            
        </form>    
        
        <form action="productimguploads.php?id=<?php echo $opened['id'];?>" class="dropzone" id="productimg-dropzone">
            
  
            <input type = "file" name = "file">
            
        </form>
        
        </div>
    </div>
    
            
