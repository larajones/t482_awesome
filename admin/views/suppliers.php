 <h1>vendors</h1>

        <div class = "col-md-9">
        
        <?php if(isset($message)){echo $message;}?>
            
        
        
        <form action = "index.php?page=suppliers&id=<?php echo $opened['id'];?>" method = "post" role = "form">
            <!--form to create pages for site -->
            
            <div class = "form-group">
                <label for="SupplierName">Vendor Name: </label>
                <input class = "form-control" type = "text" name = "SupplierName" id = "SupplierName" value = "<?php echo $opened['SupplierName'];?>" placeholder = "Vendor Name" autocomplete = "off"></input>
              </div>
            
            
                        <div class = "form-group">
                <label for="SupplierEmail">Vendor Email: </label>
                <input class = "form-control" type = "text" name = "SupplierEmail" id = "SupplierEmail" value = "<?php echo $opened['SupplierEmail'];?>" placeholder = "Vendor Email" autocomplete = "off"></input>
              </div>
        
        
                <div class = "form-group">
                <label for="SupplierPhone">Vendor Phone:</label>
                <input class = "form-control" type = "text" name = "SupplierPhone" id = "SupplierPhone" value = "<?php echo $opened['SupplierPhone'];?>" placeholder = "Vendor Phone" autocomplete = "off"></input>
              </div>
        
                <div class = "form-group">
                <label for="AddressID">Address:</label>
                <input class = "form-control" type = "text" name = "AddressID" id = "AddressID" value = "<?php echo $opened['AddressID'];?>" placeholder = "Vendor Address ID" autocomplete = "off"></input>
              </div>
            
            <button type = "submit" class = "btn btn-default">Save</button>
            <input type = "hidden" name = "submitted" value = "1">
            
            <?php if(isset($opened['id'])){  ?>
            
              <input type = "hidden" name = "id" value"<?php echo $opened['id'];?>">
              
           <?php }?>
            
        </form>    
        </div>
    </div>
    
            
