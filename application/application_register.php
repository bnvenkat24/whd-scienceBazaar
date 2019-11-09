<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "whd";

//create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
else{
    echo "Connected";
}


$name = $_POST['first-name'] . ' ' . $_POST['last-name'];
$dob = $_POST['date'] . ' ' . $_POST['month'] . ' ' . $_POST['year'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$address = $_POST['temp_address1'] . ',' . $_POST['temp_address2'] . ',' . $_POST['temp_address3'] . '||' . $_POST['temp_address3'] . ',' . $_POST['temp_address3'] . ',' . $_POST['temp_address3'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$email = $_POST['your_email'];
$phone_number = $_POST['phone'];
$student = "dsfs";
$institute_name = $_POST['inst_name'];
$institute_city = $_POST['inst_city'];
$year_of_joining = 2233;
$year_of_completion = 2321;
$degree = $_POST['degree'];
$branch = $_POST['branch'];
$highest_qualification = $_POST['qual'];
$teamname = "dfs";
$member_name_1 = $_POST['team_mem1'];
$member_name_2 = $_POST['team_mem2'];
$member_name_3 = $_POST['team_mem3'];
$member_mailid_1 = $_POST['mail1'];
$member_mailid_2 = $_POST['mail2'];
$member_phonenumber_1 = $_POST['phone1'];
$member_phonenumber_2 = $_POST['phone2'];
$project_name = $_POST['proj'];
$domain = $_POST['domain'];
$team_introduction = $_POST['intro_link'];
$project_description = $_POST['desc_link'];
$project_report = $_POST['report'];
$target_audience = $_POST['aud'];
$competiton = $_POST['comp'];
$platform = $_POST['plat'];
$personas = $_POST['personas'];
$feedback = $_POST['feedback'];


//prepare and bind
$stmt = $conn->prepare("INSERT INTO whd (name, dob, gender, nationality, address, city, pincode, email, phone_number, student, institute_name, institute_city, year_of_joining, year_of_completion, degree, branch, highest_qualification, teamname, member_name_1, member_name_2, member_name_3, member_mailid_1, member_mailid_2, member_phonenumber_1, member_phonenumber_2, project_name, domain, team_introduction, project_description, project_report, target_audience, competiton, platform, personas, feedback) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$stmt->bind_param("ssssssisissssssssssssssiissssssssss", $name, $dob, $gender, $nationality, $address, $city, $pincode, $email, $phone_number, $student, $institute_name, $institute_city, $year_of_joining, $year_of_completion, $degree, $branch, $highest_qualification, $teamname, $member_name_1, $member_name_2, $member_name_3, $member_mailid_1, $member_mailid_2, $member_phonenumber_1, $member_phonenumber_2, $project_name, $domain, $team_introduction, $project_description, $project_report, $target_audience, $competiton, $platform, $personas, $feedback);

$stmt->execute();

$stmt->close();
$conn->close();