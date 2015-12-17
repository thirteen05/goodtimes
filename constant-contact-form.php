<?php


use Ctct\ConstantContact;
use Ctct\Components\Contacts\Contact;
use Ctct\Components\Contacts\ContactList;
use Ctct\Components\Contacts\EmailAddress;
use Ctct\Exceptions\CtctException;
// Enter your Constant Contact APIKEY and ACCESS_TOKEN
define("APIKEY", "gs9rnea27shcujcehh5z45yc");
define("ACCESS_TOKEN", "c0b0e3b2-c405-41b7-ab3f-d7487aa84034");
$cc = new ConstantContact(APIKEY);

$constant_contact_message = "Join our mailing list to receive special offers on all of our products!";



// attempt to fetch lists in the account, catching any exceptions and printing the errors to screen
try {
    $lists = $cc->getLists(ACCESS_TOKEN);
} catch (CtctException $ex) {
    foreach ($ex->getErrors() as $error) {
        print_r($error);
    }
}
// check if the form was submitted
if (isset($_POST['constant_contact_email']) && strlen($_POST['constant_contact_email']) > 1) {
    $action = "Getting Contact By Email Address";
    try {
        // check to see if a contact with the email addess already exists in the account
        $response = $cc->getContactByEmail(ACCESS_TOKEN, $_POST['constant_contact_email']);
        // create a new contact if one does not exist
        if (empty($response->results)) {
            $action = "Creating Contact";
            $contact = new Contact();
            $contact->addEmail($_POST['constant_contact_email']);
            $contact->addList('1818691277');
            /*
             * The third parameter of addContact defaults to false, but if this were set to true it would tell Constant
             * Contact that this action is being performed by the contact themselves, and gives the ability to
             * opt contacts back in and trigger Welcome/Change-of-interest emails.
             *
             * See: http://developer.constantcontact.com/docs/contacts-api/contacts-index.html#opt_in
             */
            $returnContact = $cc->addContact(ACCESS_TOKEN, $contact, true);
          
            // update the existing contact if address already existed
        } else {
            
            $constant_contact_message = "You have already registered with that email. Thanks!";
          
        }
        // catch any exceptions thrown during the process and print the errors to screen
    } catch (CtctException $ex) {
        echo '<span class="label label-important">Error ' . $action . '</span>';
        echo '<div class="container alert-error"><pre class="failure-pre">';
        print_r($ex->getErrors());
        echo '</pre></div>';
        die();
    }
  
  
}

if (isset($returnContact)) {
  
    $constant_contact_message = "Thanks for signing up! Check your email!";
  
}

?>


<div class="container-fluid">
      <div class="row">
        <div class="col-md-6 text-right font-white bg-charcoal" id="join-us">
          <p>
            <?php echo $constant_contact_message; ?>
          </p>
        </div>
        <div class="col-md-6">
          <form method="post">
            <input name="constant_contact_email" id="get-email-input" type="email" class="form-control" placeholder="Enter Your Email...">
            <input type="submit" id="email-btn" class="btn btn-primary" value="Sign Up!">
          </form>
        </div>
      </div>
  </div>