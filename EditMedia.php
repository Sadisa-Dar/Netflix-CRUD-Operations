<?php
include 'conn.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM Media WHERE mediaID = $id";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $title = $row['Title'];
        $time = $row['Duration'];
        $desc = $row['Description'];
        $date = $row['Release_Date'];
        $genre = $row['Genre'];
    } else {
        echo "No record found!";
        exit();
    }
} else {
    echo "Invalid ID!";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Payment</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            background-image: url(login.png);
            background-size: cover;
            background-repeat: no-repeat;
        }
        p, input, a, label {
            font-family: "Bricolage Grotesque", sans-serif;
            font-weight: 400;
        }
        .styled-link {
            text-decoration: none;
            font-family: "Martel Sans", sans-serif;
            font-weight: 600;
            color: white;
            font-size: 20px;
            transition: 0.3s;
        }
        .styled-link:hover {
            color: #db0000;
            padding: 10px 20px;
        }
    </style>
</head>
<body>

<div style="position: relative; z-index: 1; background-color: rgba(0, 0, 0, 0.5); padding: 10px 20px; display: flex; justify-content: space-between; align-items: center;">
    <div>
        <img src="logo.png" alt="Logo" style="height: 50px;">
    </div>
    <div>
        <ul style="list-style: none; display: flex; margin: 0; padding: 0;">
            <li style="margin-left: 50px;"><a href="4.html" class="styled-link">Home</a></li>
            <li style="margin-left: 50px;"><a href="Media_display.php" class="styled-link">Movies</a></li>
            <li style="margin-left: 50px;"><a href="Profile_display.php" class="styled-link">Profiles</a></li>
            <li style="margin-left: 50px;"><a href="1.html" class="styled-link">Register Now!</a></li>
            <li style="margin-left: 50px;margin-right: 950px;"><a href="Payment_display.php" class="styled-link">Payment</a></li>
        </ul>
    </div>
</div><br>

<form action="Media_update.php" method="POST">
    <div style="background-color: rgba(0, 0, 0, 0.8); width: 28%; margin-left:700px; border-style: none;">
        <p style="font-size: 32px; color: white; margin-left:50px; padding:20px;"><b>Update Media Details</b></p>

        <input type="hidden" name="mediaID" value="<?php echo $id; ?>">

        <input type="text" placeholder="Title" name="title" value="<?php echo $title; ?>" required style="height:39px; margin-left: 90px; background-color: rgba(50, 50, 50, 0.4); width: 300px;padding-left: 30px;color: #989898;border-radius: 4px; font-size: 17px; border: 1px solid;"><br><br>

        <input type="text" placeholder="Duration (e.g. 2h 15min)" name="duration" value="<?php echo $time; ?>" required style="height:39px; margin-left: 90px; background-color: rgba(50, 50, 50, 0.4); width: 300px;padding-left: 30px;color: #989898;border-radius: 4px; font-size: 17px; border: 1px solid;"><br><br>

        <input type="text" placeholder="Description" name="des" value="<?php echo $desc; ?>" required style="height:39px; margin-left: 90px; background-color: rgba(50, 50, 50, 0.4); width: 300px; padding-left: 30px;color: #989898;border-radius: 4px;font-size: 17px; border: 1px solid;"><br><br>

        <input type="date" name="dob" value="<?php echo $date; ?>" required style="height:39px; margin-left: 90px; background-color: rgba(50, 50, 50, 0.4); width: 300px; padding-left: 30px;color: #989898;border-radius: 4px;font-size: 17px; border: 1px solid;"><br><br>

        <select name="genre" required style="height:39px; margin-left: 90px; background-color: rgba(50, 50, 50, 0.4); width: 335px; padding-left: 20px;color: #989898; border-radius: 4px; font-size: 17px; border: 1px solid;">
            <option disabled selected style="color: #989898;"><?php echo $genre; ?></option>
            <option style="color: black;">Comedy</option>
            <option style="color: black;">Drama</option>
            <option style="color: black;">Horror</option>
            <option style="color: black;">Action</option>
            <option style="color: black;">Adventure</option>
            <option style="color: black;">Animated</option>
            <option style="color: black;">Sci-fi</option>
            <option style="color: black;">Fantasy</option>
            <option style="color: black;">Thriller</option>
            <option style="color: black;">Crime</option>
        </select><br><br>

        <input type="submit" value="OK" style="height:39px; margin-left: 200px;width: 150px; background-color:#db0000; color:white;border-radius: 6px;font-size: 20px; border: none;"><br><br><br><br>
    </div>
</form><br><br>

<!-- Footer -->
<div style="width: 100%; height: 320px; background-color: #1d1d1d;">
    <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-left: 483px;">
        <img src="fb.png" width="30px" height="30px" style="margin-top: 70px;">
        <img src="insta.png" width="30px" height="30px" style="margin-top: 70px;">
        <img src="yt.png" width="30px" height="30px" style="margin-top: 70px;">
    </div>
    <div>
			<p style="text-align: center; font-size: 14px;"><a href="#" style=" text-decoration: none; color: #989898">Audio Description</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="#" style=" text-decoration: none; color: #989898">Help Center</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="#" style=" text-decoration: none; color: #989898">Gift Cards</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="#" style=" text-decoration: none; color: #989898">Media Center</a></p>
		</div>
		<div>
			<p style="margin-left: 483px; font-size: 14px;"><a href="#" style=" text-decoration: none; color: #989898">Investor Relations</a><a href="#" style=" text-decoration: none; color: #989898; margin-left: 213px;">Jobs</a><a href="#" style=" text-decoration: none; color: #989898;margin-left: 215px;">Terms of Use</a><a href="#" style=" text-decoration: none; color: #989898;margin-left: 206px;">Privacy</a></p>
		</div>
		<div>
			<p style="margin-left: 494px; font-size: 14px;"><a href="#" style=" text-decoration: none; color: #989898;">Legal Notices</a><a href="#" style=" text-decoration: none; color: #989898; margin-left: 195px;">Cookie Preferences</a><a href="#" style=" text-decoration: none; color: #989898; margin-left: 125px;">Corporate Information</a><a href="#" style=" text-decoration: none; color: #989898; margin-left: 160px;">Contact Us</a></p>
		</div><br>
    <button style="color: #989898; border: 1px solid #989898; background-color: #1d1d1d; padding: 9px 6px; font-size: 12px; border-radius: 0; margin-left: 489px;">Service Code</button>
    <p style="color: #989898; font-size: 12px; margin-left: 489px;">&copy; 1997-2025 Netflix, Inc.</p>
</div>

</body>
</html>
