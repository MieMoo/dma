<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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


    /* Main Content */
    .content {
        flex-grow: 1;
        padding: 30px;
        background-color: #f7f7f7;
        overflow-y: auto;
    }

    header h1 {
        font-size: 32px;
        color: #2b612e;
        font-weight: bold;
        margin-bottom: 5px;
    }

    header h2 {
        font-size: 20px;
        color: #e6a300;
        margin-bottom: 30px;
    }

    /* Statistics Section */
    .stats {
        display: inline-flex;
        justify-content: space-between;
        margin-bottom: 20px;
        gap: 10px;
        left: 450px;
        position: relative;
    }

    .stat-box {
        background-color: white;
        padding: 15px;
        text-align: center;
        border: 1px solid #e6a300;
        border-radius: 10px;
        width: 150px;
        gap: 100px;
    }

    .stat-box .number {
        font-size: 36px;
        color: #2b612e;
        margin-bottom: 5px;
    }

    .stat-box .label {
        color: #555;
    }

    .storage {
        text-align: right;
        position: relative;
        width: 200px;
        left: 270px;
        bottom: 100px;
        margin-left: 1050px;
    }

    .storage-bar {
        background-color: #ddd;
        border-radius: 8px;
        height: 15px;
        margin: 5px 0;
    }

    .storage-used {
        background-color: #ddd;
        border-radius: 8px;
        height: 15px;
        width: 1px 20px;
    }

    .storage p {
        color: #555;
        font-size: 14px;
    }

    /* Activity Section */
    .activity h3 {
        position: absolute;
        top: 130px;
        left: 30px;
        font-weight: bold;
        font-size: 35px;
        color: #4A4D4F;
        margin: 0;
    }

    .activity-controls {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    #searchBar {
        padding: 10px;
        width: 250px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .notification-btn {
        padding: 10px 15px;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .notification-btn:hover {
        background-color: #45a049;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    table th,
    table td {
        padding: 15px;
        text-align: center;
        border-bottom: 1px solid white;
        border: 1px solid #ddd;
        text-align: center;
        vertical-align: middle;
    }

    table th {
        background-color: rgb(237, 237, 237);
        font-size: 16px;
    }

    table td {
        font-size: 14px;
        color: #333;
    }

    table .status.open {
        color: green;
        font-weight: bold;
    }

    table .status.update {
        color: orange;
        font-weight: bold;
    }

    .stats {
        display: flex;
        justify-content: center;
        margin-top: 10px;
        gap: 50px;
        margin-right: 800px;
    }

    .storage {
        position: absolute;
        top: 100px;
        margin-right: 1000px;
        width: 200px;
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
        <main class="content">
            <section class="stats">
                <div class="stat-box">
                    <p class="number">0</p>
                    <p class="label">Locked Accounts</p>
                </div>
                <div class="stat-box">
                    <p class="number">1</p>
                    <p class="label">Archived Documents</p>
                </div>
            </section>

            {{-- <div class="storage">
                <p>Storage Use</p>
                <div class="storage-bar">
                    <div class="storage-used" style="width: 96%;"></div>
                </div>
                <p>500 GB free of 500 GB</p>
            </div> --}}

            <section class="activity">
                <h3>Recent Activity</h3>
                <div class="activity-controls">
                    <input type="text" placeholder="Search..." id="searchBar">
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>EVALUATOR</th>
                            <th>ACTIVITY</th>
                            <th>STUDENT'S NAME</th>
                            <th>TYPE OF DOCUMENT</th>
                            <th>DATE UPLOADED</th>
                        </tr>
                    </thead>
                    <tbody id="activityTable">
                        <tr>
                            <td>Elloise, Marjorie</td>
                            <td class="status open">OPENED</td>
                            <td>Batumbakal, Kenjie</td>
                            <td>FORM 138</td>
                            <td>MM/DD/YYYY</td>
                        </tr>
                        <tr>
                            <td>Flores, Mika</td>
                            <td class="status update">UPDATED</td>
                            <td>Bato, Marlyn</td>
                            <td>BIRTH CERTIFICATE</td>
                            <td>MM/DD/YYYY</td>
                        </tr>
                        <tr>
                            <td>Minaj, Onika Marie</td>
                            <td class="status update">UPDATED</td>
                            <td>Etivac, Jep</td>
                            <td>FORM 137</td>
                            <td>MM/DD/YYYY</td>
                        </tr>
                    </tbody>
                </table>
            </section>
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


        document.getElementById("searchBar").addEventListener("keyup", function() {
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
