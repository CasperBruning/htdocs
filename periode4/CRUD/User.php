    <?php

    class User
    {
        private $db;

        public function db_Connect()
        {
            $this->db = new mysqli('localhost', 'root', '', 'gc_festival');
            return $this->db;
        }

        public function save($firstName, $lastName, $email, $password)
        {

            $db = $this->db;

            $db->query("INSERT INTO users(firstName, lastName, email, password) VALUES ('$firstName','$lastName','$email','$password')");
            header('location: index.php');
            return $_SESSION['message'] = "User saved";
        }

        public function update($id, $firstName, $lastName, $email, $password)
        {

            $db = $this->db;

            $db->query("UPDATE users
            SET firstName = '$firstName', lastName = '$lastName', email = '$email', password = '$password'
            WHERE id = '$id'");

            header('location: index.php');
            return $_SESSION['message'] = "User updated!";
        }

        public function delete($id)
        {
            $db = $this->db;

            $db->query("DELETE FROM users WHERE id = $id");

            header('location: index.php');
            return $_SESSION['message'] = "User deleted!";
        }
    }