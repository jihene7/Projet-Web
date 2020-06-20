<?PHP
require_once "../core/OrderC.php";
if (isset($_POST['updateID']) ){
  $OrderC=new OrderC();
    $result=$OrderC->getOrder($_POST['updateID']);
  foreach($result as $row){
    $Prix=$row['Prix'];
    $date_expiration=$row['date_expiration'];
    $Qty=$row['Qty'];
      $Cord=$row['Cord'];
  }
?>

 
                <form method="POST" action="updateOrder.php">
                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Quantity</label>
                    <input class="form-control" id="exampleInputPassword1" type="number"  name="qty" required value="<?PHP echo $Qty; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input class="form-control" id="exampleInputPassword1" type="float"  name="Prix" required value="<?PHP echo $Prix; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Cordinates</label>
                    <input class="form-control" id="exampleInputPassword1" type="text"  name="CORD" required value="<?PHP echo $Cord; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input class="form-control" id="exampleInputPassword1" type="Date"  name="OED" required value="<?PHP echo $date_expiration; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelect1">State</label>
                    <select class="form-control" id="exampleSelect1" name="Status" required>
                      <option>En Attente</option>
                      <option>Approuvée</option>
                      <option>Annulée</option>
                    </select>
                  </div>
                  <input type="hidden" name="updateID" value="<?PHP echo $_POST['updateID'];}?>">
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
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>
