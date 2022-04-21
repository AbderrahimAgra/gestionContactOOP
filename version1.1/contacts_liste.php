<!-- header -->

<?php 
session_start();
include('./include/nav.inc.php') ;
include('./Classes/contact.class.php');
?>

<!-- main -->
 <div class="container  mt-5 bg-white  p-5" >
   
        <a href="ajouterConact.php"class=" d-flex justify-content-end"  >
          <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ajouter contact
          </button>
        </a>

        <div class="table-responsiven mt-3" >
          <table class="table align-middle">

                    <?php                     
                    $res=(new Contact())->getAllForUser($_SESSION['id']);
                    // print_r($_SESSION['id']);
                    if(count($res)>0){?>

                          <thead>
                                  <tr>
                                    <th>Contact list:</th>                  
                                  </tr>
                                </thead>
                                <tbody>
                
                        <?php
                          foreach($res as $rows){?>
                            <tr>
                              <td><?php echo $rows['name']; ?></td>
                              <th><?php echo $rows['email']; ?></th>
                              <td><?php echo $rows['phone']; ?></td>
                              <td><?php echo $rows['adress']; ?></td>
                              <td> 
                                  <button class="btn btn-light"><a href="update.php?idUpdate=<?php echo $rows['id_user'];?>">Edit</a></button>
                                  <button class="btn btn-light" ><a href="delete.php?idDelete=<?php echo $rows['id_user'];?>">Delete</a></button>
                              </td>
                          </tr>
                              <?php
                              } 
                              echo '</tbody>';
                            }
                  else
                  { echo 'no contacts found!';};?>
            

          </table>
        </div>
  </div>

<!-- footer -->

<?php include('./include/footer.inc.php'); ?>