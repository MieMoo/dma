<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Released Documents</title>
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
        color: #800000;
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

    .dropdown {
        position: relative;
        display: inline-block;
        text-align: center;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 50px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        text-align: center;
    }

    .dropdown-content a {
        color: #000;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        cursor: pointer;
        text-align: center;
    }


    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Main Content - Fixed Layout */
    .main-content {
        font-family: Arial, sans-serif;
        padding: 50px;
        background-color: #f9f9f9;
        border-radius: 10px;
        max-width: 1000000px;
        margin: 0 auto;
        position: relative;
    }

    /* Back Button - Fixed Top Left */
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

    /* Total Transactions - Centered, Close to Navbar */
    .total-transactions {
        text-align: center;
        border: 1px solid #33805C;
        background-color: #fff;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 700px;
        margin: 0 auto;
        position: fixed;
        top: 100px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 999;
    }

    .total-transactions h2 {
        font-size: 50px;
        color: #4caf50;
        margin: 0;
    }

    .total-transactions p {
        font-size: 18px;
        margin: 0;
    }

    /* Controls */
    .controls {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        background-color: #fff;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        gap: 10px;
        position: relative;
        top: 110px;
        height: 70px;
    }

    /* View Button */
    .view-button button {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 20px;
    }

    /* Entries Selector */
    .entries-selector {
        display: flex;
        align-items: center;
    }

    .entries-selector label {
        margin-right: 10px;
    }

    .entries-selector select {
        margin-right: 5px;
        padding: 5px;
    }

    /* Date Picker */
    .date-picker input {
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ddd;
        width: 160px;
        height: 40px;
        font-weight: bold;
    }

    /* Archive Button */
    .archive-button {
        display: flex;
        align-items: flex-end;
        gap: 10px;
        margin-bottom: 30px;
        margin-left: 50px;
    }

    .archive-button button {
        background-color: #ffc107;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        color: white;
        cursor: pointer;
    }

    /* Search Bar */
    .search-bar input {
        padding: 10px;
        width: 200px;
        border-radius: 5px;
        border: 1px solid #ddd;
        margin-right: 20px;
    }

    /* Transaction Table */
    .transaction-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 50px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin-top: 130px;
    }

    /* Table Headers & Rows */
    .transaction-table th,
    .transaction-table td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }

    .transaction-table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .transaction-table td {
        background-color: #fff;
    }
</style>

<body>
    <header>
        <div class="logo-container">
            <img src="<?php echo asset('images/LOALOA.png'); ?>" alt="College of Computer Studies" style="height: 50px; width: 50px;">
            <span class="college-name" style="color: #800000; margin-left: 15px;">Bachelor of Science in Information Technology</span>
        </div>
        <nav class="navbar">
            @include('components.layout-nav')
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


    <!-- Main content section -->
    <div class="main-content">
        <!-- Total of Transaction (Placed near the top) -->
        <div class="total-transactions">
            <h2>1</h2>
            <p>Released Documents</p>
        </div>

        <!-- Controls -->
        <div class="controls">
            <!-- View Button on the left -->
            <div class="view-button">
                <button
                    style="border: none; background-color: #ffc107; color: #000; font-size: 16px; padding: 10px; border-radius: 4px;">
                    <i class="fas fa-eye" style="color: #000;"></i> View
                </button>
            </div>

            <div class="entries-selector">
                <label for="show-entries">Show</label>
                <select id="show-entries">
                    <option value="all">All</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>

                <label for="-show-entries">entries</label>
            </div>
            <div style="display: flex; align-items: center; margin: 0;">
                <label for="fromDate" style="margin: 0 10px;">From:</label>
                <input type="date" class="textfield" id="fromDate"
                    style="padding: 10px; width: 200px; border-radius: 5px; border: 1px solid #ddd; margin-right: 20px;">

                <label for="toDate" style="margin: 0 10px;">To:</label>
                <input type="date" class="textfield" id="toDate"
                    style="padding: 10px; width: 200px; border-radius: 5px; border: 1px solid #ddd; margin-right: 20px;">
            </div>

            <div class="search-bar">
                <input type="text" placeholder="Search.." id="search">
            </div>
        </div>

        <!-- Table -->
        <table class="transaction-table">
            <thead>
                <tr>
                    <th>ACTION</th>
                    <th>STUDENT NO.</th>
                    <th>STUDENT NAME</th>
                    <th>COURSE</th>
                    <th>YEAR LEVEL</th>
                    <th>DOCUMENT</th>
                    <th>PURPOSE OF REQUEST</th>
                    <th>RELEASED BY</th>
                    <th>DATE OF RELEASED</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>1603-21</td>
                    <td>BARRETE, SHANE VINCENT C.</td>
                    <td>BSIT</td>
                    <td>FOURTH YEAR</td>
                    <td>Good Moral</td>
                    <td>JUST A FILLER</td>
                    <td>ELLOISE, MARJORIE</td>
                    <td>MM/DD/YYYY</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        // Function to change the course title when selected from the dropdown
        function changeCourse(courseName) {
            document.getElementById("college-title").innerText = courseName;
        }

// Function to display the logout confirmation modal
function handleLogout(event) {
    event.preventDefault(); // Prevent default link behavior
    document.getElementById('logoutModal').style.display = 'flex'; // Show the modal
}

const fromDate = document.getElementById("fromDate");
const toDate = document.getElementById("toDate");

// Update "To" minimum date when "From" date changes
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


// Function to confirm logout by submitting the form
function confirmLogout() {
    document.getElementById('logoutForm').submit(); // Submit the form
}

// Function to cancel logout and hide the modal
function cancelLogout() {
    document.getElementById('logoutModal').style.display = 'none'; // Hide the modal
}


        // Function to show the notification modal
        function showNotificationModal() {
            document.getElementById('notificationModal').style.display = 'flex';
        }

        // Function to close the notification modal
        function closeNotificationModal() {
            document.getElementById('notificationModal').style.display = 'none';
        }


        // Function to open the modal
        function openModal() {
            document.querySelector('.modal').style.display = 'flex';
        }

        // Function to close the modal
        function closeModal() {
            document.querySelector('.modal').style.display = 'none'; // Hide modal
        }

        // Example of attaching the functions to buttons (you should customize this to your implementation)
        document.querySelector('.logout-button').addEventListener('click', openModal);
        document.querySelector('.no-button').addEventListener('click', closeModal);
    </script>
</body>

</html>
