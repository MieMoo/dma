<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chief Registrar View</title>
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
        width: 90%;
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


    .container {
        width: 100%;
        margin: auto;
        padding-top: 0px;
        min-width: 1000px;
    }

    .statistics {
        display: flex;
        justify-content: center;
        margin: 20px 0;
        gap: 15px;
    }

    .stat-box {
        background-color: white;
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
        margin-top: 10px;
        width: 15%;
        border-radius: 5px;
        border-color: #FFB300;
        gap: 20px;
    }

    .stat-box .number {
        font-size: 40px;
        color: #2b612e;
    }

    .stat-box .label {
        font-size: 16px;
        color: #FFB300;
    }

    .controls {
        display: flex;
        justify-content:center;
        gap: 50px;
        align-items: center;
        margin-bottom: 20px;
    }

    .date-range-picker {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
    }

    .date-range-picker label {
        margin-right: 10px;
        font-weight: bold;
        align-items: center;
    }

    .datetime-picker {
        margin-right: 20px;
        padding: 5px;
        font-size: 1rem;
    }


    .view-button {
        display: absolute;
        align-items: center;
        background-color: #FFB300;
        color: black;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
        left: 50px;
        align-content: center;
    }

    .view-icon {
        width: 20px;
        height: 20px;
        margin-right: 10px;
    }

    .dropdown {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        text-align: center;
        font-size: 16px;
        margin-top: 50px;
    }

    .search {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        width: 200px;
        font-size: 16px;
        margin-top: 50px;
        margin-right: 30px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        justify-content: center;
    }

    th,
    td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: center;
    }

    th {
        background-color: #f0f0f0;
    }

    .urgent {
        color: black;
        font-weight: bold;
    }

    .pending {
        color: orange;
        font-weight: bold;
    }


    /* Modal and Overlay */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0%;
        bottom: 10%;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        justify-content: center;
        align-items: center;
    }



    .open-modal-btn {
        color: white;
        background-color: #33805C;
        padding: 15px;
        z-index: 100;
        margin-right: 10px;
        position: relative;
        overflow-y: auto;
        margin-bottom: 100px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }


    .modal-content {
        background-color: #f5f5f5;
        margin: 100px auto;
        padding: 20px;
        border: 1px solid #888;
        width: 600px;
        margin-bottom: 100px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        justify-content: center;
        align-items: center;
    }

    .notification-title {
        text-align: right;
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
        color: #4A4D4F;
        display: flex;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        font-size: 1.2rem;
        border: 1px solid #000;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .textarea {
        height: 100px;
    }

    .modal-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .cancel-btn,
    .notify-btn {
        padding: 10px 30px;
        font-size: 1.2rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .cancel-btn {
        background-color: #ffffff;
        color: #000;
        border: 2px solid #555;
    }

    .notify-btn {
        background-color: #33805C;
        color: #fff;
    }

    .notify-btn:hover,
    .cancel-btn:hover {
        opacity: 0.8;
    }
</style>

<body>
    <header>
        <div class="logo-container">
            <img src="<?php echo asset('images/LOALOA.png'); ?>" alt="College of Computer Studies" style="height: 50px; width: 50px;">
            <span class="college-name" style="color: #33805C; margin-left: 15px;">CHIEF REGISTRAR</span>
        </div>
        <nav class="navbar">
            @include('components.head-layout')
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
        <form method="GET" action="{{ route('head-registrar.dashboard') }}">
            <div class="statistics">
                <div class="stat-box">
                    <div class="number">{{ $totalDocuments }}</div>
                    <div class="label">All Documents</div>
                </div>
                <div class="stat-box">
                    <div class="number">{{ $acceptedDocuments }}</div>
                    <div class="label">Accepted Documents</div>
                </div>
                <div class="stat-box">
                    <div class="number">{{ $archivedDocuments }}</div>
                    <div class="label">Archived Documents</div>
                </div>
            </div>
        
            <div class="controls" name="filter_word" onchange="this.form.submit()">
                <select class="dropdown">
                    <option value="" {{ !$filterWord ? 'selected' : '' }}>⟶ Select Course ⟵</option>
                    <option value="BSIT" {{ $filterWord === 'BSIT' ? 'selected' : '' }}>BSIT</option>
                    <option value="BSCS" {{ $filterWord === 'BSCS' ? 'selected' : '' }}>BSCS</option>
                    <option value="BSIE" {{ $filterWord === 'BSIE' ? 'selected' : '' }}>BSIE</option>
                    <option value="BSCE" {{ $filterWord === 'BSCE' ? 'selected' : '' }}>BSCE</option>
                    <option value="BSREM" {{ $filterWord === 'BSREM' ? 'selected' : '' }}>BSREM</option>
                    <option value="BSCRIM" {{ $filterWord === 'BSCRIM' ? 'selected' : '' }}>BSCRIM</option>
                    <option value="BSPSYCH" {{ $filterWord === 'BSPSYCH' ? 'selected' : '' }}>BSPSYCH</option>
                    <option value="BSHM" {{ $filterWord === 'BSHM' ? 'selected' : '' }}>BSHM</option>
                    <option value="BSTM" {{ $filterWord === 'BSTM' ? 'selected' : '' }}>BSTM</option>
                    <option value="BSA" {{ $filterWord === 'BSA' ? 'selected' : '' }}>BSA</option>
                    <option value="BOE/EDUC" {{ $filterWord === 'BOE/EDUC' ? 'selected' : '' }}>BOE/EDUC</option>
                    <option value="BSBA" {{ $filterWord === 'BSBA' ? 'selected' : '' }}>BSBA</option>
                 
                </select>
                <select class="dropdown">
                    <option selected disabled>⟶ Select Priotization ⟵</option>
                    <option value="URGENT" {{ $filterWord === 'URGENT' ? 'selected' : '' }}>URGENT</option>
                    <option value="USUAL" {{ $filterWord === 'USUAL' ? 'selected' : '' }}>USUAL</option>
                    
                </select>
                <form  method="GET">
                    <input type="text" name="search" placeholder="Search..." style="padding: 8px; border: 1px solid #ccc; border-radius: 5px; width: 200px;" value="{{ $search ?? '' }}">
                    <button type="submit" style="background-color: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Search</button>
                </form> <!--  <button class="open-modal-btn" onclick="openNotificationModal()">Send Notification</button> -->
            </div>  
            <div class="date-range-picker">
                <label for="from-date">From:</label>
                <input type="datetime-local" id="from-date" class="datetime-picker" name="from_date" value="{{ request('from_date') }}">
        
                <label for="to-date">To:</label>
                <input type="datetime-local" id="to-date" class="datetime-picker" name="to_date" value="{{ request('to_date') }}">
                <button type="submit" style="background-color: #FFB300; color: white; padding: 10px 20px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">Filter</button>
            </div>
            
        </form>
       <table>
            <thead>
                <tr>
                    <th>ACTION</th>
                    <th>EVALUATOR</th>
                    <th>COURSE</th>
                    <th>DOCUMENT TYPE</th>
                    <th>PRIORITIZATION</th>
                    <th>DATE TO REVIEW</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($transactions as $transaction)
                <tr>
                    <td><button class="view-button">View</button></td>
                    <td>Elloise, Marjorie</td>
                    <td>{{$transaction -> course}}</td>
                    <td>{{$transaction -> document_type}}</td>
                    <td class="urgent">{{$transaction -> prioritization}}</td>
                    <td>{{$transaction -> updated_at}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">No results found.</td>
                </tr>
                 @endforelse
                </tr>
            </tbody>
        </table>
    </div>


<!-- Notification Modal
<div id="notificationModal" class="modal">
    <div class="modal-content">
        <h2 class="notification-title">Send Notification</h2>

        <div class="form-group">
            <input type="text" class="input-field" placeholder="Staff Email" />
        </div>

        <div class="form-group">
            <select class="input-field">
                <option selected disabled>Department</option>
                <option value="COE">COE</option>
                <option value="CAS">CAS</option>
                <option value="COE">COE</option>
                <option value="CCS">CCS</option>
                <option value="CCJ">CCJ</option>
                <option value="CBME">CBME</option>
                <option value="CTHM">CTHM</option>
                <option value="CREM">CREM</option>

            </select>
        </div>

        <div class="form-group">
            <input type="text" class="input-field" placeholder="Subject" />
        </div>

        <div class="form-group">
            <textarea class="input-field textarea" placeholder="Message.." style="width: 559px; height: 97px; resize: none;"></textarea>

        </div>

        <div class="form-group">
            <select class="input-field">
                <option selected disabled>Notify In..</option>
                <option>Now</option>
                <option>1 minute</option>
                <option>5 minutes</option>
                <option>10 minutes</option>
                <option>15 minutes</option>
                <option>30 minutes</option>
                <option>1 hour</option>
            </select>
        </div>

        <div class="modal-buttons">
            <button class="cancel-btn" onclick="closeNotificationModal()">Cancel</button>
            <button class="notify-btn" onclick="notify()">Notify</button>
        </div>
    </div>
</div>

<div id="modalOverlay" class="modal-overlay"></div>

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


        const fromDateInput = document.getElementById("from-date");
const toDateInput = document.getElementById("to-date");

// Update the minimum "To" date when "From" date changes
fromDateInput.addEventListener("change", () => {
    toDateInput.min = fromDateInput.value;
});

// Prevent selecting past "From" dates when "To" date changes
toDateInput.addEventListener("change", () => {
    if (toDateInput.value < fromDateInput.value) {
        alert("The 'To' date cannot be earlier than the 'From' date.");
        toDateInput.value = fromDateInput.value;
    }
});


        // Get elements
        const openModalBtn = document.getElementById('openModalBtn');
        const modal = document.getElementById('myModal');
        const cancelBtn = document.getElementById('cancelBtn');

        // Show the modal when the button is clicked
        openModalBtn.addEventListener('click', () => {
            modal.style.display = 'flex';
        });

        // Hide the modal when the cancel button is clicked
        cancelBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Optional: Hide modal if user clicks outside of the modal content
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>
</body>

</html>
