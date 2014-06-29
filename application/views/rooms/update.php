<div id="room" class="update">
    <?php 
    echo validation_errors();
    echo form_open('room/update'); 
    ?>          
      Id: <input type="text" name="id" value="<?php echo set_value('id', $room->id); ?>" />      
          
      Number: <input type="text" name="number" value="<?php echo set_value('number', $room->number); ?>" />      
          
      Enabled: <input type="checkbox" name="enabled" checked="<?php echo set_value('enabled',  $room->enabled); ?>" />      
        <a href="<?php echo site_url('room/read/'  . $room->id); ?>">Cancel</a> | 
    <button>Update</button>
  </form>
</div>