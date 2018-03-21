<h1>Edit entry</h1>

<form method="POST" action="<?php echo base_url().'home/input_edit_function/'.$result->id ?>">
    <input type="hidden" name="id" value="<?php echo $result->id; ?>"/>
    Name: <input type="text" name="name" value="<?php echo $result->name; ?>" style="margin-left: 27px;margin-bottom: 20px;" /><br/>
    Surname: <input type="text" name="uploaded_on" value="<?php echo $result->uploaded_on; ?>" style="margin-left: 10px;" /> <br/>
    <input type="submit" value="Update" style="margin:15px" />
</form>