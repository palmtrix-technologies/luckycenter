<div class="row">
            <div class="col-sm-12">
                <div class="panel ">
                <div class="panel-heading" >
                    <div class="panel-title">
                        <h4><?php echo display('doc_exp_list') ?></h4>
                    </div>
                </div>
                    <div class="panel-body">

                
                    <form method="GET" action=""  >
                      
                            
                       
                        <div class="panel panel-default thumbnail"> 

<div class="panel-body table-responsive">
<div class="panel-heading" >
                    <div class="panel-title">
                      <center>  <h4 style="color:red;"><u><?php echo display('red_zone') ?></u></h4></center>
                      <br>
                    </div>
                </div>
    <table width="100%" class="datatable table table-striped table-bordered table-hover">
        <thead>
            <tr>
               <th><?php echo display('cid') ?></th>
               <th><?php echo display('emp_id')?></th>

               <th><?php echo display('doc_ref_id')?></th>
               <th><?php echo display('doc_type')?></th>
               <th><?php echo display('Authority')?></th>
               <th><?php echo display('issuing_date')?></th>
               <th><?php echo display('exp_date')?></th>
               <!-- <th><?php echo display('status')?></th> -->
              
            </tr>
        </thead>
        <tbody>
            <?php 
            if (!empty($expirydata)) { ?>
                <?php $sl = 1; ?>
                <?php foreach ($expirydata as $row) { ?>
                    <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                        <td><?php echo $sl; ?></td>

                        <td><?php echo $row->Emp_ID; ?></td>
                      

                    <td><?php echo $row->Ref_ID; ?></td>
                    <td><?php echo $row->Doc_Name; ?></td>
                     <td><?php echo $row->Issuing_authority; ?></td>
                    <td><?php echo $row->Issuing_Date; ?></td>
                    <td><?php echo $row->Epx_Date; ?></td>
                    <!-- <td><?php if($row->IsActive==1){
                        echo "Active";} ?></td> -->
                    </tr>
                    <?php $sl++; ?>
                <?php } ?> 
            <?php } ?> 
        </tbody>
    </table>  <!-- /.table-responsive -->
    <div class="panel-heading" >
                    <div class="panel-title">
                      <center>  <h4 style="color:orange;"><u><?php echo display('orng_zone') ?></u></h4></center>
                      <br>
                    </div>
                </div>
    <table width="100%" class="datatable table table-striped table-bordered table-hover">
        <thead>
            <tr>
               <th><?php echo display('cid') ?></th>
               <th><?php echo display('emp_id')?></th>

               <th><?php echo display('doc_ref_id')?></th>
               <th><?php echo display('doc_type')?></th>
               <th><?php echo display('Authority')?></th>
               <th><?php echo display('issuing_date')?></th>
               <th><?php echo display('exp_date')?></th>
               <!-- <th><?php echo display('status')?></th> -->
              
            </tr>
        </thead>
        <tbody>
            <?php 
            if (!empty($expirydata_orengezone)) { ?>
                <?php $sl = 1; ?>
                <?php foreach ($expirydata_orengezone as $row) {
                  
                     ?>
                    <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                        <td><?php echo $sl; ?></td>

                        <td><?php echo $row->Emp_ID; ?></td>
                      

                    <td><?php echo $row->Ref_ID; ?></td>
                    <td><?php echo $row->Doc_Name; ?></td>
                     <td><?php echo $row->Issuing_authority; ?></td>
                    <td><?php echo $row->Issuing_Date; ?></td>
                    <td><?php echo $row->Epx_Date; ?></td>
                    <!-- <td><?php if($row->IsActive==1){
                        echo "Active";} ?></td> -->
                    </tr>
                    <?php $sl++; ?>
                <?php } ?> 
            <?php } ?> 
        </tbody>
    </table>  <!-- /.table-responsive -->

    <div class="panel-heading" >
                    <div class="panel-title">
                      <center>  <h4 style="color:green;"><u><?php echo display('green_zone') ?></u></h4></center>
                      <br>
                    </div>
                </div>
    <table width="100%" class="datatable table table-striped table-bordered table-hover">
        <thead>
            <tr>
               <th><?php echo display('cid') ?></th>
               <th><?php echo display('emp_id')?></th>

               <th><?php echo display('doc_ref_id')?></th>
               <th><?php echo display('doc_type')?></th>
               <th><?php echo display('Authority')?></th>
               <th><?php echo display('issuing_date')?></th>
               <th><?php echo display('exp_date')?></th>
               <!-- <th><?php echo display('status')?></th> -->
              
            </tr>
        </thead>
        <tbody>
            <?php 
            if (!empty($expirydata_greenzone)) { ?>
                <?php $sl = 1; ?>
                <?php foreach ($expirydata_greenzone as $row) { ?>
                    <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                        <td><?php echo $sl; ?></td>

                        <td><?php echo $row->Emp_ID; ?></td>
                      

                    <td><?php echo $row->Ref_ID; ?></td>
                    <td><?php echo $row->Doc_Name; ?></td>
                     <td><?php echo $row->Issuing_authority; ?></td>
                    <td><?php echo $row->Issuing_Date; ?></td>
                    <td><?php echo $row->Epx_Date; ?></td>
                    <!-- <td><?php if($row->IsActive==1){
                        echo "Active";} ?></td> -->
                    </tr>
                    <?php $sl++; ?>
                <?php } ?> 
            <?php } ?> 
        </tbody>
    </table>  <!-- /.table-responsive -->
</div>
</div>
                        </div> 
                    
                       
                    <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

