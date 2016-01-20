<!-- Nav tabs -->
<a href="logout" title="logout" class="logout btn btn-warning">Logout</a>
<br />
<br />
<ul class="nav nav-tabs" role="tablist">
    <li class="active">
        <a href="#clients" role="tab" data-toggle="tab">Clients</a>
    </li>
    <li>
        <a href="#folders" role="tab" data-toggle="tab">Strecken</a>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="clients">
        <?php $this->load->view('clients_view');?>
    </div>
    <div class="tab-pane" id="folders">
        <?php $this->load->view('folders_view');?>
    </div>
</div>


