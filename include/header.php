<?php
define( "BASE_URL", "/SchoolErp/");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/SchoolErp/");
?>
<!doctype html> 
<head>
     <title>School Erp</title>
    
    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="<?php echo BASE_URL ."images/favicon.png" ?>">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="<?php echo BASE_URL ."images/favicon.png" ?>">
    
    <link rel="stylesheet" href="<?php echo BASE_URL ."assets/css/bootstrap.min.css" ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ."assets/css/flag-icon.min.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL ."assets/css/cs-skin-elastic.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL ."assets/css/style.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL ."assets/css/main.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL ."assets/css/datepicker.min.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL ."assets/css/chartist.min.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL ."assets/css/jqvmap.min.css" ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL ."assets/css/weather-icons.css" ?>"> 
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
     <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="<?php echo BASE_URL ."assets/css/fullcalendar.min.css" ?>" rel="stylesheet" />


   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {              
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }
        .font-size{
            font-size:15px;
            font-weight:bold;
        }
    </style>
</head>

<body>
   
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <li class="session-li"> 
                        <a  href="" data-toggle="modal" data-target="#sessionmodel" class="font-si"><i class="menu-icon fa fa-pencil" ></i>Current Session: 2018-19</a>
                    </li>
                    <li class="menu-item-has-children"> 
                        <a style="cursor:pointer" onclick="myFunction()"> <i class="menu-icon fa fa-th"></i>Quick Links </a>
                        <div id="myDIV" class="sidenav2">
                            <a href="<?php echo BASE_URL ."pages/Student Information/studentdetails.php" ?>"><i class="fa fa-user-plus mr-3"></i> Student Details</a>
                            <a href="<?php echo BASE_URL ."pages/feesCollection/collectFees.php" ?>"><i class="fa fa-money mr-3"></i> Collect Fees</a>
                            <a href="<?php echo BASE_URL ."pages/income/income.php" ?>"><i class="fa fa-usd mr-4"></i>  Add Income</a>
                            <a href="<?php echo BASE_URL ."pages/expenses/addExpenses.php" ?>"><i class="fa fa-credit-card mr-3"></i> Add Expense</a>
                            <a href="<?php echo BASE_URL ."pages/attendance/studentAttendance.php" ?>"><i class="fa fa-calendar-check-o mr-3"></i> Student Attendance</a>
                            <a href="<?php echo BASE_URL ."pages/Human Resource/staffAttendance.php" ?>"><i class="fa fa-calendar-check-o mr-3"></i> Staff Attendance</a>
                            <a href="<?php echo BASE_URL ."pages/Human Resource/staffDirectory.php" ?>"><i class="fa fa-calendar-check-o mr-3"></i> Staff Directory</a>
                            <a href="<?php echo BASE_URL ."pages/examination/examList.php" ?>"><i class="fa fa-map-o mr-3"></i> Exam List</a>
                            <a href="<?php echo BASE_URL ."pages/examination/examSchedule.php" ?>"><i class="fa fa-columns mr-3"></i> Exam Schedule</a>
                            <a href="<?php echo BASE_URL ."pages/academics/classTimetable.php" ?>"><i class="fa fa-calendar-times-o mr-3"></i> Class Timetable</a>
                            <a href="<?php echo BASE_URL ."pages/frontOffice/admissionEnquiry.php" ?>"><i class="fa fa-calendar-check-o mr-3"></i> Admission Enquiry</a>
                            <a href="<?php echo BASE_URL ."pages/frontOffice/complian.php" ?>"><i class="fa fa-calendar-check-o mr-3"></i> Complain</a>
                            <a href="<?php echo BASE_URL ."pages/Download Center/uploadContent.php" ?>"><i class="fa fa-download mr-3"></i> Upload Content</a>
                            <a href="<?php echo BASE_URL ."pages/Inventory/additemstock.php" ?>"><i class="fa fa-object-group mr-3"></i> Add Item Stock</a>
                            <a  href="<?php echo BASE_URL ."pages/Communicate/noticeBoard.php" ?>"><i class="fa fa-bullhorn mr-3"></i> Notice Board</a>
                            <a href="<?php echo BASE_URL ."pages/Communicate/sendEmail-sms.php" ?>"><i class="fa fa-envelope-o mr-3"></i> Send Email / SMS</a>
                        </div>
                    </li>
                     
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class=" menu-icon fa fa-bandcamp"  ></i>Front Office</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/frontOffice/admissionEnquiry.php" ?>">Admission Enquiry</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/frontOffice/visitorBooks.php" ?>">Visitor Books</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/frontOffice/phoneCallLog.php" ?>">Phone Call Logs</a></li>
                             <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/frontOffice/postalDispatch.php" ?>">Postal Dispatch</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/frontOffice/postalRecive.php" ?>">Postal Receive</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/frontOffice/complian.php" ?>">Complain</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/frontOffice/setupFrontOffice.php" ?>">Setup Front Office</a></li>
                           
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-user"></i>Student Information</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Student Information/studentdetails.php" ?>"> Student Details</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Student Information/studentadmission.php" ?>">Student Admission</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Student Information/Guardianreport.php" ?>">Guardian Report</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Student Information/Studenthistory.php" ?>">Student History</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Student Information/studentlogincredential.php" ?>">Student Login Credential</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Student Information/Studentcategory.php" ?>">Student Category</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Student Information/Studenthouse.php" ?>">Student House</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Student Information/Disabeldstudent.php" ?>">Disabeld Students</a></li>
                       </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Fees Collection</a>
                        <ul class="sub-menu children dropdown-menu">                 
                          <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/feesCollection/collectFees.php" ?>">Collect Fees</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/feesCollection/searchPayment.php" ?>">Search Fees Payment</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/feesCollection/searchDuePayment.php" ?>">Search Due Fees</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/feesCollection/feesStatement.php" ?>">Fees Statement</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/feesCollection/balancefeesreport.php" ?>">Balance Fees Report</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/feesCollection/feesMaster.php" ?>">Fees Master</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/feesCollection/feesGroup.php" ?>">Fees Group</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/feesCollection/feesType.php" ?>">Fees Type</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/feesCollection/feesDiscount.php" ?>">Fees Discount</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/feesCollection/feesCarryForward.php"?>">Fees Carry Forward</a></li>
                        </ul> 
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-usd"></i>Income</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/income/income.php" ?>">Add Income</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/income/incomeSearch.php" ?>">Search Income</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/income/incomeHead.php" ?>">Income Head</a></li>
                         </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-credit-card"></i>Expenses</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></i><a href="<?php echo BASE_URL ."pages/expenses/addExpenses.php" ?>">Add Expense</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/expenses/searchExpenses.php" ?>">Search Expense</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/expenses/expensesHead.php" ?>">Expense Head</a></li>
                         </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-calendar-check-o"></i>Attendance</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></i><a href="<?php echo BASE_URL ."pages/attendance/studentAttendance.php" ?>">Student Attendance</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/attendance/attendenceByDate.php" ?>">Attendance By Date</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/attendance/attendanceReport.php" ?>">Attendance Report</a></li>
                         </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map-o"></i>Examinations</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></i><a href="<?php echo BASE_URL ."pages/examination/examList.php" ?>">Exam List</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/examination/examSchedule.php" ?>">Exam Schedule/</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/examination/marksRegister.php" ?>">Marks Register</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/examination/marksGrade.php" ?>">Marks Grade</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/examination/admitCard.php" ?>">Admit Card</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/examination/reportCard.php" ?>">Report Card</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-mortar-board"></i>Academics</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></i><a href="<?php echo BASE_URL ."pages/academics/classTimetable.php" ?>">Class Time Table</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/academics/teacherTimetable.php" ?>">Teacher Time Table</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/academics/assignClassTeacher.php" ?>">Assign Class Teacher</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/academics/assignSubjects.php" ?>">Assign Subject</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/academics/subjects.php" ?>">Subjects</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/academics/class.php" ?>">Class</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/academics/sections.php" ?>">Section</a></li>
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Human Resource</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Human Resource/staffDirectory.php" ?>">Staff Directory</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Human Resource/staffAttendance.php" ?>">Staff Attendance</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Human Resource/staffAttendanceReport.php" ?>">Staff Attendance Report</a></li>
                             
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Human Resource/payroll.php" ?>">Payroll</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Human Resource/payrollReport.php" ?>">Payroll Report</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Human Resource/approveLeaveRequest.php" ?>">Approve Leave Request</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Human Resource/applyLeave.php" ?>">Apply Leave</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Human Resource/leaveType.php" ?>">Leave Type</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Human Resource/department.php" ?>">Department</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Human Resource/designation.php" ?>">Designation</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Human Resource/disabledStaff.php" ?>">Disabled Staff</a></li>
                           
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-volume-up" aria-hidden="true"></i>Communicate</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Communicate/noticeBoard.php" ?>">Notice Board</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Communicate/sendMessage.php" ?>">Send Message</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Communicate/sendEmail-sms.php" ?>">Send Email/SMS</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Communicate/email-smsLog.php" ?>">Email/SMS Log</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-download" aria-hidden="true"></i>Download Center</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Download Center/uploadContent.php" ?>">Upload Content</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Download Center/assignments.php" ?>">Assignments</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Download Center/studyMaterial.php" ?>">Study Material</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Download Center/syllabus.php" ?>">Syllabus</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Download Center/otherDownloads.php" ?>">Other Downloads</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart" aria-hidden="true"></i>Homework</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Home Work/addHomework.php" ?>">Add Homework</a></li>
                            <li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Home Work/evaluationReport.php" ?>">Evaluation Report</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-book"></i>Library</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Library/addbook.php" ?>">Add Book</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Library/booklist.php" ?>">Book List</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Library/selectcriteria.php" ?>">Select Criteria</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Library/addstaffmember.php" ?>">Add Staff Member</a></li>
                       </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-layers"></i>Inventory</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Inventory/inventoryissueitemlist.php" ?>">Issue Item List</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Inventory/additemstock.php" ?>">Add Item Stock</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Inventory/additem.php" ?>">Add Item</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Inventory/additemcategory.php" ?>">Item Category</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Inventory/additemstore.php" ?>">Item Store</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Inventory/additemsupplier.php" ?>">Item Supplier</a></li>
                       </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-car"></i>Transport</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Transport/addroutes.php" ?>">Routes</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Transport/addvehicles.php" ?>">Vehicles</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Transport/assignvehicles.php" ?>">Assign Vehicles</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Transport/studenttransportreport.php" ?>">Student Tranport Report</a></li>
                       </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-home"></i>Hostel</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Hostel/addHostelroom.php" ?>">Hostel Rooms</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Hostel/addroomtype.php" ?>">Room Type</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Hostel/addhostel.php" ?>">Hostel</a></li>
                            <li><i class="fa fa-arrow-circle-right"></i><a href="<?php echo BASE_URL ."pages/Hostel/Studenthostelreport.php" ?>">Student Hostel Report</a></li>
                       </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-newspaper-o menu-icon" aria-hidden="true"></i>Certificate</a>
                        <ul class="sub-menu children dropdown-menu">                 
                            <li>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/certificate/studentcertificate.php" ?>">Student Certificate</a></li>
                            <li>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/certificate/generatecertificate.php" ?>">Generate Certificate</a></li>
                            <li>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/certificate/studentidcard.php" ?>">Student Id Card</a></li>
                            <li>
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/certificate/generatidcard.php" ?>">Generate Id card</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-empire menu-icon" aria-hidden="true"></i>Front CMS</a>
                            <ul class="sub-menu children dropdown-menu">                 
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/frontcms/eventlist.php" ?>">Event</a></li>
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/frontcms/gallery.php" ?>">Gallery</a></li>
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/frontcms/news.php" ?>">News</a></li>
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/frontcms/media_manager.php" ?>">Media Manager</a></li>
                            <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/frontcms/pages.php" ?>">Pages</a></li>
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/frontcms/menus.php" ?>">Menus</a></li>
                            <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/frontcms/banner_image.php" ?>">Banner Image</a></li>
                                <li>
                        </ul>
                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-newspaper-o menu-icon" aria-hidden="true"></i>Reports</a>
                            <ul class="sub-menu children dropdown-menu">                 
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Student Information/studentdetails.php" ?>">Student Report</a></li>
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Student Information/Guardianreport.php" ?>">Guardian Report</a></li>
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/feesCollection/searchDuePayment.php" ?>">Due Fees Report</a></li>
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Student Information/Studenthistory.php" ?>">Student History</a></li>
                            <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Student Information/studentlogincredential.php" ?>">Student Login Credential</a></li>
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/feesCollection/feesStatement.php" ?>">Fees Student</a></li>
                            <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/feesCollection/balancefeesreport.php" ?>">Balance Fees Report</a></li>
                                <li>
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="">Transaction Report</a></li>
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Human Resource/payrollReport.php" ?>">Payroll Report</a></li>
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Human Resource/staffAttendance.php" ?>">Staff Attendance Report</a></li>
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Home Work/evaluationReport.php" ?>">Evaluation Report</a></li>
                            <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="">Student Transport Report</a></li>
                                <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="<?php echo BASE_URL ."pages/Hostel/Studenthostelreport.php" ?>">Student Hostel Report</a></li>
                            <li>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a href="">User Log</a></li>
                           <li>
                        </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header header-bg">
            
            <div class="top-left"> 
                    <a class="" href="<?php echo BASE_URL . "" ?>"><img src="<?php echo BASE_URL . "images/logo.png" ?> " alt="Logo" ></a>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <!-- <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div> -->

                        <!-- <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div> -->

                        <!-- <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src=" "></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src=" "></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src=" "></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src=" "></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div> -->
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo BASE_URL . "images/admin.jpg" ?> " alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>