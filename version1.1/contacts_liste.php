<!-- header -->

<?php include('./include/nav.inc.php') ; ?>

<!-- main -->
 <div class="container  mt-5 bg-white  p-5" >
   
        <a href="ajouterConact.php"class=" d-flex justify-content-end"  >
          <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
          Ajouter contact
          </button>
        </a>

        <div class="table-responsiven mt-3" >
          <table class="table align-middle">

              <thead>
                <tr>
                  <th>Contact list:</th>                  
                </tr>
              </thead>
              <tbody>
                <tr>
                    <?php foreach($res as $rows){?>
                      
                    <td><?php echo $rows['nom']; ?></td>
                    <th><?php echo $rows['email']; ?></th>
                    <td><?php echo $rows['tele']; ?></td>
                    <td><?php echo $rows['adress']; ?></td>
                    <td> 
                        <button class="btn btn-light"><a href="update.php?idUpdate=<?php echo $rows['id_contact'];?>">Edit</a></button>
                        <button class="btn btn-light" ><a href="delete.php?idDelete=<?php echo $rows['id_contact'];?>">Delete</a></button>
                    </td>
                </tr>
                <?php } ;?>
              </tbody>

          </table>
        </div>
  </div>

<!-- footer -->

<?php include('./include/footer.inc.php'); ?>