<div class="row">
            <div class="col-sm-12">
                <div class="panel ">
                <div class="panel-heading" >
                    <div class="panel-title">
                        <h4><?php echo display('searchemployeedocuments') ?></h4>
                    </div>
                </div>
                    <div class="panel-body">

                    <?php 
                    // echo  form_open('employee/Employees/search_emp_doc',array('class' => 'form-inline','method'=>'get'))
                    ?>
                    <form method="GET" action="search_emp_doc"  >
                        <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('emp_id') ?> *</label>
                            <div class="col-sm-4">
                       <?php 
                        // if($this->session->userdata('isAdmin')==1 || $this->session->userdata('supervisor')==1){
                            ?> 
                              <?php 
                              echo form_dropdown('employee_id',$dropdownemp,(!empty($dropdownemp)?$dropdownemp->employee_id:''),'class="form-control codeigniterselect" id="employee_id"') ?>
                              <?php 
                            // }else{
                                ?> 
                                <!-- <input type="text" name="employee_name" class="form-control" value="<?php echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name');?>" readonly> -->
                                 <!-- <input type="hidden" name="employee_id" id="employee_id" class="form-control" value="<?php echo $this->session->userdata('employee_id');?>"> -->
                               <?php
                            //  }
                             ?>
                               
                            </div>
                            
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('search') ?></button>
                        </div>
                        <div class="panel panel-default thumbnail"> 

<div class="panel-body table-responsive">
    <table width="100%" class="datatable table table-striped table-bordered table-hover">
        <thead>
            <tr>
               <th><?php echo display('cid') ?></th>
               <th><?php echo display('doc_ref_id')?></th>
               <th><?php echo display('doc_type')?></th>
               <th><?php echo display('Authority')?></th>
               <th><?php echo display('issuing_date')?></th>
               <th><?php echo display('exp_date')?></th>
              
               <th><?php echo display('status')?></th>
              
            </tr>
        </thead>
        <tbody>
            <?php 
            if (!empty($emp_documents)) { ?>
                <?php $sl = 1; ?>
                <?php foreach ($emp_documents as $row) { ?>
                    <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                        <td><?php echo $sl; ?></td>
                    <td><?php echo $row->Doc_Name; ?></td>
                    <td><?php echo $row->Ref_ID; ?></td>
                     <td><?php echo $row->Issuing_authority; ?></td>
                    <td><?php echo $row->Issuing_Date; ?></td>
                    <td><?php echo $row->Epx_Date; ?></td>
              
                    <td><?php if($row->IsActive==1){
                        echo "Active";} ?></td>
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
<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body table-responsive">
                <div class="panel-heading" >
                    <div class="panel-title">
                        <h4><?php echo display('add_emp_doc') ?></h4>
                    </div>
                </div>
                <div class="panel-body">
      <?php echo  form_open_multipart('employee/Employees/create_emp_doc','class="form-inner"') ?>
                        <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('emp_id') ?> *</label>
                            <div class="col-sm-4">
                     
                              <?php
                              echo form_dropdown('employee_id',$dropdownemp,(!empty($dropdownemp)?$dropdownemp->employee_id:''),'class="form-control codeigniterselect" id="employee_id"') ?>
                   
                          
                               
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('doc_name') ?> *</label>
                            <div class="col-sm-4">
                     
                              <?php
                              // $js='onChange="Checkdoctype($this)"';
                              $dropdocs=array("select"=>"Select Type","passport"=>"Passport","visa"=>"Visa","medical"=>"Medical","insurance"=>"Insurance","license"=>"License","other"=>"Other");
                        
                              // echo form_dropdown('doc_name',$dropdocs,'' ,'class="form-control codeigniterselect" id="doc_name"');
                            
                            ?>
                   
                          <select name="doc_name" id="doc_name" class="form-control codeigniterselect">
                          <option value="select">Select Type</option>
                          <option value="passport">Passport</option>
                          <option value="visa">Visa</option>
                          <option value="medical">Medical</option>
                          <option value="insurance">Insurance</option>
                          <option value="other">Other</option>
                          </select>
                               
                            </div>
                        </div> 
                        <div class="form-group row" style="display:none;" id="othertextdiv">
                          <label for="othertext" class="col-sm-3 col-form-label"><?php echo display('doc_name')?>*</label>
                          <div class="col-sm-4">
                            <input type="text" name="othertext" id="othertext" class="form-control form-control " value="" >
                          </div>

                        </div>
                        <div class="form-group row">
                          <label for="fileupld" class="col-sm-3 col-form-label"><?php echo "File"?>*</label>
                          <div class="col-sm-4">
                            <input type="file" name="fileupld" id="fileupld"  class="form-control " >
                          </div>

                        </div>
                        <div class="form-group row">
                          <label for="reference_id" class="col-sm-3 col-form-label"><?php echo "Reference ID"?>*</label>
                          <div class="col-sm-4">
                            <input type="text" name="reference_id" id="" class="form-control " value="">
                          </div>

                        </div>
                        <div class="form-group row">
                          <label for="issue_auth" class="col-sm-3 col-form-label"><?php echo display('Authority')?>*</label>
                          <div class="col-sm-4">
                            <input type="text" name="issue_auth" id="" class="form-control " value="">
                          </div>

                        </div>
                        <div class="form-group row">
                          <label for="issue_date" class="col-sm-3 col-form-label"><?php echo display('issuing_date')?>*</label>
                          <div class="col-sm-4">
                            <input type="text" name="issue_date" id="" class="form-control form-control datepicker" value="">
                          </div>

                        </div>
                        <div class="form-group row">
                          <label for="exp_date" class="col-sm-3 col-form-label"><?php echo display('exp_date')?>*</label>
                          <div class="col-sm-4">
                            <input type="text" name="exp_date" id="" class="form-control form-control datepicker" value="">
                          </div>

                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('check_in') ?></button>
                        </div>
                    <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div></div>
<script src="<?php echo base_url('assets/js/employee.js') ?>" type="text/javascript"></script>
