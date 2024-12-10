<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Accounts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f7f7f7;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #fff;
    padding: 10px 20px;
    border-bottom: 2px solid #ddd;
    position: sticky;
    top: 0;
    z-index: 1000;
}


.logo-container {
        display: flex;
        align-items: center;
        margin-right: 10px;
    }

    .logo-img {
        margin-right: 10px;
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }

    .college-name {
        font-size: 20px;
        font-weight: bold;
        color: #317340;
        margin-right: 50px;
        padding-right: 50px;
    }

.navbar {
    display: flex;
    align-items: center;
    margin-left: 20px;
}

    .navbar a {
        margin-left: 20px;
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 16px;
    }

        .navbar a.active {
            color: #ffa000;
        }

/* FOR LOGOUT */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: #F6F6F6;
    padding: 20px;
    border: none;
    border-radius: 10px;
    width: 400px;
    text-align: center;
    z-index: 1001; 
}

.modal img {
    width: 80px;
    margin-bottom: 15px;
}

.modal h3 {
    font-family: Arial, sans-serif;
    font-weight: bold;
    color: #333;
    font-size: 22px;
    margin-bottom: 10px;
}

.modal p {
    font-family: Arial, sans-serif;
    color: #666;
    font-size: 18px;
    margin-bottom: 20px;
}

.button-container {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.modal-button {
    padding: 12px 20px;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    border: none;
    width: 100px;
}

.yes-button {
    background-color: #33805C;
    color: white;
}

.no-button {
    background-color: white;
    color: #33805C;
    border: 2px solid #33805C;
}

    .no-button:hover {
        background-color: #f2f2f2;
    }

/* Main Content Styling */
.main-content {
    padding: 30px;
    background-color: #f8f8f8;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.back-button {
    text-decoration: none;
    display: inline-block;
    border: 2px solid #ffc107;
    background: none;
    color: #000;
    font-size: 14px;
    padding: 9px;
    border-radius: 4px;
    width: 80px;
    font-weight: bold;
    position: fixed;
    top: 80px;
    left: 10px;
    z-index: 800;
}

.modify-label {
    font-size: 28px;
    color: #4a7745;
    font-weight: bold;
    margin-bottom: 50px;
    z-index: 1;
    display: flex;
}

/* Container for the two forms */
.form-container {
    display: flex;
    justify-content: space-around;
    gap: 200px;
    width: 100%;
    max-width: 5000px;
}

/* Form Styling */
.update-staff-form, .update-password-form {
    background-color: #f0f0f0;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    width: 45%;
}

h3 {
    font-size: 20px;
    color: #4A4D4F;
    margin-bottom: 1px;
    z-index: 100%;
}

label {
    display: block;
    font-size: 14px;
    margin-bottom: 5px;
    color: #555;
}


input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    background-color: #fff;
    color: #555;
}

    select option {
        font-size: 14px;
        color: #555;
    }


/* Buttons styling */
.form-buttons {
    display: flex;
    justify-content: space-between;
    gap: 30px;
    margin-top: 20px;
}

.btn {
    padding: 10px 50px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    text-align: center;
}

.update {
    background-color: #13705f;
    color: white;
    white-space: nowrap;
    width: 160px;
    left: 50px;
}

.clear {
    background-color: white;
    color: #13705f;
    border: 2px solid #13705f;
    padding: 10px 20px;
    white-space: nowrap;
    width: 150px;
}

    .clear:hover {
        background-color: #f0f0f0;
    }

.update:hover {
    background-color: #0f594d;
}

@media (max-width: 768px) {
    .form-container {
        flex-direction: column;
        align-items: center;
    }

    .update-staff-form, .update-password-form {
        width: 100%;
        margin-bottom: 20px;
    }
}

      /* TRANSACTION DROPDOWN */
      .dropdown {
        position: relative;
        display: inline-block;
        align-content: center;
        align-items: center;
    }

    .dropbtn {
        cursor: pointer;
        padding: 5px;
        text-decoration: none;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        align-content: center;
        align-items: center;
        min-width: 130px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Show dropdown content when hovering over the dropdown container */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 20px;
        text-decoration: none;
        align-content: center;
        align-items: center;
        display: block;
        background-color: #f9f9f9;
    }
</style>
<body>
    <header>
        <div class="logo-container">
            <img src="<?php echo asset('images/LOALOA.png'); ?>" alt="College of Computer Studies" style="height: 50px; width: 50px;">
            <span class="college-name" style="color: #33805C; margin-left: 15px;">ADMIN</span>
        </div>
        <nav class="navbar">
            @include('components.admin-layout')
            <a style="color: #33805C" href="#" onclick="handleLogout(event)">Logout</a>
        </nav>
    </header>
