<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Election Commision dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/tv.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $("#agentWisereport").load("#agentWisereport").fadeIn("slow");
        }, 1000000000);
        $.ajaxSetup({
            cache: false
        });
    });
    </script>
    <style>
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
        /* background-color: #041720; */
        flex-basis: 30%;
        flex-grow: 1;
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
    </style>
</head>

<body style="background:black;">

    <div class="agentWisereport" id="agentWisereport">
        <div class="container-fluid">
            <div class="row">
                <div
                    style="width: 100%; flex-direction: column; display:flex; align-items:center; justify-content:center; margin-top:20px">
                    <img src="./images/ec-logo.png" alt="logo" class="img-responsive mainLogo" style="width:100px;">
                    <h2 style="font-size: 24px; color:white;">বাংলাদেশ নির্বাচন কমিশন </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7" style="background: #313136;">
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

                <div class="col-md-5" style="margin-top:-1px;">
                    <table style="width: 100%;font-size: 12px;font-weight: bold;/* color:white; */background: white;"
                        class="table table-hover table-white table-bordered">
                        <thead style="background:#417B86;">
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
                </div>
            </div>
        </div>
    </div>
</body>

</html>