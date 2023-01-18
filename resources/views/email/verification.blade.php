<html>

<body>

    <div style="margin: 0px; padding: 70px 0px; width: 100%; background-color: rgb(247, 247, 247);">



        <table width="800" cellspacing="0" cellpadding="5" border="0" align="center" style="background-color:#ffffff; border:1px solid #dedede; border-radius:3px!important">



            <tr>

                <td style="display: block; background-color: rgb(150, 88, 138); border-radius: 3px 3px 0px 0px; color: rgb(255, 255, 255); font-weight: 200; font-size: 15px; padding: 10px 48px">



                    <h1 style='color:#ffffff; font-size:30px; font-weight:300; line-height:150%; margin:0; text-align:left; font-family:"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;'>Account Verification</h1>



                </td>

            </tr>

            <tr style="padding:48px; display:block">



                <td style='padding:48px; font-size: 14px; line-height: 150%; text-align: left; color: rgb(99, 99, 99); font-family:"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif'>



                    <p style="margin: 0px 0px 16px; font-size: 14px; color: rgb(115, 115, 115); line-height: 150%">Thank you for joining with us. Please click  <a href='{{url("verifyemail/".base64_encode($user->id)."/".$user->verificationtoken)}}'>here</a> to verify your account</p>







                </td>



            </tr>



        </table>



    </div>



</body>



</html>