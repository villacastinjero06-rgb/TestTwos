<?php
/*Note from Jero:
This may or may not work, too many changes have been made. 
and I can't see if this has any effects, so this will be left 
here as a failswitch preferably.*/

/*The original purpose of this code is to check whether or not the
user that is logged-in has access to the file. You may see this in
other .php files due to the changes made. This will be left here as 
a reference and failsafe probably */

$requiredFile = "Anthony.txt";
                "A_docblock.php"; 
                "A_LOGIN.php"; 
                "A_LOGOUT.php"; 
                "A_multi_line.php"; 
                "A_single_line.php"; 
                "A_Triangles.php"; 
                "A_variable.php"; 
                "A_Voter_age_and_Grading_System.php";
                "David.txt"; 
                "D_Admin_Login.php";
                "D_docblock.php";
                "D_Eligible_to_Vote.php";
                "D_Grade.php";
                "D_multi_line.php";
                "D_Perimeter_of_a_Triangle.php";
                "D_single_line.php";
                "D_Variable.php";
                "Jero.txt";
                "J_docblock.php";
                "J_grade.php";
                "J_grade_with_HTML.php";
                "J_multi_line.php";
                "J_single_line.php";
                "J_Task_1_Area_and_perimeter_of_Triangle.php";
                "J_Task_2.php";
                "J_variable.php";
                "J_vote.php";
                "J_vote_with_HTML.php";
                "John_Michael.txt";
                "John_Michael.txt";
                "JM_docblock.php";
                "JM_GRADE.php";
                "JM_Login.php";
                "JM_multi_line.php";
                "JM_single_line.php";
                "JM_triangles.php";
                "JM_Variable.php";
                "JM_VOTE.php";
                "Nick.txt";
                "N_docblock.php";
                "N_grade.php";
                "N_login.php";
                "N_multi_line.php";
                "N_single_line.php";
                "N_test.php";
                "N_triangle.php";
                "N_variable.php";
                "N_vote.php";

if (!isset($requiredFile)) {
    http_response_code(500);
    exit("Configuration error: $requiredFile not set");
}

session_start();
include __DIR__ . "/../users.php";

$me = $_SESSION["adminuser"] ?? null;
if (!$me || !isset($users[$me]) || !in_array($requiredFile, $users[$me]["files"])) {
    http_response_code(403);
    exit("Access denied");
}