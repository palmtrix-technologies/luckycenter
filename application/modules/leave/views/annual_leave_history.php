<div class="row">
            <div class="col-sm-12">
                <div class="panel ">
                <div class="panel-heading" >
                    <div class="panel-title">
                        <h4><?php echo display('annual_leave_history') ?></h4>
                    </div>
                </div>
                    <div class="panel-body">

                
                    <form method="GET" action=""  >
                      
                            
                       
                        <div class="panel panel-default thumbnail"> 

<div class="panel-body table-responsive">

    <table width="100%" class="datatable table table-striped table-bordered table-hover">
        <thead>
            <tr>
               <th><?php echo display('cid') ?></th>
               <th><?php echo display('Empl_id')?></th>
               <th><?php echo display('emp_id')?></th>
               <th><?php echo display('leave_type')?></th>
               <th><?php echo display('leave_startdate')?></th>
               <th><?php echo display('leave_end_date')?></th>
           
               <!-- <th><?php echo display('status')?></th> -->
              
            </tr>
        </thead>
        <tbody>
            <?php 
            if (!empty($leaves)) { ?>
                <?php $sl = 1; 
              $today=date("Y-m-d");
                $startdate=date("yy F d",strtotime($today));
                $d=strtotime($today);
                $enddate=date("yy F d",strtotime("+2 month",$d));
// $start= date('yy F d ');
// $end= date_format($enddate,"Y-m-d");

                ?>
                <?php foreach ($leaves as $row) { ?>
                    <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                        <td><?php echo $sl; ?></td>

                        <td><?php echo $row->employee_id; ?></td>
                        <td><?php echo $row->first_name.$row->middle_name.$row->last_name; ?></td>

                    <td><?php echo $row->type; ?></td>
                    <td><?php echo $startdate; ?></td>
                    <td><?php echo $enddate; ?></td>
                  
                    <!-- <td><?php if($row->IsActive==1){
                        echo "Available";} ?></td> -->
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

