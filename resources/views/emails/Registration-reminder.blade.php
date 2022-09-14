{{--@component('mail::message')--}}


{{--{!! $data[0]['name'] !!}--}}


{{--Thanks,<br>--}}
{{--{{ config('app.name') }}--}}
{{--@endcomponent--}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .body {
            background-color: #ffffff;
            border-bottom: 1px solid #edeff2;
            border-top: 1px solid #edeff2;
            margin: 0;
            padding: 0;
            width: 100%;
            -premailer-cellpadding: 0;
            -premailer-cellspacing: 0;
            -premailer-width: 100%;
        }


        p,
        ul,
        ol,
        blockquote {
            line-height: 1.4;
            text-align: left;
        }

        a {
            color: #3869d4;
        }

        a img {
            border: none;
        }

        img {
            max-width: 100%;
        }

        .wrapper {
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
            width: 100%;
            -premailer-cellpadding: 0;
            -premailer-cellspacing: 0;
            -premailer-width: 100%;
        }

        .content {
            margin: 0;
            padding: 0;
            width: 100%;
            -premailer-cellpadding: 0;
            -premailer-cellspacing: 0;
            -premailer-width: 100%;
        }

        /* Header */

        .header {
            padding: 25px 0;
            text-align: center;
        }

        .header a {
            color: #bbbfc3;
            font-size: 19px;
            font-weight: bold;
            text-decoration: none;
            text-shadow: 0 1px 0 white;
        }



        .inner-body {
            background-color: #ffffff;
            margin: 0 auto;
            padding: 0;
            width: 570px;
            -premailer-cellpadding: 0;
            -premailer-cellspacing: 0;
            -premailer-width: 570px;
        }

        /* Subcopy */

        .subcopy {
            border-top: 1px solid #edeff2;
            margin-top: 25px;
            padding-top: 25px;
        }

        .subcopy p {
            font-size: 12px;
        }

        /* Footer */

        .footer {
            margin: 0 auto;
            padding: 15px;
            text-align: center;
            -premailer-cellpadding: 0;
            -premailer-cellspacing: 0;
            -premailer-width: 570px;
        }

        .footer p {
            color: #aeaeae;
            font-size: 12px;
            margin: 0 auto;
            text-align: center;
        }

    </style>
</head>

<body>
<div class="header wrapper">
    <a href="{{ config('app.url') }}"> {{ config('app.name') }} </a>
</div>

<br>Dear <b>Admin</b>,<br><br>
Today's Registered user are -
<ul>
    @foreach($data as $users)
    <li>{!! $users['name'] !!}</li>
        @endforeach
</ul>

<b>Best Regards,</b><br>
<p><small>Sunarctechnologies.com</small></p>
<address>
    <small>
       Test Address<br />
        Tel: +00 000000 (24/7) | Fax: +00 0000000<br />
        Email: | Web: sunarctechnologies.com<br />
    </small>
</address>
<div class="footer wrapper">
    <p>© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')</p>
</div>
</body>

</html>
