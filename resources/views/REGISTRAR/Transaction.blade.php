<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
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

    .navbar {
        display: flex;
        align-items: center;
        margin-left: 20px;
        justify-content: space-evenly;
    }

    .navbar a {
        margin-left: 20px;
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 16px;
        display: flex;
    }

    .navbar a.active {
        color: #ffa000;
    }

    .main-content {
        padding: 20px;
    }

    .registrar-info {
        background-color: #2e7d32;
        color: white;
        padding: 10px;
        font-size: 1.1em;
        font-weight: bold;
    }

    h1 {
        margin-top: 15px;
        font-size: 22px;
        text-align: center;
        color: #2e7d32;
    }

    .stats {
        display: flex;
        justify-content: center;
        margin: 20px 0;
    }

    .stat-box {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 20px;
        width: 150px;
        text-align: center;
        margin: 0 10px;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    }

    .stat-box h2 {
        font-size: 36px;
        margin-bottom: 10px;
        color: #2e7d32;
    }

    .stat-box p {
        color: #666;
    }



    .form-container {
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ddd;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .form-section {
        display: flex;
        justify-content: space-between;
    }

    .left-form,
    .right-form {
        width: 48%;
        display: table-column;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-size: 0.9em;
        color: #333;
        font-weight: bold;
    }

    input,
    select,
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 30px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1em;
    }

    textarea {
        height: 80px;
    }


    .confirm-btn,
    .cancel-btn {
        padding: 10px 30px;
        margin: 0 10px;
        border: none;
        border-radius: 4px;
        font-size: 1em;
        cursor: pointer;
        margin-bottom: 30px;
        margin-top: 30px;
    }

    .confirm-btn {
        background-color: #2962ff;
        color: white;
        margin-left: 580px;
    }

    .cancel-btn {
        background-color: #ff5252;
        color: white;
        margin-right: 600px;
    }

    .action-info {
        text-align: center;
        background-color: #e8f5e9;
        padding: 10px;
        border: 1px solid #2e7d32;
        font-size: 0.9em;
    }

    .search-section {
        text-align: right;
        margin-bottom: 15px;
    }

    .search-section input {
        padding: 8px;
        width: 200px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .search-btn {
        padding: 8px;
        cursor: pointer;
        background-color: white;
        border: none;
        font-size: 1.1em;
    }

    .data-table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
        margin-top: 10px;
    }

    .data-table th,
    .data-table td {
        padding: 15px;
        border: 1px solid #ddd;
        text-align: center;
    }

    .view-btn {
        padding: 8px 20px;
        background-color: #ccc;
        border: none;
        cursor: pointer;
        border-radius: 4px;
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

    /* DROPDOWN CONTENT*/
    .dropdown {
        position: relative;
        display: inline-block;
        text-align: center;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 30px;
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

    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* For ERROR MESSAGE */
    input:invalid,
    select:invalid,
    textarea:invalid {
        border-color: red;
    }


    .error-message {
        color: red;
        font-size: 12px;
        margin-top: -25px;
        margin-bottom: 10px;
        display: none;
    }

    input:invalid+.error-message,
    select:invalid+.error-message,
    textarea:invalid+.error-message {
        display: block;
    }

    input:valid,
    select:valid,
    textarea:valid {
        border-color: black;
    }

    input:valid+.error-message,
    select:valid+.error-message,
    textarea:valid+.error-message {
        display: none;
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


    <section class="main-content">
        <div class="registrar-info">
            <span>Registrar:</span>
            <strong>Elloise, Marjorie</strong>
        </div>

        <h1>Registrar Request Transaction</h1>

        <div class="stats">
            <button class="stat-box">
                <h2>1</h2>
                <p>Transaction</p>
            </button>
            <button class="stat-box">
                <h2>1</h2>
                <p>Total Request</p>
            </button>
        </div>

        <form class="form-container" method="POST" action="{{ route('registrar.transaction') }}" method="POST">
            @csrf
            <div class="form-section">
                <div class="left-form">
                    <label for="studentNo">Student No.</label>
                    <input type="text" id="studentNo" name="student_no" required>
                    <div class="error-message">ⓘ Please fill in this field.</div>

                    <label for="studentName">Student Name</label>
                    <input type="text" id="studentName" name="student_name" required>
                    <div class="error-message">ⓘ Please fill in this field.</div>

                    <label for="course">Course</label>
                    <input type="text" id="course" name="course" required>
                    <div class="error-message">ⓘ Please select an option.</div>

                    <label for="yrlvl">Year Level</label>
                    <input type="text" id="yrlvl" name="year_level" required>
                    <div class="error-message">ⓘ Please select an option.</div>

                    <label for="descriptionRequest">Purpose of the Request</label>
                    <textarea id="descriptionRequest" name="purpose" required style="width: 1435px; height: 50px; font-family: Arial;"></textarea>
                    <div class="error-message">ⓘ Please fill in this field.</div>
                </div>

                <div class="right-form">
                    <label for="amount" class="red-label">Amount</label>
                    <input type="text" id="amount"  name="amount" class="amount-input" maxlength="5" required>
                    <div class="error-message">ⓘ Please fill in this field.</div>

                    <label for="invoice-num">Service Invoice No.</label>
                    <input type="text" id="invoiceNo" name="invoice_no" maxlength="5" required>
                    <div class="error-message">ⓘ Please fill in this field.</div>

                    <label for="documentCategory">Type of Document</label>
                    <select id="documentCategory" name="document_type" required>
                        <option selected disabled value="">- Select -</option>
                        <option value="form-137">Form 137</option>
                        <option value="form-138">Form 138</option>
                        <option value="birth-certificate">Birth Certificate</option>
                        <option value="good-moral">Good Moral</option>
                        <option value="tor">Transcript of Record</option>
                        <option value="dismissal">Honorable Dismissal</option>
                    </select>
                    <div class="error-message">ⓘ Please select an option.</div>

                    <label for="prioritization">Prioritization</label>
                    <select id="tprioritization" name="prioritization" required>
                        <option selected disabled value="">- Select -</option>
                        <option value="urgent">URGENT</option>
                        <option value="usual">USUAL</option>
                    </select>
                    <div class="error-message">ⓘ Please select an option..</div>
                </div>
            </div>

            <div class="actions">
                <button type="submit" class="confirm-btn">Confirm</button>
                <button type="button" class="cancel-btn">Cancel</button>
            </div>

            <div class="action-info">
                <p>Action Applied on {{ now()->format('m/d/Y') }}</p>
            </div>
        </form>
        </form>
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
            document.querySelector('.modal').style.display = 'none'; // Hide modal
        }

        // Example of attaching the functions to buttons (you should customize this to your implementation)
        document.querySelector('.logout-button').addEventListener('click', openModal);
        document.querySelector('.no-button').addEventListener('click', closeModal);
    </script>
</body>

</html>
