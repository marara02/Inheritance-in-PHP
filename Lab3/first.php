<?php
include '30.php';
class main{
    public $type;
    public function __construct($type) {
        $this->type = $type;
        print $type;
    }
    public function __destruct(){
        // TODO: Implement __destruct() method.
        print 'Thank you';
    }
    public function output(){
echo 'Welcome'.' '.$_POST["name"];
echo '<br>';
echo $_POST["surname"];
echo '<br>';
echo 'Your email address is:'. $_POST["email"];
echo '<br>';
echo $_POST["number"];
    }
    public function check()
    {
        if (isset($_POST['submit'])) {
            if (isset($_POST['traffics'])) {
                foreach ($_POST['traffics'] as $traffic)
                    print "<p>You select: $traffic </p>";
            }
        }
    }
}