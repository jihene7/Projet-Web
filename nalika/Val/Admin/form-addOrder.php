



<?php
    require_once "./core/UserController.php";
$U1C=new UserController();
$list=$U1C->getUsers();
    ?>

                <form method="POST" action="addOrder.php">
                  
                  <div class="form-group">
                    <label for="exampleSelect1">Client ID</label>
                    <select class="form-control" id="exampleSelect1" name="CID" required>
                    <?php
                        foreach($list as $rw)
                        echo '
                        <option>'.$rw['id'].'</option>';
                        ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleSelect1">Product ID</label>
                    <select class="form-control" id="exampleSelect1" name="PID" required="">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Quantity</label>
                    <input class="form-control" id="exampleInputPassword1" type="number"  name="Qty" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Cordinates</label>
                    <input class="form-control" id="exampleInputPassword1" type="text"  name="CORD" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input class="form-control" id="exampleInputPassword1" type="Date"  name="OED" required="">
                  </div>
                  <div class="tile-footer">
                     <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
                </form>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </main>
    