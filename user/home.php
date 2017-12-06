<?php 
include_once "includes/header.php";
/*echo ;
echo $_SESSION['loggedInStatus'];
*/
@$currentEmail=$_SESSION['currentLoggedInUser'];

if($_SESSION['loggedInStatus']==true)
{
  /**
   * fetch Id
   */
}
?>
 <?php
        $sql="select *from user where user_email='$currentEmail'";
        $res= mysql_query($sql);
        $count=mysql_num_rows($res);
        $sql_query="select * from services ";
        $res_query=mysql_query($sql_query);
        //var_dump($res_query);
      if($count==1)
      {
        $data=mysql_fetch_array($res);
       // var_dump($data);
        $name=$data['user_first_nane']." ".$data['user_last_nane'];
        $mobile=$data['user_phone'];
        $adhar=$data['user_adhar'];
        $pan=$data['user_pan'];
      }
      ?>
<div class="content">
    <div class="row ">
    
    <div class="col l4 s12">
    <!--side Menu-->
    <div class="card black darken-1">
    <div class="card-content white-text">
      <span class="card-title">GST </span>
      <p>Goods & Services Tax Law in India is a comprehensive, multi-stage, destination-based tax that is levied on every value addition.

In simple words, Goods and Service Tax is an indirect tax levied on the supply of goods and services. GST Law has replaced many indirect tax laws that previously existed in India.
All the normal taxpayers would be required to submit annual return under GST.
</p>
    </div>
    <div class="card-action">
     
      <a class="waves-effect waves-light modal-trigger" href="#modal1">Apply Now</a>
      <!-- Modal Structure -->
     
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Application For Services </h4>
        <div class="w3-container">
            <form id="servicesApply" action="#" method="POST">
              <div class="row">
                  <div class="col s6">
                  <div class="input-field">
                <input type="text" class="validate" name='name' placeholder="Name" disabled value="<?php echo $name; ?>">
                    </div>
                  </div>
                  <div class="col s6">
                  <div class="input-field">
                
                <select class="browser-default" id="serviceSelector" name='service'>
                <option value="null">Select</option>
                <?php
                  
                while($data=mysql_fetch_array($res_query))
                {
                  echo "<option value='".$data['id']."'>".$data['services']."</option>";
                }
                
                ?>
                </select>
                              </div>
                  </div>

                  </div>
                  <div class="row">
                    <div class="col s6">
                    <input type="text" name='date' class="datepicker" placeholder="Select Date for Meeting"></div>
                    <div class="col s6"> 
                      <select class="browser-default" name='time'>
                        <option value="10">10 AM</option>
                        <option value="11">11 AM</option>
                      </select>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col s6" id="userDetails">
                  <div class="w3-container teal">Personal Details</div>
                    <?php
                      echo "Name :".$name;
                      echo "Adhar Card Number :" .$adhar;
                      echo "Pan Card Number :" .$pan;
                      echo "Mobile Number :" .$mobile;
                      echo "Email :" .$currentEmail;
                    
                    ?>
    
                  </div>
                  <div class="col s6" id="listOfDocument">
                  
                  </div>
                    </div>
                  
                  
                  
         
        </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
      <button class="btn green" type="submit">Agree</button>
    </div>
       </form>
  </div>
      <!--modal-->
      <a href="" target="_blank">Learn more</a>
    </div>
  </div>
    </div>
    <div class="col l4 s12">
        <div class="card teal darken-1">
            <div class="card-content white-text ">
                <span class="card-title ">ROC Compliance</span>
                <p>
                Registrar of Companies (ROC) is the designated authority that deals with administration of Companies Act 2013 and it falls under Ministry of Corporate Affairs. The companies incorporated under the Companies Act, 2013 are mandatory to file various forms, returns and documents with the Registrar of Companies (ROC) in an electronic mode within the prescribed time along with the prescribed fees.
                </p>
            </div>
            <div class="card-action">
                <a class="waves-effect waves-light modal-trigger" href="#modal1">Apply Now</a>
                <a href="">Learn More</a>
            </div>
        </div>
    </div>
    <div class="col l4 s12">
    <div class="card blue-grey darken-1">
    <div class="card-content white-text">
      <span class="card-title">Tax audit</span>
      <p>The dictionary meaning of the term “audit” is check, review, inspection, etc. There are various types of audits prescribed under different laws like company law requires a company audit, cost accounting law requires a cost audit, etc. The Income-tax Law requires the taxpayer to get the audit of the accounts of his business/profession from the view point of Income-tax Law.
      .</p>
    </div>
    <div class="card-action">
      <a class="waves-effect waves-light modal-trigger" href="#modal1">Apply  now</a>
      <a href="#">Learn More</a>
    </div>
  </div>
    </div>
    </div>
</div>
<?php
include_once "includes/footer.php"; 
?>