<?php include("include/header.php"); ?>
<style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color:white;
        }

        .a1{ padding-top:100px;
             border-width:10px;
             border-radius: 10px;
             background-color: #eee; 
             padding: 25px 25px 25px 25px ;
             color:white;
             background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),url(images/img12.jpeg);

             background-position: center;
             background-repeat: no-repeat;
             background-size: cover;
             box-shadow: 5px 5px 5px #999
        }



        .a2{ padding-top:100px;
             border-width:10px;
             border-radius: 7px;
             background-color: #eee; 
             padding: 25px 25px 25px 25px ;
             color:white;
             background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .7));
             background-position: center;
             background-repeat: no-repeat;
             background-size: cover;
             box-shadow: 5px 5px 5px #999
        }

        .button2
        { padding: 10px 22px;
          text-align: center;
          font-size: 17px;
          width:200px}
        /*for form and label css*/
        .form{
            width: 50%;
            height: 50px;
            position: relative;
        }
        .form input{
            width: 100%;
            height: 100%;
            font-size: 170%;
            padding-top: 20px;
            padding-bottom: 14px;
            color:#595f6e;
            border:none;
            outline: none;
        }
        .form label
        {
            position: absolute;
            bottom: 0px;
            left: 0;
            width: 100%;
            height:100%;
            pointer-events: none;
            border-bottom: 1px solid black;
        }
        .form label::after{
            content:"";
            position: absolute;
            left:0px;
            bottom: -1px;
            height: 100%;
            width: 100%;
            border-bottom: 3px solid #5fa8d3;
            transform: translateX(-100&);
            transition: transform 0.3s ease;
        }
        .content-name {
            position: absolute;
            bottom: 5px;
            left: 0px;
            transition: all 0.3s ease;
        }
        .form input:focus + .label-name .content-name,
        .form input:valid + .label-name .content-name
        {
            transform:  translateY(-150%);
            font-size: 14px;
            color:#5fa8d3;
        }

        .form input:focus .label-name::after,
        .form input:valid + .label-name::after{

            transform: translateX(0%);

        }
        .checkmark
        {
            display: block;
            width: 20px;
            height: 20px;
            background-color:#595f6e ;
            border-radius:3px;
            position: relative;
        }
        #check:checked ~ .checkmark { 
            background-color: #5fa8d3; 
        }
        #check2:checked ~ .checkmark { 
            background-color: #5fa8d3; 
        }
        #check3:checked ~ .checkmark { 
            background-color: #5fa8d3; 
        }
        #check4:checked ~ .checkmark { 
            background-color: #5fa8d3; 
        }
        #check5:checked ~ .checkmark { 
            background-color: #5fa8d3; 
        }
        .checkmark::after
        {
            content: "";
            position: absolute;
            width: 9px;
            height: 14px;
            border-right: 2px solid white;
            border-bottom: 2px solid white;
            top:40;
            left:50;
            transform: translate(-50%, -90%) rotateZ(40deg) scale(1.1);
            opacity: 0;
            transition: all 0.6s;
        }
        #check:checked ~ .checkmark::after { 
            opacity: 1;
        }
        #check2:checked ~ .checkmark::after { 
            opacity: 1;
        }
        #check3:checked ~ .checkmark::after { 
            opacity: 1;
        }
        #check4:checked ~ .checkmark::after { 
            opacity: 1;
        }
        #check5:checked ~ .checkmark::after { 
            opacity: 1;
        }
    </style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
       
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable Student</h3>
            </div>
            <!-- /.card-header -->
            <form method="post">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="text-muted">
                                <th >From Date</th>
                                <th>To Date</th>
                                <th>ID</th>
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tues</th>
                                <th>Wed</th>
                                <th>Thurs</th>
                                <th>#Hours</th>
                                <th>Action</th>
                            </tr>
                </thead>
                <tbody>
              
                 <tr>
                

                 <td style="padding-top: 60px"><input style="font-size: 130%" type="date" class="form-control"  autocomplete="on"  name="date" autocomplete="off" required /> </td>
                                <td style="padding-top: 60px"><input style="font-size: 130%" type="date" class="form-control"  autocomplete="on"  name="todate" autocomplete="off" required /> </td>
                                <!-- <td style="padding-top: 60px"><input type="number"class="form-control has-warning" name="id" placeholder="Student ID"></td> -->
                               <td style="padding-top:60px"> <select style="width:200px; height:35px" class="custom-select" style="width:50% ; float:right!important"autocomplete="on"  id="inlineFormCustomSelect" name="id" required="required">
                                <option selected> select from ...</option>
                                           <?php

                                          $phone=$_SESSION['phone'];

                                            $con = new mysqli("localhost", "root", "", "traino");
                                            $stm = $con->prepare('select*from student where id_trainingadvisor = "'.$phone.'"');
                                            $stm->execute();
                                            $rs = $stm->get_result();
                                            while ($row = $rs->fetch_assoc()){
                                    
                                           
                                             extract($row);
                                             $idStu=$row['id_student'];
                                             $StuNum=$row['studentid'];
                                       
                                        

                                             ?>
                                           
                                <option  value="<?php echo $idStu;?>" ><?php echo $StuNum;?></option>

                                                         <?php
                                                    }
                                               
                                            
                                                

                                             ?>
    
                            </select></td>
                                <td style="padding-top: 60px"><input type="number"class="form-control has-warning" id="Sun" name="Sun" placeholder="number of hours"></td>
                                <td style="padding-top: 60px"><input type="number"class="form-control has-warning" id="Mon" name="Mon" placeholder="number of hours"></td>
                                <td style="padding-top: 60px"><input type="number"class="form-control has-warning" id="Tues" name="Tues" placeholder="number of hours"></td>
                                <td style="padding-top: 60px"><input type="number"class="form-control has-warning" id="Wed" name="Wed" placeholder="number of hours"></td>
                                <td style="padding-top: 60px"><input type="number"class="form-control has-warning" id="Thurs" name="Thurs" placeholder="number of hours"></td>
                                <td style="padding-top: 60px">
                                <label id="numHours" style="width:100px">num of hours</label>
                                <input type="hidden" class="numHours" name="numHours">
                                <input type="hidden" class="selected" name="se" id="se">
                                
                                </td>
                                
                                <td style="padding-top: 60px"><button style="width:100px" type="submit" name="s" class="btn btn-info "><i style="font-size:30px" class="fas fa-user-clock"></i></button>
                                </td>

                              

                               
                        <?php
                         
                        if (isset($_POST["s"])) {
                            $con = new mysqli("localhost", "root", "", "traino");
                            if ($con->connect_error) {
                                die("Connection failed: " . $con->connect_error);
                                }
                                $ss=$_POST["se"];
                                $stm1 = $con->prepare('select id_academicadvisor from student where id_student= "'.$ss.'"');
                                $stm1->execute();
                                $rs1 = $stm1->get_result();
                                while ($row1 = $rs1->fetch_assoc()){
                                extract($row1);
                                $id_academicadvisor=$row1['id_academicadvisor'];
                               
                                    

                           ?>
                        
                        

                <?php
                                }
                               
                                $sql = "INSERT INTO attendance (id_student, attendance_date,todate,sunday,monday,Tuesday,Wednesday,Thursday,numHours,id_trainingadvisor,id_academicadvisor)
                                VALUES (            '".$_POST["id"]."'
                                                   ,'".$_POST["date"]."'
                                                   ,'".$_POST["todate"]."'
                                                   ,'".$_POST["Sun"]."'
                                                   ,'".$_POST["Mon"]."'
                                                   ,'".$_POST["Tues"]."'
                                                   ,'".$_POST["Wed"]."'
                                                   ,'".$_POST["Thurs"]."'
                                                   ,'".$_POST["numHours"]."'
                                                   , $_SESSION[phone]
                                                   ,$id_academicadvisor
                                    )";
                              
                                if ($con->query($sql) === TRUE ) {
                                echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
                                } else {
                               
                                 
                                echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $con->error."');</script>";
                                }
                            }
                        ?> </tr>


              </table>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("include/footer.php");