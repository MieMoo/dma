<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #f5f5f5;
        color: #333;
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

    header nav {
        display: flex;
        align-items: center;
        margin-left: 20px;
        justify-content: center;
    }

    .navbar a {
        margin-left: 20px;
        text-decoration: none;
        color: #333;
        font-weight: bold;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }


    .content {
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }

    .left-section {
        width: 40%;
        background-color: #fff;
        padding: 30px;
        text-align: center;
        border: 2px dashed #ccc;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .upload-area {
        text-align: center;
    }

    .upload-area i {
        font-size: 50px;
        color: #ccc;
    }

    .upload-area p {
        margin-top: 10px;
    }

    .upload-area span {
        color: #33805C;
        cursor: pointer;
        text-decoration: underline;
    }

    .max-size {
        margin-top: 5px;
        font-size: 12px;
        color: #888;
    }

    .right-section {
        width: 55%;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        font-size: 24px;
        color: #317340;
        margin-bottom: 20px;
    }

    .search-table {
        margin-bottom: 30px;
    }

    .search-bar {
        display: flex;
        margin-bottom: 10px;
    }

    .search-input {
        width: 80%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    .search-btn {
        padding: 10px;
        border: none;
        background-color: #33805C;
        color: white;
        cursor: pointer;
    }

    .search-btn i {
        font-size: 16px;
    }

    .document-table {
        width: 100%;
        border-collapse: collapse;
    }

    .document-table th,
    .document-table td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    .view-btn {
        background-color: #33805C;
        color: white;
        padding: 5px 10px;
        border: none;
        cursor: pointer;
    }

    .form-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group label {
        margin-bottom: 5px;
        font-size: 14px;
        font-weight: bold;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    .right-section {
        width: 100%;
        padding: 20px;
    }

    .form-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .search-input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        width: 100%;
    }

    .status-label {
        display: block;
        padding: 10px;
        border-radius: 5px;
        background-color: white;
        color: #33805C;
        border: 2px solid #33805C;
        font-size: 14px;
        text-align: center;
        width: 100%;
    }

    .document-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: space-between;
    }

    .doc-button {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        width: 48%;
        text-align: center;
        cursor: pointer;
        background-color: #f9f9f9;
    }

    .doc-button:hover {
        background-color: #f0f0f0;
    }

    .action-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .accept-btn {
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        width: 48%;
        cursor: pointer;
    }

    .accept-btn:hover {
        background-color: #0056b3;
    }

    .rework-btn {
        padding: 10px;
        background-color: #dc3545;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        width: 48%;
        cursor: pointer;
    }

    .rework-btn:hover {
        background-color: #a71d2a;
    }

    .comment-box {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        width: 100%;
        margin-bottom: 50px;
        resize: none;
    }

    .comment-box:focus {
        border-color: #007bff;
        outline: none;
    }

    textarea {
        resize: none;
    }

    .form-buttons {
        margin-top: 20px;
        display: flex;
        justify-content: flex-end;
    }

    .cancel-btn,
    .upload-btn {
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        margin-right: 20px;
        height: 40px;
        margin-top: 15px;
    }

    .cancel-btn {
        background-color: #ccc;
        color: #333;
        padding: 10px 20px;
        border: 2px solid #33805C;
        border-radius: 10px;
        background-color: white;
        cursor: pointer;
        font-weight: bold;
        color: #444;
        width: 150px;
    }

    .upload-btn {
        background-color: #33805C;
        color: white;
        padding: 10px 20px;
        border: 2px solid #33805C;
        border-radius: 10px;
        cursor: pointer;
        font-weight: bold;
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
    }

    /* Show dropdown content when hovering over the dropdown container */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 20px;
        text-decoration: none;
        display: block;
        background-color: #f9f9f9;
    }

    /* FOR ERROR MESSAGE */
    .error-msg {
        display: none;
        font-size: 12px;
        color: red;
        margin-top: 5px;
    }

    input:invalid,
    select:invalid,
    textarea:invalid {
        border-color: red;
    }

    input:invalid~.error-msg,
    select:invalid~.error-msg,
    textarea:invalid~.error-msg {
        display: block;
    }
</style>

<body>
    <header>
        <div class="logo-container">
            <img src="<?php echo asset('images/LOALOA.png'); ?>" alt="College of Computer Studies" style="height: 50px; width: 50px;">
            <span class="college-name" style="color: #800000; margin-left: 15px; top: 20px;">Bachelor of Science in Information Technology</span>
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

    <section class="content">
        <div class="left-section">
            <div class="upload-area">
                <i class="fas fa-file-upload"></i>
                <p>PDF and PNG Preview</p>
                <p class="max-size">Only (1) file for Previewing.</p>
            </div>
        </div>

        <div class="right-section">
            <h2 class="form-title">Validate the Document</h2>
        
            <!-- Search Section -->
            <div class="form-group">
                <input type="text" placeholder="Search Student No." class="search-input" />
            </div>
        
            <!-- Status -->
            <div class="form-group">
                <label class="status-label">Status</label>
            </div>
        
            <!-- Document Buttons -->
            <div class="document-buttons">
                <button class="doc-button">Birth Certificate</button>
                <button class="doc-button">Honorable Dismissal</button>
                <button class="doc-button">Form 137</button>
                <button class="doc-button">Transcript of Record</button>
                <button class="doc-button">Form 138</button>
                <button class="doc-button">Good Moral</button>
            </div>
        
            <!-- Action Buttons -->
            <div class="action-buttons">
                <button class="accept-btn">Accept</button>
                <button class="rework-btn">Rework</button>
            </div>
        
            <!-- Comments -->
            <div class="form-group">
                <textarea placeholder="Comments to Rework.." class="comment-box"></textarea>
            </div>
        </div>
        
        </div>
    </section>
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
            document.querySelector('.modal').style.display = 'none';
        }

        // Example of attaching the functions to buttons (you should customize this to your implementation)
        document.querySelector('.logout-button').addEventListener('click', openModal);
        document.querySelector('.no-button').addEventListener('click', closeModal);
    </script>
</body>
</html>
