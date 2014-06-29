<div id="room" class="create">
    <?php 
    echo validation_errors();
    echo form_open('room/create'); 
    ?>          
      Id: <input type="text" name="id" />      
          
      Number: <input type="text" name="number" />      
          
      Enabled: <input type="checkbox" name="enabled" />      
        <a href="<?php echo site_url('room'); ?>">Cancel</a> | 
    <button>Create</button>
  </form>
</div>