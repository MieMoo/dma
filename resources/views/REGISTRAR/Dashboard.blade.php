<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Registrar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        color: #333;
        text-align: center;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #fff;
        padding: 10px 20px;
        border-bottom: 2px solid #ddd;
    }

    header .logo {
        display: flex;
        align-items: center;
    }

    header .logo img {
        margin-right: 10px;
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }

    header nav {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-left: 20px;
    }

    header nav a {
        text-decoration: none;
        color: #ffc107;
        font-weight: bold;
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
        min-width: 250px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
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

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        color: #33805C;
    }

    header .logo {
        display: flex;
        align-items: center;
    }

    header .logo img {
        margin-right: 10px;
    }


    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: white;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 30%;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
    }

    .close-btn {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close-btn:hover,
    .close-btn:focus {
        color: red;
    }

    /* Controls */
    .controls {
        display: flex;
        justify-content: space-between;
        padding: 20px;
        background-color: #fff;
        margin: 10px 20px;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        align-items: center;
    }

    .left-controls {
        display: flex;
        align-items: center;
        gap: 20px;
    }


    .left-controls label {
        margin-right: 1px;
        margin-bottom: 50px;
        font-weight: bold;
    }

    .left-controls select {
        padding: 8px;
        border: 1px solid #000000;
        border-radius: 5px;
        font-size: 14px;
        margin-bottom: 50px;
    }

    .left-controls .buttons {
        display: flex;
        gap: 10px;
        margin-top: 50px;
        margin-right: 500px;
        align-items: flex-end;
        position: absolute;
        align-items: center;
    }

    .right-controls {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }

    .archive-notification {
        display: flex;
        gap: 10px;
        margin-bottom: 10px;
    }

    input[type="text"] {
        padding: 8px;
        border: 1px solid #000000;
        border-radius: 5px;
        font-size: 14px;
    }

    button[type="submit"] {
        padding: 10px 15px;
        background-color: #28a745;
        /* Green color */
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #218838;
        /* Darker green on hover */
    }

    /* Ensure both input and button are on the same line */
    form {
        display: flex;
        align-items: center;
        gap: 10px;
        /* Add space between input and button */
    }

    .controls button {
        background-color: #ffc107;
        border: none;
        color: #fff;
        padding: 10px 15px;
        font-size: 14px;
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .controls button i {
        font-size: 14px;
    }

    .notification i {
        font-size: 20px;
        color: #333;
        cursor: pointer;
        margin: 10px;
    }

    /* Table Styles */
    table {
        width: 98%;
        border-collapse: collapse;
        background-color: #fff;
        margin: 30px 13px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    table th,
    table td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: center;
        vertical-align: middle;
    }

    table th {
        background-color: #f0f0f0;
        font-size: 14px;
    }

    table td.accepted {
        color: green;
        font-weight: bold;
    }

    table td.rejected {
        color: red;
        font-weight: bold;
    }

    table td.pending {
        color: orange;
        font-weight: bold;
    }

    @media (max-width: 768px) {
        .controls {
            flex-direction: column;
            gap: 10px;
        }

        .left-controls,
        .right-controls {
            flex-direction: column;
            width: 100%;
            align-items: flex-start;
        }
    }

    /* FOR LOGOUT */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
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
        margin-left: 50px;
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


    /* TRANSACTION DROPDOWN */
    .dropdown {
        position: relative;
        display: inline-block;
        align-content: center;
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
        min-width: 130px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        margin-right: 100px;
    }


    .dropdown-content a {
        color: black;
        padding: 12px 30px;
        text-decoration: none;
        display: block;
        background-color: #f9f9f9;
    }


    .dropdown:hover .dropdown-content {
        display: block;
        background-color: #f9f9f9;
    }


    .dropdown-content a:hover {
        background-color: #f9f9f9;
    }
</style>

<body>
    <header>
        <div class="logo">
            <img src="<?php echo asset('images/LOALOA.png'); ?>" alt="College of Computer Studies" style="height: 50px; width: 50px;">
            <span id="college-title" class="dropbtn"
                style="color: #800000; font-weight: bold; font-size: 20px; cursor: pointer;">{{ $user->name }} |
                Window: {{ $user->window }}</span>
        </div>
        <nav>
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



    <div class="controls">
        <div class="left-controls">
            <label for="categories">Types of Document:</label>
            <select id="categories">
                <option value="all">- All Types -</option>
                <option value="form137">Form 137</option>
                <option value="form138">Form 138</option>
                <option value="birthcertificate">Birth Certificate</option>
                <option value="goodmoral">Good Moral</option>
                <option value="tor">Transcript of Record</option>
                <option value="dismissal">Honorable Dismissal</option>
            </select>

            <label for="status">Status:</label>
            <select id="status">
                <option value="all">- All Statuses -</option>
                <option value="accepted">Accepted</option>
                <option value="rework">Rework</option>
            </select>

            <label for="course">Course:</label>
            <select id="course">
                @foreach ($courses as $course)
                    <option value="{{ $course }}">{{ $course }}</option>
                @endforeach
            </select>

            <div class="buttons">
                <button
                    style="border: none; background-color: #ffc107; color: #000; font-size: 16px; padding: 10px; border-radius: 4px;">
                    <i class="fas fa-eye" style="color: #000;"></i> View
                </button>
                <button
                    style="border: 2px solid #ffc107; background: none; color: #000; font-size: 14px; padding: 9px; border-radius: 4px;">
                    <i class="fas fa-download" style="color: #000;"></i> Upload
                </button>
            </div>
        </div>

        <div style="display: flex; align-items: center; margin: 20;">
            <label for="fromDate" style="margin: 0 10px; margin-bottom: 50px; font-weight: bold;">From:</label>
            <input type="date" class="textfield" id="fromDate"
                style="padding: 8px; width: 200px; border-radius: 5px; border: 1px solid #000; margin-right: 20px; margin-bottom: 50px;">
            <label for="toDate" style="margin: 0 10px; margin-bottom: 50px; font-weight: bold;">To:</label>
            <input type="date" class="textfield" id="toDate"
                style="padding: 8px; width: 200px; border-radius: 5px; border: 1px solid #000; margin-right: 20px; margin-bottom: 50px;">
        </div>

        <div class="right-controls">
            <div class="archive-notification">
                <button><i class="fas fa-archive"></i> Archive</button>
                <!--   <div class="notification">
                    <i class="fas fa-bell" onclick="showNotificationModal()"></i>
                </div>-->
            </div>
            <form action="{{ route('registrar.dashboard') }}" method="GET">
                <input type="text" name="search" placeholder="Search..." value="{{ $search ?? '' }}">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ACTIONS</th>
                <th>DOCUMENT NAME</th>
                <th>STUDENT NAME</th>
                <th>TYPE OF DOCUMENT</th>
                <th>STATUS</th>
                <th>DESCRIPTION</th>
                <th>EVALUATOR</th>
                <th>DATE EVALUATED</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @forelse ($studinfos as $studinfo)
                    <td><input type="checkbox"></td>
                    <td>{{ $studinfo->documentname }}</td>
                    <td>{{ $studinfo->studentname }}</td>
                    <td>{{ $studinfo->categ }}</td>
                    <td class="accepted">{{ $studinfo->actions }}</td>
                    <td>{{ $studinfo->descriptions }}</td>
                    <td>{{ $studinfo->uploaders }}</td>
                    <td>{{ $studinfo->created_at }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="8">No results found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Notification Section
    <div id="notificationModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeNotificationModal()">&times;</span>
            <h3>Notifications</h3>
            <p>No Notifications</p>
        </div>
    </div>
</body>
-->
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

</html>
