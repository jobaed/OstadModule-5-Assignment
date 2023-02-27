<?php

class Person
{
    private $name, $email;

    function __construct($name = '', $email = '')
    {
        $this->name = $name;
        $this->email = $email;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $obj = new Person();

    $obj->setName($name);
    $obj->setEmail($email);

    $getName = $obj->getName() . "<br>";
    $getEmail = $obj->getEmail();
}


?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="w-50 mx-auto mt-5">
            <div class="bg-dark text-light w-100 p-5 rounded shadow">
            <h3 class="text-light mb-3 text-uppercase text-center">Form</h3>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Name:</label>
                        <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>

                <div class="text-light text-center">
                    <h3 class="text-light mt-4 mb-3 text-uppercase">Display</h3>
                    <hr class="text-light">
                    <h5>Name: <?php echo isset($getName) ? $getName : '(please set name)' ?></h5>
                    <h5>Email: <?php echo isset($getEmail) ? $getEmail : '(please set email)' ?></h5>
                </div>

            </div>
        </div>
    </div>
</body>



</html>