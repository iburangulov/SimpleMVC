<?php
use home\models\UserModel;

class userController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel(USERS_TABLE_NAME);
    }

    public function signin()
    {
        if (isset($_POST['email']) AND isset($_POST['password']))
        {
            $user_email = $_POST['email'];
            $user_password = $_POST['password'];

            $user = $this->model->attempt($user_email, $user_password);
            if ($user)
            {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'type' => $user['type'],
                ];
                $_SESSION['auth'] = true;
            }
        }
        header('Location: / ');
    }

    public function signup()
    {
        if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['password']) AND
            isset($_POST['password_confirmation']) AND ($_POST['password'] === $_POST['password_confirmation'])) {

            $user_name = $_POST['name'];
            $user_email = $_POST['email'];
            $user_password = $_POST['password'];

            $this->model->addUser($user_name, $user_email, $user_password);
            $this->signin();
        }

        header('Location: / ');
    }

    public function signout()
    {
        session_unset();
        header('Location: / ');
    }
}
