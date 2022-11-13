<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Election Commision dashboard</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/tv.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $("#agentWiseReport").load("#agentWiseReport").fadeIn("slow");
        }, 1000000000);
        $.ajaxSetup({
            cache: false
        });
    });
    </script>
    <style>
    #agentWiseReport {
        padding: 10px;
        padding-right: 0;
    }

    #header {
        width: 100%;
        flex-direction: column;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
        gap: 20px;
    }

    #header .mainLogo {
        width: 120px;
    }

    #header .title {
        font-size: 24px;
        color: white;
        margin-bottom: 20px;
    }

    .mainContent .left {
        background: #313136;
    }


    .countContainer {
        display: flex;
        width: 100%;
        gap: 1rem;
        flex-direction: row;
        flex-wrap: wrap;
        padding: 1px 10px 25px 10px;
        margin: 0;
    }


    .countContainer .column {
        flex-basis: 30%;
        flex-grow: 1;
        flex-shrink: 1;
        height: 100px;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: flex-end;
        padding: 5px 10px 10px 10px;

    }

    .countContainer .column:last-child {
        flex-basis: 32%;
        flex-grow: 0;
    }

    .countContainer .column .bgImg {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
    }

    .countContainer .column .title,
    .countContainer .column .counter {
        z-index: 9999;
        font-size: 16px;
        color: white;

    }

    .tableCol {
        overflow: hidden;
    }

    .tableCol .table thead {
        background: #417B86;
    }
    </style>
</head>

<body style="background:black;">

    <div class="agentWiseReport" id="agentWiseReport">
        <div class="container-fluid">
            <div class="row">
                <div id="header">
                    <img src="./images/ec-logo.png" alt="logo" class="img-responsive mainLogo">
                    <h2 class="title">বাংলাদেশ নির্বাচন কমিশন </h2>
                </div>
            </div>
            <div class="row mainContent">
                <div class="col-md-6 left">
                    <div class="countContainer">
                        <div class="column">
                            <img class="bgImg" src="./images/dashboard_icons/agent_this_shift.png" alt="bg">
                            <div class="counter">0</div>
                            <div class="title">Total Agent</div>
                        </div>
                        <!-- /.column -->
                        <div class="column">
                            <img class="bgImg" src="./images/dashboard_icons/agent_this_shift.png" alt="bg">
                            <div class="counter">0</div>
                            <div class="title">Total Agent</div>
                        </div>
                        <!-- /.column -->
                        <div class="column">
                            <img class="bgImg" src="./images/dashboard_icons/agent_this_shift.png" alt="bg">
                            <div class="counter">0</div>
                            <div class="title">Total Agent</div>
                        </div>
                        <!-- /.column -->
                        <div class="column">
                            <img class="bgImg" src="./images/dashboard_icons/agent_this_shift.png" alt="bg">
                            <div class="counter">0</div>
                            <div class="title">Total Agent</div>
                        </div>
                        <!-- /.column -->
                        <div class="column">
                            <img class="bgImg" src="./images/dashboard_icons/agent_this_shift.png" alt="bg">
                            <div class="counter">0</div>
                            <div class="title">Total Agent</div>
                        </div>
                        <!-- /.column -->
                        <div class="column">
                            <img class="bgImg" src="./images/dashboard_icons/agent_this_shift.png" alt="bg">
                            <div class="counter">0</div>
                            <div class="title">Total Agent</div>
                        </div>
                        <!-- /.column -->
                        <div class="column">
                            <img class="bgImg" src="./images/dashboard_icons/agent_this_shift.png" alt="bg">
                            <div class="counter">0</div>
                            <div class="title">Total Agent</div>
                        </div>
                        <!-- /.column -->
                    </div>
                    <!-- /.countContainer -->
                </div>
                <!-- /.col -->

                <div class="col-md-6 tableCol">
                    <div class="table-responsive">
                        <table class="table table-hover table-white table-bordered">
                            <thead>
                                <tr>
                                    <th width="2%">SL</th>
                                    <th width="8%">Mode</th>
                                    <th width="8%">Agent ID</th>
                                    <th width="14%">Agent Name</th>

                                    <th width="10%">Login Time</th>
                                    <th width="8%">Agent Status</th>
                                    <th width="10%" title="Total Call Of The Day">Total Calls</th>
                                    <th width="8%">Talk Time</th>
                                    <th width="8%">Ready Time</th>
                                    <th width="8%">Paused Time</th>
                                </tr>
                            </thead>
                            <tbody style="line-height: 12px; color:black;">

                            </tbody>
                        </table>
                        <!-- /.table -->
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
</body>

</html>