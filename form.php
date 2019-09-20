

            <form action="send.php" method="post" id="form" class="appointment-form ftco-animate">
                <div class="d-md-flex">
                    <div class="form-group">
                        <input type="text" name="name" required class="form-control" placeholder="Full Name">
                    </div>
                    <div class="form-group ml-md-4">
                        <input type="text" name="company" required class="form-control" placeholder="Company">
                    </div>
                </div>
                <div class="d-md-flex">
                    <div class="form-group">
                        <input type="text" name="email" required class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group ml-md-4">
                        <input type="text" name="phone" required class="form-control" placeholder="Phone Number">
                    </div>
                </div>
                <div class="d-md-flex">
                    <div class="form-group">
                        <textarea name="msg"  cols="30" rows="2" required class="form-control" placeholder="Message"></textarea>
                    </div>

                    <input type="hidden" name="url" value=" <?php echo $_SERVER['PHP_SELF'];?> ">

                    <div class="form-group ml-md-4">
                      <input type="submit" name="submit" value="Request A Quote" class="btn btn-secondary py-3 px-4">
                    </div>
                </div>
            </form>

            <?php

                if ($_GET) {
                  echo '

                    <!-- Central Modal Medium Success -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-side modal-bootm modal-notify modal-success" role="document">
                        <!--Content-->
                        <div class="modal-content">
                          <!--Header-->
                          <div class="modal-header bg-primary">
                            <h2 class="heading lead">Request Success</h2>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true" class="white-text">&times;</span>
                            </button>
                          </div>
                        </div>
                        <!--/.Content-->
                      </div>
                    </div>
                    <!-- Central Modal Medium Success-->

                  ';
                }

            ?>
