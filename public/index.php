<?php require '../includes/header.php'; ?>


<?php
use Twilio\Rest\Client;
  if (isset($_POST['sendMess'])){
      $phone = $_POST['phone'];
      $message = $_POST['message'];

      if (isset($phone) && isset($message)){
          $client = new Client($config['account_sid'],$config['auth_token']);
          $client->messages->create($phone,array(
                  'from'=>$config['phone_number'],
                   'body'=>$message));
          echo "<h3 class='text-center bg-success'>Message has been sent</h3>";
      }
  }

?>composer
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form role="form" method="post">
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                </div>

                <div class="form-group">
                    <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Type your message here...."></textarea>
                </div>

                <button class="btn btn-primary btn-block" type="submit" name ="sendMess">Send Message</button>
            </form>
        </div>
    </div>
    <div class="col-md-2"></div>
<?php require '../includes/footer.php'; ?>