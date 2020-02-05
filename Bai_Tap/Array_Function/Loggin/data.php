<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST{"phone"};
        $nameErr = empty($name) ? "Name not be empty" : null;
        $emailErr = empty($email) ? "Email not be empty" : (filter_var($email, FILTER_VALIDATE_EMAIL) ? null : "Email wrong format");
        $phoneErr = empty($phone) ? "Phone not be empty" : null;
        try {
            if ($nameErr ||$emailErr || $phoneErr) {
                throw new Exception("<span>&#128541;</span>");
                
            }
            else {
                saveDataJSON($name, $email, $phone);
                 echo "<span>&#128525;<span>";
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
    function saveDataJSON($name, $email, $phone) {  
        $contact = [
            "name"=> $name, 
            "email"=>$email,
            "phone"=> $phone
        ];
        $temp=json_decode(file_get_contents("users.json"));
        for ($i=0; $i < count($temp); $i++) {
            $temp[$i]=(array)$temp[$i];
        }
        array_push($temp,$contact);
        file_put_contents("users.json", json_encode($temp));
    }
?>