
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->
  <div class="container-fluid">

    <div class="row-fluid">

      <div class="span6">
		<?php if($this->session->flashdata('message')):?>
			
			<div class="alert alert-info"> 
				<?php echo $this->session->flashdata('message')?>
			</div>

		<?php endif?>
		<?php if(count($abs)):?>

        <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Ruels table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Sl</th>
                  <th>Rules</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

              	<?php foreach($abs as $ab):?>
                <tr class="odd gradeX">
                  <td><?php echo $ab->id?></td>
                  <td><?php echo $ab->description?></td>
                  <td><a href="<?php echo base_url('abs/edit?id='.$ab->id)?>">Edit</a> | <a href="">Delete</a></td>
                  
                </tr>
           	 <?php endforeach?>
                
              </tbody>
            </table>
          </div>
          </div>

         <?php else:?>

         	<div class="text-center"> 
				<h4>No data found</h4>
				<a href="<?php echo base_url('convention/create')?>">Create new</a>
         	</div>

         <?php endif?>
      </div>

    </div>
 </div>
  </div>
</div>


