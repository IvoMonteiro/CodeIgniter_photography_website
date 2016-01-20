
<div class="clients_form panel" >
    <h3>New Client</h3>

    <?php $attributes = array('id' => 'clients_form','role' => 'form'); echo form_open('',$attributes);?>

    <div class="form-group">
        <?php 
        echo form_label("Title");
        echo form_input('client_name','', ' class="form-control"');
        ?>
    </div>

    <?php 
    $data = array(
            'name' => 'submit_clients',
            'class' => 'btn btn-default btn_submit',
            'value' => 'submit_clients',
            'type' => 'submit',
            'content' => 'New Clients ( multiple separated by "," )'
        );

        echo form_button($data);
        ?>
    <?php echo form_close(); ?>
</div>
<div class="clients_list panel">
    <h3>Client List</h3>

    <?php if(!empty($clients)) { ?>
    <ul>

        <?php foreach($clients as $c) { ?>
        <li>
            <?php $attributes = array('role' => 'form'); echo form_open('',$attributes);?>
            <p>
            <?php
                $data = array(
                        'name' => 'delete_client',
                        'class' => 'btn btn-danger btn-sm',
                        'value' => $c->id,
                        'type' => 'submit',
                        'content' => 'Löschen'
                );

                echo form_button($data);
                ?>
                <?php echo $c->name;?>
            </p>
            <?php echo form_close(); ?>
        </li>

        <?php } ?>
    </ul>
    <?php 
        } else { ?>
    <p>No Clients yet</p>
    <?php } ?>

</div>

