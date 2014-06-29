<div id="school" class="create">
    <?php 
    echo validation_errors();
    echo form_open('school/create'); 
    ?>          
      Id: <input type="text" name="id" />      
          
      Name: <input type="text" name="name" />      
          
      Address: <textarea name="address"></textarea>      
          
      Landline: <input type="text" name="landline" />      
          
      Mobile: <input type="text" name="mobile" />      
          
      Enabled: <input type="checkbox" name="enabled" />      
        <a href="<?php echo site_url('school'); ?>">Cancel</a> | 
    <button>Create</button>
  </form>
</div>