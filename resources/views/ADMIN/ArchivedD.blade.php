<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archived Documents</title>
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

.button-containerr {
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

/* General Styling */
.main-content {
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
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

h2 {
    color: #33805C;
    margin-bottom: 50px;
}

/* Centering the Title */
.page-title {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    color: #33805C;
}

/* Table and Filter Controls Layout */
.table-controls {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 1200px;
    margin-bottom: 10px;
    gap: 15px;
}

/* Buttons and Filter Section (Top of Table) */
.filter-section {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
    margin-left: auto;
}

/* Container for the Buttons */
.button-container {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    margin-bottom: 10px;
    z-index: 999;
    margin-right: 0;
    margin-top: 0;
    position: absolute;
    left: 70px;
    top: 190px;
    gap: 5px;
}



.recover-btn, .delete-btn {
    display: flex;
    align-items: center;
    padding: 10px 15px;
    font-size: 14px;
    border-radius: 5px;
    cursor: pointer;
    gap: 5px;
    margin-right: 10px;
    top: 50px;
}


.recover-btn {
    background-color: #ffc107;
    border: none;
    color: #fff;
}


.delete-btn {
    background-color: #f7f7f7;
    border: 1px solid #ffc107;
    color: black;
}


/* Input Fields in Filter Section */
.textfield {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 150px;
}

/* Table Styles */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    min-width: 1400px;
}

    table th, table td {
        padding: 15px;
        text-align: center;
        border-bottom: 1px solid white;
        border: 1px solid #ddd;
        vertical-align: middle;
    }

    table th {
        background-color: rgb(237, 237, 237);
        font-size: 16px;
    }

    table td a {
        color: #2E6380;
        text-decoration: none;
        font-weight: bold;
    }

    table tr:hover {
        background-color: #ffffffe2;
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
            <div class="button-containerr">
                <button type="button" class="modal-button yes-button" onclick="confirmLogout()">Yes</button>
                <button type="button" class="modal-button no-button" onclick="cancelLogout()">No</button>
            </div>
        </form>
    </div>
</div>

 <div class="main-content">
     <div class="main-content">
         <h2>Manage Accounts / <span class="deactivated">Archived Documents</span></h2>
         <div class="button-container">
             <button class="recover-btn">Recover</button>
             <button class="delete-btn">Delete</button>
         </div>

         <!-- Filter Section -->
         <section class="filter-section">
             <select class="textfield" id="levels">
                 <option selected disabled="">- Document -</option>
                 <option value="form137">Form 137</option>
                 <option value="form138">Form 138</option>
                 <option value="birthcertificate">Birth Certificate</option>
                 <option value="goodmoral">Good Moral</option>
                 <option value="tor">Transcript of Record</option>
                 <option value="dismissal">Honorable Dismissal</option>
             </select>
             <div style="display: flex; align-items: center; margin: 0px 0;">
                 <label for="fromDate" style="margin: 0 10px;">From:</label>
                 <input type="date" class="textfield" id="fromDate" style="margin-right: 20px;">

                 <label for="toDate" style="margin: 0 10px;">To:</label>
                 <input type="date" class="textfield" id="toDate">
             </div>
             <input type="text" class="textfield" placeholder="Search.." id="searchBar">
         </section>
         <section class="activity-logs">
             <table>
                 <thead>
                     <tr>
                         <th>ACTIONS</th>
                         <th>DOCUMENT NAME</th>
                         <th>EVALUATOR</th>
                         <th>TYPE OF DOCUMENT</th>
                         <th>DATE ARCHIVED</th>
                     </tr>
                 </thead>
                 <tbody id="activityTable">
                     <tr>
                         <td><input type="checkbox"></td>
                         <td>2024_BC.pdf</td>
                         <td></a>Elloise, Marjorie Jane B.</td>
                         <td><a href="#">Birth Certificate</td>
                         <td>MM/DD/YYYY</td>
                     </tr>
                     <tr>
                         <td><input type="checkbox"></td>
                         <td>2024_F137.pdf</td>
                         <td></a>Cria, Ryleigh C.</td>
                         <td><a href="#">Form 137</td>
                         <td>MM/DD/YYYY</td>
                     </tr>
                     <tr>
                         <td><input type="checkbox"></td>
                         <td>2024_F138.pdf</td>
                         <td></a>Minaj, Onika Marie P.</td>
                         <td><a href="#">Form 138</td>
                         <td>MM/DD/YYYY</td>
                     </tr>
                 </tbody>
             </table>
         </section>
     </div>
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

const fromDate = document.getElementById("fromDate");
const toDate = document.getElementById("toDate");

// Update the minimum "To" date when the "From" date changes
fromDate.addEventListener("change", () => {
    toDate.min = fromDate.value;

    // Auto-correct if "To" date is earlier than "From" date
    if (toDate.value && toDate.value < fromDate.value) {
        toDate.value = fromDate.value;
    }
});

// Prevent invalid "To" date selection
toDate.addEventListener("change", () => {
    if (toDate.value < fromDate.value) {
        alert("The 'To' date cannot be earlier than the 'From' date.");
        toDate.value = fromDate.value;
    }
});


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
