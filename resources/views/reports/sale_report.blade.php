<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HLAB TECH </title>

    <style>
        @page {
            margin: 0px;
        }

        body {
            font-size: 12px;
            margin: 0px;
            font-family: sans-serif;
        }

        div .inline {
            color: black;
            float: left;
            line-height: 1;
            font-size: 13px;
        }

        .row {
            width: 100%;
        }

        div .row:after {
            clear: both;
            width: 100%;
        }

        .report-title {
            float: left;
            font-size: 1.3em;
            font-weight: 100;
            font-family: sans-serif;
            text-align: center;
            width: 100%;
        }

        .right {
            float: right;
        }

        .header {
            font-size: 12px;
            color: #aaa;
            line-height: 1.5;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            margin: 0;
            border: none;
            padding: 5px;
            text-align: left;
            font-size: 12px;
            border-bottom: #ddd 1px solid;
            border-right: #ddd 1px solid;
            border-top: #ddd 1px solid;
            border-left: #ddd 1px solid;
        }

        tr {
            border-bottom: #ddd 10px solid;
            width: 100%;
        }

        th {
            padding: 3px;
            background: #eee;
            border-bottom: 1px solid #eee;
            font-size: 9px;
            font-weight: bold;
            color: black;
        }

        td a {
            text-decoration: none;
            color: black;
        }

        .summary-table {
            width: 30%;
            margin-bottom: 20px;
            color: black
        }

        .summary-table tr {
            CreditAdministrationReplacementsReport border-bottom: #eee 0.5pt solid;
            border-top: #eee 0.5pt solid
        }

        .key {
            padding: 10px;
            font-weight: bold;
            background: #eee
        }

        .value {
            padding: 10px;
            text-align: center;
        }

        .col-md-6 {
            width: 50%;
        }

        .col-md-2 {
            width: 20%;
        }
    </style>

    @yield('styles')
</head>
<body>


<div style="margin-top: 20px; width: 100%; text-align:center;">

    <img style="width: 180px;"
         src="https://blog.hlab.tech/wp-content/uploads/2018/10/cropped-hLTec-1-32x32.png"
         {{--         src="{{asset('backend/img/rcl_logo_inverted.png')}}"--}}
         alt="rcl logo">
    <div style="width: 100%; clear: both;">
    </div>

</div>


<div style="width: 100%; padding: 20px">
    <table>
        <tr>
            <th>Company</th>
            <th>Contact</th>
            <th>Country</th>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
        </tr>
        <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
        </tr>
        <tr>
            <td>Ernst Handel</td>
            <td>Roland Mendel</td>
            <td>Austria</td>
        </tr>
        <tr>
            <td>Island Trading</td>
            <td>Helen Bennett</td>
            <td>UK</td>
        </tr>
        <tr>
            <td>Laughing Bacchus Winecellars</td>
            <td>Yoshi Tannamuri</td>
            <td>Canada</td>
        </tr>
        <tr>
            <td>Magazzini Alimentari Riuniti</td>
            <td>Giovanni Rovelli</td>
            <td>Italy</td>
        </tr>
    </table>
</div>

<div style="width: 100%; clear: both;">
</div>

<footer
        style="position: absolute;
    bottom: 0;
    width: 100%;
    text-align: center;
    background-color: #020066;
    padding: 10px;
    color:#FFF;
    line-height: 1.6;">

    <p>
        HLAB TECH
    </p>

    {{--<p>--}}
    {{--© {{\Carbon\Carbon::today()->format('Y')}}--}}
    {{--Resolution Credit Limited--}}
    {{--</p>--}}
</footer>

</body>
</html>
