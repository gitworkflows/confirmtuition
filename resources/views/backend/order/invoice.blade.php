<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Name Correction System</title>
    <style>
        body {
            background-color: #F6F6F6;
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
        }

        p {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }

        .brand-section {
            background-color: #eeeeee;
            padding: 10px 40px;
        }

        .logo {
            width: 50%;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-6 {
            width: 50%;
            flex: 0 0 auto;
        }

        .text-white {
            color: #fff;
        }

        .company-details {
            float: right;
            text-align: right;
        }

        .heading {
            font-size: 20px;
            margin-bottom: 08px;
        }

        .sub-heading {
            color: #262626;
            margin-bottom: 05px;
        }

        table {
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }

        table thead tr {
            background-color: #f2f2f2;
        }

        table td {
            vertical-align: middle !important;
        }

        table th,
        table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }

        .text-right {
            text-align: end;
        }

        .w-20 {
            width: 20%;
        }

        .float-right {
            float: right;
        }
    </style>
    <style type="text/css">
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            /*box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);*/
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }

        .text-90.order-first .col-5 {
            text-align: right;
        }

        .text-secondary-d1 {
            padding-right: 15px;
        }
        .styled-table tbody tr:last-of-type {
            border-bottom: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="brand-section">
            <div class="row" style="width: 100%;text-align: center;display: block;">
            <h3>
                Online Name Correction System<br/>
                @if($data->certificate_type == 'birth')
                Birth Cirtificate
                @elseif($data->certificate_type == 'death')
                Death Cirtificate
                @elseif($data->certificate_type == 'number')
                Mark Sheet
                @elseif($data->certificate_type == 'certificate')
                Academic Transcript
                @elseif($data->certificate_type == 'registration')
                Registration Card
                @endif
            </h3>
            <p class="heading" style="color: #333">User Information</p>
            </div>
        </div>

        <div class="body-section">
            <table class="styled-table" align="left" style="text-align:left;">
                    <tr>
                        @if($data->certificate_type == 'birth')
                            <th>Birth Registration Number:</th>
                            <td>{{$data->birth_reg_number}}</td>
                        @elseif($data->certificate_type == 'death')
                            <th>Death Registration Number:</th>
                            <td>{{$data->death_reg_number}}</td>
                        @endif
                    </tr>
                    <!-- <tr>
                        <th>Wrong Name:</th>
                        <td>{{$data->incorrect_name}}</td>
                    </tr> -->
                    <tr>
                        <th>Name:</th>
                        <td>{{$data->correct_name}}</td>
                    </tr>
                    @if($data->certificate_type == 'birth')
                    <tr>
                        <th>Birth Date:</th>
                        <td>{{$data->birthdate}}</td>
                    </tr>
                    <tr>
                        <th>Birth Place:</th>
                        <td>{{$data->birthplace}}</td>
                    </tr>
                    @endif
                    <tr>
                        <th>Gender:</th>
                        <td>
                            @if($data->efemale == 1) Male @endif
                            @if($data->efemale == 2) Female @endif
                            @if($data->efemale == 3) Others @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Father Name:</th>
                        <td>{{$data->father}}</td>
                    </tr>
                    <tr>
                        <th>Mother Name:</th>
                        <td>{{$data->mother}}</td>
                    </tr>
                    <tr>
                        <th>Mobile No:</th>
                        <td>{{$data->mobile}}</td>
                    </tr>
                    <tr>
                        <th>Email Address:</th>
                        <td>{{$data->email}}</td>
                    </tr>
                    <tr>
                        <th>Full Address:</th>
                        <td>{{$data->address}}</td>
                    </tr>
            </table>
        </div>
    </div>

</body>

</html>