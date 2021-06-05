<?php
namespace App\Helpers;

class HelperClass
{
    public function sendEmail($emailAddress, $subject, $details, $type)
    {
        $companyEmail = "donotreply@thronehomesltd.com";
        $app_name = "ThroneHomes";
        $to = $emailAddress;
        $from = "From: ThroneHomes <" . $companyEmail . ">";
        $header = $from . "\r\n" . "Content-Type: text/html; charset=utf-8";
        $sub = $subject;

        if ($type == 1) {
            $msgBody = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Welcome to ' . $app_name . '</title>

                <style>
                    body{
                        background: #f5f5f5;
                        font-family: "Open Sans", sans-serif;
                    }
                    .mail_wrapper{
                        width: 50%;
                        padding: 3%;
                        background: #fff;
                        margin: 1% auto;
                    }
                    .mail_wrapper h2{
                        font-weight: 600;
                        /*letter-spacing: 1px;*/
                        text-align: center;
                        text-transform: uppercase;
                        margin-bottom: 0;
                        padding-bottom: 0;
                    }
                    .mail_wrapper h4{
                        text-align: center;
                        margin-top: 0;
                        padding-top: 0;
                        color: #ef812e;
                    }
                    .mail_wrapper table tr td small{
                        text-transform: uppercase;
                    }
                    .room_detail{
                        margin-top: 10px;
                        border-bottom: 2px solid #eee;
                        border-top: 2px solid #eee;
                        padding: 10px 0;
                    }
                    /*tr:nth-child(even) {background-color: #f2f2f2;}*/
                    th, td {padding: 8px;}
                </style>
            </head>
            <body>
                <div class="mail_wrapper">
                    <h2>Thank you for order</h2>
                    <h4>Below is your order details</h4>
                    <img src="' . url('/') . '/frontend/images/top_img.jpg" style="width: 100%">
                    <table style="width: 100%">

                        <tr>
                            <td>
                                <small>Property Name</small><br>
                                <strong>' . $details->selectedplot . '</strong>
                            </td>
                            <td>
                                <small>Agent</small><br>
                                <strong>' . $details->_agent . '</strong>
                            </td>
                            <td>
                                <small>Payment mode</small><br>
                                <strong>' . $details->payoperation . '</strong>
                            </td>
                            <td>
                                <small>Payment Plan</small><br>
                                <strong>' . $details->paymentmethod . '</strong>
                            </td>
                            <td>
                                <small>Property Cost</small><br>
                                <strong>' . number_format($details->originalcost,2,".",",") . '</strong>
                            </td>
                            <td>
                                <small>Ammount paid</small><br>
                                <strong>' . number_format($details->payamount,2,".",",") . '</strong>
                            </td>
                        </tr>
                    </table>
                    <div class="room_detail">
                        <table style="width: 100%">

                            <tr>
                                <td>Monthly Payment</td>
                                <td style="text-align: right">&#x20A6;' . number_format($details->paypermonth,2,".",",") . '</td>
                            </tr>
                            <tr style="background-color: #f5f5f5;">
                                <td><strong>Total Cost</strong></td>
                                <td style="text-align: right"><strong>&#x20A6;' . number_format($details->payamount,2,".",",") . '</strong></td>
                            </tr>
                        </table>
                    </div>
                    <h5 style="margin-bottom: 0; padding-bottom: 0">Terms and Conditions</h5>
                    <small><a href="' . url('/terms_and_conditions') . '">...read more</a></small>
                </div>
            </body>
            </html>';

        } else {
            $msgBody = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Welcome to ' . $app_name . '</title>

                <style>
                    body{
                        background: #f5f5f5;
                        font-family: "Open Sans", sans-serif;
                    }
                    .mail_wrapper{
                        width: 50%;
                        padding: 3%;
                        background: #fff;
                        margin: 1% auto;
                    }
                    .mail_wrapper h2{
                        font-weight: 600;
                        /*letter-spacing: 1px;*/
                        text-align: center;
                        text-transform: uppercase;
                        margin-bottom: 0;
                        padding-bottom: 0;
                    }
                    .mail_wrapper h4{
                        text-align: center;
                        margin-top: 0;
                        padding-top: 0;
                        color: #ef812e;
                    }
                    .mail_wrapper table tr td small{
                        text-transform: uppercase;
                    }
                    .room_detail{
                        margin-top: 10px;
                        border-bottom: 2px solid #eee;
                        border-top: 2px solid #eee;
                        padding: 10px 0;
                    }
                    /*tr:nth-child(even) {background-color: #f2f2f2;}*/
                    th, td {padding: 8px;}
                </style>
            </head>
            <body>
                <div class="mail_wrapper">
                    <h2>Registration Details</h2>
                    <h4>Below is your registration details</h4>
                    <img src="' . url('/') . '/frontend/images/top_img.jpg" style="width: 100%">
                    <table style="width: 100%">
                        <tr>
                            <td>
                                <small>First Name</small><br>
                                <strong>' . $details->first_name . '</strong>
                            </td>
                            <td>
                                <small>Last Name</small><br>
                                <strong>' . $details->last_name . '</strong>
                            </td>
                            <td>
                                <small>Other Name</small><br>
                                <strong>' . $details->other_name . '</strong>
                            </td>
                            <td>
                                <small>Email Address</small><br>
                                <strong>' . $details->emailaddress . '</strong>
                            </td>
                            <td>
                                <small>Phone Number</small><br>
                                <strong>' . $details->phonenumber . '</strong>
                            </td>

                        </tr>
                    </table>
                    <div class="room_detail">
                    <h4>Login details</h4>
                        <table style="width: 100%">
                            <tr>
                                <td>Username/ Email Address</td>
                                <td style="text-align: right">' . $details->emailaddress . '</td>
                            </tr>

                            <tr>
                            <td>Password</td>
                            <td style="text-align: right">' . $details->phonenumber . '</td>
                        </tr>
                        </table>
                    </div>
                    <h5 style="margin-bottom: 0; padding-bottom: 0">Terms and Conditions</h5>
                    <small><a href="' . url('/terms_and_conditions') . '">...read more</a></small>
                </div>
            </body>
            </html>';
        }
        $path = "-f " . $companyEmail;
        mail($to, $sub, $msgBody, $header, $path);
        return $sub . ' is successful';

    }

}