<!-- Modal for logout confirmation -->
<div id="logoutModal" class="modal" style="display: none;">
    <div class="modal-content">
        <img src="{{ asset('images/warning.png') }}" alt="Warning">
        <h3>Confirmation</h3>
        <p>Are you sure you want to log off?</p>
        <form id="logoutForm" method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="button-container">
                <button type="button" class="modal-button yes-button" onclick="confirmLogout()">Yes</button>
                <button type="button" class="modal-button no-button" onclick="cancelLogout()">No</button>
            </div>
        </form>
    </div>
</div>


 <div class="main-content">
     <main class="main-content">
         <section class="modify-label">
             <span>Change User / Change Password</span>
         </section>

         <div class="form-container">
             <div class="update-staff-form">

                 <form>
                     <label for="staffEmail" >Staff Email</label>
                     <input type="text" placeholder="Enter Staff Email" id="staffEmail" name="staffEmail" required>

                     <!-- Dropdown for Handling Department -->
                     <label for="department">Handling Department</label>
                     <select id="department" name="department" required>
                         <option selected disabled value="">Select Department</option>
                         <option value="CCS">CCS</option>
                         <option value="CTHM">CTHM</option>
                         <option value="COED">COED</option>

                     </select>

                     <label for="staffName">Staff Name</label>
                     <input type="text" id="staffName" name="staffName" required>

                     <label for="newStaffID">New Staff Email</label>
                     <input type="text" id="newStaffID" name="newStaffID" required>

                     <label for="newStaffName">New Staff Name</label>
                     <input type="text" id="newStaffName" name="newStaffName" required>

                     <div class="form-buttons">
                         <button class="btn update" type="submit">Update</button>
                         <button class="btn clear" type="reset">Clear</button>
                     </div>
                 </form>
             </div>

             <div class="update-password-form">
                 <form>
                    <label for="staffEmail" >Staff Email</label>
                    <input type="text" placeholder="Enter Staff Email" id="staffEmail" name="staffEmail" required>
                    
                     <label for="staffName">Staff Name</label>
                     <input type="text" id="staffName" name="staffName" required>

                     <label for="currentPassword">Current Password</label>
                     <input type="password" id="currentPassword" name="currentPassword" required>

                     <label for="newPassword">New Password</label>
                     <input type="password" id="newPassword" name="newPassword" required>

                     <label for="reenterPassword">Re-enter New Password</label>
                     <input type="password" id="reenterPassword" name="reenterPassword" required>

                     <div class="form-buttons">
                         <button class="btn update" type="submit">Update</button>
                         <button class="btn clear" type="reset">Clear</button>
                     </div>
                 </form>
             </div>
         </div>
     </main>
 </div>
    <script>
function sendNotification() {
    alert("Notification sent!");
}

// Function to display the logout confirmation modal
function handleLogout(event) {
    event.preventDefault(); // Prevent default link behavior
    document.getElementById('logoutModal').style.display = 'flex'; // Show the modal
}

// Function to confirm logout by submitting the form
function confirmLogout() {
    document.getElementById('logoutForm').submit(); // Submit the form
}

// Function to cancel logout and hide the modal
function cancelLogout() {
    document.getElementById('logoutModal').style.display = 'none'; // Hide the modal
}


// Open Notification Modal
function openNotificationModal() {
    document.getElementById("notificationModal").style.display = "block";
    document.getElementById("modalOverlay").style.display = "block";
}

// Close Notification Modal
function closeNotificationModal() {
    document.getElementById("notificationModal").style.display = "none";
    document.getElementById("modalOverlay").style.display = "none";
}

// Simulate sending notification
function notify() {
    const staffId = document.getElementById("staffId").value;
    const subject = document.getElementById("subject").value;
    const message = document.getElementById("message").value;
    const notifyIn = document.getElementById("notifyIn").value;

    // Process notification logic here

    alert("Notification Sent!");
    closeNotificationModal();
}


document.getElementById("searchBar").addEventListener("keyup", function () {
    var input = document.getElementById("searchBar").value.toLowerCase();
    var rows = document.getElementById("activityTable").getElementsByTagName("tr");

    for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        var match = false;

        for (var j = 0; j < cells.length; j++) {
            if (cells[j].innerHTML.toLowerCase().includes(input)) {
                match = true;
                break;
            }
        }

        if (match) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }
});
    </script>
</body>
</html>
