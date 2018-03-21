<div>
    <table>
        <thead>
            <tr>
                <td>No.</td>
                <td>Name</td>
                <td>Mail</td>																	
            </tr>
        </thead>
        <tbody>
            <?php foreach($record as $row):?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->uploaded_on; ?></td>

            </tr>
            <?php endforeach;?>					
        </tbody>
    </table>
</div>



