<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
  <link rel="stylesheet" href="doctorMainPage.css">
  <link rel="stylesheet" href = "https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

  <title>Doctor's panel</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-clinic-medical"></i> 
                        <div class="title">Drug Nation</div>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="fas fa-th-large"></i> 
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-stethoscope"></i> 
                        <div class="title">Appointments</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-user-md"></i> 
                        <div class="title">Doctors</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-puzzle-piece"></i> 
                        <div class="title">Departments</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-hand-holding-usd"></i> 
                        <div class="title">Payments</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i> 
                        <div class="title">Settings</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i> 
                        <div class="title">Help</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="top-bar">
                <div class="search">
                    <input type="text" name="search" placeholder="search here">
                    <label for = "search"><i class = "fas fa-search"></i></label>
                </div>
                <i class="fas fa-bell"></i>
                <div class="user">
                    <?php include 'profpic.php'; ?>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">2</div>
                        <div class="card-name">Appointments</div>
                    </div>
                    <div class="icon-box">
                        <i class = "fas fa-solid fa-calendar-check"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">3</div>
                        <div class="card-name">Pending Approvals</div>
                    </div>
                    <div class="icon-box">
                        <i class = "fas fa-solid fa-quote-right"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">8</div>
                        <div class="card-name">Approved Medicines</div>
                    </div>
                    <div class="icon-box">
                        <i class = "fas fa-solid fa-check"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">$4500</div>
                        <div class="card-name">Amount Paid</div>
                    </div>
                    <div class="icon-box">
                        <i class = "fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
            <div class="tables">
                <div class="last-appointments">
                    <div class="heading">
                        <h2>Approved Medicines</h2>
                        <a href="#"class = "btn"> View All</a>
                    </div>
                    <table class = "appointments">
                        <thead>
                            <td>ID</td>
                            <td>Trade Name</td>
                            <td>Formula</td>
                            <td>CompanyID</td>
                            <td>Actions</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Panadol</td>
                                <td>Paracetamol</td>
                                <td>3</td>
                                <td>
                                <i class = "far fa-eye"></i>
                                <i class = "far fa-edit"></i>
                                <i class = "far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Panadol</td>
                                <td>Paracetamol</td>
                                <td>3</td>
                                <td>
                                <i class = "far fa-eye"></i>
                                <i class = "far fa-edit"></i>
                                <i class = "far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Panadol</td>
                                <td>Paracetamol</td>
                                <td>3</td>
                                <td>
                                <i class = "far fa-eye"></i>
                                <i class = "far fa-edit"></i>
                                <i class = "far fa-trash-alt"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Panadol</td>
                                <td>Paracetamol</td>
                                <td>3</td>
                                <td>
                                <i class = "far fa-eye"></i>
                                <i class = "far fa-edit"></i>
                                <i class = "far fa-trash-alt"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="last-appointments">
                    <div class="heading">
                        <h2>Pending Patients</h2>
                        <a href="#"class = "btn"> View All</a>
                    </div>
                    <table class="visiting">
                        <thead>
                            <td>ID</td>
                            <td>Trade Name</td>
                            <td>Formula</td>
                            <td>CompanyID</td>
                            <td>Actions</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Benjamin</td>
                                <td>14:00</td>
                                <td>1</td>
                                <td><i class = "far fa-eye"></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Benjamin</td>
                                <td>14:00</td>
                                <td>1</td>
                                <td><i class = "far fa-eye"></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Benjamin</td>
                                <td>14:00</td>
                                <td>1</td>
                                <td><i class = "far fa-eye"></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Benjamin</td>
                                <td>14:00</td>
                                <td>1</td>
                                <td><i class = "far fa-eye"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

