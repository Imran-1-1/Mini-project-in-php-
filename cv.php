<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: cv.php");
    exit;
}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Curriculum Vitae Template</title>
    <link rel="stylesheet" href="style.css">
</head>
<body bgcolor="#ffffff">
<table width="700px" height="800px" align = "center">
<tr>
    <td width="250px"bgcolor="#ffffff" style="color:wite;padding: 20px;">
        <img src="img.jpg"style="border-radius: 50%;", width="200px";> 
        <h1></h1>
        <p> <b>EDUCATION </b> <br><br><br>
        Degree Here <br>
        University Name | Location <br>
        2008-2014 <br>
        <br><br>
        <b>EXPERTISES</b><br>
            <ul>
                <li>Public Relation</li>
                <li>Resource Management</li>
                <li>Team Leadership</li>
                <li>Social Media Marketing</li>
                <li>Online Marketing</li>
                <li>Saving Problem</li>
                
            </ul>
        <b>CONTACT INFO </b><br><br>
        Phone Number:<br><br>
        018534706595<br><br>
        Email:iimran@gnail.com <br><br>
        web:imran.com <br><br>
    </p>
    </td>
    <td width="450px" bgcolor="#ffffff"  >
        <h1>Imran Hossain</h1><hr>
        <h9>Web & Graphic Designer </h9>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
            It was popularised in the with the release.</p>
                <h2>WORK EXPERENCES</h2><hr>
                <p> <h3>Your Position Here</h3>
                <h4>Company Name of Lorem | 2017 - Present</h4>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                standard dummy text ever since the 1500s, 
                when an unknown printer took a galley. <br><br>
                <ul>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting </li>
                     <li> Lorem Ipsum is simply dummy text of the printing and typesetting  </li>
                </ul>    
                    <h2>REFERENCES</h2><hr>
                    <h9>Mr. Michael Smith</h9><br>
                    Company Name | Manager<br>
                    P: +000 123 456 789<br>
                    E: michael@smith.com<br>
        </td>
</tr>
</table>
</body>
</html>