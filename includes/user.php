<?php


class User {
    
    private $id;
    private $username;
    private $password;
    private $permission;
    private $email;
    
    // database property for database object
    private $database;
    
    // set the database property to database object
    public function __construct ($database) {
        $this->database = $database;
    }
    
    // add new user to database
    public function register_new_user ($username,$password,$email,$permission = "user") {
        
        $this->username = escape($username);
        $this->password = escape($password);
        $this->email    = escape($email);
        $this->permission = escape($permission);
        
        $errors = $this->check_register_errors();
        
        if(empty($errors)) {
            
            $this->database->prepare("INSERT INTO user (username,password,permission,email)
                                      VALUES
                                      (:username,:password,:permission,:email)
                                    ");
            
            $this->database->bind_param(':username',$this->username,PDO::PARAM_STR);
            $this->database->bind_param(':password',hashed($this->password),PDO::PARAM_STR);
            $this->database->bind_value(':permission',$this->permission,PDO::PARAM_STR);
            $this->database->bind_param(':email',$this->email,PDO::PARAM_STR);
            
            $this->database->execute();
            
            return true;
            
        }else{
            return false;
        }
        
    }
    
    // check if there is errors during the registertaion 
    public function check_register_errors () {
        
        $errors = array();
        
        if(empty($this->username)) {
            $errors['username'] = "Username can not be blank"; 
        }
        
        if(!empty($this->username) && (strlen($this->username) < 3 || strlen($this->username) > 15) ) {
            $errors['username'] = "Sorry username must be between 3 and 15 characters"; 
        }
        
        if(empty($this->password)) {
            $errors['password'] = "Password can not be blank";
        }
        
        if(empty($this->email) || filter_var($this->email,FILTER_VALIDATE_EMAIL) == false) {
            $errors['email'] = "Enter a valid email please";
        }
        
        return $errors;
    }
    
    // check the login of the user
    public function login ($username,$password) {
        
        $this->username = escape($username);
        $this->password = escape($password);
        
        $this->database->prepare("SELECT * FROM user WHERE username = :username AND password = :password LIMIT 1");
        $this->database->bind_param(':username',$this->username,PDO::PARAM_STR);
        $this->database->bind_param(':password',hashed($this->password),PDO::PARAM_STR);
        $this->database->execute();
        
        if($this->database->row_count() > 0) {
            return true;
        }else{
            return false;
        }
            
    }
    
    // check if there are errors while login 
    public function check_login_errors ($username,$password) {
        
        $this->username = $username;
        $this->password = $password;
        
        $login_errors = array();
        
        if(empty($this->username)) {
            $login_errors['username'] = "Username can not be blank"; 
        }
        
        if(empty($this->password)) {
            $login_errors['password'] = "Password can not be blank";
        }
        
        return $login_errors;
    }
    
    // fetch user from database by the username
    public function fetch_user_by_username ($username) {
        
        $this->username = $username;
        
        $this->database->quick_prepare("SELECT * FROM user WHERE username = :username LIMIT 1"
                                       ,array(':username'=>$this->username));
        
        $user_data = $this->database->fetch();
        
        return $user_data;
    }
    
    // fetch all users from database
    public function fetch_all_users () {
        $this->database->quick_prepare("SELECT * FROM user");
        $users = $this->database->fetch_all();
        return $users;
    }
    
    // fetch user from database by the id
    public function fetch_user_by_id ($id) {
        
        $this->id = (int) escape($id);
        
        $this->database->quick_prepare("SELECT * FROM user WHERE id = :id",
                                       array(":id"=>$this->id));
        $user = $this->database->fetch();
        return $user;
    }
    
    // update the user in the database
    public function update_user ($username,$password,$email,$permission,$id) {
        
        $this->username = escape($username);
        $this->password = escape($password);
        $this->email    = escape($email);
        $this->permission = escape($permission);
        $this->id = (int) escape($id);
        
        $errors = $this->check_register_errors();
        
        if(empty($errors)) {
            
            $this->database->prepare("
                                     UPDATE user SET
                                     username   = :username ,
                                     password   = :password ,
                                     email      = :email ,
                                     permission = :permission 
                                     WHERE id   = :id
                                     ");
            
            $this->database->bind_param(':username',$this->username,PDO::PARAM_STR);
            $this->database->bind_param(':password',hashed($this->password),PDO::PARAM_STR);
            $this->database->bind_value(':permission',$this->permission,PDO::PARAM_STR);
            $this->database->bind_param(':email',$this->email,PDO::PARAM_STR);
            $this->database->bind_param(':id',$this->id,PDO::PARAM_INT);
            
            $this->database->execute();
            
            return true;
            
        }else{
            return false;
        }
    }
    
    // delete a user from database
    public function delete_user($id) {
        $this->id = (int) escape($id);
        
        $this->database->prepare("DELETE FROM user WHERE id = :id LIMIT 1");
        $this->database->bind_param(":id",$this->id,PDO::PARAM_INT);
        $this->database->execute();
        
        if($this->database->row_count() > 0) {
            return true;
        }else{
            return false;
        }
    }
}

$user = new User($database);
